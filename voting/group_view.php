<?php
session_start();
if (!isset($_SESSION['admin_login_name'])) {
    header('location:error.php');
}
$db_connect = mysqli_connect('localhost', 'root','','voting');
$group_details_query = "SELECT * FROM prarthis";
$after_group_query = mysqli_query($db_connect, $group_details_query);
$serial = 1;
// require_once('header.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GROUPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


   <section>
    <div class="container">
    <div class="row">
    <div class="col-xl-12 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">View All Group</h4>
                <h1> welcome <?php
                echo $_SESSION['admin_login_name'];
                ?></h1>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Marka</th>
                            <th scope="col">group Photo</th>
                            <th scope="col">Election district</th>
                            <th scope="col">total votes</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($after_group_query as $after_group_item):?>
                        <tr>
                            <th scope="row"><?= $serial++?></th>
                            <td><?= $after_group_item['name']?></td>
                            <td><?= $after_group_item['group_name']?></td>
                            <td><img src="../voting/groups/<?= $after_group_item['group_photo'] ?>" style="width: 70px;height: 70px;"></td>
                            <td><?= $after_group_item['election_district']?></td>
                            <td><?= $after_group_item['total_votes']?></td>
                            <td>                                
                                <a href="group_delete.php?delete_group_id=<?= $after_group_item['group_id']?>" class="btn btn-danger">Hard-Delete</a>                                
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    </div>
   </section>
   <br>
   <br>

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

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
  </section>
<br>
<br>
<br>

  <section>
    <div class="container">
    <div class="row">
    <div class="col-xl-12 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">View All Voters</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">mobile</th>
                            <th scope="col">Nid</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">district</th>
                            <th scope="col">address</th>
                            <th scope="col">votes</th>
                            <th scope="col">photo</th>
                            <th scope="col">Action</th>



                        </tr>

   <?php
      $db_connect = mysqli_connect('localhost', 'root','','voting');
      $id_confirm_query = "SELECT * FROM users";
      $after_id_query = mysqli_query($db_connect, $id_confirm_query);
      
      
      ?>


                    </thead>
                    <tbody>
                        <?php foreach($after_id_query as $after_id_item):?>
                        <tr>
                            <th scope="row"><?= $serial++?></th>
                            <td><?= $after_id_item['name']?></td>
                            <td><?= $after_id_item['mobile']?></td>
                            <td><?= $after_id_item['nid']?></td>
                            <td><?= $after_id_item['birthday']?></td>
                            <td><?= $after_id_item['district']?></td>
                            <td><?= $after_id_item['address']?></td>
                            <td><?= $after_id_item['votes']?></td>
                            <td><img src="../voting/uploads/<?= $after_id_item['photo'] ?>" style="width: 70px;height: 70px;"></td>
                            <td>
<a href="soft_deletevoter.php?softdelete_voter_id=<?=$after_id_item['id']?>" class="btn btn-warning">soft delete</a>
<!-- <a href="edit_voter.php" class="btn btn-success">edit</a> -->
 
                            </td>





                        
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    </div>
   </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>