<?php
$mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');

$sql = "INSERT INTO pGpu (gModel, gChipset, gMemory, gCore, gBoost, gTdp, gInterface, gColour, cPrice) VALUES ('{$mysqli->real_escape_string($_POST['gpuModel'])}', '{$mysqli->real_escape_string($_POST['gpuChipset'])}', '{$mysqli->real_escape_string($_POST['gpuMemory'])}', '{$mysqli->real_escape_string($_POST['gpuClock'])}', '{$mysqli->real_escape_string($_POST['gpuBoost'])}', '{$mysqli->real_escape_string($_POST['gpuTdp'])}', '{$mysqli->real_escape_string($_POST['gpuInterface'])}', '{$mysqli->real_escape_string($_POST['gpuColour'])}', '{$mysqli->real_escape_string($_POST['gpuPrice'])}')";
            $insert = $mysqli->query($sql);

$mysqli->close();


header("Location:http://jbm15.brighton.domains/ci301-project/add.php");
exit();

 ?>