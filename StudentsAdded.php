<html>
<head>
<title>Add Students</title>
<link rel="stylesheet" type="text/css" href="canvas.css">
</head>
 
 <body>
 	<?php

     if(isset($_POST['submit'])){
     	$data_missing = array();


       /*  if (empty($_POST['ID'])) {
         	$data_missing[] = 'ID';
         }else{
         	$id = trim($_POST['ID']);
         }*/

        if (empty($_POST['First_Name'])) {
            $data_missing[] = 'First Name';
         }else{
            $f_name = trim($_POST['First_Name']);
         }

          if (empty($_POST['Last_Name'])) {
            $data_missing[] = 'Lasst Name';
         }else{
            $l_name = trim($_POST['Last_Name']);
         }

         /*if (empty($_POST['Address'])) {
            $data_missing[] = 'Address';
         }else{
            $add = trim($_POST['Address']);
         }

          if (empty($_POST['Phone_Number'])) {
            $data_missing[] = 'Phone Number';
         }else{
            $p_number = trim($_POST['Phone_Number']);
         }
         
         if (empty($_POST['Gender'])) {
            $data_missing[] = 'Gender';
         }else{
            $gender = trim($_POST['Gender']);
         }

          if (empty($_POST['Form_Teacher'])) {
            $data_missing[] = 'Form Teacher';
         }else{
            $teacher = trim($_POST['Form_Teacher']);
         }
     
          if (empty($_POST['Seat_number'])) {
            $data_missing[] = 'Seat number';
         }else{
            $seat = trim($_POST['Seat_number']);
         }



*/



         if (empty($data_missing)) {
         	require_once('../phptest/mysqli.php');

         	//$query = "INSERT INTO students (First_Name, Last_Name) VALUES (?, ?)";

         	$stmt = $AllData->prepare("INSERT INTO students VALUES (?, ?)");

         	$stmt->bind_param('ss', $f_name, $l_name);

         	$stmt->execute();

         	$affected_rows = mysqli_stmt_affected_rows($stmt);

         	if ($affected_rows == 1) {
         		echo 'Student Entered';
         		mysqli_stmt_close($stmt);
         		mysqli_close($AllData);
         	}else{
         		echo 'Error Occored <br>';
         		echo mysqli_error($stmt);
         		mysqli_stmt_close($AllData);
         	}
         }else{
         	echo 'You need to enter the following data<br>';

         	foreach($data_missing as $missing) {
         		echo 'missing<br>';
         	}
         }

     }

 	?>

 	<form action="http://localhost:80/phptest/StudentsAdded.php" method="post" id="form">
     
     <br></br>
    <b>Add a New Student</b>

    <p><b>First Name: </b><input type="text" name="First_Name" size="30" value="" /></p>

    <p><b>Last Name: </b><input type="text" name="Last_Name" size="30" value="" /></p>
<!-- 
    <p><b>Address: </b><input type="text" name="First_Name" size="30" value="" /></p>

    <p><b>Phone Number: </b><input type="text" name="Last_Name" size="30" value="" /></p>

    <p><b>Gender: </b><input type="text" name="First_Name" size="30" value="" /></p>

    <p><b>Teacher: </b><input type="text" name="Last_Name" size="30" value="" /></p>

    <p><b>Seat Number: </b><input type="text" name="First_Name" size="30" value="" /></p> -->

    <p>
      <input type="submit" name="submit" value="send" />
    </p>
    </form>

 </body>



</html>