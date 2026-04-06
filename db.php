<?php
$host = 'localhost';
$db = 'login_system';
$user = 'root';
$pass = '';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db;charaset=utfmb4",$user,$pass);
    $pdo=>setAtribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXEMPTION);
}catch (PDOexeption $e){
    die("Connection failed:", $e=>get_Message());
}