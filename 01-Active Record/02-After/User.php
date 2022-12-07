<?php

class User
{

    protected $connection = null;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=designpattern", 'root', '');
    }

    public function load($id)
    {
        $sql = 'SELECT * FROM users WHERE id = ' . $id;
        $result = $this->connection->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        foreach ($row as $item => $value) {
            $this->$item = $value;
        }
    }

}