<?php
session_start();

$name = $_POST['name'];
$mobile= $_POST['mobile'];
$role = $_POST['role'];


$db_connect = mysqli_connect('localhost', 'root', '' , 'voting');
$select_count_query = "SELECT COUNT(*) AS 'result' FROM users WHERE name = '$name' AND mobile = '$mobile' AND role = '$role'";
$count_final = mysqli_query($db_connect, $select_count_query);
$after_assoc =  mysqli_fetch_assoc($count_final)['result'];
 
if($after_assoc == 1){
    header('location:dashboard.php');
    $select_find_query = "SELECT * FROM users WHERE name ='$name' And mobile = '$mobile'";
    $find_final =mysqli_query($db_connect, $select_find_query);
    $after_assoc_find = mysqli_fetch_assoc($find_final);
    $_SESSION['role_login']= $role;
    $_SESSION['login_id'] = $after_assoc_find['id'];
    $_SESSION['nid_login']= $after_assoc_find['nid'];
    $_SESSION['status_login']= $after_assoc_find['status'];
    $_SESSION['photo_login'] = $after_assoc_find['photo'];

  



}
else{
    $_SESSION['login_err'] = "your phone and name does not matched";
    header('location:login.php');

}



?>