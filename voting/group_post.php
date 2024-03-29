<?php
session_start();
$name = $_POST['name'];
$group_name = $_POST['group_name'];
$election_district = $_POST['election_district'];
$flag = false;

if ($name) {
    $_SESSION['old_name'] = $name;
} else {
    $_SESSION['name_error'] = "Name Is Required";
    $flag = true;
}

if ($group_name) {
    $_SESSION['old_group_name'] = $group_name;
} else {
    $_SESSION['group_name_error'] = "Marka Is Required";
    $flag = true;
}

if ($election_district) {
    $_SESSION['old_election_district'] = $election_district;
} else {
    $_SESSION['election_district_error'] = "Election district Is Required";
    $flag = true;
}

if (!$_FILES['group_photo']['name']) {
    $_SESSION['group_photo_error'] = "group Photo Is Required";
    $flag = true;
}

if($flag == true){
    header('location:group_view.php');
  }
  else{
  
    $db_connect = mysqli_connect('localhost', 'root', '', 'voting');
  $group_confirm_query = "SELECT COUNT(*) AS result FROM prarthis WHERE group_name = '$group_name'";
  $group_query = mysqli_query($db_connect, $group_confirm_query);
  $after_group_assoc = mysqli_fetch_assoc($group_query);
  
  if($after_group_assoc['result'] == 1){
        $_SESSION['group_match_error']= "This group name is already in use";
        header('location:group.php');
  }
  else{
  $group_insert_query = "INSERT INTO prarthis (name, group_name, election_district, total_votes) VALUES ('$name', '$group_name', '$election_district', '0')";
  $group_insert_final = mysqli_query($db_connect, $group_insert_query);

  $group_photo_id = mysqli_insert_id($db_connect);
  $photo_name = $_FILES['group_photo']['name'];
  $after_explode = explode('.', $photo_name);
  $file_name_extension = end($after_explode);
  $new_name = $group_photo_id.".".$file_name_extension;
  $old_location = $_FILES['group_photo']['tmp_name'];
  $new_location = "../voting/groups/".$new_name;
  move_uploaded_file($old_location, $new_location);
  
  $group_photo_update_query = "UPDATE prarthis SET group_photo = '$new_name' WHERE group_id = '$group_photo_id'";
  $group_photo_update_final = mysqli_query($db_connect, $group_photo_update_query);

  $_SESSION['group_register_success']= "CONGRATS YOU ARE REGISTERED";
 
  
  header('location:group_view.php');
  
  
  }
  
  
  
    
       
      
       
  
  }
  
  

?>
