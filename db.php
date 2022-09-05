<?php 

class Database{
    //data source network
    private $dsn="mysql:host=localhost;dbname=medicamea";
    private $user="root";
    private $pass="";
    public $conn;

    public function __construct(){
        try{
            $this->conn=new PDO($this->dsn, $this->user, $this->pass);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    //insert termin

    public function insert($ime, $prezime, $godine, $jmbg, $simptomi, $adresa, $datum, $email){
        $sql="insert into termin (ime_deteta, prezime_deteta, godine, jmbg, simptomi, adresa, datum, email) 
        values (:ime, :prezime, :godine, :jmbg, :simptomi, :adresa, :datum, :email)";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute(['ime'=>$ime, 'prezime'=>$prezime, 'godine'=>$godine, 'jmbg'=>$jmbg, 'simptomi'=>$simptomi, 'adresa'=>$adresa, 'datum'=>$datum, 'email'=>$email]);
        return true;
    }
    
    public function read(){
        $data=array();
        $sql="select id_pregleda, ime_deteta,ime, prezime_deteta, godine, simptomi, adresa, datum from termin
        INNER JOIN medmea ON termin.email = medmea.email";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $data[]=$row;
        }
        return $data;
    }
    public function getUserByID($id){
        $sql="select * from termin where id_pregleda=:id";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function update($id, $ime, $prezime, $godine, $jmbg, $simptomi, $adresa, $datum, $email){
        $sql="update termin set ime_deteta=:ime, prezime_deteta=:prezime, godine=:godine, jmbg=:jmbg, simptomi=:simptomi, adresa=:adresa, datum=:datum, email=:email where id_pregleda=:id";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute(['ime'=>$ime,'prezime'=>$prezime, 'godine'=>$godine, 'jmbg'=>$jmbg, 'simptomi'=>$simptomi, 'adresa'=>$adresa, 'datum'=>$datum, 'email'=>$email, 'id'=>$id]);
        return true;
    }

    public function delete($id){
        $sql="delete from termin where id_pregleda=:id";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        return true;
    }

    public function totalRowCount(){
        $sql="select * from termin INNER JOIN medmea ON termin.email = medmea.email";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        $rows=$stmt->rowCount();
        return $rows;
    }
}
?>