<?php
session_start ();
include "sql.php";
$notification = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username       = $_POST['username1'];
  $password       = $_POST['password1'];
  $role           = $_POST['role1'];
  $r_password     = $_POST['r_password1'];
  $key            = "primakara";
  $hashedpassword = hash_hmac("sha256", $password, $key);

  if($role =="Admin" && $r_password=="admin") {
    $notification = "Berhasil melakukan registrasi, saat ini anda menjadi admin | Nama Admin: $username, Password: $password";
    $reset        = "alter table user AUTO_INCREMENT = 1";
    $query        = mysqli_query($con,$reset);
    $result       = mysqli_query($con, "INSERT INTO user (role,username,password) VALUES ('$role','$username','$hashedpassword')");
  } 
  else if($role =="Customer" && $r_password=="pengguna") {
    $notification = "Berhasil melakukan registrasi, saat ini anda menjadi pengguna | Nama Pengguna:$username, Password: $password";
    $reset        = "alter table user AUTO_INCREMENT = 1";
    $query        = mysqli_query($con,$reset);
    $result       = mysqli_query($con, "INSERT INTO user (role,username,password) VALUES ('$role','$username','$hashedpassword')");    
  } 
  else 
  {
  $notification   = "Coba ulang terdapat kesalahan dalam Registrasi!";
  }
}
header ("Location: index.php?notification=" . urlencode($notification));
exit (); 
?>
