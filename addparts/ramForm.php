<?php
$mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');

$sql = "INSERT INTO pRam (rModel, rSpeed, rModules, rColour, rPrice) VALUES ('{$mysqli->real_escape_string($_POST['ramModel'])}', '{$mysqli->real_escape_string($_POST['ramClock'])}', '{$mysqli->real_escape_string($_POST['ramModules'])}', '{$mysqli->real_escape_string($_POST['ramColour'])}', '{$mysqli->real_escape_string($_POST['ramPrice'])}')";
            $insert = $mysqli->query($sql);

$mysqli->close();


header("Location:http://jbm15.brighton.domains/ci301-project/add.php");
exit();

 ?>