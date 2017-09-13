<?php

require_once('../mysqli.php');

$query = "SELECT First_Name, Last_Name FROM students";

$response = @mysqli_query($AllData, $query);

if($response){

	echo '<table align = "left" cellspacing="5" cellpadding="8">
	<tr><td align="left"><b>First Name</b></td>
	<td align="left"><b>Last Name</b></td></tr>';

	while($row = mysqli_fetch_array($response)){
		echo '<tr><td align="left">' .
		//$row['ID'] . '</td><td align="left">' .
		$row['First_Name'] . '</td><td align="left">' .
		$row['Last_Name'] . '</td>';/*<td align="left">' .
		$row['Address'] . '</td><td align="left">' .
		$row['Phone_Number'] . '</td><td align="left">' .
		$row['Gender'] . '</td><td align="left">' .
		$row['Form_Teacher'] . '</td><td align="left">' .
		$row['Seat_number'] . '</td>';*/

		echo '</tr>';
	}
	echo '</table>'
}else{
	echo "Could not issue database <br>";
	echo mysqli_error($AllData);
}

mysqli_close($AllData);


?>