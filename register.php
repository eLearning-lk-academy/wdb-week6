<?php 
session_start();
include 'helpers.php';
require_once 'db-connect.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sql = "SELECT * FROM users WHERE email = '".$_POST['email']."'";
    // pd($sql);
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        die('Email already exists');
    }{
        $password= md5($_POST['password']);
        $sql = "INSERT INTO users (first_name, last_name, email, password, created_at) VALUES ('".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['email']."', '".$password."',".time().")";
        $result = mysqli_query($conn, $sql);
        if($result){
            header('Location: login.php');
        }
    }
}   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>
<body>
    <div class="container p-2 mt-5 ">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Login</h4>
                        </div>
                        <form action="register.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="first_name" placeholder="John" name="first_name" required>
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="last_name" placeholder="Doe" name="last_name" required>
                                <label for="last_name">Last Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" placeholder="name@email.com" name="email"required >
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary py-2">Register</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>