<?php
function pd($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die;
}
function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die;
}
