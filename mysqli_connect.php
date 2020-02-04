<?php
Define ('DB_USER', 'bosenli'); // or whatever userid you created
Define ('DB_PASSWORD', 'Signin2020'); // or whatever password you created
Define ('DB_HOST', 'localhost');
Define ('DB_NAME', 'ecommerce');

try
{
$dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
mysqli_set_charset($dbcon, 'utf8'); // #4
// more code will go here later
}
catch(Exception $e) // We finally handle any problems here #3
{
// print "An Exception occurred. Message: " . $e->getMessage();
print "The system is busy please try later";
}
catch(Error $e)
{
//print "An Error occurred. Message: " . $e->getMessage();
print "The system is busy please try again later.";
}
?>