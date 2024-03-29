<?php

$softdelete_voter_id = $_GET['softdelete_voter_id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'voting');
$soft_delete = "UPDATE users SET delete_status='1' WHERE id = $softdelete_voter_id";
$soft_delete_confirm = mysqli_query($db_connect, $soft_delete);

header('location:soft_delete_list.php');


?>