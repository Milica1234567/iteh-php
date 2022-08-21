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
    header('location:zakazivanje.php');
}
else{
    echo "ne postoji nalog";
    header('location:login.php');
}

//if(!$con){
//    die(mysqli_error($con));
//}
//else{
//   echo "Uspesno";
//}

?>