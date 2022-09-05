<?php
/*session_start();

include 'connection.php';


$email=$_POST['email'];

$password=$_POST['password'];

$s="select * from `medmea` where email='$email' && password='$password'";
$res=mysqli_query($con, $s);

$num=mysqli_num_rows($res);

if($num==1){

    $ime1="SELECT * FROM `medmea` WHERE email='$email'";
    $red=mysqli_query($con, $ime1);
    $name=mysqli_fetch_array($red);

    $_SESSION['id']=$name['id'];
    $_SESSION['brdece']=$name['br_dece'];
    $_SESSION['prezime']=$name['prezime'];
    $_SESSION['ime']=$name['ime'];
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    header('location:zakazivanje.php');
}
else{
    
    header('location:login.php');
}*/



?>
