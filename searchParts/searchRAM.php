<?php
    $mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');

    $cmodelParam = $_GET['cmodel'];
    $cresult = $mysqli->query("SELECT * FROM pRam WHERE ID = '$cmodelParam'");
    $row = mysqli_fetch_assoc($cresult);
    echo $row['rBrand'];
    echo "</td></tr> <tr><th>RAM Model: </th>";
    echo "<td>";
    echo $row['rModel'];
    echo "</td></tr>";
    echo "<tr> <th>Image: </th> ";
    echo "<td><img src='images/createParts/ram/";
    echo $row['rImg'];
    echo "' id='partImg' alt='";
    echo $row['rAlt'];
    echo "' /></td></tr>";
    echo "<tr><th>RAM Speed: </th>";
    echo "<td>";
    echo $row['rSpeed'];
    echo "</td></tr>";
    echo "<tr><th>RAM Modules: </th>";
    echo "<td id='rMods'>";
    echo $row['rModules'];
    echo "</td></tr>";
    echo "<tr><th>RAM Colour: </th>";
    echo "<td>";
    echo $row['rColour'];
    echo "</td></tr>";
    echo "<tr><th>Average Price: </th>";
    echo "<td id='ramPrice'>";
    echo "£";
    echo $row['rPrice'];
    echo "</td></tr></table>";
?>