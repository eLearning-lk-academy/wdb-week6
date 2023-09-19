<?php
session_start();
require_once 'config.php';
include 'helpers.php';

$_SESSION['user'] = [
    'id' => 1,
    'name' => 'John Doe'
];
