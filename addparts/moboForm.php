<?php
$mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');

$sql = "INSERT INTO pMobo (mModel, mSocket, mForm, mDimm, mMaxram, mColour, mPrice) VALUES ('{$mysqli->real_escape_string($_POST['moboModel'])}', '{$mysqli->real_escape_string($_POST['moboSocket'])}', '{$mysqli->real_escape_string($_POST['moboForm'])}', '{$mysqli->real_escape_string($_POST['moboDimm'])}', '{$mysqli->real_escape_string($_POST['moboMaxram'])}', '{$mysqli->real_escape_string($_POST['moboColour'])}', '{$mysqli->real_escape_string($_POST['moboPrice'])}')";
            $insert = $mysqli->query($sql);

$mysqli->close();


header("Location:http://jbm15.brighton.domains/ci301-project/add.php");
exit();

 ?>