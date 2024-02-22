<?php

class DB{

// properti
private $host = "127.0.0.1";
private $user = "root";
private $password = "";
private $database = "dbrestoran";

function __construct() 
{
 echo "function  construct";
}

// method
public function selectData()
{
    echo 'select data';
}

public function getDatabase()
{
    returne $this->database;
}

public function tampil()
{
    $this->selectData(); 
}

public static function insert()
{
    echo 'static function';

}



}



 $db = new DB;

// echo '<db>';
 
// $db-> selectData();

// echo '<br>';

// echo $db->host;

// echo '<br>';

// echo $db-> getDatabase().'<br>';

// $db-> tampil();


 




?>