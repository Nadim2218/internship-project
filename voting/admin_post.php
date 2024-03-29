<?php

session_start();
$name = $_POST['name'];
$admin_mobile = $_POST['admin_mobile'];
$db_connect = mysqli_connect('localhost', 'root','','voting');
$name_confirm_query = "SELECT COUNT(*) AS result FROM adminss WHERE name='$name' AND admin_mobile='$admin_mobile'";
$after_name_query = mysqli_query($db_connect, $name_confirm_query);
$after_name_assoc = mysqli_fetch_assoc($after_name_query);

if ($after_name_assoc['result'] == 0) {
    $_SESSION['admin_login_error'] = "Please Insert correctly";
    header('location: admin_login.php');

} else {
    // echo "Login";
    $_SESSION['admin_login_name'] = $name;
    header('location:group_view.php');
}

?>
