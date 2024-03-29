<?php
session_start();
$vote_group_id = $_GET['vote_group_id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'voting');
$group_details_query = "SELECT * FROM prarthis WHERE group_id = $vote_group_id;";
$after_group_query = mysqli_query($db_connect, $group_details_query);
$after_group_assoc = mysqli_fetch_assoc($after_group_query);
$value = $after_group_assoc['total_votes'];
$value++;

$group_update_query = "UPDATE prarthis SET total_votes='$value' WHERE group_id='$vote_group_id';";
mysqli_query($db_connect, $group_update_query);

$id = $_SESSION['login_id'];
$voter_update_query = "UPDATE users SET votes='yes' WHERE id='$id'";
mysqli_query($db_connect, $voter_update_query);

header('location:dashboard.php');

?>
