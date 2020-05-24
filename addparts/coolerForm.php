<?php
$mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');

$sql = "INSERT INTO pCooler (cModel, cSocket, cType, cColour, cPrice) VALUES ('{$mysqli->real_escape_string($_POST['coolerModel'])}', '{$mysqli->real_escape_string($_POST['coolerSocket'])}', '{$mysqli->real_escape_string($_POST['coolerType'])}', '{$mysqli->real_escape_string($_POST['coolerColour'])}', '{$mysqli->real_escape_string($_POST['coolerPrice'])}')";
$insert = $mysqli->query($sql);

$mysqli->close();


header("Location:http://jbm15.brighton.domains/ci301-project/add.php");
exit();

 ?>