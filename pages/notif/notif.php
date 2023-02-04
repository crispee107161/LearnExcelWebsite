
<!-- Notifications -->
                    <li class="dropdown">
                        
                                  <?php
                                    if($isASA == "Yes")
                                    {
                                     $query = "SELECT * from `tblnotification` where isRead = '1' AND notifTo = 'ARMSS' OR notifFrom = '$employeeName' AND isRead = '1'  order by notifID DESC LIMIT 12";
                                    }else if($isASB == "Yes")
                                    {
                                     $query = "SELECT * from `tblnotification` where isRead = '1' AND notifTo = 'Admin Back Office' OR notifFrom = '$employeeName'  AND isRead = '1' order by notifID DESC LIMIT 12";
                                    }else if($isASC == "Yes")
                                    {
                                      $query = "SELECT * from `tblnotification` where isRead = '1' AND notifTo = 'Admin Cebu' OR notifFrom = '$employeeName'  AND isRead = '1' order by notifID DESC LIMIT 12";
                                    }else if($isASD == "Yes")
                                    {
                                      $query = "SELECT * from `tblnotification` where isRead = '1' AND notifTo = 'Admin Davao' OR notifFrom = '$employeeName'  AND isRead = '1' order by notifID DESC LIMIT 12";
                                    }else if($isASH == "Yes")
                                    {
                                      $query = "SELECT * from `tblnotification` where isRead = '1' AND notifTo = 'Admin HSS' OR notifFrom = '$employeeName'  AND isRead = '1' order by notifID DESC LIMIT 12";
                                    }else if($isHRD == "Yes")
                                    {
                                      $query = "SELECT * from `tblnotification` where isRead = '1' AND notifTo = 'HR Department' OR notifFrom = '$employeeName'  AND isRead = '1' order by notifID DESC LIMIT 12";
                                    }else if($isITD == "Yes")
                                    {
                                      $query = "SELECT * from `tblnotification` where isRead = '1' AND notifTo = 'IT Department' OR notifFrom = '$employeeName'  AND isRead = '1' order by notifID DESC LIMIT 12";
                                    }else if($isLSD == "Yes")
                                    {
                                      $query = "SELECT * from `tblnotification` where isRead = '1' AND notifTo = 'Logistics Department' OR notifFrom = '$employeeName' AND isRead = '1' order by notifID DESC LIMIT 12";
                                    }else if($isACD == "Yes")
                                    {
                                      $query = "SELECT * from `tblnotification` where isRead = '1' AND notifTo = 'Accounting Department' OR notifFrom = '$employeeName' AND isRead = '1' order by notifID DESC LIMIT 12";
                                    }else if($isASA == "No" && $isASB == "No" && $isASC == "No" && $isASD == "No" && $isASH == "No" && $isHRD == "No" && $isITD == "No" && $isLSD == "No" && $isACD == "No")
                                    {
                                      $query = "SELECT * from `tblnotification` where isRead = '1' AND notifFrom = '$employeeName' order by notifID DESC LIMIT 12";
                                    }

                                    if(count(fetchAll($query))>0)
                                    {
                                        echo '
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                              <i class="material-icons">notifications</i>
                                              <span class="label-count">'.count(fetchAll($query)).'</span>
                                            </a>';
                                    }else
                                    {
                                      echo '
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                              <i class="material-icons">notifications</i>
                                            </a>';
                                    }

                                ?>
                            
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <?php
                                       if($isASA == "Yes")
                                      {
                                        $query = "SELECT * from `tblnotification` where  notifTo = 'ARMSS' OR notifFrom = '$employeeName' order by notifID DESC LIMIT 12";
                                      }else if($isASB == "Yes")
                                      {
                                        $query = "SELECT * from `tblnotification` where  notifTo = 'Admin Back Office' OR notifFrom = '$employeeName' order by notifID DESC LIMIT 12";
                                      }else if($isASC == "Yes")
                                      {
                                        $query = "SELECT * from `tblnotification` where notifTo = 'Admin Cebu' OR notifFrom = '$employeeName' order by notifID DESC LIMIT 12";
                                      }else if($isASD == "Yes")
                                      {
                                        $query = "SELECT * from `tblnotification` where notifTo = 'Admin Davao' OR notifFrom = '$employeeName' order by notifID DESC LIMIT 12";
                                      }else if($isASH == "Yes")
                                      {
                                        $query = "SELECT * from `tblnotification` where notifTo = 'Admin HSS' OR notifFrom = '$employeeName' order by notifID DESC LIMIT 12";
                                      }else if($isHRD == "Yes")
                                      {
                                        $query = "SELECT * from `tblnotification` where notifTo = 'HR Department' OR notifFrom = '$employeeName' order by notifID DESC LIMIT 12";
                                      }else if($isITD == "Yes")
                                      {
                                        $query = "SELECT * from `tblnotification` where notifTo = 'IT Department' OR notifFrom = '$employeeName' order by notifID DESC LIMIT 12";
                                      }else if($isLSD == "Yes")
                                      {
                                        $query = "SELECT * from `tblnotification` where notifTo = 'Logistics Department' OR notifFrom = '$employeeName' order by notifID DESC LIMIT 12";
                                      }else if($isACD == "Yes")
                                      {
                                        $query = "SELECT * from `tblnotification` where notifTo = 'Accounting Department' OR notifFrom = '$employeeName' order by notifID DESC LIMIT 12";
                                      }else if($isASA == "No" && $isASB == "No" && $isASC == "No" && $isASD == "No" && $isASH == "No" && $isHRD == "No" && $isITD == "No" && $isLSD == "No" && $isACD =="No")
                                      {
                                         $query = "SELECT * from `tblnotification` where notifFrom = '$employeeName' order by notifID DESC LIMIT 12";
                                      }

                                      if(count(fetchAll($query))>0)
                                      {
                                           foreach(fetchAll($query) as $i)
                                           {
                                             $dnt = date("m-d-y h:i A", strtotime($i['notifDateTime']));
                                              if($i['isRead'] == '1')
                                              {
                                              echo '
                                              <li>
                                                  <a href="notif/viewnotif.php?notifID='; echo $i['notifID'] .'">
                                                      <div class="menu-info">
                                                           <h4>'.$i['notifMessage'].'</h4>
                                                          <p>
                                                              <i class="material-icons">access_time</i>'.$dnt.'
                                                          </p>
                                                      </div>
                                                  </a>
                                              </li>';
                                              }else if($i['isRead'] == '0')
                                              {
                                                echo '
                                              <li>
                                                  <a href="notif/viewnotif.php?notifID='; echo $i['notifID'] .'">
                                                      <div class="menu-info">
                                                           <p>'.$i['notifMessage'].'</p>
                                                          <p>
                                                              <i class="material-icons">access_time</i>'.$dnt.'
                                                          </p>
                                                      </div>
                                                  </a>
                                              </li>';
                                              }
                                           }
                                           
                                       }

                                               
                                ?>
    
                           
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="viewallnotif.php">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
<!-- #END# Notifications -->