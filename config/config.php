<?php 

    // const BASEDIR = 'E:\xampp\htdocs\todoapp';
    define('BASEDIR', 'E:\xampp\htdocs\todoapp', false);
    define('URL', 'http://localhost/todoapp/', false);
    define('DEV_MODE', true, false);


    try {
        $db = new PDO('mysql:host=localhost;dbname=todoapp;', 'root', '');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    

?>