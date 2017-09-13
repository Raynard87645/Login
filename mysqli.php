<?php

$DB_USER='StudentClass';
$DB_HOST='localhost';
$DB_PASSWORD='crazy@chris?';
$DB_NAME='classes';

$AllData = @mysqli_connect( $DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
if(!$AllData){
	dies('could not connect to MySQL <br>' .mysqli_connect_error());
}

echo "Data has been created";
?>