<!-- creating a database connection-->
<?php

//Development connection
/*
$host = '127.0.0.1'; 
$db = 'attendance_db';
$user = 'root';
$pass = '';
//charset variable
$charset = 'utf8mb4';
*/


//creating variable for localhost, you assign either the IP address or the word localhost
//Remote Database Connection

$host='remotemysql.com'; 
$db='7kD87XtklJ';
$user='7kD87XtklJ';
$pass='lRIBbjXV8r';
//charset variable
$charset='utf8mb4';

//odbc like connector for mysql connector
$dsn="mysql:host=$host;dbname=$db;charset=$charset;password=$pass";


//exception handling testing connectivity with database

try{
    $pdo=new PDO($dsn,$user,$pass);
    //echo "<h6 class='text-success'>Connection to Database was successful</h6><br />";
    //stating when there is an error and displaying
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    //echo "<h1 class='text-danger'>No connection to Database</h1>";
    throw new PDOException($e->getMessage());
}

//refrence crud
require_once 'crud.php';
//refrence user
require_once 'user.php';

//creating new instance of crud
$crud=new crud($pdo);
//creating new instance of user
$user=new user($pdo);

$user->insertUser("admin","password");
//$user->insertUser("","");



?>