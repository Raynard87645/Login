<?php

$DB_USER='StudentClass1';
$DB_HOST='localhost';
$DB_USERNAME='root';
$DB_PASSWORD='crazy@chris?';
$DB_NAME='classes';

$AllData = @mysqli( $DB_HOST, $DB_USER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
if(!$AllData){
	die('could not connect to MySQL <br>' .mysqli_connect_error());
}

echo "Data has been created";
?>