<?php

session_start();
if (!isset($_SESSION['login_id'])) {
    header('location:error.php');
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DASHBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="background-color: #333FFF;">
    <section>
       <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="h-text text-center">
              <h1>Welcome to voters Dashboard</h1>
            </div>
          </div>
          <div class="col-lg-4">
            <a href="">
            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
										<?php if (isset($_SESSION['login_id'])) {?>								
											<span><a class="ml-2" href="voter_logout.php">LogOut(as Voter)</a></span>
										<?php } ?>
            </a>
          </div>
        </div>
       </div>
    </section>

    <section>
      <div class="container">

      <?php
      $id = $_SESSION['login_id'];
      $db_connect = mysqli_connect('localhost', 'root','','voting');
      $id_confirm_query = "SELECT * FROM users WHERE id='$id'";
      $after_id_query = mysqli_query($db_connect, $id_confirm_query);
      $after_id_assoc = mysqli_fetch_assoc($after_id_query);
      
      ?>
      <div class="row">
    <div class="col-lg-6">
        <div class="card ">
            <div class="card-body" >
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                          <th><img src="../voting/uploads/<?= $after_id_assoc['photo'] ?>" style="width: 90px;height: 100px;"></td>
</th>
                            <tr>
                                <th>Name</th>
                                <th><?= $after_id_assoc['name']?></th>                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>National Identification Number</td>
                                <td><?= $after_id_assoc['nid']?></td>
                            </tr>                            
                            <tr>
                                <td>Mobile Number</td>
                                <td><?= $after_id_assoc['mobile']?></td>
                            </tr>                            
                            <tr>
                                <td>Date Of Birth</td>
                                <td><?= $after_id_assoc['birthday']?></td>
                            </tr>                            
                            <tr>
                                <td>Address</td>
                                <td><?= $after_id_assoc['address']?></td>
                            </tr>                            
                            <tr>
                                <td>district</td>
                                <td><?= $after_id_assoc['district']?></td>
                            </tr>                            
                            <tr>
                                <td>sub_district</td>
                                <td><?= $after_id_assoc['sub_district']?></td>
                            </tr>                            
                            <tr>
                                <td>Gender</td>
                                <td><?= $after_id_assoc['gender']?></td>
                            </tr>                            
                            <tr>
                                <td>Role</td>
                                <td><?= $after_id_assoc['role']?></td>
                            </tr>                             
                            <tr>
                                <td>votes</td>
                                <td><?= $after_id_assoc['votes']?></td>
                            </tr>                         
                        </tbody>
                    </table>
                </div>
            </div>					
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <h3>Please vote your desired candidate</h3>
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th>Group Name</th>
                                <th>Marka</th>
                                <th>group photo</th>
                                <th>election_district</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $group_details_query = "SELECT * FROM prarthis";
                            $after_group_query = mysqli_query($db_connect, $group_details_query);
                            $after_group_assoc = mysqli_fetch_assoc($after_group_query);
                            ?>
                            <?php foreach($after_group_query as $after_group_item):?>
                            <tr>
                                <td><?= $after_group_item['name']?></td>
                                <td><?= $after_group_item['group_name']?></td>
                                <td><img src="../voting/groups/<?= $after_group_item['group_photo'] ?>" style="width: 70px;height: 70px;"></td>
                                <td><?= $after_group_item['election_district']?></td>
                                <td>
                                    <?php if ($after_id_assoc['votes'] == 'no') {?> 
                                    <a href="vote.php?vote_group_id=<?= $after_group_item['group_id']?>" class="btn btn-info">Give Vote</a>                                
                                    <?php } ?>                               
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
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

