<?php
    $mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');

    $cmodelParam = $_GET['cmodel'];
    $cresult = $mysqli->query("SELECT * FROM pMobo WHERE mID = '$cmodelParam'");
    $row = mysqli_fetch_assoc($cresult);
    echo $row['mBrand'];
    echo "</td> </tr> <tr> <th>Motherboard Model: </th>";
    echo "<td>";
    echo $row['mModel'];
    echo "</td></tr>";
    echo "<tr> <th>Image: </th> ";
    echo "<td><img src='images/createParts/mobo/";
    echo $row['mImg'];
    echo "' id='partImg' alt='";
    echo $row['mAlt'];
    echo "' /></td></tr>";
    echo "<tr> <th>Motherboard Socket: </th>";
    echo "<td id='moboSock'>";
    echo $row['mSocket'];
    echo "</td></tr>";
    echo "<tr><th>Form Factor: </th>";
    echo "<td id='moboForm'>";
    echo $row['mForm'];
    echo "</td></tr>";
    echo "<tr><th>DIMM Slots: </th>";
    echo "<td id='dimmCount'>";
    echo $row['mDimm'];
    echo "</td></tr>";
    echo "<tr><th>Maximum RAM: </th>";
    echo "<td>";
    echo $row['mMaxram'];
    echo "</td></tr>";
    echo "<tr><th>Motherboard Colour: </th>";
    echo "<td>";
    echo $row['mColour'];
    echo "</td></tr>";
    echo "<tr><th>Average Price: </th>";
    echo "<td id='moboPrice'>";
    echo "£";
    echo $row['mPrice'];
    echo "</td></tr></table>";
?>