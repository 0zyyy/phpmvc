<?php

class Mahasiswa_model
{
    private $tabel = "mahasiswa";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllMahas()
    {
        $this->db->query('SELECT * FROM ' . $this->tabel);
        return $this->db->resultSet();
    }
    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->tabel . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataMahasiswa($data)
    {
        $this->db->query('INSERT INTO ' . $this->tabel . ' VALUES (null, :nama, :nrp, :email, :jurusan)');
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataMahasiswa($id)
    {
        $this->db->query('DELETE FROM '. $this->tabel . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataMahasiswa($data)
    {
        $this->db->query('UPDATE '. $this->tabel . ' SET nama=:nama, nrp=:nrp, email=:email, jurusan=:jurusan WHERE id=:id');
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('jurusan',$data['jurusan']);
        $this->db->bind('id',$data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
