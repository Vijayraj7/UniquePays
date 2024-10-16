@if($st == 'form')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="/css/login.css">
    </head>
    <body>
        <div class="parent clearfix">
            <div class="bg-illustration">
                <div class="burger-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <a href="/">
                    <div class="burger-btn" id="nm">
                        Change Password
                    </div>
                </a>
            </div>
            <div class="login">
                <div class="container">
                    <h1> Change Password</h1>
                    <br>
                    <!-- <img src="/imgs/dxlogo.png" height="35px"> -->
                    <!-- <img src="/imgs/dxname.png" height="35px"> -->
                    <div class="login-form">
                        <form action="/changepass" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$id}}">
                            <input type="hidden" name="code" value="{{$code}}">
                            <input
                                type="text"
                                autocomplete="off"
                                name="password"
                                value="{{ old('password') }}"
                                placeholder="Password"
                            >
                            <input
                                type="text"
                                autocomplete="off"
                                name="spassword"
                                value="{{ old('spassword') }}"
                                placeholder="Confirm Password"
                            >
                            <input
                                type="text"
                                autocomplete="off"
                                name="tpassword"
                                value="{{ old('tpassword') }}"
                                placeholder="Transaction Password"
                            >
                            <input
                                type="text"
                                autocomplete="off"
                                name="stpassword"
                                value="{{ old('stpassword') }}"
                                placeholder="Confirm Transaction Password"
                            >
                            @error("password")
                            <p style="color: red; margin-bottom:20px;">{{$message}}</p>
                            @enderror
                            <button type="submit">Change</button>
                            <br>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@elseif($st == 'after')
<!doctype html>
<html lang="en-US">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>Reset Password Email Template</title>
        <meta name="description" content="Reset Password Email Template.">
        <style type="text/css">
        a:hover {
            text-decoration: underline !important;
        }
        </style>
    </head>
    <body
        marginheight="0"
        topmargin="0"
        marginwidth="0"
        style="margin: 0px; background-color: #f2f3f8;"
        leftmargin="0"
    >
        <!--100% body table-->
        <table
            cellspacing="0"
            border="0"
            cellpadding="0"
            width="100%"
            bgcolor="#f2f3f8"
            style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;"
        >
            <tr>
                <td>
                    <table
                        style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;"
                        width="100%"
                        border="0"
                        align="center"
                        cellpadding="0"
                        cellspacing="0"
                    >
                        <tr>
                            <td style="height:80px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="text-align:center;">
                                <a href="https://rakeshmandal.com" title="logo" target="_blank">
                                    <img
                                        width="60"
                                        src="https://i.ibb.co/hL4XZp2/android-chrome-192x192.png"
                                        title="logo"
                                        alt="logo"
                                    >
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td style="height:20px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <table
                                    width="95%"
                                    border="0"
                                    align="center"
                                    cellpadding="0"
                                    cellspacing="0"
                                    style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);"
                                >
                                    <tr>
                                        <td style="height:40px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td style="padding:0 35px;">
                                            <h1 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:'Rubik',sans-serif;">
                                                Reset-link has been sent to your email
                                            </h1>
                                            <span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                            <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                                We cannot simply send you your old password. A unique link to reset your
                                            password has been generated for you. To reset your password, click the
                                            link in email.
                                            </p>
                                            <!-- <a href="javascript:void(0);"
                                            style="background:#20e277;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;">Reset
                                            Password</a> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:40px;">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                            <tr>
                                <td style="height:20px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">
                                    <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">
                                        &copy;
                                        <strong>www.rakeshmandal.com</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="height:80px;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--/100% body table-->
        </body>
    </html>
    @else

Something not found...

@endif
