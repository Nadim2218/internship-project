<?php
session_start();
if (!isset($_SESSION['admin_login_name'])) {
    header('location:error.php');
}


$db_connect = mysqli_connect('localhost', 'root', '', 'voting');
$soft_voter_query = "SELECT * FROM users WHERE delete_status='1'";
$after_soft_query = mysqli_query($db_connect, $soft_voter_query);
$serial = 1;


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOFT DELETE LIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


  <section>
    <div class="container">
    <div class="row">
    <div class="col-xl-12 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">View All soft delete</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">nid</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($after_soft_query as $after_softd_query):?>
                        <tr>
                            <th scope="row"><?= $serial++?></th>
                            <td><?= $after_softd_query['name']?></td>
                            <td><?= $after_softd_query['nid']?></td>
                            <td><?= $after_softd_query['address']?></td>
                          
                            <td>                                
                                <a href="delete_voter.php?delete_voter_id=<?= $after_softd_query['id']?>" class="btn btn-danger">Hard-Delete</a>
                                <a href="undo_soft.php?undo_softdelete=<?= $after_softd_query['id']?>" class="btn btn-danger">UNDO</a>

                                
                                
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