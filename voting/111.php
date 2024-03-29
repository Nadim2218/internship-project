<?php
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GROUP LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
 <section>
    <div class="container">
    <div class="row">
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">group Register</h4>
            </div>
            <div class="card-body">       
                <?php if (isset($_SESSION['group_register_success'])) { ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['group_register_success'] ?>
                    </div>
                <?php } unset($_SESSION['group_register_success']); ?>

                <div class="basic-form custom_file_input">
                    <form action="group_post.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control input-default " placeholder="Name" name="name"
                            value="<?php if (isset($_SESSION['old_name'])) { 
										echo $_SESSION['old_name']; 
									 } unset($_SESSION['old_name']); ?>">

									<?php if (isset($_SESSION['name_error'])) { ?>
										<div class="alert alert-danger">
											<?= $_SESSION['name_error'] ?>
										</div>
									<?php } unset($_SESSION['name_error']); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-default " placeholder="Marka" name="group_name"
                            value="<?php if (isset($_SESSION['old_group_name'])) { 
										echo $_SESSION['old_group_name']; 
									 } unset($_SESSION['old_group_name']); ?>">

									<?php if (isset($_SESSION['group_name_error'])) { ?>
										<div class="alert alert-danger">
											<?= $_SESSION['group_name_error'] ?>
										</div>
									<?php } unset($_SESSION['group_name_error']); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-default " placeholder="Election district" name="election_district" value="<?php if (isset($_SESSION['old_election_district'])) { 
										echo $_SESSION['old_election_district']; 
									 } unset($_SESSION['old_election_district']); ?>">

									<?php if (isset($_SESSION['election_district_error'])) { ?>
										<div class="alert alert-danger">
											<?= $_SESSION['election_district_error'] ?>
										</div>
									<?php } unset($_SESSION['election_district_error']); ?>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload group Photo</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="group_photo">
                                
                            </div>
                        </div>
                        <?php if (isset($_SESSION['group_photo_error'])) { ?>
                            <div class="alert alert-danger">
                                <?= $_SESSION['group_photo_error'] ?>
                            </div>
                        <?php } unset($_SESSION['group_photo_error']); ?>
                        <button type="submit" class="btn btn-primary">Add Group</button>

                        <p class="text-black">Go to voter login <a class="text-black" href="login.php">voter login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
 </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<?php
session_unset();
?>