<?php 
session_start();
include 'helpers.php';
require_once 'db-connect.php';

if(!empty($_SESSION['is_logged_in'])){
    header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $password= md5($_POST['password']);
    $sql = "SELECT * FROM users WHERE email = '".$_POST['email']."' AND password = '".$password."'";
    // pd($sql);
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result);
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['first_name'].' '.$user['last_name'],
            'email' => $user['email'],
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
        ];
        header('Location: index.php');

    }{
        die('Email already exists');
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
                        <form action="login.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" placeholder="name@email.com" name="email" required>
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary py-2">Login</button>
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