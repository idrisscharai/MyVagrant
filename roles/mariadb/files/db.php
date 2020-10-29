<?php

$connection = new PDO('mysql:host=10.0.0.202;dbname=IdrissDB', 'IdrissDB', 'IdrissDB');
$statement  = $connection->query('SELECT message FROM IdrissDB');

echo $statement->fetchColumn();