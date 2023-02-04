<?php
   require("db/config.php");
   ob_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Log In | Learn Excel</title>

    <!-- Favicon-->
    <link rel="icon" type="image/png" href="images/favicongreen.png"/>

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

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <br><br><br><br><br><br><br>       
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST">
                    <center><img src="images/favicon.png" height="150" width="150"></center><br>
                    <?php 
                    if(isset($_POST['btnsignin'])) {
    
                      $username = isset($_POST['username']) ? $_POST['username'] : '';
                      $rawpassword = isset($_POST['password']) ? $_POST['password'] : '';

                      $rawmd5password = md5($rawpassword);
                      $sql = "SELECT * FROM tblusers WHERE username = '$username' and password = '$rawmd5password'";
                      $result = mysqli_query ($db,$sql);
                      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                      $userId = $row['userId'];
                      $username = $row['username'];
                      $password = $row['password'];
                      $fullName = $row['fullName'];
                      $gender = $row['gender'];
                      $birthday = $row['birthday'];
                      $age = $row['age'];
                      $email = $row['email'];
                      $phone = $row['phone'];
                      $telephone = $row['telephone'];
                      $address = $row['address'];
                      $unitFloor = $row['unitFloor'];
                      $houseBuilding = $row['houseBuilding'];
                      $streetNumber = $row['streetNumber'];
                      $streetName = $row['streetName'];
                      $barangayDistrict = $row['barangayDistrict'];
                      $city = $row['city'];
                      $ZIPCode = $row['ZIPCode'];
                      $imgDir = $row['imgDir'];
                      $privileges = $row['privileges'];

                      //session to pass on session.php
                      session_start();
                      $_SESSION['userId'] = $userId;
                      $_SESSION['username'] = $username;
                      $_SESSION['password'] = $password;
                      $_SESSION['fullName'] = $fullName;
                      $_SESSION['gender'] = $gender;
                      $_SESSION['birthday'] = $birthday;
                      $_SESSION['age'] = $age;
                      $_SESSION['email'] = $email;
                      $_SESSION['phone'] = $phone;
                      $_SESSION['telephone'] = $telephone;
                      $_SESSION['address'] = $address;
                      $_SESSION['unitFloor'] = $unitFloor;
                      $_SESSION['houseBuilding'] = $houseBuilding;
                      $_SESSION['streetNumber'] = $streetNumber;
                      $_SESSION['streetName'] = $streetName;
                      $_SESSION['barangayDistrict'] = $barangayDistrict;
                      $_SESSION['city'] = $city;
                      $_SESSION['ZIPCode'] = $ZIPCode;
                      $_SESSION['imgDir'] = $imgDir;
                      $_SESSION['privileges'] = $privileges;

                      if(isset($_SESSION["username"]))
                      { 
                        echo $_SESSION["username"];
                        if(isset($_POST['rememberme']))
                        {
                            setcookie('usernamecookie',$username,time()+86400);
                            setcookie('passwordcookie',$rawpassword,time()+86400);
                            header("location:pages/index.php");
                        }else
                        {
                            header("location:pages/index.php");
                        }
                      }
                      else
                      {
                      echo '<div class="alert alert-danger">Invalid Username of Password.</a></div>';
                      }
                   }
                    ?>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" value="<?php if(isset($_COOKIE['usernamecookie'])) {echo $_COOKIE['usernamecookie'];} ?>" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" value="<?php if(isset($_COOKIE['passwordcookie'])) {echo $_COOKIE['passwordcookie'];} ?>" placeholder="Password" required>
                        </div>
                    </div>
                     <div class="form-group">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-red">
                        <label for="rememberme">Remember me</label>
                    </div>

                    <button class="btn btn-block btn-lg bg-green waves-effect" name="btnsignin" type="submit">SIGN IN</button>
                   
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                           <a href="#" onClick="alert('Copyright © Learn Excel')">About</a>
                        </div>
                        <div class="col-xs-6 align-right">
                           <a href="signup.php">Sign Up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>
</body>

</html>