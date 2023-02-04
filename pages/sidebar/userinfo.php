        <div class="user-info">
                <div class="image">
              <img src='<?php 
                     if($imgDir == '../images/profile/' || $imgDir == '')
                    {
                        echo "../images/profile/user.jpg";
                    }else
                    {
                        echo $imgDir;
                    }
                        ?>' width="48" height="48" alt="User" />
                
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $fullName; ?></div>
                    <div class="email"><?php echo $email; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="profile.php"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../db/logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>