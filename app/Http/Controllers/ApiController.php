<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\FcmController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\File;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class ApiController extends Controller
{


    public function sendnoty()
    {
        $fc = new FcmController;
        $fc->sendFCMMessageToTopic('all', $_GET['title'], $_GET['body']);
    }

    // customer_transfers transfer tuserid
    public function myjob()
    {
        $this->selectlottwinner();
        return 'n';
    }
    public function unactive()
    {
        // $transfers = DB::table('customer_transfers')->where('tType', 'transfer')->get();
        // foreach ($transfers as $trns) {
        //     $wth = DB::table('customer_withdraws')->where('id', $trns->wthId)->first();
        //     DB::table('customer_transfers')->where('id', $trns->id)->update(['fuserid' => $wth->fuserid, 'tuserid' => $wth->tuserid]);
        // }

        $h = new HelperController;
        $vs = DB::table('customers_inactive')->get();
        echo '<table style="border:1px solid red;">';
        echo '<tr>';
        echo '<th>created at</th>';
        echo '<th>name</th>';
        echo '<th>Referral</th>';
        echo '<th>phone</th>';
        echo '<th>email</th>';
        echo '<th>link</th>';
        echo '</tr>';
        foreach ($vs as $v) {
            $ov = DB::table('customers')->where('email', $v->email)->first();
            $rv = DB::table('customers')->where('id', $v->referral)->first();
            if ($ov == null) {
                $id = $v->id;
                $code = $h->encrypt($v->code);
                echo '<tr>';
                echo "<td>$v->created_at</td>";
                echo "<td>$v->name</td>";
                echo "<td>$rv->name(ref)</td>";
                echo "<td>$v->phone</td>";
                echo "<td>$v->email</td>";
                echo "<td style='cursor:pointer;'>https://globalmarketstars.com/activate/$id/$code</td>";
                echo '</tr>';
            }
        }
        echo '</table>';
        echo '<style> table tr td{ border:1px solid red; } </style>';
        return '';
    }
    public function selectlottwinner()
    {
        for ($i = 1; $i <= lastlott(); $i++) {
            $lot_str = strval($i);
            $allthatlotts = DB::table('customer_lots')->where('pstatus', '1')->where('lotc', $lot_str)->get();
            $last1count = $allthatlotts->count();
            if ($last1count > 0) {
                $trans_last_lot = DB::table('customer_transactions')
                    ->where('lotc', $lot_str)
                    ->where('tType', 'lott_win')
                    ->latest()
                    ->first();
                $last1lott = $allthatlotts->last();
                $last1lotdate = Carbon::parse($trans_last_lot->created_at ?? $last1lott->created_at);
                $lottdaydiff = $last1lotdate->diffInMinutes(date('Y-m-d H:i:s'));
                if ($lottdaydiff >= 2) {
                    $add7date = $last1lotdate->addMinutes(2)->subHours(4)->format('Y-m-d H:i:s');
                    $winnerIds = $this->getrandTwoIds($lot_str);
                    foreach ($winnerIds as $winnerId) {
                        $pamnt = (float) $winnerId->pamount;
                        $amn = $pamnt * 2;
                        DB::table('customer_transactions')
                            ->insert(
                                [
                                    'lottId' => $winnerId->id,
                                    'tType' => 'lott_win',
                                    'lotc' => $winnerId->lotc,
                                    'boxc' => $winnerId->boxc,
                                    'created_at' => $add7date,
                                    'csId' => $winnerId->csId,
                                    'tAmount' => strval($amn),
                                    'tStatus' => '1',
                                    'wStatus' => '0',
                                ]
                            );
                        $csusr = DB::table('customers')->where('id', $winnerId->csId)->first();
                        $refuser = DB::table('customers')->where('id', $csusr->referral)->first();
                        DB::table('customer_transactions')
                            ->insert(
                                [
                                    'lottId' => $winnerId->id,
                                    'tType' => 'lott_ref',
                                    'lotc' => $winnerId->lotc,
                                    'boxc' => $winnerId->boxc,
                                    'created_at' => $add7date,
                                    'csId' => $csusr->referral,
                                    'tAmount' => strval(($amn * 0.1)),
                                    'tStatus' => '1',
                                    'wStatus' => '0',
                                ]
                            );
                    }
                }
            }
        }
    }
    // public function getrandTwoIds($lotc): array
    // {
    //     $winnersArray = [];
    //     $allrandomlotts = DB::table('customer_lots')->where('pstatus', '1')->where('lotc', $lotc)->inRandomOrder()->get();
    //     foreach ($allrandomlotts as $randomlott) {
    //         if (count($winnersArray) >= 2) {
    //             break;
    //         } else {
    //             if (count($winnersArray) < 2) {
    //                 $is_win_trans = DB::table('customer_transactions')->where('lottId', $randomlott->id)->where('tType', 'lott_win')->first();
    //                 if ($is_win_trans == null) {
    //                     $winnersArray[] = $randomlott;
    //                 }
    //             }
    //         }
    //     }
    //     return $winnersArray;
    // }

    public function getrandTwoIds($lotc): array
    {
        $winnersArray = DB::table('customer_lots')
            ->where('pstatus', '1')
            ->where('lotc', $lotc)
            ->inRandomOrder(mt_rand())
            ->get()
            ->filter(function ($lot) {
                return DB::table('customer_transactions')
                    ->where('lottId', $lot->id)
                    ->where('tType', 'lott_win')
                    ->doesntExist();
            })
            ->take(2)
            ->all();

        return $winnersArray;
    }

    public function cronjob()
    {

        $plans = DB::table('customer_plans')->where('pstatus', '1')->get();
        foreach ($plans as $plan) {
            $pamount = (float) $plan->pamount;
            $user = DB::table('customers')
                ->where('id', $plan->csId)->first();
            // if ($plan->pname == "normal") {
            $tplan = DB::table('customer_plans')
                ->where('csId', $user->id)->where('pstatus', '1')->first();
            $amnt = (float) $tplan->pamount;
            $amn = $amnt * 10 / 100;
            $totusramnt = DB::table('customer_plans')->where('csId', $user->referral)->where('pstatus', '1')->get()->sum('pamount');
            // echo $user->referral . ' ' . $amn . ' ' . $totusramnt . '<br>';
            $amntlnctrnsfr = 0;
            if ($amn > $totusramnt) {
                $amntlnctrnsfr = $amn - $totusramnt;
                $amn = $totusramnt;
            }

            $cplans = DB::table('customer_plans')->where('csId', $user->referral)->where('pstatus', '1')->get();
            if (count($cplans) > 0) {
                // Check if the record exists
                $rexists = DB::table('customer_transactions')->where([
                    'planId' => $tplan->id,
                    'tType' => 'refincome',
                ])->exists();

                if (!$rexists) {
                    DB::table('customer_transactions')
                        ->insert(
                            [
                                'planId' => $tplan->id,
                                'tType' => 'refincome',
                                'created_at' => Carbon::parse($tplan->created_at)->subHours(4)->format('Y-m-d H:i:s'),
                                'csId' => $user->referral,
                                'tAmount' => strval($amn),
                                'tStatus' => '1',
                                'wStatus' => '0',
                            ]
                        );
                    if ($amntlnctrnsfr > 0) {
                        DB::table('customer_transfers')
                            ->insert(
                                [
                                    'planId' => $tplan->id,
                                    'csId' => $user->referral,
                                    'tType' => 'refincome',
                                    'tAmount' => strval($amntlnctrnsfr),
                                    'tStatus' => '1',
                                    'wStatus' => '0',
                                ]
                            );
                    }
                }
            }


            // ------------ decreasing transaction -----------

            // ------------ ** end decreasing transaction ** -----------


            // ---- level income ----
            $levincome_lastTransaction = DB::table('customer_transactions')->where('planId', $plan->id)->where('tType', 'levincome')->latest()->first();

            $levincome_createdDate = Carbon::parse($levincome_lastTransaction->created_at ?? $plan->created_at);
            $levincome_daysDifference = $levincome_createdDate->diffInDays(date('Y-m-d H:i:s'));
            if ($levincome_daysDifference >= 15) {
                $profit_lev_amount = $pamount * 15 / 100;
                $first_levelincome = $profit_lev_amount * 5 / 100;
                $firstuser = DB::table('customers')->where('id', $user->referral)->first();
                $thisdate = $levincome_createdDate->addDays(15)->subHours(4)->format('Y-m-d H:i:s');
                if ($firstuser) {
                    $cplans = DB::table('customer_plans')->where('csId', $firstuser->id)->where('pstatus', '1')->get();
                    if (count($cplans) > 0) {
                        DB::table('customer_transactions')
                            ->insert(
                                [
                                    'created_at' => $thisdate,
                                    'planId' => $plan->id,
                                    'tType' => 'levincome',
                                    'levl' => '1',
                                    'csId' => $firstuser->id,
                                    'tAmount' => strval($first_levelincome),
                                    'tStatus' => '1',
                                    'wStatus' => '0',
                                ]
                            );
                    }

                    $second_levelincome = $profit_lev_amount * 2.5 / 100;
                    $seconduser = DB::table('customers')->where('id', $firstuser->referral)->first();
                    if ($seconduser) {
                        $cplans = DB::table('customer_plans')->where('csId', $seconduser->id)->where('pstatus', '1')->get();
                        if (count($cplans) > 0) {
                            DB::table('customer_transactions')
                                ->insert(
                                    [
                                        'created_at' => $thisdate,
                                        'planId' => $plan->id,
                                        'tType' => 'levincome',
                                        'levl' => '2',
                                        'csId' => $seconduser->id,
                                        'tAmount' => strval($second_levelincome),
                                        'tStatus' => '1',
                                        'wStatus' => '0',
                                    ]
                                );
                        }

                        $third_levelincome = $profit_lev_amount * 2.5 / 100;
                        $thirduser = DB::table('customers')->where('id', $seconduser->referral)->first();
                        if ($thirduser) {
                            $cplans = DB::table('customer_plans')->where('csId', $thirduser->id)->where('pstatus', '1')->get();
                            if (count($cplans) > 0) {
                                DB::table('customer_transactions')
                                    ->insert(
                                        [
                                            'created_at' => $thisdate,
                                            'planId' => $plan->id,
                                            'tType' => 'levincome',
                                            'levl' => '3',
                                            'csId' => $thirduser->id,
                                            'tAmount' => strval($third_levelincome),
                                            'tStatus' => '1',
                                            'wStatus' => '0',
                                        ]
                                    );
                            }

                            $fourth_levelincome = $profit_lev_amount * 2.5 / 100;
                            $fourthuser = DB::table('customers')->where('id', $thirduser->referral)->first();
                            if ($fourthuser) {
                                $cplans = DB::table('customer_plans')->where('csId', $fourthuser->id)->where('pstatus', '1')->get();
                                if (count($cplans) > 0) {
                                    DB::table('customer_transactions')
                                        ->insert(
                                            [
                                                'created_at' => $thisdate,
                                                'planId' => $plan->id,
                                                'tType' => 'levincome',
                                                'levl' => '4',
                                                'csId' => $fourthuser->id,
                                                'tAmount' => strval($fourth_levelincome),
                                                'tStatus' => '1',
                                                'wStatus' => '0',
                                            ]
                                        );
                                }

                                $fifth_levelincome = $profit_lev_amount * 2.5 / 100;
                                $fifthuser = DB::table('customers')->where('id', $fourthuser->referral)->first();
                                if ($fifthuser) {
                                    $cplans = DB::table('customer_plans')->where('csId', $fifthuser->id)->where('pstatus', '1')->get();
                                    if (count($cplans) > 0) {
                                        DB::table('customer_transactions')
                                            ->insert(
                                                [
                                                    'created_at' => $thisdate,
                                                    'planId' => $plan->id,
                                                    'tType' => 'levincome',
                                                    'levl' => '5',
                                                    'csId' => $fifthuser->id,
                                                    'tAmount' => strval($fifth_levelincome),
                                                    'tStatus' => '1',
                                                    'wStatus' => '0',
                                                ]
                                            );
                                    }

                                }
                            }
                        }
                    }
                }
            }
            // ---- ** end level income ** ----


            // --- profit income ---
            $pincome_lastTransaction = DB::table('customer_transactions')->where('planId', $plan->id)->where('tType', 'pincome')->latest()->first();

            $pincome_createdDate = Carbon::parse($pincome_lastTransaction->created_at ?? $plan->created_at);
            $pincome_daysDifference = $pincome_createdDate->diffInDays(date('Y-m-d H:i:s'));
            if ($pincome_daysDifference >= 30) {
                if ($plan->pname == "compound" || $plan->pname == "reinvest_compound") {
                    if (!isset($plan->cmpId)) {

                        // ------------------------------- cmpnd use
                        $cmpssum = DB::table('customer_plan_compound')
                            ->where('csId', $user->id)
                            ->where('cmpId', $plan->id)
                            ->get()
                            ->sum('pamount');
                        $plnsum = DB::table('customer_plans')
                            ->where('id', $plan->id)
                            ->get()
                            ->sum('pamount');
                        $sumAmount = $cmpssum + $plnsum;
                        $profitamount = $sumAmount * 15 / 100;
                        $cmp_pincome_lastTransaction = DB::table('customer_plan_compound')
                            ->where('csId', $user->id)
                            ->where('cmpId', $plan->id)
                            ->latest()->first();
                        $cmp_pincome_createdDate = Carbon::parse($cmp_pincome_lastTransaction->created_at ?? $plan->created_at);
                        $cmp_pincome_daysDifference = $cmp_pincome_createdDate->diffInDays(date('Y-m-d H:i:s'));
                        // -------------------------------

                        $cmpcount = DB::table('customer_plan_compound')
                            ->where('csId', $user->id)
                            ->where('cmpId', $plan->id)->count();

                        // if ($createdDate->addMonths(6)->isPast()) {
                        if ($cmpcount > 5) {
                            $first_pincome_createdDate = Carbon::parse($pincome_lastTransaction->created_at ?? $cmp_pincome_lastTransaction->created_at);
                            $first_pincome_daysDifference = $first_pincome_createdDate->diffInDays(date('Y-m-d H:i:s'));
                            if ($first_pincome_daysDifference >= 30) {
                                DB::table('customer_transactions')
                                    ->insert(
                                        [
                                            'created_at' => Carbon::parse($first_pincome_createdDate)->addDays(30)->subHours(4)->format('Y-m-d H:i:s'),
                                            'planId' => $plan->id,
                                            'tType' => 'pincome',
                                            'csId' => $user->id,
                                            'tAmount' => strval($profitamount),
                                            'tStatus' => '1',
                                            'wStatus' => '0',
                                        ]
                                    );
                            }
                        } else {
                            if ($cmp_pincome_daysDifference >= 30) {
                                DB::table('customer_plan_compound')
                                    ->insert(
                                        [
                                            '_token' => '',
                                            'created_at' => Carbon::parse($cmp_pincome_createdDate)->addDays(30)->subHours(4)->format('Y-m-d H:i:s'),
                                            'pname' => 'compound',
                                            'cmpId' => $plan->id,
                                            'pamount' => strval(number_format($profitamount, 2)),
                                            'ptype' => '1',
                                            'pstatus' => '1',
                                            'csId' => $plan->csId,
                                            'msg' => 'success',
                                            'img' => '',
                                            'aimg' => null

                                        ]
                                    );
                            }
                        }
                    }
                } else {
                    $profitamount = $pamount * 15 / 100;
                    DB::table('customer_transactions')
                        ->insert(
                            [
                                'created_at' => Carbon::parse($pincome_createdDate)->addDays(30)->subHours(4)->format('Y-m-d H:i:s'),
                                'planId' => $plan->id,
                                'tType' => 'pincome',
                                'csId' => $user->id,
                                'tAmount' => strval($profitamount),
                                'tStatus' => '1',
                                'wStatus' => '0',
                            ]
                        );
                }
            }
            // --- ** end profit income ** ---

        }

        return "h";

    }
    public function singletap(Request $rqs)
    {
        $h = new HelperController;
        $prs = json_decode(json_encode($rqs->input(), true), true);
        $locked_or_withdraw_table = 'customer_transactions';
        $cs_plan_amount = DB::table('customer_plans')->where('csId', $prs['csId'])->where('pstatus', '1')->get()->sum('pamount');
        if ($cs_plan_amount < 1) {
            $locked_or_withdraw_table = 'customer_locked_transactions';
        }
        $mine_row = DB::table("$locked_or_withdraw_table")->where('csId', $prs['csId'])->where('tType', 'mine_amount')->first();
        $already_mined_amount = $mine_row == null ? 0 : $mine_row->tAmount;
        $mine_hour_tap = $mine_row == null ? 0 : $mine_row->mine_hour_tap;
        $mine_total_tap = $mine_row == null ? 0 : $mine_row->mine_total_tap;
        // $am = round($am, 15);

        $tpcount = (int) $prs['sendecount'];
        $mine_hour_tap += $tpcount;
        $mine_total_tap += $tpcount;
        $amount_per_tap = $cs_plan_amount < 100 ? 100 : $cs_plan_amount;

        // Perform the calculations using bc functions to ensure 15 decimal precision
        $amount_per_tap = bcmul($amount_per_tap, '5', 15); // amount_per_tap * 5
        $amount_per_tap = bcdiv($amount_per_tap, '100', 15); // Divide by 100
        $amount_per_tap = bcdiv($amount_per_tap, '720000', 15); // Divide by 720000

        // Calculate adamnt with high precision
        $adamnt = bcmul($tpcount, $amount_per_tap, 15);

        // Finally, sum $am and $adamnt using bcadd for 15 decimal places
        $uamount = bcadd($already_mined_amount, $adamnt, 15);

        $last_hour = $mine_row ? $mine_row->mine_last_hour : Carbon::now();
        // $minute_diff = Carbon::parse($last_hour)->diffInMinutes(Carbon::now());

        if ($mine_hour_tap < 1001) {
            DB::table("$locked_or_withdraw_table")
                ->updateOrInsert(
                    [
                        'csId' => $prs['csId'],
                        'tType' => 'mine_amount',
                    ],
                    [
                        'mine_total_tap' => $mine_total_tap,
                        'mine_hour_tap' => $mine_hour_tap,
                        'mine_last_hour' => $last_hour,
                        'tAmount' => $uamount,
                        'tStatus' => '1',
                        'wStatus' => '0',
                    ]
                );
        }
        return '{"s":"s"}';
    }
    public function getcusname(Request $rqs)
    {
        $h = new HelperController;
        $prs = json_decode(json_encode($rqs->input(), true), true);
        $usr = DB::table('customers')->where('id', $prs['csId'])->first();
        $cusname = 'no user found';
        if ($usr) {
            $cusname = $usr->name;
        }
        return $cusname;
    }
    public function quick_reward()
    {
        $customers_after_6s = DB::table('customers')->where('created_at', '>', '2024-09-06')->whereNotNull('vphone')->get();
        // echo $customers_after_6s->count() . '<br>';
        foreach ($customers_after_6s as $customer_after_6) {

            $locked_or_withdraw_table = 'customer_locked_transactions';
            $cs_plan_amount = DB::table('customer_plans')
                ->where('csId', $customer_after_6->id)
                ->where('pstatus', '1')
                ->get()
                ->sum('pamount');
            // if ($cs_plan_amount > 0) {
            //     $locked_or_withdraw_table = 'customer_transactions';
            // }

            $already_referral_user_rewarded = DB::table($locked_or_withdraw_table)->where([
                'csId' => $customer_after_6->referral,
                'fcsId' => $customer_after_6->id,
                'tType' => 'ref_reward',
            ])->exists();

            // if not rewarded the referral user
            if (!$already_referral_user_rewarded) {
                // if then pay reward
                // check if 15% already rewarded of inactive users
                // code wants to reward after active a user

                // $refuser = DB::table('customers')->where('id', $customer_after_6->referral)->first();
                $ref_plan_total = DB::table('customer_plans')->where('csId', $customer_after_6->referral)->where('pstatus', '1')->get()->sum('pamount');
                $ref_15 = $ref_plan_total * 15 / 100;
                // want to change
                $ref_total_reward = DB::table('customer_locked_transactions')->where('csId', $customer_after_6->referral)->where('tType', 'ref_reward')->get();
                $ref_inactive_reward = 0;
                $ref_active_reward = 0;
                foreach ($ref_total_reward as $ref_reward) {
                    $user_plan_total = DB::table('customer_plans')->where('csId', $ref_reward->fcsId)->where('pstatus', '1')->get()->sum('pamount');
                    if ($user_plan_total > 0) {
                        // active users of
                        $ref_active_reward += 0.5;
                    } else {
                        $ref_inactive_reward += 0.5;
                    }
                }
                $v_plan_total = DB::table('customer_plans')->where('csId', $customer_after_6->id)->where('pstatus', '1')->get()->sum('pamount');
                if ($v_plan_total > 0 || $ref_inactive_reward <= $ref_15) {
                    DB::table($locked_or_withdraw_table)
                        ->insert(
                            [
                                'csId' => $customer_after_6->referral,
                                'fcsId' => $customer_after_6->id,
                                'tType' => 'ref_reward',
                                'tAmount' => 0.5,
                                'tStatus' => '1',
                                'wStatus' => '0',
                            ]
                        );
                }

            }
        }
        return "n";
    }
    public function withdrawp(Request $rqs)
    {
        $h = new HelperController;
        $prs = json_decode(json_encode($rqs->input(), true), true);
        // admin check withdrawal
        if (isset($prs['id'])) {
            if (checkadmin()) {
                $imgg = null;
                if ($rqs->hasFile('image') && $rqs->file('image')->isValid()) {
                    if (isset($prs['id']) && isset($prs['img'])) {
                        // $h->deleteFileByUrl($prs['img']);
                    }
                    $image = $rqs->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('uploads'), $imageName);
                    $url = asset('uploads/' . $imageName);
                    $imgg = $url;
                }

                $wth = DB::table('customer_withdraws')
                    ->where('id', $prs['id'])->first();
                $amt1 = (float) $wth->amount;
                $amt2 = (float) $wth->fuel;
                $amt = $amt1 + $amt2;
                $nm = $amt * -1;
                $sts = '1';
                if (isset($prs['val'])) {
                    if ($prs['val'] == '3') {
                        $sts = '3';
                    }
                }

                if ($wth->pname == 'transfer') {

                    if ($sts == '1') {
                        $twalletAmnt = DB::table('customer_transfers')->where('csId', $wth->csId)->where('tStatus', '1')->get()->sum('tAmount');

                        if ($amt > $twalletAmnt) {
                            $tfwnm = $twalletAmnt * -1;
                            if ($tfwnm != 0) {
                                DB::table('customer_transfers')
                                    ->updateOrInsert(
                                        [
                                            'wthId' => $wth->id,
                                            'csId' => $wth->csId,
                                        ],
                                        [
                                            'tType' => $wth->pname,
                                            'fuserid' => $wth->fuserid,
                                            'tuserid' => $wth->tuserid,
                                            'tAmount' => strval($tfwnm),
                                            'tStatus' => '1',
                                            'wStatus' => '1',
                                        ]
                                    );
                            }
                            $btsnm = $amt - $twalletAmnt;
                            $tsnm = $btsnm * -1;
                            if ($tsnm != 0) {
                                DB::table('customer_transactions')
                                    ->updateOrInsert(
                                        [
                                            'wthId' => $wth->id,
                                            'csId' => $wth->csId,
                                        ],
                                        [
                                            'tType' => $wth->pname,
                                            'tAmount' => strval($tsnm),
                                            'tStatus' => '1',
                                            'wStatus' => '1',
                                        ]
                                    );
                            }
                        } else {
                            $nm = $amt * -1;
                            DB::table('customer_transfers')
                                ->updateOrInsert(
                                    [
                                        'wthId' => $wth->id,
                                        'csId' => $wth->csId,
                                    ],
                                    [
                                        'tType' => $wth->pname,
                                        'fuserid' => $wth->fuserid,
                                        'tuserid' => $wth->tuserid,
                                        'tAmount' => strval($nm),
                                        'tStatus' => '1',
                                        'wStatus' => '1',
                                    ]
                                );
                        }

                        // DB::table('customer_transactions')
                        //     ->updateOrInsert(
                        //         [
                        //             'wthId' => $prs['id'],
                        //             'csId' => $wth->csId,
                        //         ],
                        //         [
                        //             'tType' => $wth->pname,
                        //             'tAmount' => strval($nm),
                        //             'tStatus' => '1',
                        //             'wStatus' => '1',
                        //         ]
                        //     );

                        if (isset($wth->tuserid)) {
                            if ($wth->tuserid != null) {
                                if ($wth->pname == 'transfer') {
                                    if (isset($wth->tuserid) != '0') {
                                        if ($sts == '1') {
                                            DB::table('customer_transfers')
                                                ->updateOrInsert(
                                                    [
                                                        'wthId' => $prs['id'],
                                                        'csId' => $wth->tuserid,
                                                    ],
                                                    [
                                                        'tType' => $wth->pname,
                                                        'fuserid' => $wth->fuserid,
                                                        'tuserid' => $wth->tuserid,
                                                        'tAmount' => strval($amt1),
                                                        'tStatus' => '1',
                                                        'wStatus' => '0',
                                                    ]
                                                );
                                        }
                                    }
                                }
                            }
                        }
                    }
                } else {

                    if ($sts == '1') {
                        if ($wth->pname == 'allincome') {
                            if (isset($prs['atxid'])) {
                                if (strlen($prs['atxid']) < 5) {
                                    return redirect()->back()->withInput($rqs->all())->withErrors([
                                        'image' => 'TxId is Required',
                                        // 'password' => 'Wrong password',
                                    ]);
                                }
                            } else {
                                return redirect()->back()->withInput($rqs->all())->withErrors([
                                    'image' => 'TxId Required',
                                    // 'password' => 'Wrong password',
                                ]);
                            }
                        }
                        DB::table('customer_transactions')
                            ->updateOrInsert(
                                [
                                    'wthId' => $prs['id'],
                                    'csId' => $wth->csId,
                                ],
                                [
                                    'tType' => $wth->pname,
                                    'tAmount' => strval($nm),
                                    'tStatus' => '1',
                                    'wStatus' => '1',
                                ]
                            );

                        if ($wth->pname == 'allincome') {
                            if (isset($prs['atxid'])) {
                                DB::table('customer_withdraws')
                                    ->where('id', $wth->id)->update(
                                        [
                                            'atxid' => $prs['atxid'],
                                        ]
                                    );
                            }
                        }
                    }

                }

                DB::table('customer_withdraws')
                    ->where('id', $prs['id'])
                    ->update([
                        'status' => $sts,
                        'img' => $imgg
                    ]);

                $this->cronjob();

                //fcm open
                $fcad = new FcmController;
                $c_id = 'c_' . $wth->csId;
                $hedad = getPname($wth->pname);
                if ($sts == '1') {
                    $fcad->sendFCMMessageToTopic($c_id, getPname("$hedad status"), "Accepted");
                } else if ($sts == '3') {
                    $fcad->sendFCMMessageToTopic($c_id, getPname("$hedad status"), "Rejected | Contact admin for more details");
                }
                // fcm close

                return redirect('/admin/withdraw/requests');
            }
        }
        // admin check withdrawal
        $usid = (float) $prs['csId'];
        $amnt = (float) $prs['amount'];
        $musr = DB::table('customers')->where('id', $usid)->first();
        if (isset($prs['tpassword'])) {
            if (Hash::check($prs['tpassword'], $musr->tpassword)) {
                unset($prs['tpassword']);
            } else {
                // if ($musr->tpassword != $prs['tpassword']) {
                return redirect()->back()->withInput($rqs->all())->withErrors([
                    'image' => 'Wrong transaction password',
                    // 'password' => 'Wrong password',
                ]);
            }
        }
        $tAllincome = DB::table('customer_transactions')
            ->where('csId', $usid)
            ->get();
        $tProfitincome = DB::table('customer_transactions')
            ->where('csId', $usid)
            ->where('tType', 'pincome')
            ->get();
        $tReferalincome = DB::table('customer_transactions')
            ->where('csId', $usid)
            ->where('tType', 'refincome')
            ->get();
        $tLevelincome = DB::table('customer_transactions')
            ->where('csId', $usid)
            ->where('tType', 'levincome')
            ->get();

        $totProfitincome = $tProfitincome->where('wStatus', '0')->sum('tAmount');
        $totLevelincome = $tLevelincome->where('wStatus', '0')->sum('tAmount');
        $totReferalincome = $tReferalincome->where('wStatus', '0')->sum('tAmount');
        $totBalance = $tAllincome->sum('tAmount');


        $tuserid = (float) $prs['tuserid'];
        if ($tuserid != 0) {
            $prs['fuserid'] = $prs['csId'];
            // $prs['csId'] = $prs['tuserid'];reinvest_compound
            $usr = DB::table('customers')
                ->where('id', $tuserid)->first();
            if ($usr == null) {
                return redirect()->back()->withInput($rqs->all())->withErrors([
                    'image' => 'No User Found',
                    // 'password' => 'Wrong password',
                ]);
            }
        }
        if ($amnt < 9.5) {
            return redirect()->back()->withInput($rqs->all())->withErrors([
                'image' => "Min USDT is 10",
            ]);
        }
        $maxmnt = 0;
        if ($prs['pname'] == 'pincome') {
            $maxmnt = $totProfitincome - ($totProfitincome * 5 / 100);
        } else if ($prs['pname'] == 'levincome') {
            $maxmnt = $totLevelincome - ($totLevelincome * 5 / 100);
        } else if ($prs['pname'] == 'refincome') {
            $maxmnt = $totReferalincome - ($totReferalincome * 5 / 100);
        } else if ($prs['pname'] == 'allincome') {
            $maxmnt = $totBalance - ($totBalance * 5 / 100);
        } else if ($prs['pname'] == 'transfer') {
            if (isset($prs['trnfrc'])) {
                if ($prs['trnfrc'] == '1') {
                    $maxmnt = DB::table('customer_transfers')->where('csId', $usid)->get()->sum('tAmount');
                } else {
                    $maxmnt = $totBalance + DB::table('customer_transfers')->where('csId', $usid)->get()->sum('tAmount');
                }
            } else {
                $maxmnt = $totBalance + DB::table('customer_transfers')->where('csId', $usid)->get()->sum('tAmount');
            }
        } else {

        }

        if ($amnt > $maxmnt) {
            return redirect()->back()->withInput($rqs->all())->withErrors([
                'image' => "No Enough Balance",
            ]);
        }

        $products = DB::table("customer_plans")->where('csId', $prs['csId'])->where('pstatus', '0')->whereIn('pname', ['reinvest', 'reinvest_compound'])->get();
        if (count($products) > 0) {
            return redirect()->back()->withInput($rqs->all())->withErrors([
                'image' => "Already reinvest pending",
            ]);
        }
        $withdrws = DB::table("customer_withdraws")->where('csId', $prs['csId'])->where('status', '0')->get();
        if (count($withdrws) > 0) {
            return redirect()->back()->withInput($rqs->all())->withErrors([
                'image' => "Already withdrawal pending",
            ]);
        }

        if (isset($prs['id'])) {

            unset($prs['id']);
        }
        $new_id = $h->toTable2('customer_withdraws', $prs);
        $fc = new FcmController;
        $head = getPname($prs['pname']);
        $fc->sendFCMMessageToTopic('admin', "new $head", $musr->name . ' - ' . $amnt . 'USDT');
        $this->cronjob();
        return redirect()->back()->withInput($rqs->all())->withErrors([
            'success' => "Success",
        ]);

    }

    public function sendusdt(Request $rqs)
    {
        $h = new HelperController;
        $prs = json_decode(json_encode($rqs->input(), true), true);
        $new_id = $h->toTable2('customer_wallet_transactions', $prs);
        $rqs->merge([
            'wtxid' => $new_id,
        ]);
        return redirect()->back()->withInput($rqs->all())->withErrors([
            'walletsuccess' => "walletsuccess",
        ]);
    }

    public function sendproduct(Request $rqs)
    {

        $h = new HelperController;
        $prs = json_decode(json_encode($rqs->input(), true), true);
        $csId = $prs['csId'];
        // dd($prs);
        $musr = DB::table('customers')->where('id', $csId)->first();
        if (
            isset($prs['pname'])
            // && isset($prs['pamount'])
        ) {
            $amnt = (float) $prs['pamount'];
            if ($prs['pname'] == 'lott') {
                $allotscount = json_decode($prs['lotc']);
                $alllotamnt = count($allotscount) * 10;
                if ($alllotamnt != $amnt) {
                    return redirect()->back()->withInput($rqs->all())->withErrors([
                        'image' => "Amounot not enough",
                    ]);
                }
            } else {
                if ($amnt < 100) {
                    if ($amnt != 10) {
                        return redirect()->back()->withInput($rqs->all())->withErrors([
                            'image' => "Minimum USDT is 100",
                        ]);
                    }
                }
            }
            if ($prs['pname'] == 'reinvest' || $prs['pname'] == 'reinvest_compound') {
                $withdrws = DB::table("customer_withdraws")->where('csId', $prs['csId'])->where('status', '0')->get();
                if (count($withdrws) > 0) {
                    return redirect()->back()->withInput($rqs->all())->withErrors([
                        'image' => "Already Withdrawal pending",
                    ]);
                }
            }

            if ($prs['pname'] == 'lott') {
                $verifylots = 0;
                $allots = json_decode($prs['lotc']);
                // dd($prs);
                for ($i = 0; $i < count($allots); $i++) {
                    $split_ar = explode("-", $allots[$i]);
                    $lotc_str = $split_ar[0];
                    $boxc_str = $split_ar[1];
                    $lotc = (int) $lotc_str;
                    $boxc = (int) $boxc_str;
                    // check lotc available
                    // check if lott filled
                    // check if boxc more than 100 and less than 0
                    // check boxc box available
                    if ($lotc <= 1) {
                        $allLots = DB::table("customer_lots")->where('lotc', $lotc_str)->get();
                        if ($allLots->count() <= 100) {
                            if ($boxc > 0 && $boxc <= 100) {
                                $allLotswithbox = DB::table("customer_lots")->where('lotc', $lotc_str)->where('boxc', $boxc_str)->get();
                                if ($allLotswithbox->count() == 0) {
                                    $verifylots++;
                                }
                            }
                        }
                    }
                }
                // dd($verifylots);
                if ($verifylots < count($allots)) {
                    return redirect()->back()->withInput($rqs->all())->withErrors([
                        'image' => "Some slots are already Purchased, Try again",
                    ]);
                }
            }
        }

        if (isset($prs['tpassword'])) {
            if (!Hash::check($prs['tpassword'], $musr->tpassword)) {
                return redirect()->back()->withInput($rqs->all())->withErrors([
                    'image' => 'Wrong transaction password.',
                    // 'password' => 'Wrong password',
                ]);
            } else {
                unset($prs['tpassword']);
            }
        } else {
            return redirect()->back()->withInput($rqs->all())->withErrors([
                'image' => 'Wrong transaction password.',
                // 'password' => 'Wrong password',
            ]);
        }
        $admin_config = DB::table('admin_config')->first();
        return $h->getboth('dashboard.dcards.wallet', ['admin_config' => $admin_config, 'snd' => null, 'bsnd' => isset($prs['pname']) ? null : true, 'prs' => $prs, 'route' => '/successproduct', 'reciever' => isset($prs['reciever_w']) ? $prs['reciever_w'] : decStr($admin_config->admin_wallet), 'amount' => $prs['pamount'], 'remark' => $prs['msg']]);

    }


    public function successproduct(Request $rqs)
    {
        $h = new HelperController;
        $isbuy = false;
        $isreinvest = false;
        $prs = json_decode(json_encode($rqs->input(), true), true);
        if (isset($prs['pname']) && isset($prs['pamount'])) {
            $isbuy = true;
        }
        if ($isbuy) {
            if ($prs['pname'] == 'reinvest' || $prs['pname'] == 'reinvest_compound' || $prs['pname'] == 'lott') {
                $isreinvest = true;
            }
        }
        // dd($prs);
        if ($prs['reciept'] != null) {
            if (isset($prs['wlt_amount'])) {
                $new_idd = DB::table('customer_wallet_transactions')->insertGetId([
                    'amount' => $prs['wlt_amount'],
                    'coin_type' => isset($prs['coin_type']) ? $prs['coin_type'] : 'usdt',
                    'reciept' => $prs['reciept'],
                    'remark' => $prs['remark'],
                    'txid' => $prs['txid'],
                    'csId' => $prs['csId'],
                ]);
            }
            if ($isbuy) {
                // its from product
                // dd
                // Create a new Request instance
                if ($isreinvest) {
                    if ($prs['wlt_amount'] != null) {
                        $request = new Request();
                        $request->replace([
                            '_token' => csrf_token(),
                            'ptype' => '1',
                            'tuserid' => '0',
                            'pstatus' => '0',
                            'txid' => $prs['txid'],
                            'wtxid' => $new_idd == null ? null : strval($new_idd),
                            'csId' => $prs['csId'],
                            'pname' => $prs['pname'],
                            'pamount' => $prs['pamount'],
                            'wlt_amount' => $prs['wlt_amount'],
                            'msg' => $prs['msg'],
                            'lotc' => isset($prs['lotc']) ? $prs['lotc'] : null,
                            'boxc' => isset($prs['boxc']) ? $prs['boxc'] : null,
                        ]);
                        // dd('hii');
                        return $this->buyproduct($request);
                    }
                } else {
                    $request = new Request();
                    $request->replace([
                        '_token' => csrf_token(),
                        'ptype' => '1',
                        'tuserid' => '0',
                        'pstatus' => '0',
                        'txid' => $prs['txid'],
                        'wtxid' => $new_idd == null ? null : strval($new_idd),
                        'csId' => $prs['csId'],
                        'pname' => $prs['pname'],
                        'pamount' => $prs['pamount'],
                        'wlt_amount' => $prs['wlt_amount'],
                        'msg' => $prs['msg'],
                    ]);
                    return $this->buyproduct($request);
                }
            } else {
                // its from normal send
                // dd($prs);
                return redirect('/dashboard')->withInput($rqs->all())->withErrors([
                    'walletsuccess' => "walletsuccess",
                ]);
            }
        } else {
            if ($isbuy) {
                if ($isreinvest) {
                    if ($prs['wlt_amount'] == null) {
                        $request = new Request();
                        $request->replace([
                            '_token' => csrf_token(),
                            'ptype' => '1',
                            'tuserid' => '0',
                            'pstatus' => '0',
                            'txid' => null,
                            'wtxid' => null,
                            'csId' => $prs['csId'],
                            'pname' => $prs['pname'],
                            'pamount' => $prs['pamount'],
                            'wlt_amount' => '0',
                            'msg' => $prs['msg'],
                            'lotc' => isset($prs['lotc']) ? $prs['lotc'] : null,
                            'boxc' => isset($prs['boxc']) ? $prs['boxc'] : null,
                        ]);
                        return $this->buyproduct($request);
                    }
                }
                return redirect('/dashboard/products/buy')->withInput($rqs->all())->withErrors([
                    'success' => "walletsuc",
                ]);
            } else {
                // its from normal send
                return redirect('/dashboard')->withInput($rqs->all())->withErrors([
                    'walletsuccess' => "walletsuccess",
                ]);
            }
        }
    }

    public function buyproduct(Request $rqs)
    {
        $h = new HelperController;
        $prs = json_decode(json_encode($rqs->input(), true), true);
        sleep(2);
        if (isset($prs['id'])) {
            if (checkadmin()) {
                $imgg = null;
                if ($rqs->hasFile('image') && $rqs->file('image')->isValid()) {
                    if (isset($prs['id']) && isset($prs['aimg'])) {
                        // $h->deleteFileByUrl($prs['aimg']);
                    }
                    $image = $rqs->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('uploads'), $imageName);
                    $url = asset('uploads/' . $imageName);
                    $imgg = $url;
                }
                $plnn = DB::table('customer_plans')->where('id', $prs['id'])->first();
                DB::table('customer_plans')
                    ->where('id', $prs['id'])
                    ->update([
                        'pstatus' => '1',
                        'aimg' => $imgg,
                    ]);
                if (isset($prs['val'])) {
                    // dd($prs['val']);
                    if ($prs['val'] == '3') {
                        if ($plnn->pstatus == '0') {
                            DB::table('customer_plans')
                                ->where('id', $prs['id'])
                                ->update([
                                    'pstatus' => '3',
                                ]);
                        }
                    }
                }
                if ($plnn->pname == "reinvest" || $plnn->pname == "reinvest_compound") {
                    if ($plnn->pstatus == '0') {
                        $amt = (float) $plnn->pamount;
                        $twalletAmnt = DB::table('customer_transfers')->where('csId', $plnn->csId)->where('tStatus', '1')->get()->sum('tAmount');

                        if ($amt > $twalletAmnt) {
                            $tfwnm = $twalletAmnt * -1;
                            if ($tfwnm != 0) {
                                DB::table('customer_transfers')
                                    ->updateOrInsert(
                                        [
                                            'planId' => $plnn->id,
                                            'csId' => $plnn->csId,
                                        ],
                                        [
                                            'tType' => $plnn->pname,
                                            'tAmount' => strval($tfwnm),
                                            'tStatus' => '1',
                                            'wStatus' => '1',
                                        ]
                                    );
                            }
                            $btsnm = $amt - $twalletAmnt;
                            $tsnm = $btsnm * -1;
                            if ($tsnm != 0) {
                                DB::table('customer_transactions')
                                    ->updateOrInsert(
                                        [
                                            'planId' => $plnn->id,
                                            'csId' => $plnn->csId,
                                        ],
                                        [
                                            'tType' => $plnn->pname,
                                            'tAmount' => strval($tsnm),
                                            'tStatus' => '1',
                                            'wStatus' => '1',
                                        ]
                                    );
                            }
                        } else {
                            $nm = $amt * -1;
                            DB::table('customer_transfers')
                                ->updateOrInsert(
                                    [
                                        'planId' => $plnn->id,
                                        'csId' => $plnn->csId,
                                    ],
                                    [
                                        'tType' => $plnn->pname,
                                        'tAmount' => strval($nm),
                                        'tStatus' => '1',
                                        'wStatus' => '1',
                                    ]
                                );
                        }

                    }
                }
                // $user = DB::table('customers')
                //     ->where('id', $prs['csId'])->first();
                // $plan = DB::table('customer_plans')
                //     ->where('csId', $user->id)->first();
                // if ($plan->pname == 'normal') {
                //     DB::table('customer_transactions')
                //         ->updateOrInsert(
                //             ['wthId' => $plan->id],
                //             [
                //                 'csId' => $plan->csId,
                //                 'tType' => 'refincome',
                //                 'tAmount' => $plan->pamount,
                //                 'tStatus' => '1',
                //                 'wStatus' => '0',
                //             ]
                //         );
                // }
                $this->cronjob();
                return redirect('/admin/product/requests');
            }
        }
        // dd($prs);
        $amnt = (float) $prs['pamount'];
        $csId = $prs['csId'];
        $musr = DB::table('customers')->where('id', $csId)->first();
        if (isset($prs['tpassword'])) {
            if (!Hash::check($prs['tpassword'], $musr->tpassword)) {
                // dd('no password');
            } else {
                unset($prs['tpassword']);
            }
        }
        if ($prs['pname'] == 'reinvest' || $prs['pname'] == 'reinvest_compound' || $prs['pname'] == 'lott') {
            $tAllincome = DB::table('customer_transactions')
                ->where('csId', $csId)
                ->get();
            $totBalance = $tAllincome->sum('tAmount');
            $twalletAmnt = DB::table('customer_transfers')->where('csId', $csId)->where('tStatus', '1')->get()->sum('tAmount');
            $totBalance += $twalletAmnt;
            if ($amnt > $totBalance) {
                // dd('no enought balance');
            }
        }
        // if ($prs['pname'] == 'normal' || $prs['pname'] == 'compound' || $prs['pname'] == 'reinvest_compound') {
        if ($amnt < 50) {
            // dd('no enough 50');
        }
        // }

        // $products = DB::table("customer_plans")->where('csId', $csId)->where('pstatus', '0')->get();
        // if (count($products) > 0) {
        //     dd('Already transaction pending');
        // }

        // if ($prs['pname'] == 'normal' || $prs['pname'] == 'compound') {
        //     if ($rqs->hasFile('image') && $rqs->file('image')->isValid()) {
        //         $image = $rqs->file('image');

        //         // Check if image size exceeds 500MB (500 * 1024 * 1024 bytes)
        //         $isize = ($image->getSize() / 1000000);
        //         if ($isize > 1) {
        //             return redirect()->back()->withInput($rqs->all())->withErrors([
        //                 'image' => 'Image maximum size is 1MB',
        //                 // 'password' => 'Wrong password',
        //             ]);
        //         }
        //         // if (isset($prs['id']) && isset($prs['img'])) {
        //         // $h->deleteFileByUrl($musr->img);
        //         // }

        //         $imageName = time() . '.' . $image->getClientOriginalExtension();
        //         $image->move(public_path('uploads'), $imageName);
        //         $url = asset('uploads/' . $imageName);
        //         $prs['img'] = $url;
        //     } else {
        //         return redirect()->back()->withInput($rqs->all())->withErrors([
        //             'image' => "Image is required",
        //         ]);
        //     }
        // } else {
        $prs['img'] = '';
        // }

        if (isset($prs['id'])) {
            unset($prs['id']);
        }

        if ($prs['pstatus'] == '0') {
            $fc = new FcmController;
            $head = getPname($prs['pname']);
            $fc->sendFCMMessageToTopic('admin', getPname($head), "new $head");
            $uname = $musr->name;
            if ($amnt >= 1000) {
                $fc->sendFCMMessageToTopic("all", "$uname Earned a New Milestone!", "$uname just achieved Diamond! You can achieve this too");
            }
            if ($prs['pname'] == 'normal' || $prs['pname'] == 'compound' || $prs['pname'] == 'reinvest' || $prs['pname'] == 'reinvest_compound' || $prs['pname'] == 'lott') {
                $prs['pstatus'] = '1';
            }
            // dd($prs['pname']);
            if ($prs['pname'] == 'lott') {
                $allots = json_decode($prs['lotc']);
                // dd($prs);
                for ($i = 0; $i < count($allots); $i++) {
                    $split_ar = explode("-", $allots[$i]);
                    $lotc_str = $split_ar[0];
                    $boxc_str = $split_ar[1];
                    // $lotc = (int) $lotc_str;
                    // $boxc = (int) $boxc_str;
                    $rs = $prs;
                    $rs['lotc'] = $lotc_str;
                    $rs['boxc'] = $boxc_str;
                    $rs['pamount'] = '10';
                    $new_id = $h->toTable2('customer_lots', $rs);
                }
            } else {
                $new_id = $h->toTable2('customer_plans', $prs);
            }
            if ($prs['pname'] == 'reinvest' || $prs['pname'] == 'reinvest_compound' || $prs['pname'] == 'lott') {
                $amn = (float) $prs['pamount'];
                $wlt_amount = (float) $prs['wlt_amount'];
                $amt = ($amn - $wlt_amount);

                $twalletAmnt = DB::table('customer_transfers')->where('csId', $csId)->where('tStatus', '1')->get()->sum('tAmount');

                if ($prs['pname'] == 'lott') {
                    $checkPlan = 'lottId';
                } else {
                    $checkPlan = 'planId';
                }
                if ($amt > $twalletAmnt) {
                    $tfwnm = $twalletAmnt * -1;
                    if ($tfwnm != 0) {
                        DB::table('customer_transfers')
                            ->updateOrInsert(
                                [
                                    $checkPlan => $new_id,
                                ],
                                [
                                    'csId' => $csId,
                                    'tType' => $prs['pname'],
                                    'tAmount' => strval($tfwnm),
                                    'tStatus' => '1',
                                    'wStatus' => '1',
                                ]
                            );
                    }
                    $btsnm = $amt - $twalletAmnt;
                    $tsnm = $btsnm * -1;
                    if ($tsnm != 0) {
                        DB::table('customer_transactions')
                            ->updateOrInsert(
                                [
                                    $checkPlan => $new_id,
                                ],
                                [
                                    'csId' => $csId,
                                    'tType' => $prs['pname'],
                                    'tAmount' => strval($tsnm),
                                    'tStatus' => '1',
                                    'wStatus' => '1',
                                ]
                            );
                    }
                } else {
                    $nm = $amt * -1;
                    DB::table('customer_transfers')
                        ->updateOrInsert(
                            [
                                $checkPlan => $new_id,
                            ],
                            [
                                'csId' => $csId,
                                'tType' => $prs['pname'],
                                'tAmount' => strval($nm),
                                'tStatus' => '1',
                                'wStatus' => '1',
                            ]
                        );
                }
            }
            // if (false) {
            //     DB::table('customer_plans')
            //         ->insert(
            //             [
            //                 '_token' => $prs['_token'],
            //                 // 'created_at' => Carbon::parse(date('Y-m-d H:i:s'))->subHours(4)->format('Y-m-d H:i:s'),
            //                 'pname' => $prs['pname'],
            //                 'pamount' => $prs['pamount'],
            //                 'ptype' => '1',
            //                 'pstatus' => '0',
            //                 'csId' => $prs['csId'],
            //                 'msg' => $prs['msg'],
            //                 'img' => $prs['img'],
            //                 'aimg' => null
            //             ]
            //         );
            // }
        }

        $this->cronjob();
        $this->quick_reward();

        // if ($prs['pname'] == "normal" || $prs['pname'] == "compound") {
        if (true) {
            sleep(3);
            if ($prs['pname'] == 'lott') {
                return redirect('/dashboard/lott')->withInput($rqs->all())->withErrors([
                    'success' => "Success",
                ]);
            } else {
                return redirect('/dashboard/products/buy')->withInput($rqs->all())->withErrors([
                    'success' => "Success",
                ]);
            }
        } else {
            // return redirect('/dashboard');
        }

    }

    public function creditbuy(Request $rqs)
    {
        $h = new HelperController;
        $prs = json_decode(json_encode($rqs->input(), true), true);
        sleep(2);
        if (isset($prs['id'])) {
            if (checkadmin()) {
                $plnn = DB::table('credit_add')->where('id', $prs['id'])->first();
                DB::table('credit_add')
                    ->where('id', $prs['id'])
                    ->update([
                        'pstatus' => '1',
                    ]);
                if (isset($prs['val'])) {
                    // dd($prs['val']);
                    if ($prs['val'] == '3') {
                        if ($plnn->pstatus == '0') {
                            DB::table('credit_add')
                                ->where('id', $prs['id'])
                                ->update([
                                    'pstatus' => '3',
                                ]);
                        }
                    }
                }
                if ($plnn->pname == "creditadd") {
                    if ($plnn->pstatus == '0') {
                        $amt = (float) $plnn->pamount;
                        DB::table('customer_transfers')
                            ->updateOrInsert(
                                [
                                    'crId' => $plnn->id,
                                    'csId' => $plnn->csId,
                                ],
                                [
                                    'tType' => $plnn->pname,
                                    'tAmount' => strval($amt),
                                    'tStatus' => '1',
                                    'wStatus' => '0',
                                ]
                            );
                    }


                }

                $this->cronjob();
                return redirect('/admin/creditadd/requests');
            }
        }
        $amnt = (float) $prs['pamount'];
        $csId = $prs['csId'];
        $musr = DB::table('customers')->where('id', $csId)->first();
        if (isset($prs['tpassword'])) {
            if (!Hash::check($prs['tpassword'], $musr->tpassword)) {
                return redirect()->back()->withInput($rqs->all())->withErrors([
                    'image' => 'Wrong transaction password',
                    // 'password' => 'Wrong password',
                ]);
            } else {
                unset($prs['tpassword']);
            }
        }
        // if ($prs['pname'] == 'normal' || $prs['pname'] == 'compound' || $prs['pname'] == 'reinvest_compound') {
        if ($amnt < 5) {
            return redirect()->back()->withInput($rqs->all())->withErrors([
                'image' => "Minimum USDT is 5",
            ]);
        }
        // }

        $products = DB::table("credit_add")->where('csId', $csId)->where('pstatus', '0')->get();
        if (count($products) > 0) {
            return redirect()->back()->withInput($rqs->all())->withErrors([
                'image' => "Already transaction pending",
            ]);
        }



        if (isset($prs['txid'])) {
            if (strlen($prs['txid']) < 5) {
                return redirect()->back()->withInput($rqs->all())->withErrors([
                    'image' => "TxId is Required",
                ]);
            }
        } else {
            return redirect()->back()->withInput($rqs->all())->withErrors([
                'image' => "TxId is Required",
            ]);
        }



        if ($prs['pname'] == 'creditadd') {
            if ($rqs->hasFile('image') && $rqs->file('image')->isValid()) {
                $image = $rqs->file('image');

                // Check if image size exceeds 500MB (500 * 1024 * 1024 bytes)
                $isize = ($image->getSize() / 1000000);
                if ($isize > 1) {
                    return redirect()->back()->withInput($rqs->all())->withErrors([
                        'image' => 'Image maximum size is 1MB',
                        // 'password' => 'Wrong password',
                    ]);
                }
                // if (isset($prs['id']) && isset($prs['img'])) {
                // $h->deleteFileByUrl($musr->img);
                // }

                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $url = asset('uploads/' . $imageName);
                $prs['img'] = $url;
            } else {
                return redirect()->back()->withInput($rqs->all())->withErrors([
                    'image' => "Image is required",
                ]);
            }
        } else {
            $prs['img'] = '';
        }

        if (isset($prs['id'])) {
            unset($prs['id']);
        }

        if ($prs['pstatus'] == '0') {
            $new_id = $h->toTable2('credit_add', $prs);
        }

        $this->cronjob();

        sleep(3);
        return redirect()->back()->withInput($rqs->all())->withErrors([
            'success' => "Success",
        ]);

    }

    public function customersupport(Request $rqs)
    {
        $h = new HelperController;
        $prs = json_decode(json_encode($rqs->input(), true), true);
        if (isset($prs['id'])) {
            $spid = $prs['id'];

            if (!isset($prs['reply'])) {
                return redirect()->back()->withInput($rqs->all())->withErrors([
                    'image' => 'Minimum 5 words',
                ]);
            }
            if (strlen($prs['reply']) < 5) {
                return redirect()->back()->withInput($rqs->all())->withErrors([
                    'image' => 'Minimum 5 words',
                ]);
            }
            $reply = $prs['reply'];
            DB::table('customer_support')->where('id', $spid)->update(['reply' => $reply]);
            return redirect('/admin/customer/support/status');
        }
        $new_id = $h->toTable2('customer_support', $prs);
        $fc = new FcmController;
        $fc->sendFCMMessageToTopic('admin', 'Support', "new Chat");
        return redirect('/dashboard');
    }



}