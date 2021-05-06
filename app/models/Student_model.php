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

    public function addStudentData ($data) {
        $query = "INSERT INTO " . $this->table . " VALUES ('', :name, :email, :address)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('address', $data['address']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}