<?php

declare(strict_types = 1);

// echo 'Hello world!';

$connection = mysqli_connect('mysql', 'root', 'root');

$connection->query('CREATE DATABASE `mynp-docker`');

// phpinfo();
echo('<pre>');
var_dump($connection);