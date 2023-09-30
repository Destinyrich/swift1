<html lang="en" class="pixel-ratio-1">

<head>
    <!-- Required meta tags -->
    <!--meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="SwiftPayu">
    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#0076be">
    <meta name="apple-mobile-web-app-status-bar" content="#ffffff">
    <meta name="Keywords" content="Online,savings,SwiftPayu,send,receive,funds,money">
    <meta name="Description" content="SwiftPayu - Send and receive money globally">
    <meta name="robots" content="index, follow">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="SwiftPayu - Send and receive money globally">
    <meta property="og:description" content="SwiftPayu - Send and receive money globally">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="SwiftPayu">
    <meta property="og:image" content="android-chrome-512x512.png">
    <meta property="og:image:secure_url" content="android-chrome-512x512.png">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="400">
    <meta property="og:image:height" content="300">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <!-- Bootstrap CSS -->

    <link href="account/style/bootstrap.emin.css" rel="stylesheet">
    <link rel="stylesheet" href="account/style/bootstrap-icons.css">
    <link rel="stylesheet" href="account/style/modal.css">
    <link rel="stylesheet" href="account/style/mysp.css">
    <link rel="stylesheet" href="account/style/popsin.css">
    <link rel="stylesheet" href="account/style/dapp.css">
    <link rel="stylesheet" href="account/style/translate.css">
    <link rel="stylesheet" href="account/style/mystyle.css">
    <script src="account/js/jquery-1.12.4.min.js"></script>
    <script src="account/js/jquery-ui.min.js"></script>
    <script src="account/js/bootstrap.emin.js"></script>
    <script src="account/js/mysp.js"></script>
    <!--script src="account/js/appbase.js"></script-->
    <script src="account/js/modal.js"></script>




    <title>SwiftPayu : Login</title>
</head>

<body>
    <!-- Optional JavaScript; choose one of the two! -->

    <noscript>
        <style>
            body {
                display: none;
            }
        </style>
        <meta http-equiv="refresh" content="0; url=" nojs.php" />
    </noscript>

    <div id="showit"></div>
    <div class="prls m-loading d-none">
        <div class="_loader "></div>
    </div>


    <section class="account-section position-relative pt-0 pb-0">
        <center>
            <div class="container vh-100 w-100 p-0 m-0">

                <!--div class="transalign"><div id="google_translate_element"></div></div-->


                <div class="row justify-content-center h-100 ">
                    <div class="col-xl-5 col-lg-6 col-md-7 h-100 account-form px-0 "
                        style="background-color:#ffffff75;">

                        <!-- App Header -->
                        <div class="ms-3 mt-3" align="left">


                            <h1><a class="headerButton goBack"><i class="bi bi-chevron-left"></i></a></h1>



                        </div>
                        <!-- * App Header -->

                        <!-- App Capsule -->
                        <div id="appCapsule">

                            <div class="section mt-0 text-center">
                                <h1>Log in to Continue</h1>
                                <h4>
                                    <p class="dont-acc">Don’t have an account? &nbsp;<a href="signup.html">Sign up</a>
                                    </p>
                                </h4>
                            </div>
                            <div class="section mt-4 mb-5 p-2">

                                <form action="index.html" method="POST" enctype="multipart/form-data"
                                    class="ajaxform m-0 p-0">
                                    <div class="card shadow-none bg-transparent">
                                        <div class="card-body pb-1 border-0 bg-transparent">



                                            <div class="input-group  fcover rounded mb-3">
                                                <span class="input-group-text border-0 p-0 m-0 pt-1">
                                                    <i class="bi bi-person-plus-fill text-muted"></i></span>
                                                <input type="text" class="form-control ctyp email iform2 p-3 border-0"
                                                    id="eu" placeholder="Your e-mail or account number" name="email">
                                                <span class="input-group-text  border-0 p-0 m-0 pt-1"><i
                                                        class="bi bi-x-circle text-muted  icancel" i="email"></i></span>
                                            </div>


                                            <div class="input-group  fcover rounded mb-0 mt-1">
                                                <span class="input-group-text border-0 p-0 m-0 pt-1 ">
                                                    <i class="bi bi-key-fill text-muted"></i></span>
                                                <input type="password"
                                                    class="form-control ctyp password iform2 p-3 border-0"
                                                    placeholder="Your password" id="eup" name="password">
                                                <span class="input-group-text border-0  p-0 m-0 pt-1 pe-3">
                                                    <i class="bi bi-x-circle text-muted icancel"
                                                        i="password"></i></span>
                                                <span class="input-group-text  border-0 tt p-0 m-0 pt-1">
                                                    <i id="eye" class="bi bi-eye-slash-fill showhide" i="password"></i>
                                                </span>
                                            </div>


                                        </div>
                                    </div>


                                    <div class="form-links mt-1 mx-3">
                                        <div>

                                        </div>
                                        <div><a href="forgotpassword" class="text-muted">Forgot Password?</a></div>
                                    </div>

                                    <div class="mt-5  mx-3 transparent">
                                        <button type="submit" class="btn btn-primary btn-block btn-lg"> Log in </button>
                                    </div>

                                </form>
                            </div>

                        </div>
                        <!-- * App Capsule -->


                    </div>
                </div>
            </div>
        </center>
    </section>

    <script>$(function () {
            $('.shc').on('click', function () {
                $.alert('<br/><div class=""></div><div class="pb-0 mb-2 ttc ffoot fw-bold btn btn-light"><a href="mailto:" class="tnn"><i class="bi bi-envelope-fill"></i> Via Email</a></div><div class="pt-0 pb-0 ttc ffoot fw-bold btn btn-light mb-2"><a href="https://api.whatsapp.com/send?phone=639357503403&text=Hello%21%20SwiftPayu%20" target="_blank" class="noload"><i class="bi bi-whatsapp"></i> Via WhatsApp</a></div>', "Contact Us");
            });
        });</script>
    <a class="tnn shc noload">
        <div class="fhelp" style="bottom: 70px;padding-top: 6px;color:#fff;width: 45px;
height: 45px;"><i class="bi bi-question-lg" style="color:white;font-size:22px;"></i>
            <div class="tfs" style="position: relative;
top: -16px;padding-top:2px;">Help</div>
        </div>
    </a>
    <script src="account/js/fnc.js"></script>
    <script src="account/js/new.js"></script>
    <script src="account/js/usr.js"></script>


</body>

</html>