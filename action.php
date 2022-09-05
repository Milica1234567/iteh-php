<?php

require_once 'db.php';

$db=new Database();

if(isset($_POST['action']) && $_POST['action']=="view"){
    $output='';
    $data=$db->read();
    if($db->totalRowCount()>0){
        $output.='<table class="table table-striped table-sm table-borderd">
        <thead>
            <tr class="text-center">
                <th style="font-size:14px">Broj pregleda</th>
                <th style="font-size:14px">Ime deteta</th>
                <th style="font-size:14px">Ime roditelja</th>
                <th style="font-size:14px">Prezime deteta</th>
                <th style="font-size:14px">Opis simptoma</th>
                <th style="font-size:14px, width:15%">Datum</th>
                <th style="font-size:14px">Adresa</th>
                <th style="width:15%">CRUD</th>
            </tr>
        </thead>
        <tbody>';

        foreach ($data as $row) {
            $output.=' <tr>
            <td>'.$row['id_pregleda'].'</td>
            <td>'.$row['ime_deteta'].'</td>
            <td>'.$row['ime'].'</td>
            <td>'.$row['prezime_deteta'].'</td>
            <td>'.$row['simptomi'].'</td>
            <td>'.$row['datum'].'</td>
            <td>'.$row['adresa'].'</td>
            <td>
            <a href="#" title="Detalji"><i class="fas fa-info-circle"></i></a>&nbsp;&nbsp;
            <a href="#" title="Edit"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;
            <a href="#" title="Delete"><i class="fas fa-trash-alt"></i></a>
            </td> </tr>';
        }
        $output.='</tbody></table>';
        echo $output;
    }
    else{
        echo '<h3>nema</h3>';
    }
}

if(isset($_POST['action']) && $_POST['action']=="insert"){
    $ime_deteta=$_POST['ime_deteta'];
    $prezime_deteta=$_POST['prezime_deteta'];
    $godine=$_POST['godine'];
    $jmbg=$_POST['jmbg'];
    $simptomi=$_POST['simptomi'];
    $adresa=$_POST['adresa'];
    $datum=$_POST['datum'];
    $email=$_POST['email'];

    $db->insert($ime_deteta, $prezime_deteta, $godine, $jmbg, $simptomi, $adresa, $datum, $email);

}

?>
