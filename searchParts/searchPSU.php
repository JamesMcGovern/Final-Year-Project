<?php
    $mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');

    $cmodelParam = $_GET['cmodel'];
    $cresult = $mysqli->query("SELECT * FROM pPsu WHERE pID = '$cmodelParam'");
    $row = mysqli_fetch_assoc($cresult);
    echo $row['pBrand'];
    echo "</td></tr> <tr><th>PSU Model: </th> ";
    echo "<td>";
    echo $row['pModel'];
    echo "</td></tr>";
    echo "<tr> <th>Image: </th> ";
    echo "<td><img src='images/createParts/psu/";
    echo $row['pImg'];
    echo "' id='partImg' alt='";
    echo $row['pAlt'];
    echo "' /></td></tr>";
    echo "<tr><th>Efficiency Rating: </th>";
    echo "<td>";
    echo $row['pEffrating'];
    echo "</td></tr>";
    echo "<tr><th>Wattage: </th>";
    echo "<td id='psuWatt'>";
    echo $row['pWatt'];
    echo "</td></tr>";
    echo "<tr><th>Modularity: </th>";
    echo "<td>";
    echo $row['pModular'];
    echo "</td></tr>";
    echo "<tr><th>Average Price: </th>";
    echo "<td id='psuPrice'>";
    echo "£";
    echo $row['pPrice'];
    echo "</td></tr></table>";
?>