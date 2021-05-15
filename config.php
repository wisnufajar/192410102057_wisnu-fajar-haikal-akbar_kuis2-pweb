<?php

$server = "localhost";
$pengguna = "root";
$pass = "";
$nama = "pbw1";

try {     
    $db = new PDO("mysql:host=$server;dbname=$nama", $pengguna, $pass);
} catch(PDOException $e) {
    die("Ditemukan masalah: " . $e->getMessage());
}