<?php

$connection = new PDO('mysql:host=localhost;dbname=ansible_db', 'ansible_user', 'p@ssw0rd');
$statement  = $connection->query('SELECT message FROM demo');

echo $statement->fetchColumn(); 
