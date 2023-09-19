<?php
require 'config.php';
include 'helpers.php';

// Connect to the database
$conn = mysqli_connect($mysql['server'], $mysql['username'], $mysql['password'], $mysql['database'], $mysql['port']);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo '<h1>Connected successfully</h1>';

// creating a table
/*$sql = "CREATE TABLE `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `first_name` varchar(255) NOT NULL,
    `last_name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `created_at` int(11) NOT NULL,
    `profile_pic` varchar(255) NULL)";

$result = mysqli_query($conn, $sql);
dd($result);*/

// inserting data into a table
/*
$sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `created_at`) VALUES ('John', 'Doe', 'john@name.com', '123456', '1234567890')";

$result = mysqli_query($conn, $sql);
$last_id = mysqli_insert_id($conn);
dd($last_id);*/

// insert multiple rows

/*$sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `created_at`) VALUES ('John1', 'Doe1', 'john@name.com', '123456', '1234567890');";
$sql .= "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `created_at`) VALUES ('Jane', 'Doe', 'jane@email.com', '123456', '123455555');";
$sql .= "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `created_at`) VALUES ('John2', 'Doe2', 'john2@email.com', '123456', '11111111')";*/

/*$sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `created_at`) VALUES 
('Anna', 'Doe', 'anna@email.com', '123456', '1234567890'),
('John4', 'Doe1', 'john4@email.com', '123456', '1234567890'),
('Jane4', 'Doe', 'jane4@email.com', '123456', '1234567890')";

$result = mysqli_multi_query($conn, $sql);
dd($result);*/


// Selecting data from a table
/*
$sql = "SELECT * FROM `users`";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    // $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // $users = mysqli_fetch_all($result, MYSQLI_NUM);
    $users = mysqli_fetch_all($result, MYSQLI_BOTH);
    pd($users);
}
*/

// $sql = "SELECT * FROM `users` WHERE `id` = 5";
/*$sql = "SELECT * FROM `users` WHERE `first_name` = 'John' ORDER BY `id` ASC LIMIT 1";
$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result) > 0){
    $user = mysqli_fetch_assoc($result);
    // $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // $user = mysqli_fetch_column($result, 3);
    // $user = mysqli_fetch_field($result);

    pd($user);
}*/

// deleting data
/*
$sql = "DELETE FROM `users` WHERE `id` = 5";

$result = mysqli_query($conn, $sql);
*/

// updating data

/*
$sql = "UPDATE `users` SET `first_name` = 'Nuwan' WHERE `id` = 9";

$result = mysqli_query($conn, $sql);

pd($result);*/


