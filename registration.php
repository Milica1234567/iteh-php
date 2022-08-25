<?php
session_start();

$con=new mysqli('localhost', 'root', '');

mysqli_select_db($con,'medicamea');

$ime=$_POST['ime'];
$prezime=$_POST['prezime'];
$email=$_POST['email'];
$brdece=$_POST['brdece'];
$password=$_POST['password'];

$s="select * from medmea where email='$email'";

$res=mysqli_query($con, $s);

$num=mysqli_num_rows($res);

if($num == 1){
   echo "Već imate nalog sa ovim kredencijalima!";
}
else{
    $korisnik="insert into `medmea`(ime, prezime, email, password, broj_dece) values('$ime','$prezime','$email','$password',$brdece)";
    mysqli_query($con, $korisnik);
    $_SESSION['ime']=$ime;
    header('location:zakazivanje.php');
}




//if(!$con){
//    die(mysqli_error($con));
//}
//else{
//   echo "Uspesno";
//}

?>