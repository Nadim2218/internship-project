<?php

$delete_voter_id = $_GET['delete_voter_id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'voting');
$vote_details_query = "SELECT * FROM users WHERE id = $delete_voter_id;";
$after_vote_query = mysqli_query($db_connect, $vote_details_query);
$after_vote_assoc = mysqli_fetch_assoc($after_vote_query);

unlink("../voting/uploads/".$after_vote_assoc['photo']);
$vote_delete_query = "DELETE FROM users WHERE id = $delete_voter_id;";
$vote_delete_final = mysqli_query($db_connect, $vote_delete_query);
header('location:group_view.php');

?>