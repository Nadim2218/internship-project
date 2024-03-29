<?php
session_start();

 $nid_name= $_POST['nid_name'];
 $mobile= $_POST['mobile'];
 $nid= $_POST['nid'];
 $birthday= $_POST['birthday'];
 $district= $_POST['district'];
 $subdistrict= $_POST['subdistrict'];
 $address= $_POST['address'];
 $gender= $_POST['gender'];
 $role = $_POST['role'];
 $flag = false;


if($nid_name){
  $_SESSION['nid_old_name']= $name;
}
else{
  $_SESSION['nid_name_err']="Name is required";
  $flag= true;
}
if($mobile){
  $_SESSION['old_mobile']= $mobile;
}
else{
  $_SESSION['mobile_err']="mobile number is required";
  $flag= true;
}




if($nid){
    $_SESSION['old_nid']= $nid;
}
else{
    $_SESSION['nid_err']="Nid number is required";
    $flag= true;
}
if($birthday){
    $_SESSION['old_bday']= $birthday;
}
else{
    $_SESSION['birth_err']="Date of birth is required";
    $flag= true;
}
if($district){
    $_SESSION['old_dis']= $district;
}
else{
    $_SESSION['dis_err']="District is required";
    $flag= true;
}
if($subdistrict){
    $_SESSION['old_subdis']= $subdistrict;
}
else{
    $_SESSION['subdis_err']="District is required";
    $flag= true;
}
if($address){
    $_SESSION['old_address']= $address;
}
else{
    $_SESSION['address_err']="Address is required";
    $flag= true;
}








if($flag == true){
  header('location:nid_register.php');
}
else{

  $db_connect = mysqli_connect('localhost', 'root', '' , 'voting');
$phone_confirm_query = "SELECT COUNT(*) AS result FROM users WHERE mobile = '$mobile'";
$after_phone_query = mysqli_query($db_connect, $phone_confirm_query);
$after_phone_assoc = mysqli_fetch_assoc($after_phone_query);

if($after_phone_assoc['result'] == 1){
      $_SESSION['phone match error']= "This phone number is already in use";
      header('location:nid_register.php');
}
else{
$nid_insert_query = "INSERT INTO users (name, mobile, nid, birthday, district, sub_district, address, gender, role, status, votes) VALUES ('$nid_name', '$mobile', '$nid', '$birthday', '$district', '$subdistrict', '$address', '$gender', '$role', 'not voted', 'no' )";
$nid_insert_final = mysqli_query($db_connect, $nid_insert_query);
$photo_id = mysqli_insert_id($db_connect);
$photo_name = $_FILES['photo']['name'];
$after_explode = explode('.', $photo_name);
$file_name_extension = end($after_explode);
$new_name = $photo_id.".".$file_name_extension;
$old_location = $_FILES['photo']['tmp_name'];
$new_location = "../voting/uploads/".$new_name;
move_uploaded_file($old_location, $new_location);

$photo_update_query = "UPDATE users SET photo = '$new_name' WHERE id = '$photo_id'";
$photo_update_final = mysqli_query($db_connect, $photo_update_query);

header('location:login.php');


}



  
     
    
     

}



