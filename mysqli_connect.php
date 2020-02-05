<?php
Define ('DB_USER', 'root'); // or whatever userid you created
Define ('DB_PASSWORD', 'Signin2020'); // or whatever password you created
Define ('DB_HOST', 'localhost');
Define ('DB_NAME', 'ecommerce');

// Make the connection:
$dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Set the encoding...optional but recommended
mysqli_set_charset($dbcon, 'utf8');