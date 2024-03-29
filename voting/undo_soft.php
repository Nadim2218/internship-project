<?php

$undo_softdelete = $_GET['undo_softdelete'];
$db_connect = mysqli_connect('localhost', 'root', '', 'voting');
$soft_undo = "UPDATE users SET delete_status='0' WHERE id = $undo_softdelete";
$soft_undo_confirm = mysqli_query($db_connect, $soft_undo);

header('location:soft_delete_list.php');

