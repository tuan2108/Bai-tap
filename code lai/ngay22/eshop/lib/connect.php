<?php
$severname = "127.0.0.1";
$usernameMysql = "root";
$passwordMysql = "";
$dbname="codlai";

try{
    $connection = new PDO("mysql:host=$severname;dbname=$dbname", $usernameMysql, $passwordMysql);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    echo "kết nối thất bại";
}
// đây là kết nối đến cơ sở dữ liệu