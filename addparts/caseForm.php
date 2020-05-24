<?php

//Firstly, there is a connection established to the database in order to query it.

$mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');

//I then insert the entered data from the web page into the corresponding columns within the database.

$sql = "INSERT INTO pCase (cModel, cType, cColour, cSide, c3, c2, cPrice) VALUES ('{$mysqli->real_escape_string($_POST['caseModel'])}', '{$mysqli->real_escape_string($_POST['caseType'])}', '{$mysqli->real_escape_string($_POST['caseColour'])}', '{$mysqli->real_escape_string($_POST['caseSide'])}', '{$mysqli->real_escape_string($_POST['case3'])}', '{$mysqli->real_escape_string($_POST['case2'])}', '{$mysqli->real_escape_string($_POST['casePrice'])})";
            $insert = $mysqli->query($sql);

$mysqli->close();

header("Location:http://jbm15.brighton.domains/ci301-project/add.php");
exit();
 ?>