<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Voting</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="assets/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
					
					<div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4 text-white">NID INFORMATION</h4>
                                    <form action="nid_register_post.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Full name</strong></label>
                                            <input type="text" class="form-control" placeholder="Full Name" name="nid_name" value="<?php
                                            if(isset($_SESSION['nid_old_name'])){
                                                echo $_SESSION['nid_old_name'];
                                            }?>">
                                        <?php if(isset($_SESSION['nid_name_err'])) {?>
              <div class="alert alert-danger">
                <?php
                echo  $_SESSION['nid_name_err'];
                
                ?>
              </div>
              <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Mobile Number</strong></label>
                                            <input type="number" class="form-control" placeholder="Mobile Number" name="mobile" value="<?php
                                            if(isset($_SESSION['old_mob'])){
                                                echo $_SESSION['old_mob'];
                                            }?>">
              <?php if(isset($_SESSION['mob_err'])) {?>
              <div class="alert alert-danger">
                <?php
                echo  $_SESSION['mob_err'];
                
                ?>
              </div>
              <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>National Identification number</strong></label>
                                            <input type="number" class="form-control" placeholder="Enter your nid number" name="nid" value="<?php
                                            if(isset($_SESSION['old_nid'])){
                                                echo $_SESSION['old_nid'];
                                            }?>">
             <?php if(isset($_SESSION['nid_err'])) {?>
              <div class="alert alert-danger">
                <?php
                echo  $_SESSION['nid_err'];
                
                ?>
              </div>
              <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-3 text-white"><strong>Date of Birth</strong></label>
                                            <input type="date" id="birth date" name="birthday" value="<?php
                                            if(isset($_SESSION['old_bday'])){
                                                echo $_SESSION['old_bday'];
                                            }?>">
             <?php if(isset($_SESSION['birth_err'])) {?>
              <div class="alert alert-danger">
                <?php
                echo  $_SESSION['birth_err'];
                
                ?>
              </div>
              <?php }?>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>District</strong></label>
                                            <input type="text" class="form-control" placeholder="District" name="district"  value="<?php
                                            if(isset($_SESSION['old_dis'])){
                                                echo $_SESSION['old_dis'];
                                            }?>">
                                             <?php if(isset($_SESSION['dis_err'])) {?>
              <div class="alert alert-danger">
                <?php
                echo  $_SESSION['dis_err'];
                
                ?>
              </div>
              <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Sub-district</strong></label>
                                            <input type="text" class="form-control" placeholder="Sub-district" name="subdistrict" value="<?php
                                            if(isset($_SESSION['old_subdis'])){
                                                echo $_SESSION['old_subdis'];
                                            }?>">
                                        </div>
              <?php if(isset($_SESSION['dis_err'])) {?>
              <div class="alert alert-danger">
                <?php
                echo  $_SESSION['dis_err'];
                
                ?>
              </div>
              <?php }?>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Address</strong></label>
                                            <input type="text" class="form-control" placeholder="Enter your Full Address" name="address" value="<?php
                                            if(isset($_SESSION['old_subdis'])){
                                                echo $_SESSION['old_subdis'];
                                            }?>">
              <?php if(isset($_SESSION['dis_err'])) {?>
              <div class="alert alert-danger">
                <?php
                echo  $_SESSION['dis_err'];
                
                ?>
              </div>
              <?php }?>
                                        </div>
                                        <div class="custom-control custom-checkbox ml-1 text-white">
													Gender: <select name="gender">
                                                        <option value="Male">Male</option>
                                                        <option value="Female" >Female</option>
                                                        <option value="Others">Others</option>

                                                    </select>
												</div>
                                                <div class="custom-control custom-checkbox ml-1 text-white">
													Role: <select name="role" >
                                                        <option value="voter" >Voter</option>
                                                    </select>
												</div>
                                             
                                            
                                                <div class="custom-control custom-checkbox ml-1 text-white">
												</div>
                                                <div class="text-center mt-4">
                                                <label class="mb-1 text-white"><strong>Upload your Picture</strong></label>
                                                <input type="file" name="photo">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn bg-white text-primary btn-block" >nid info submit</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Already have an account? <a class="text-white" href="login.php">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="./vendor/global/global.min.js"></script>
<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="assets/js/custom.min.js"></script>
<script src="assets/js/deznav-init.js"></script>

</body>
</html>



<?php
session_unset();

?>