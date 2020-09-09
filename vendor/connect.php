<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'registration');
    //$connect = new PDO('mysql:host=localhost;dbname=registration', 'root', 'root');

    if (!$connect) {
        die('Error connect to DataBase');
    }