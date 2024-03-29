<?php

$delete_group_id = $_GET['delete_group_id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'voting');
$group_details_query = "SELECT * FROM prarthis WHERE group_id = $delete_group_id;";
$after_group_query = mysqli_query($db_connect, $group_details_query);
$after_group_assoc = mysqli_fetch_assoc($after_group_query);

unlink("../voting/groups/".$after_prarthis_assoc['group_photo']);
$group_delete_query = "DELETE FROM prarthis WHERE group_id = $delete_group_id;";
$group_delete_final = mysqli_query($db_connect, $group_delete_query);
header('location:group_view.php');

?>