<?php

$host="";
$port=0;
$socket="";
$user="";
$password="";
$dbname="";

try {
    $db = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


?>