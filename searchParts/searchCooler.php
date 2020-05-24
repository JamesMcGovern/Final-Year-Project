<?php
    $mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');

    $cmodelParam = $_GET['cmodel'];
    $cresult = $mysqli->query("SELECT * FROM pCooler WHERE cID = '$cmodelParam'");
    $row = mysqli_fetch_assoc($cresult);
    echo $row['cBrand'];
    echo "</td></tr> <tr><th>CPU Model: </th>";
    echo "<td>";
    echo $row['cModel'];
    echo "</td></tr>";
    echo "<tr><th>Image: </th>";
    echo "<td><img src='images/createParts/cooler/";
    echo $row['cImg'];
    echo "'id='partImg' alt='";
    echo $row['cAlt'];
    echo "' /></td></tr>";
    echo "<tr><th>CPU Socket: </th>";
    echo "<td>";
    echo $row['cSocket'];
    echo "</td></tr>";
    echo "<tr><th>Cooler Type: </th>";
    echo "<td>";
    echo $row['cType'];
    echo "</td></tr>";
    echo "<tr><th>Cooler Colour: </th>";
    echo "<td>";
    echo $row['cColour'];
    echo "</td></tr>";
    echo "<tr><th>Average Price: </th>";
    echo "<td id='coolerPrice'>";
    echo "£";
    echo $row['cPrice'];
    echo "</td></tr></table>";
?>