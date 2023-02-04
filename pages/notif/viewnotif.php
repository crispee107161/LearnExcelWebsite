<?php
include('../../db/session.php');

    $id = $_GET['notifID'];
      $sql = "SELECT * FROM tblnotification WHERE notifID = '$id'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $notiffrom = $row['notifFrom'];
      $notifto = $row['notifTo'];
      $messages = $row['notifMessage'];
      $messagetoint = preg_replace('/\D/', '', $messages);

    if(!empty($notifto) || $notifto == " ")
    {
        if($notifto == "ARMSS")
        {
         header("location: ../asa_updateticket.php?id=AR".$messagetoint);
        }else if($notifto == "ADMIN BACK OFFICE")
        {
         header("location: ../asb_updateticket.php?id=AD".$messagetoint);
        }else if($notifto == "ADMIN CEBU")
        {
         header("location: ../asc_updateticket.php?id=CE".$messagetoint);
        }else if($notifto == "ADMIN DAVAO")
        {
         header("location: ../asd_updateticket.php?id=DA".$messagetoint);
        }else if($notifto == "ADMIN HSS")
        {
         header("location: ../ash_updateticket.php?id=HS".$messagetoint);
        }else if($notifto == "IT DEPARTMENT")
        {
         header("location: ../itd_updateticket.php?id=IT".$messagetoint);
        }else if($notifto == "HR DEPARTMENT")
        {
         header("location: ../hrd_updateticket.php?id=HR".$messagetoint);
        }else if($notifto == "ACCOUNTING DEPARTMENT")
        {
         header("location: ../acd_updateticket.php?id=LS".$messagetoint);
        }
    }
    else if(!empty($notiffrom)|| $notiffrom == " ")
    {
      if($employeeName == $notiffrom)
      {
        if (strpos($messages, 'AR') !== false) 
        {
          header("location: ../viewticket.php?id=AR".$messagetoint);
        }
        else if (strpos($messages, 'AD') !== false) 
        {
          header("location: ../viewticket.php?id=AD".$messagetoint);
        } else if (strpos($messages, 'CE') !== false) 
        {
          header("location: ../viewticket.php?id=CE".$messagetoint);
        } else if (strpos($messages, 'DA') !== false) 
        {
          header("location: ../viewticket.php?id=DA".$messagetoint);
        } else if (strpos($messages, 'HS') !== false) 
        {
          header("location: ../viewticket.php?id=HS".$messagetoint);
        } else if (strpos($messages, 'IT') !== false) 
        {
          header("location: ../viewticket.php?id=IT".$messagetoint);
        } else if (strpos($messages, 'HR') !== false) 
        {
          header("location: ../viewticket.php?id=HR".$messagetoint);
        } else if (strpos($messages, 'LS') !== false) 
        {
          header("location: ../viewticket.php?id=LS".$messagetoint);
        }
        else if (strpos($messages, 'AC') !== false) 
        {
          header("location: ../viewticket.php?id=AC".$messagetoint);
        }
      }
    }
    else
    {
        if (strpos($messages, 'ARMSS') !== false) 
        {
          header("location: ../viewticket.php?id=AR".$messagetoint);
        }
        else if (strpos($messages, 'Admin Back Office') !== false) 
        {
          header("location: ../viewticket.php?id=AD".$messagetoint);
        } else if (strpos($messages, 'Admin Cebu') !== false) 
        {
          header("location: ../viewticket.php?id=CE".$messagetoint);
        } else if (strpos($messages, 'Admin Davao') !== false) 
        {
          header("location: ../viewticket.php?id=DA".$messagetoint);
        } else if (strpos($messages, 'Admin HSS') !== false) 
        {
          header("location: ../viewticket.php?id=HS".$messagetoint);
        } else if (strpos($messages, 'IT Department') !== false) 
        {
          header("location: ../viewticket.php?id=IT".$messagetoint);
        } else if (strpos($messages, 'HR Department') !== false) 
        {
          header("location: ../viewticket.php?id=HR".$messagetoint);
        } else if (strpos($messages, 'Logistics Department') !== false) 
        {
          header("location: ../viewticket.php?id=LS".$messagetoint);
        }else if (strpos($messages, 'Accounting Department') !== false) 
        {
          header("location: ../viewticket.php?id=AC".$messagetoint);
        }
    }
   $sql = 'UPDATE tblnotification SET isRead = "0" WHERE notifID = "'.$id.'"';
     mysqli_query($db, $sql);
    
?>