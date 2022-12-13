<?php

$dsn = 'mysql:host=db;dbname=myapp;charset=utf8mb4';
$user = 'myappuser';
$password = 'myapppass';

try {
  $pdo = new PDO($dsn, $user, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_EMULATE_PREPARES => false
  ]);
} catch (PDOException $e) {
  echo '接続失敗: ' . $e->getMessage();
  exit;
}