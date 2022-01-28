<?php

class Mahasiswa_model
{
    private $mhs = [];
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        try {
            $this->dbh = new PDO($dsn, 'root', '');  
        } catch (PDOException $th) {
            die($th->getMessage());
        }
    }
    
    public function getAllMahas()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        $this->mhs = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        return $this->mhs;
    }
}
