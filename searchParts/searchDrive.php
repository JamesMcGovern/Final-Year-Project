<?php
    $mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');

    $cmodelParam = $_GET['cmodel'];
    $cresult = $mysqli->query("SELECT * FROM pDrive WHERE dID = '$cmodelParam'");
    $row = mysqli_fetch_assoc($cresult);
    echo $row['dBrand'];
    echo "</td> </tr> <tr> <th>Drive Model: </th>";
    echo "<td>";
    echo $row['dModel'];
    echo "</td></tr>";
    echo "<tr> <th>Image: </th> ";
    echo "<td><img src='images/createParts/drive/";
    echo $row['dImg'];
    echo "' id='partImg' alt='";
    echo $row['dAlt'];
    echo "' /></td></tr>";
    echo "<tr> <th>Type: </th>";
    echo "<td>";
    echo $row['dType'];
    echo "</td></tr>";
    echo "<tr><th>Storage: </th>";
    echo "<td>";
    echo $row['dStorage'];
    echo "</td></tr>";
    echo "<tr><th>Form Factor: </th>";
    echo "<td>";
    echo $row['dForm'];
    echo "</td></tr>";
    echo "<tr><th>Interface: </th>";
    echo "<td>";
    echo $row['dInterface'];
    echo "</td></tr>";
    echo "<tr><th>Average Price: </th>";
    echo "<td id='drivePrice'>";
    echo "£";
    echo $row['dPrice'];
    echo "</td></tr></table>";
?>