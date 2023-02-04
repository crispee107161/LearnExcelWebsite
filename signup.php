<?php
   require("db/config.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up | Rapid Respo</title>

    <!-- Favicon-->
    <link rel="icon" type="image/png" href="images/faviconrapidrespo.png"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <br><br><br>     
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST">
                    <center><img src="images/RAPID.png" height="100" width="250"></center><br>
                    <?php
                    if(isset($_POST['btnsignup'])) 
                    {
                        $username = isset($_POST['username']) ? $_POST['username'] : '';
                        $password = isset($_POST['password']) ? $_POST['password'] : '';
                        $password = isset($_POST['fullname']) ? $_POST['fullname'] : '';
                        $email = isset($_POST['email']) ? $_POST['email'] : '';
                    }
                    ?>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="fullname" class="form-control" name="fullname" placeholder="Full Name" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-red">
                        <label for="terms">I read and agree to the <a data-toggle="modal" data-target="#termsofusage">terms of usage</a>.</label>
                    </div>

                    <button class="btn btn-block btn-lg bg-red waves-effect" name="btnsignup" type="submit">SIGN UP</button>

                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                           <a href="#" onClick="alert('Copyright © Rapid Respo')">About</a>
                        </div>
                        <div class="col-xs-6 align-right">
                           <a href="index.php">Sign In</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <!-- Large Size -->
            <div class="modal fade" id="termsofusage" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Terms of Usage</h4>
                        </div>
                        <div class="modal-body">
                            These terms and conditions (“Agreement”) set forth the general terms and conditions of your use of the responsesync.net website (“Website”) and “ResponseSYNC” mobile application (“Mobile Application”). This Agreement is legally binding between you (“User,” “you,” or “your”). If you disagree with the terms of this Agreement, you must not accept this Agreement and may not access and use the Services. By accessing and using the Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. You accept that this Agreement is a contract between you and the Creator/Administrator, even though it is electronic and is not physically signed by you. It governs your use of the Services.
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/sign-up.js"></script>
</body>

</html>