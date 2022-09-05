<?php

$host = "localhost";
$db = "medicamea";
$user = "root";
$pass = "";

$conn = new mysqli($host,$user,$pass,$db);


/*session_start();
class Database{
    private $dbserever="localhost";
    private $dbuser="root";
    private $dbpassword="";
    private $dbname="medicamea";
    

    public function __construct()
    {
        $this->conn=mysqli_connect($this->dbserever, $this->dbuser, $this->dbpassword, $this->dbname);
    }
}

class Registration extends Database{
    public function register($ime, $prezime, $email, $br_dece, $password){
        
        $s="select * from `medmea` where email='$email'";
        $vec_postoji=mysqli_query($this->conn, $s);
        if(mysqli_num_rows($vec_postoji)>0){
            return 10;
            //korisnik vec postoji sa ovim kredencijalima
        }
        else{
            $querry="insert into `medmea`(ime, prezime, email, pass, br_dece) values('$ime','$prezime','$email','$password',$br_dece)";
            mysqli_query($this->conn, $querry);
            return 1;
            //uspeo da se registruje
        }
    }

}

class Login extends Database{
    public $id;
    public function login($email, $password){
        $s="select * from `medmea` where email='$email' && pass='$password'";
        $korisnik=mysqli_query($this->conn, $s);
        $row=mysqli_fetch_assoc($korisnik);

        if(mysqli_num_rows($korisnik)>0){
            $this->id=$row["id"];
            return 1;
        }
        else{
            return 100;
        }
    }
    public function idKorisnik(){
        return $this->id;
    }
}

class Select extends Database{
    public function selectById($id){
        $querry="select * from medmea where id=$id";
        $res=mysqli_query($this->conn, $querry);
        return mysqli_fetch_assoc($res);
    }
}

/*class Update extends Database{
    public function update( $ime, $prezime, $email, $br_dece, $password){

        $querry="UPDATE `medmea` SET ime=$ime ";
        mysqli_query($this->conn, $querry);
        return 1;
}
 
}

class Termin extends Database{

 
   


    public function dodaj($ime_deteta, $prezime_deteta, $godine, $jmbg, $simptomi, $adresa, $datum, $email){


        $querry="insert into `termin`(ime_deteta, prezime_deteta, godine, jmbg, simptomi, adresa, datum, email) values ('$ime_deteta, '$prezime_deteta', $godine, '$jmbg', '$simptomi', '$adresa', '$datum', '$email'";
        mysqli_query($this->conn, $querry);
        return 1;
    }

    
}*/



?>