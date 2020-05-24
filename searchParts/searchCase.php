<?php
    //This file first creates the connection to the database using mysqli_connect.

    $mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');

    //The below code takes the part that was chosen on the 3rd page, queries the database for that parts data and finally outputs it to the page. This is repeated for each part in different files.

    $cmodelParam = $_GET['cmodel'];
    $cresult = $mysqli->query("SELECT * FROM pCase WHERE cID = '$cmodelParam'");
    $row = mysqli_fetch_assoc($cresult);
    echo $row['cBrand'];
    echo "</td> </tr> <tr> <th>Case Model: </th>";
    echo "<td>";
    echo $row['cModel'];
    echo "</td> </tr> <tr> <th>Type: </th>";
    echo "<td id='caseForm'>";
    echo $row['cType'];
    echo "</td></tr> <tr> <th>Image: </th>";
    echo "<td><img src='images/createParts/case/";
    echo $row['cImg'];
    echo "' id='partImg' alt='";
    echo $row['cAlt'];
    echo "' /></td></tr> <tr><th>Colour: </th>";
    echo "<td>";
    echo $row['cColour'];
    echo "</td></tr>";
    echo "<tr><th>Side Material: </th>";
    echo "<td>";
    echo $row['cSide'];
    echo "</td></tr>";
    echo "<tr><th>3.5&quot; Bays: </th>";
    echo "<td>";
    echo $row['c3'];
    echo "</td></tr>";
    echo "<tr><th>2.5&quot; Bays: </th>";
    echo "<td>";
    echo $row['c2'];
    echo "</td></tr>";
    echo "<tr><th>Average Price: </th>";
    echo "<td id='casePrice'>";
    echo "£";
    echo $row['cPrice'];
    echo "</td></tr></table>";
?>