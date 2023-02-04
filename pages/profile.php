<?php
  include('../db/session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>PROFILE | Rapid Respo</title>

    <!-- Favicon-->
    <link rel="icon" type="image/png" href="../images/favicongreenbox.png"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Colorpicker Css -->
    <link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="../plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="../plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="../plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

     <!-- Bootstrap Select Css -->
    <link href="../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="../plugins/nouislider/nouislider.min.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />

     <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="../../plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand">PROFILE</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
              <!-- User Info -->
                 <?php 
                     include("sidebar/userinfo.php");
                 ?> 
            <!-- #User Info -->
            <!-- Menu -->
                <?php 
                     include("sidebar/sidebar.php");
                 ?> 
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                 <a href="javascript:void(0);">Rapid Respo</a> &copy; 2022
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-3">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                 <img src='<?php 
                                    if($imgDir == '../images/profile/' || $imgDir == '')
                                    {
                                        echo "../images/profile/user.jpg";
                                    }else
                                    {
                                        echo $imgDir;
                                    }
                                    ?>' style="width:200px;height:200px;" />
                            </div>
                            <div class="content-area">
                                <h3></h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="profile-footer">
                            <ul>
                                 <li>
                                    <span>Full Name</span>
                                    <span><?php echo $fullName; ?></span>
                                </li>
                                <li>
                                    <span>Gender</span>
                                    <span><?php echo $gender; ?></span>
                                </li>
                                <li>
                                    <span>Age</span>
                                    <span><?php echo $age; ?></span>
                                </li>
                                <li>
                                    <span>Email Address</span>
                                    <span><?php echo $email; ?></span>
                                </li>
                                <li>
                                    <span>Phone</span>
                                    <span><?php echo $phone; ?></span>
                                </li>
                                <li>
                                    <span>Telephone</span>
                                    <span><?php echo $telephone; ?></span>
                                </li>
                                <li>
                                    <span>Address</span>
                                    <span><?php echo $address; ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                            <div>
                               <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Profile Info</a></li>
                                    <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">

                                        <?php
                                        if(isset($_POST['btnPersonalInfo']))
                                        {
                                           $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
                                           $birthday = isset($_POST['birthday']) ? $_POST['birthday'] : '';
                                           $age = isset($_POST['age']) ? $_POST['age'] : '';
                                           $email = isset($_POST['email']) ? $_POST['email'] : '';
                                           $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
                                           $houseBuilding = isset($_POST['houseBuilding']) ? $_POST['houseBuilding'] : '';
                                           $unitFloor = isset($_POST['unitFloor']) ? $_POST['unitFloor'] : '';
                                           $streetNumber = isset($_POST['streetNumber']) ? $_POST['streetNumber'] : '';
                                           $streetName = isset($_POST['streetName']) ? $_POST['streetName'] : '';
                                           $barangayDistrict = isset($_POST['barangayDistrict']) ? $_POST['barangayDistrict'] : '';
                                           $city = isset($_POST['city']) ? $_POST['city'] : '';
                                           $ZIPCode = isset($_POST['ZIPCode']) ? $_POST['ZIPCode'] : '';
                                           $terms = isset($_POST['terms']) ? $_POST['terms'] : '';

                                           $address = $unitFloor.', '.$houseBuilding.', '.$streetNumber.', '.$streetName.', '.$barangayDistrict.', '.$city.', '.$ZIPCode;
                                           //declaration of Upload file
                                               $target_dir = "../images/profile/";
                                               $file_name = $_FILES['fileToUpload']['name'];
                                               $file_size =$_FILES['fileToUpload']['size'];
                                               $file_tmp =$_FILES['fileToUpload']['tmp_name'];
                                               $target_file = $target_dir . basename($file_name);
                                               $uploadOk = 1;
                                               $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                                               // Check terms if checked
                                              if (empty($terms)) {
                                                  echo '<div class="alert alert-danger">Terms and Agreement is Required.</div>';
                                              } 
                                              // Check if file already exists
                                              else if (file_exists($target_file) && $target_file != $target_dir) {
                                                  echo '<div class="alert alert-danger"><strong>Snap!</strong> File is already Exist please try to Rename your Profile Picture before Uploading.</div>';
                                                  $uploadOk = 0;
                                              }
                                              // Check file size
                                              else if ($_FILES["fileToUpload"]["size"] > 5000000) {
                                                  echo '<div class="alert alert-danger"><strong>Snap!</strong> File is to Large, 5mb File Limit.</div>';
                                                  $uploadOk = 0;
                                              }
                                              // Allow certain file formats
                                              else if($target_file != $target_dir && $imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
                                                  echo '<div class="alert alert-danger"><strong>Snap!</strong> File Type is not Allowed.</div>';
                                                  $uploadOk = 0;
                                              }
                                              // Check if $uploadOk is set to 0 by an error
                                              else if ($uploadOk == 0) {
                                                 echo '<div class="alert alert-danger"><strong>Snap!</strong> Something went Wrong. Please contact Resposense Sync for this.</div>';
                                              // if everything is ok, try to upload file
                                              }
                                              else if($target_file != $target_dir)
                                              {
                                                  try
                                                  {
                                                    move_uploaded_file($file_tmp, $target_file);
                                                  }
                                                  catch(Exception $e)
                                                  {
                                                    echo '<div class="alert alert-danger"><strong>Snap!</strong> Uploading File.</div>';
                                                  }
                                                      $sql = 'UPDATE tblusers SET gender = "'.$gender.'", birthday = "'.$birthday.'", age = "'.$age.'", email = "'.$email.'", phone = "'.$phone.'", telephone = "'.$telephone.'", address = "'.$address.'", houseBuilding = "'.$houseBuilding.'", unitFloor = "'.$unitFloor.'", streetNumber = "'.$streetNumber.'", streetName = "'.$streetName.'", barangayDistrict = "'.$barangayDistrict.'", city = "'.$city.'", ZIPCode = "'.$ZIPCode.'", imgDir = "'.$target_file.'" WHERE userId = "'.$userId.'"';
                                                        if(mysqli_query($db, $sql))
                                                        {
                                                          echo '<div class="alert alert-success"><strong>Success!</strong> You successfully updated your Profile. If you want to view your updated profile your need to <a href="../db/logout.php">Logout </a></div>';  
                                                        } 
                                                        else
                                                        {
                                                          echo '<div class="alert alert-danger"><strong>Snap!</strong> Something went Wrong.</div>' .' '. $sql;
                                                        } 
                                              }
                                              else
                                              {
                                                 try
                                                  {
                                                    move_uploaded_file($file_tmp, $target_file);
                                                  }
                                                  catch(Exception $e)
                                                  {
                                                    echo '<div class="alert alert-danger"><strong>Snap!</strong> Uploading File.</div>';
                                                  }
                                                      $sql = 'UPDATE tblusers SET gender = "'.$gender.'", birthday = "'.$birthday.'", age = "'.$age.'", email = "'.$email.'", phone = "'.$phone.'", telephone = "'.$telephone.'", address = "'.$address.'", houseBuilding = "'.$houseBuilding.'", unitFloor = "'.$unitFloor.'", streetNumber = "'.$streetNumber.'", streetName = "'.$streetName.'", barangayDistrict = "'.$barangayDistrict.'", city = "'.$city.'", ZIPCode = "'.$ZIPCode.'" WHERE userId = "'.$userId.'"';
                                                        if(mysqli_query($db, $sql))
                                                        {
                                                          echo '<div class="alert alert-success"><strong>Success!</strong> You successfully updated your Profile. If you want to view your updated profile your need to <a href="../db/logout.php">Logout </a></div>';  
                                                        } 
                                                        else
                                                        {
                                                          echo '<div class="alert alert-danger"><strong>Snap!</strong> Something went Wrong.</div>' .' '. $sql;
                                                        } 
                                              }

                                        }
                                        ?>
                                        <form  action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="fulName" class="col-sm-2 control-label">Full Name</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="fulName" name="fulName" value="<?php echo $fullName; ?>" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label for="gender" class="col-sm-2 control-label">Gender</label>
                                                 <div class="col-sm-10">
                                                    <select class="form-control show-tick" name="gender">
                                                        <?php
                                                        if($gender == "Male")
                                                        {
                                                            echo '
                                                             <option value="Male" selected>Male</option>
                                                             <option value="Female">Female</option>';
                                                        }else  if($gender == "Female")
                                                        {
                                                            echo '
                                                             <option value="Male">Male</option>
                                                             <option value="Female" selected>Female</option>';
                                                        }else
                                                        {
                                                            echo '
                                                            <option selected> --Please select Gender-- </option>
                                                             <option value="Male">Male</option>
                                                             <option value="Female">Female</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                 </div>
                                            </div>
                                             <div class="form-group">
                                                <label for="birthday" class="col-sm-2 control-label">Birthday</label>
                                                 <div class="col-sm-10">
                                                    <div class="form-line" id="bs_datepicker_container">
                                                        <input type="text" class="form-control" name="birthday" value="<?php echo $birthday; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="age" class="col-sm-2 control-label">Age</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="number" class="form-control" id="age" name="age" value="<?php echo $age; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone" class="col-sm-2 control-label">Phone</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="telephone" class="col-sm-2 control-label">Telephone</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="number" class="form-control" id="telephone" name="telephone" value="<?php echo $telephone; ?>" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="address" class="col-sm-2 control-label">Address:</label>
                                                <div class="col-sm-2">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="unitFloor" name="unitFloor" placeholder="Unit/Floor" value="<?php echo $unitFloor; ?>" >
                                                    </div>
                                                </div>
                                                 <div class="col-sm-2">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="houseBuilding" name="houseBuilding"  placeholder="House/Building" value="<?php echo $houseBuilding; ?>" >
                                                    </div>
                                                </div>
                                                 <div class="col-sm-2">
                                                    <div class="form-line">
                                                        <input type="streetNumber" class="form-control" id="streetNumber" name="streetNumber"  placeholder="Street Number" value="<?php echo $streetNumber; ?>" >
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-line">
                                                        <input type="streetName" class="form-control" id="streetName" name="streetName"  placeholder="Street Name" value="<?php echo $streetName; ?>" >
                                                    </div>
                                                </div>
                        
                                            </div>
                                             <div class="form-group">
                                                  <label for="address" class="col-sm-2 control-label"></label>
                                                <div class="col-sm-3">
                                                    <div class="form-line">
                                                        <input type="barangayDistrict" class="form-control" id="barangayDistrict" name="barangayDistrict"  placeholder="Barangay/District" value="<?php echo $barangayDistrict; ?>" >
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-line">
                                                        <input type="city" class="form-control" id="city" name="city"  placeholder="City" value="<?php echo $city; ?>" >
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-line">
                                                        <input type="ZIPCode" class="form-control" id="ZIPCode" name="ZIPCode"  placeholder="ZIP Code" value="<?php echo $ZIPCode; ?>" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="InputSkills" class="col-sm-2 control-label">Upload Picture</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                         <input type="file" accept="image/x-png,image/jpeg" name="fileToUpload" id="fileToUpload">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-blue">
                                                    <label for="terms">I read and agree to the <a data-toggle="modal" data-target="#termsofusage">terms of usage</a>.</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn bg-blue waves-effect" name="btnPersonalInfo">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                        <?php
                                         if(isset($_POST['btnChangePassword']))
                                         {
                                            $oldpassword = isset($_POST['oldpassword']) ? $_POST['oldpassword'] : '';
                                            $newpassword = isset($_POST['newpassword']) ? $_POST['newpassword'] : '';
                                            $newpasswordconfirm = isset($_POST['newpasswordconfirm']) ? $_POST['newpasswordconfirm'] : '';
                                            $oldmd5password = md5($oldpassword);

                                            if($newpassword != $newpasswordconfirm)
                                            {
                                                echo '<div class="alert alert-danger">Your Password is not the same to Confirm Password.</div>';
                                            }
                                            else if($oldmd5password != $password)
                                            {
                                                echo '<div class="alert alert-danger">Your Old Password is Incorrect.</div>';
                                            }
                                            else
                                            {
                                                if (strlen($newpassword) < 8 || strlen($newpassword) > 16) {
                                                echo '<div class="alert alert-danger">
                                                   <strong>Snap!</strong> Password should be min 8 characters and max 16 characters.
                                                   </div>';
                                                  }
                                                  else if (!preg_match("/\d/", $newpassword)) {
                                                      echo '<div class="alert alert-danger">
                                                       <strong>Snap!</strong> Password should contain at least one digit
                                                       </div>';
                                                  }
                                                  else if (!preg_match("/[A-Z]/", $newpassword)) {
                                                      echo '<div class="alert alert-danger">
                                                       <strong>Snap!</strong> Password should contain at least one Capital Letter.
                                                       </div>';
                                                  }
                                                  else if (!preg_match("/[a-z]/", $newpassword)) {
                                                      echo '<div class="alert alert-danger">
                                                       <strong>Snap!</strong> Password should contain at least one small Letter.
                                                       </div>';
                                                  }
                                                  else if (!preg_match("/\W/", $newpassword)) {
                                                      echo '<div class="alert alert-danger">
                                                       <strong>Snap!</strong> Password should contain at least one special character.
                                                       </div>';
                                                  }
                                                  else if (preg_match("/\s/", $newpassword)) {
                                                      echo '<div class="alert alert-danger">
                                                       <strong>Snap!</strong> Password should not contain any white space.
                                                       </div>';
                                                  }
                                                  else
                                                  {
                                                    $newmd5password = md5($newpassword);
                                                    $sql = 'UPDATE tblusers SET password = "'.$newmd5password.'" WHERE userId = "'.$userId.'"';
                                                    if(mysqli_query($db, $sql))
                                                    {
                                                    echo '<div class="alert alert-success">
                                                        <strong>Success!</strong> You successfully changed your Password.
                                                    </div>';  
                                                    } 
                                                     else 
                                                    {
                                                    echo '<div class="alert alert-danger">Something went Wrong.</div>';
                                                    } 
                                                }
                                            }

                                         } 
                                        ?>
                                     <form  action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
                                             <label class="control-label">Password requires Special Characters,Number,Uppercase,Lowercase,Min of 8 digits, Max of 16 digits.</label><br><br>
                                            <div class="form-group">
                                                <label for="oldpassword" class="col-sm-3 control-label">Old Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="Old Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="newpassword" class="col-sm-3 control-label">New Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="New Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="newpasswordconfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="newpasswordconfirm" name="newpasswordconfirm" placeholder="New Password (Confirm)" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                      <button type="submit" class="btn bg-blue waves-effect" name="btnChangePassword">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Go back -->
            <?php echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>"; ?><br><br>
            <!-- Go back -->
        </div>
    </section>
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

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="../../plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="../../plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="../../plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>
