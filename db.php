<?php
$db = null;
try {
    $db = new PDO("mysql:host=localhost;dbname=phpdev;charset=utf8", "root", "");
} catch (PDOException $err) {
    echo $err->getMessage();
}
