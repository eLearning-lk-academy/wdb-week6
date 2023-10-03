<?php
require_once 'config.php';

$conn = mysqli_connect(
    $mysql['server'],
    $mysql['username'],
    $mysql['password'],
    $mysql['database'],
    $mysql['port']
);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}