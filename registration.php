<?php
/*session_start();

include 'connection.php';

$ime=$_POST['ime'];
$prezime=$_POST['prezime'];
$email=$_POST['email'];
$brdece=$_POST['brdece'];
$password=$_POST['password'];

$s="select * from `medmea` where email='$email'";

$res=mysqli_query($con, $s);

$num=mysqli_num_rows($res);

if($num == 1){
   echo "Već imate nalog sa ovim kredencijalima!";
}
else{


    $_SESSION['ime']=$ime;
    $_SESSION['prezime']=$prezime;
    $_SESSION['brdece']=$brdece;
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    $korisnik="insert into `medmea`(ime, prezime, email, password, br_dece) values('$ime','$prezime','$email','$password',$brdece)";
    mysqli_query($con, $korisnik);
   
    header('location:zakazivanje.php');
}


//if(!$con){
//   die(mysqli_error($con));
//}
//else{
//  echo "Uspesno";
//}
*/





?>