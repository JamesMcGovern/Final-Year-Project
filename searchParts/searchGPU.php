<?php
    $mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');

    $cmodelParam = $_GET['cmodel'];
    $cresult = $mysqli->query("SELECT * FROM pGpu WHERE gID = '$cmodelParam'");
    $row = mysqli_fetch_assoc($cresult);
    echo $row['gBrand'];
    echo "</td> </tr> <tr> <th>GPU Model: </th>";
    echo "<td>";
    echo $row['gModel'];
    echo "</td></tr>";
    echo "<tr> <th>Image: </th> ";
    echo "<td><img src='images/createParts/gpu/";
    echo $row['gImg'];
    echo "' id='partImg' alt='";
    echo $row['gAlt'];
    echo "' /></td></tr>";
    echo "<tr> <th>Chipset: </th>";
    echo "<td>";
    echo $row['gChipset'];
    echo "</td></tr>";
    echo "<tr><th>Memory: </th>";
    echo "<td>";
    echo $row['gMemory'];
    echo "</td></tr>";
    echo "<tr><th>Core Clock: </th>";
    echo "<td>";
    echo $row['gCore'];
    echo "</td></tr>";
    echo "<tr><th>Boost Clock: </th>";
    echo "<td>";
    echo $row['gBoost'];
    echo "</td></tr>";
    echo "<tr><th>Wattage: </th>";
    echo "<td id='gpuWatt'>";
    echo $row['gTdp'];
    echo "</td></tr>";
    echo "<tr><th>Interface: </th>";
    echo "<td>";
    echo $row['gInterface'];
    echo "</td></tr>";
    echo "<tr><th>Colour: </th>";
    echo "<td>";
    echo $row['gColour'];
    echo "</td></tr>";
    echo "<tr><th>Average Price: </th>";
    echo "<td id='gpuPrice'>";
    echo "£";
    echo $row['gPrice'];
    echo "</td></tr></table>";
?>