<?php 

try{
define("HOST", "localhost");
define("DBNAME", "anime");
define("USER", "root");
define("PASSWORD", "");

$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."", USER, PASSWORD);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo $e->getMessage();
}


?>