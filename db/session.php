<?php
   require('config.php');

   date_default_timezone_set('Asia/Manila');
   $dateandtimenow = date('Y-m-d H:i:s');
   session_start();
  // add string from index session
  $userId = $_SESSION['userId'];
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];                    
  $fullName = $_SESSION['fullName'];
  $gender = $_SESSION['gender'];
  $birthday = $_SESSION['birthday'];
  $age = $_SESSION['age'];
  $email = $_SESSION['email'];
  $phone = $_SESSION['phone'];
  $telephone = $_SESSION['telephone'];
  $address = $_SESSION['address'];
  $unitFloor = $_SESSION['unitFloor'];
  $houseBuilding = $_SESSION['houseBuilding'];
  $streetNumber = $_SESSION['streetNumber'];
  $streetName = $_SESSION['streetName'];
  $barangayDistrict = $_SESSION['barangayDistrict'];
  $city = $_SESSION['city'];
  $ZIPCode = $_SESSION['ZIPCode'];
  $imgDir = $_SESSION['imgDir'];
  $privileges = $_SESSION['privileges'];
  
 

    $sql = "SELECT * FROM `tblusers` WHERE userId = '$userId' ";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      if(!isset($_SESSION['userId']))
      {
      header("location: ../db/logout.php");
      }
?>