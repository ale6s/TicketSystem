<?php 
    require("../controller/db.php");
	include('../model/session.php'); 
    $curent_user = $_SESSION['id'];

    $sql = "SELECT * FROM users WHERE id='$curent_user' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<div class="col-md-3 mt-2">
                <div class="profile-sidebar">

                    <div class="profile-userpic text-center">
                        <img src="https://www.pngkit.com/png/full/78-782168_photo-vault-boy-transparent-background.png" class="img-responsive" alt="">
                    </div>

                    <div class="profile-usermenu text-center">
                        <ul class="nav">
                            <li class=" col-sm-12 mt-1">
                            <b><?php echo $row['fname']." ". $row['lname']; ?></b>
                            </li>
                            <li class=" col-sm-12 mt-1">
                            <p><?php echo $row['department']; ?></p>
                            </li>
                            <li class=" col-sm-12 mt-1">
                            <p><?php echo $row['email']; ?></p>
                            </li>
                            <div class=" col-sm-12 mt-1">
                            <?php echo "<a onClick=\"javascript: return confirm('Are you sure you want to log out?');\"  href='../model/logout.php' class='btn btn-danger mt-2 btn-sm'>Sign Out</a>" ?>

                            </div>
                            <?php
                            //only will bed showed if he level is user. it wont be displayed for admin
                                if($row['level'] == 'user'){
                            ?>
                            <li class="col-sm-12 mt-1">
                                <a href="mailto:someone@example.com">Help</a>
                            </li>
                            <?php 
                                }
                            ?>
                        </ul>
                    </div>


                </div>
            </div>