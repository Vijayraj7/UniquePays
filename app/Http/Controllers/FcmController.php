<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use App\Models\Matchh;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\Withdraw;
use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\File;
use Razorpay\Api;
use Google\Client as GoogleClient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class FcmController
{

    function sendFCMMessageToTopic($topic, $title, $body)
    {
        if (isTest() == false) {
            // Get the access token
            $accessToken = $this->getToken();

            // FCM endpoint
            $url = 'https://fcm.googleapis.com/v1/projects/global-market-stars/messages:send';

            // Notification data
            $notification = [
                'title' => $title,
                'body' => $body,
            ];

            // Message payload
            $payload = [
                'message' => [
                    'topic' => $topic,
                    'notification' => $notification,
                    // 'android' => ['notification' => ['icon' => 'notyicon']]
                ],
            ];

            // Headers
            $headers = [
                'Authorization: Bearer ' . $accessToken,
                'Content-Type: application/json',
            ];

            // Initialize curl
            $ch = curl_init();

            // Configure curl options
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

            // Execute curl
            $result = curl_exec($ch);
            if ($result === FALSE) {
                die('FCM Send Error: ' . curl_error($ch));
            }

            // Close curl
            curl_close($ch);
        }
        // dd($result);
    }

    public function getToken(): string
    {
        // Path to the service account credentials JSON file
        $jjson = '';


        // Scopes required for Firebase Cloud Messaging
        $scopes = [
            'https://www.googleapis.com/auth/firebase.messaging',
        ];

        $credentials = json_decode($jjson, true);

        // Prepare the JWT header and claim set
        $jwt_header = [
            'alg' => 'RS256',
            'typ' => 'JWT',
        ];

        $jwt_claim = [
            'iss' => $credentials['client_email'],
            'scope' => implode(' ', $scopes),
            'aud' => $credentials['token_uri'],
            'exp' => time() + 3600, // Token expires in 1 hour
            'iat' => time(),
        ];

        // Encode the JWT header and claim set
        $base64UrlHeader = base64_encode(json_encode($jwt_header));
        $base64UrlClaim = base64_encode(json_encode($jwt_claim));
        $signature = '';
        openssl_sign("$base64UrlHeader.$base64UrlClaim", $signature, $credentials['private_key'], 'sha256WithRSAEncryption');
        $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));
        $jwt = "$base64UrlHeader.$base64UrlClaim.$base64UrlSignature";

        // Send a POST request to fetch the access token
        $post_data = http_build_query([
            'grant_type' => 'urn:ietf:params:oauth:grant-type:jwt-bearer',
            'assertion' => $jwt,
        ]);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $credentials['token_uri']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

        $response = curl_exec($ch);
        curl_close($ch);

        // Check for errors
        if ($response === false) {
            return ''; // Handle curl error
        }

        // Decode the JSON response
        $token_info = json_decode($response, true);

        if (isset($token_info['access_token'])) {
            return $token_info['access_token'];
        } else {
            return ''; // Handle error response
        }
    }

}