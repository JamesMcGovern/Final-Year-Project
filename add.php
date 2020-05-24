<!DOCTYPE html>

<!-- Standard HTML set up with some added functionality for fluidity. -->

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <!-- Here i connect the page to the necessary style sheets. -->

        <link rel="stylesheet" type="text/css" href="normalize.css">
        <link rel="stylesheet" type="text/css" href="styles.css">
        
        <!-- Addition of shortcut icon. -->
        <link rel="shortcut icon" href="favicon.ico">


    <title>Add More Parts</title>
    
    <!-- Here i connect to the database using an sql query within php. -->
    <?php
        $mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');
        
    
    ?>
	</head>

<body class='center'>
    <!-- Here i am connecting to the relevant scripts. One is the javascript document i have created and the other an ajax library. -->
    <script type="text/javascript" src="default.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<div id="wrapper">
	
    <header>
        <img class="imgLogo" src="images/coolericon.png" alt="Logo for the application that displays a Cooler."> <!-- Here i add the same shortcut icon to the corner of the page. -->
        <br/>
		<h6>Add More Parts!</h6>
	</header>
	
    <main>
        
    	<section style="text-align: center;">
        <br/>
        	<h2>Choose the type of part and add the necessary details</h2>
        	<!-- 
        	The following creates a hidden form for each part, forms display based on the below dropdown selection. The onchange addPart() function changes the form based on the selection. 
        	The submit button opens a different php file depending on the part selected. The php form runs a specific query that adds the part data to the corresponding table.
        	-->
	<div id="parts">
        <fieldset>
            <legend>Add your part</legend>
            <label for="parts">Select a Part</label><br/>
                <select id="parts" name="parts" onchange="addPart()">
                <option value="" disabled selected>Select your Part</option>
                <option value="CPU">CPU</option>
                <option value="Cooler">Cooler</option>
                <option value="RAM">RAM</option>
                <option value="Motherboard">Motherboard</option>
                <option value="PSU">PSU</option>
                <option value="GPU">GPU</option>
                <option value="Drive">Drive</option>
                <option value="Case">Case</option>
                </select>
                
                <br/><br/>
                
                <div id="cpuForm" style="display: none;">
                    <table width="100%">
                        <form id="newCpu" method="post" action="addparts/CPUForm.php">
                            <tr><th>
                              <label for="cpuManu">CPU Manufacturer:</label>
                              </th><td>
                              <input type="text" id="cpuManu" name="cpuManu" required>
                            </td></tr>
                            <tr><th>
                              <label for="cpuModel">CPU Model:</label>
                              </th><td>
                              <input type="text" id="cpuModel" name="cpuModel" required>
                            </td></tr>
                            <tr><th>
                              <label for="cpuSocket">CPU Socket:</label>
                              </th><td>
                              <input type="text" id="cpuSocket" name="cpuSocket" required>
                            </td></tr>
                            <tr><th>
                              <label for="cpuCore">Core Count:</label>
                            </th><td>
                              <input type="text" id="cpuCore" name="cpuCore" required>
                            </td></tr>
                            <tr><th>
                              <label for="cpuClock">Core Clock:</label>
                            </th><td>
                              <input type="text" id="cpuClock" name="cpuClock" required>
                            </td></tr>
                            <tr><th>
                              <label for="cpuBoost">Core Boost:</label>
                            </th><td>
                              <input type="text" id="cpuBoost" name="cpuBoost" required>
                            </td></tr>
                            <tr><th>
                              <label for="cpuTdp">Wattage (TDP):</label>
                            </th><td>
                              <input type="text" id="cpuTdp" name="cpuTdp" required>
                            </td></tr>
                            <tr><th>
                              <label for="cpuIg">Integrated Graphics:</label>
                            </th><td>
                              <input type="text" id="cpuIg" name="cpuIg" required>
                            </td></tr>
                            <tr><th>
                              <label for="cpuPrice">Price:</label>
                            </th><td>
                              <input type="text" id="cpuPrice" name="cpuPrice" required>
                            </td></tr>
                            <tr><td></td>
                                <td><br/><br/>
                                <input type="submit" value="Submit Part">
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
                
                <div id="coolerForm" style="display: none;">
                    <table width="100%">
                       <form id="newCooler" method="post" action="addparts/coolerForm.php">
                            <tr><th>
                              <label for="coolerModel">Cooler Model:</label>
                              </th><td>
                              <input type="text" id="coolerModel" name="coolerModel" required>
                            </td></tr>
                            <tr><th>
                              <label for="coolerSocket">Socket:</label>
                            </th><td>
                              <input type="text" id="coolerSocket" name="coolerSocket" required>
                            </td></tr>
                            <tr><th>
                              <label for="coolerType">Cooler Type:</label>
                            </th><td>
                              <input type="text" id="coolerType" name="coolerType" required>
                            </td></tr>
                            <tr><th>
                              <label for="coolerColour">Colour:</label>
                            </th><td>
                              <input type="text" id="coolerColour" name="coolerColour" required>
                            </td></tr>
                            <tr><th>
                              <label for="coolerPrice">Price:</label>
                            </th><td>
                              <input type="text" id="coolerPrice" name="coolerPrice" required>
                            </td></tr>
                            <tr><td></td>
                                <td><br/><br/>
                                <input type="submit" value="Submit Part">
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
                
                <div id="ramForm" style="display: none;">
                    <table width="100%">
                        <form id="newRam" method="post" action="addparts/ramForm.php">
                            <tr><th>
                              <label for="ramModel">RAM Model:</label>
                              </th><td>
                              <input type="text" id="ramModel" name="ramModel" required>
                            </td></tr>
                            <tr><th>
                              <label for="ramClock">Clock Speed:</label>
                            </th><td>
                              <input type="text" id="ramClock" name="ramClock" required>
                            </td></tr>
                            <tr><th>
                              <label for="ramModules">Modules:</label>
                            </th><td>
                              <input type="text" id="ramModules" name="ramModules" required>
                            </td></tr>
                            <tr><th>
                              <label for="ramColour">Colour:</label>
                            </th><td>
                              <input type="text" id="ramColour" name="ramColour" required>
                            </td></tr>
                            <tr><th>
                              <label for="ramPrice">Price:</label>
                            </th><td>
                              <input type="text" id="ramPrice" name="ramPrice" required>
                            </td></tr>
                            <tr><td></td>
                                <td><br/><br/>
                                <input type="submit" value="Submit Part">
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
                
                <div id="moboForm" style="display: none;">
                    <table width="100%">
                        <form id="newMobo" method="post" action="addparts/moboForm.php">
                            <tr><th>
                              <label for="moboModel">Motherboard Model:</label>
                              </th><td>
                              <input type="text" id="moboModel" name="moboModel" required>
                            </td></tr>
                            <tr><th>
                              <label for="moboSocket">Motherboard Socket:</label>
                              </th><td>
                              <input type="text" id="moboSocket" name="moboSocket" required>
                            </td></tr>
                            <tr><th>
                              <label for="moboForm">Form Factor:</label>
                            </th><td>
                              <input type="text" id="moboForm" name="moboForm" required>
                            </td></tr>
                            <tr><th>
                              <label for="moboDimm">Dimm Slots:</label>
                            </th><td>
                              <input type="text" id="moboDimm" name="moboDimm" required>
                            </td></tr>
                            <tr><th>
                              <label for="moboMaxram">Max RAM:</label>
                            </th><td>
                              <input type="text" id="moboMaxram" name="moboMaxram" required>
                            </td></tr>
                            <tr><th>
                              <label for="moboColour">Colour:</label>
                            </th><td>
                              <input type="text" id="moboColour" name="moboColour" required>
                            </td></tr>
                            <tr><th>
                              <label for="moboPrice">Price:</label>
                            </th><td>
                              <input type="text" id="moboPrice" name="moboPrice" required>
                            </td></tr>
                            <tr><td></td>
                                <td><br/><br/>
                                <input type="submit" value="Submit Part">
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
                
                <div id="psuForm" style="display: none;">
                    <table width="100%">
                        <form id="newPsu" method="post" action="addparts/psuForm.php">
                            <tr><th>
                              <label for="psuModel">PSU Model:</label>
                              </th><td>
                              <input type="text" id="psuModel" name="psuModel" required>
                            </td></tr>
                            <tr><th>
                              <label for="psuEff">Efficiency Rating:</label>
                            </th><td>
                              <input type="text" id="psuEff" name="psuEff" required>
                            </td></tr>
                            <tr><th>
                              <label for="psuWatt">Wattage:</label>
                            </th><td>
                              <input type="text" id="psuWatt" name="psuWatt" required>
                            </td></tr>
                            <tr><th>
                              <label for="psuMod">Modularity:</label>
                            </th><td>
                              <input type="text" id="psuMod" name="psuMod" required>
                            </td></tr>
                            <tr><th>
                              <label for="psuPrice">Price:</label>
                            </th><td>
                              <input type="text" id="psuPrice" name="psuPrice" required>
                            </td></tr>
                            <tr><td></td>
                                <td><br/><br/>
                                <input type="submit" value="Submit Part">
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
                
                <div id="gpuForm" style="display: none;">
                    <table width="100%">
                        <form id="newGpu" method="post" action="addparts/gpuForm.php">
                            <tr><th>
                              <label for="gpuModel">GPU Model:</label>
                              </th><td>
                              <input type="text" id="gpuModel" name="gpuModel" required>
                            </td></tr>
                            <tr><th>
                              <label for="gpuChipset">Chipset:</label>
                              </th><td>
                              <input type="text" id="gpuChipset" name="gpuChipset" required>
                            </td></tr>
                            <tr><th>
                              <label for="gpuMemory">Memory:</label>
                            </th><td>
                              <input type="text" id="gpuMemory" name="gpuMemory" required>
                            </td></tr>
                            <tr><th>
                              <label for="gpuClock">Core Clock:</label>
                            </th><td>
                              <input type="text" id="gpuClock" name="gpuClock" required>
                            </td></tr>
                            <tr><th>
                              <label for="gpuBoost">Core Boost:</label>
                            </th><td>
                              <input type="text" id="gpuBoost" name="gpuBoost" required>
                            </td></tr>
                            <tr><th>
                              <label for="gpuTdp">Wattage (TDP):</label>
                            </th><td>
                              <input type="text" id="gpuTdp" name="gpuTdp" required>
                            </td></tr>
                            <tr><th>
                              <label for="gpuInterface">Interface:</label>
                            </th><td>
                              <input type="text" id="gpuInterface" name="gpuInterface" required>
                            </td></tr>
                            <tr><th>
                              <label for="gpuColour">Colour:</label>
                            </th><td>
                              <input type="text" id="gpuColour" name="gpuColour" required>
                            </td></tr>
                            <tr><th>
                              <label for="gpuPrice">Price:</label>
                            </th><td>
                              <input type="text" id="gpuPrice" name="gpuPrice" required>
                            </td></tr>
                            <tr><td></td>
                                <td><br/><br/>
                                <input type="submit" value="Submit Part">
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
                
                <div id="driveForm" style="display: none;">
                    <table width="100%">
                        <form id="newDrive" method="post" action="addparts/driveForm.php">
                            <tr><th>
                              <label for="driveModel">Drive Model:</label>
                              </th><td>
                              <input type="text" id="driveModel" name="driveModel" required>
                            </td></tr>
                            <tr><th>
                              <label for="driveType">Type:</label>
                            </th><td>
                              <input type="text" id="driveType" name="driveType" v>
                            </td></tr>
                            <tr><th>
                              <label for="driveStorage">Storage:</label>
                            </th><td>
                              <input type="text" id="driveStorage" name="driveStorage" required>
                            </td></tr>
                            <tr><th>
                              <label for="driveForm">Form Factor:</label>
                            </th><td>
                              <input type="text" id="driveForm" name="driveForm" required>
                            </td></tr>
                            <tr><th>
                              <label for="driveInterface">Interface:</label>
                            </th><td>
                              <input type="text" id="driveInterface" name="driveInterface" required>
                            </td></tr>
                            <tr><th>
                              <label for="drivePrice">Price:</label>
                            </th><td>
                              <input type="text" id="drivePrice" name="drivePrice" required>
                            </td></tr>
                            <tr><td></td>
                                <td><br/><br/>
                                <input type="submit" value="Submit Part">
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
                
                <div id="caseForm" style="display: none;">
                    <table width="100%">
                        <form id="newCase" method="post" action="addparts/caseForm.php">
                            <tr><th>
                              <label for="caseModel">Case Model:</label>
                              </th><td>
                              <input type="text" id="caseModel" name="caseModel" required>
                            </td></tr>
                            <tr><th>
                              <label for="caseType">Type:</label>
                            </th><td>
                              <input type="text" id="caseType" name="caseType" required>
                            </td></tr>
                            <tr><th>
                              <label for="caseColour">Colour:</label>
                            </th><td>
                              <input type="text" id="caseColour" name="caseColour" required>
                            </td></tr>
                            <tr><th>
                              <label for="caseSide">Side Panel:</label>
                            </th><td>
                              <input type="text" id="caseSide" name="caseSide" required>
                            </td></tr>
                            <tr><th>
                              <label for="case3">3.5" Bays:</label>
                            </th><td>
                              <input type="text" id="case3" name="case3" required>
                            </td></tr>
                            <tr><th>
                              <label for="case2">2.5" Bays:</label>
                            </th><td>
                              <input type="text" id="case2" name="case2" required>
                            </td></tr>
                            <tr><th>
                              <label for="casePrice">Price:</label>
                            </th><td>
                              <input type="text" id="casePrice" name="casePrice" required>
                            </td></tr>
                            <tr><td></td>
                                <td><br/><br/>
                                <input type="submit" value="Submit Part">
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
                
                <br/><br/>
                
        </div>
            
        </section>
          
    
    </main>

  
	<footer>
		<small>© 2020, James Beck McGovern.</small>
	</footer>

	</div>

</body></html>