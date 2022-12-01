<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'palyer_score');

//get connection
$mysqli2 = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli2){
  die("Connection failed: " . $mysqli2->error);
}

//query to get data from the table
$query = sprintf("SELECT playerid, score FROM score ORDER BY playerid");

//execute query
$result = $mysqli2->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli2->close();

//now print the data
print json_encode($data);

?>