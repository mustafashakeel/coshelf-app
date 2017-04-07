<?php
//initialize variables to hold connection parameters
$username = 'dbo675493128';
$dsn = 'mysql:host=db675493128.db.1and1.com; dbname=db675493128';
$password = 'auc98361';

try{
    //create an instance of the PDO class with the required parameters
    $db = new PDO($dsn, $username, $password);

    //set pdo error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //display success message
    //echo "Connected to the register database";

}catch (PDOException $ex){
    //display error message
    echo "Connection failed ".$ex->getMessage();
}

