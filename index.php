<?php
require_once 'config.php';
include 'helpers.php';

if(isset($_COOKIE['name'])){
    echo 'Hello ' . $_COOKIE['name'];
    setcookie('name', 'Nuwan', time()-3600);
}else{
    setcookie('name', 'Nuwan', time()+3600);
    echo 'Hello guest';

}