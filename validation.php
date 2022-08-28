<?php
session_start();

$con=new mysqli('localhost', 'root', '');

mysqli_select_db($con,'medicamea');


$email=$_POST['email'];

$password=$_POST['password'];

$s="select * from `medmea` where email='$email' && password='$password'";
$res=mysqli_query($con, $s);

$num=mysqli_num_rows($res);

if($num==1){
    $q="SELECT * FROM `medmea` WHERE email='$email'";
    $red=mysqli_query($con, $q);
    $name=mysqli_fetch_array($red);
    var_dump($name);

    
    $_SESSION['ime']=$name['ime'];
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    header('location:zakazivanje.php');
}
else{
    
    header('location:login.php');
}


?>