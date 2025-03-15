<?php

class DB
{
    private $server = '127.0.0.1';
    private $user;
    private $pass;
    private $db;
    private $sql;

    function __construct() { 
        $this->user = getenv('db_user');
        $this->pass = getenv('db_pass');
        $this->db = getenv('db_name');
        $this->sql = new mysqli(
            $this->server,
            $this->user,
            $this->pass,
            $this->db
        );
    }

    function selectAll($table) {
        $dbObj = $this->sql->query('SELECT * FROM ' . $table);

        $result = [];
        while ($row = $dbObj->fetch_assoc()) {
            $result[] = $row;
        }

        return $result;  
    }
  
    function insertData($table, $data) {
        $columns = implode(", ", array_keys($data));
        $values = "'" . implode("', '", array_values($data)) . "'";
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        if ($this->sql->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    function checkUser($login, $password) {
        $login = $this->sql->real_escape_string($login);
        $password = $this->sql->real_escape_string($password);

        $query = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
        $result = $this->sql->query($query);

        if ($result && $result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    function sortData($table, $column, $sortType) {
        $dbObj = $this->sql->query('SELECT * FROM ' . $table . ' ORDER BY ' . $column . ' ' . $sortType);
    
        $result = [];
        while ($row = $dbObj->fetch_assoc()) {
            $result[] = $row;
        }
    
        return $result;
    }

    function deleteData($table, $id) {
        $sql = "DELETE FROM $table WHERE id = $id";
        if ($this->sql->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

}

$DB = new DB();