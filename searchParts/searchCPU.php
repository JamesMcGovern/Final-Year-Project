<?php
    $mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');

    $cmodelParam = $_GET['cmodel'];
    $cresult = $mysqli->query("SELECT * FROM pCpu WHERE ID = '$cmodelParam'");
    $row = mysqli_fetch_assoc($cresult);
    echo $row['cBrand'];
    echo "</td> </tr> <tr> <th>CPU Model: </th> ";
    echo "<td>";
    echo $row['cModel'];
    echo "</td></tr>";
    echo "<tr> <th>Image: </th> ";
    echo "<td><img src='images/createParts/cpu/";
    echo $row['cImg'];
    echo "' id='partImg' alt='";
    echo $row['cAlt'];
    echo "' /></td></tr>";
    echo "<tr> <th>CPU Socket: </th>";
    echo "<td id='cpuSock'>";
    echo $row['cSocket'];
    echo "</td></tr>";
    echo "<tr><th>CPU Core Count: </th>";
    echo "<td>";
    echo $row['cCount'];
    echo "</td></tr>";
    echo "<tr><th>CPU Clock Speed: </th>";
    echo "<td>";
    echo $row['cCore'];
    echo "</td></tr>";
    echo "<tr><th>CPU Boosted Clock Speed: </th>";
    echo "<td>";
    echo $row['cBoost'];
    echo "</td></tr>";
    echo "<tr><th>CPU TDP: </th>";
    echo "<td id='cpuWatt'>";
    echo $row['cTDP'];
    echo "</td></tr>";
    echo "<tr><th>Integrated Graphics: </th>";
    echo "<td>";
    echo $row['cIG'];
    echo "</td></tr>";
    echo "<tr><th>Average Price: </th>";
    echo "<td id='cpuPrice'>";
    echo "£";
    echo $row['cPrice'];
    echo "</td></tr></table>";
?>