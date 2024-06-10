<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$koneksi = new PDO('mysql:host=localhost;dbname=loginn', 'root', '');
$query = $koneksi->query("SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password'");
$data = $query->fetch();
if($data){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    header("Location:beranda.php");
}else{
    header("Location:login.php");
}
?>