<?php

class Matakuliah_model
{
    private $table = 'matakuliah';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMatakuliah()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getMatakuliahId($id)
    {
        $this->db->query('SELECT * FROM  matakuliah WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

}