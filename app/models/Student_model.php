<?php

class Student_model
{
    // private $students = array(
    //     array(
    //         'name' => 'Mardi Vester Tamma',
    //         'email' => 'mvt3006@gmail.com',
    //         'address' => 'address A'
    //     ),
    //     array(
    //         'name' => 'Dede Wijaya',
    //         'email' => 'dede@gmail.com',
    //         'address' => 'address B'
    //     ),
    //     array(
    //         'name' => 'Ona',
    //         'email' => 'ona@gmail.com',
    //         'address' => 'address C'
    //     ),
    // );
    private $databaseHandler;
    private $statement;

    public function __construct () {
        $dataSourceName = 'mysql:host=localhost;dbname=simple-php-mvc';

        try {
            $this->databaseHandler = new PDO($dataSourceName, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllStudent () {
        $this->statement = $this->databaseHandler->prepare('Select * from students');
        $this->statement->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);;
    }
}