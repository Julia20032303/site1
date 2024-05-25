<?php

$driver = 'mysql';
$host = 'sql108.infinityfree.com';
$db_name = 'if0_36511394_users';
$db_user = 'if0_36511394';
$db_pass = 'n5BzYQU7BidH';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];


try{
    $pdo = new PDO(
        "$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options
    );
}
catch (PDOException $i){
    die("Помилка підключення до бази даних");
}