<?php
session_start();
include 'connection_termin.php';

extract($_POST);

if (isset($_POST['imeSend']) && isset($_POST['prezimeSend']) && isset($_POST['starostSend']) && isset($_POST['jmbgSend']) && isset($_POST['simpSend']) && isset($_POST['adresaSend']) && isset($_POST['datumSend']) && isset($_POST['mailSend'])) {
    
    $sql = "insert into `termin` (ime_deteta, prezime_deteta, godine, jmbg, simptomi, adresa, datum, email) values 
                                ('$imeSend', '$prezimeSend', '$starostSend', '$jmbgSend', '$simpSend', '$adresaSend', '$datumSend', '$mailSend') ";

    $res=mysqli_query($conn, $sql);
    if($res){
        echo "jeste";
    }

}
