<?php
$mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');


$sql = "INSERT INTO pCpu (cBrand, cModel, cSocket, cCount, cCore, cBoost, cTDP, cIG, cPrice) VALUES ('{$mysqli->real_escape_string($_POST['cpuManu'])}', '{$mysqli->real_escape_string($_POST['cpuModel'])}', '{$mysqli->real_escape_string($_POST['cpuSocket'])}', '{$mysqli->real_escape_string($_POST['cpuCore'])}', '{$mysqli->real_escape_string($_POST['cpuClock'])}', '{$mysqli->real_escape_string($_POST['cpuBoost'])}', '{$mysqli->real_escape_string($_POST['cpuTdp'])}', '{$mysqli->real_escape_string($_POST['cpuIg'])}', '{$mysqli->real_escape_string($_POST['cpuPrice'])}')";
            $insert = $mysqli->query($sql);
            

$mysqli->close();


header("Location:http://jbm15.brighton.domains/ci301-project/add.php");
exit();

 ?>