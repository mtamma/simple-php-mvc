<?php

class Student_model
{
    private $table = 'students';
    private $db;

    public function __construct () {
        $this->db = new Database;
    }

    public function getAllStudent () {
        $this->db->query('select * from ' . $this->table);
        return $this->db->resultSet();
    }

    public function getStudentById ($id) {
        $this->db->query('select * from ' . $this->table . ' where id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}