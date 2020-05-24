<?php
$mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');

$sql = "INSERT INTO pDrive (dModel, dType, dStorage, dForm, dInterface, dPrice) VALUES ('{$mysqli->real_escape_string($_POST['driveModel'])}', '{$mysqli->real_escape_string($_POST['driveType'])}', '{$mysqli->real_escape_string($_POST['driveStorage'])}', '{$mysqli->real_escape_string($_POST['driveForm'])}', '{$mysqli->real_escape_string($_POST['driveInterface'])}', '{$mysqli->real_escape_string($_POST['drivePrice'])}')";
            $insert = $mysqli->query($sql);

$mysqli->close();


header("Location:http://jbm15.brighton.domains/ci301-project/add.php");
exit();

 ?>