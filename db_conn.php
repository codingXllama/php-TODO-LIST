<?php


$sName = "localhost:3307";
$uName = "root";
$pass = "root";
$db_name = "to_do_list";



try {

    $conn = new PDO("mysql:host=$sName;db_name=$db_name", $uName, $pass);
    echo "Connection Successful :D ";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed : " . $e->getMessage();
}
