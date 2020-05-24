<?php
$mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');

$sql = "INSERT INTO pPsu (pModel, pEffrating, pWatt, pModular, pPrice) VALUES ('{$mysqli->real_escape_string($_POST['psuModel'])}', '{$mysqli->real_escape_string($_POST['psuEff'])}', '{$mysqli->real_escape_string($_POST['psuWatt'])}', '{$mysqli->real_escape_string($_POST['psuMod'])}', '{$mysqli->real_escape_string($_POST['psuPrice'])}')";
            $insert = $mysqli->query($sql);

$mysqli->close();


header("Location:http://jbm15.brighton.domains/ci301-project/add.php");
exit();

 ?>