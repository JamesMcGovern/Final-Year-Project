<!DOCTYPE html>

<!-- Standard HTML set up with some added functionality for fluidity. -->

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        
        <!-- Here i connect the page to the necessary style sheets. -->

        <link rel="stylesheet" type="text/css" href="normalize.css">
        <link rel="stylesheet" type="text/css" href="styles.css">
        
        
        <!-- Addition of shortcut icon. -->
        <link rel="shortcut icon" href="favicon.ico">

		
    <title>Make your Own!</title>
    
    <!-- Here i connect to the database using an sql query within php. -->
    <?php
    $mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');
    ?>
	</head>

<body class='center'>
    <!-- Here i am connecting to the required ajax library and personal javascript file. -->
    <script type="text/javascript" src="default.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<div id="wrapper">
	
    <header>
        <img class="imgLogo" src="images/coolericon.png" alt="Logo for the application that displays a CPU's Cooler.">
        <br/>
		<h6>Make your Own!</h6>
	</header>
	
    <main>
        <!-- Adding the buttons for navigation to the sides of the page -->
        <div id="leftnav" class="leftnav">
            <a href="build.php" id="left">Build! &nbsp;&nbsp; <</a>
        </div>
        
        <div id="mySidenav" class="sidenav">
            <a href="info.php" id="build">>   &nbsp;&nbsp;&nbsp;&nbsp;Info!</a>
        </div>

    	<section>
        <br/>
        	<h2>Choose from the list of parts below to form your own build!</h2>
	
	<!-- The following is a form for the parts. Each select/dropdown is populated with data from the database. The database has been connected to using php/sql queries. On change, the dropdowns call specific update functions within default.js that use ajax to change information. -->
        <form id="parts">
        <fieldset>
            <legend>Choose your parts</legend>
            Any parts marked with * are required<br/><br/>
            <label for="CPU">CPU*</label><br/>
            <?php
                $cresult = $mysqli->query("SELECT * FROM pCpu ORDER BY ID asc");
            ?>
                <select id="CPU" name="CPU" onchange="myUpdateFunc()">
                <option value="" disabled selected>Select your Part</option>
                <?php
                while ($rows = $cresult->fetch_assoc()) {
                    $cmodel = $rows['cModel'];
                    $cbrand = $rows['cBrand'];
                    echo "<option value='$cmodel'>$cbrand $cmodel</option>";
 
                }
                
                ?>
                </select>
                <!-- The above php uses certain attributes from the database to retrieve specifics for the part. The ones used here are for the model and the brand of the part. -->
                <br/>
                <!-- The results from the function are placed in the below div -->
                <div id="divResults">
               
                </div>
                <br/><br/>
                
                <label for="Cooler">CPU Cooler</label><br/>
                <?php
                    $cresult = $mysqli->query("SELECT * FROM pCooler ORDER BY cID asc");
                ?>
                <select id="Cooler" name="Cooler" onchange="coolerUpdateFunc()">
                <option value="" disabled selected>Select your Part</option>
                <?php
                while ($rows = $cresult->fetch_assoc()) {
                    $cmodel = $rows['cModel'];
                    $cbrand = $rows['cBrand'];
                    echo "<option value='$cmodel'>$cbrand $cmodel</option>";
                }
                ?>
                </select>
                
                <br/>

                <div id="coolerResults">
               
                </div>
                <br/><br/>
                
            <label for="RAM">RAM*</label><br/>
            <?php
                $rresult = $mysqli->query("SELECT * FROM pRam ORDER BY ID asc");
            ?>
                <select id="RAM" name="RAM" onchange="ramUpdateFunc()">
                <option value="" disabled selected>Select your Part</option>
                <?php
                while ($rows = $rresult->fetch_assoc()) {
                    $rmodel = $rows['rModel'];
                    $rbrand = $rows['rBrand'];
                    echo "<option value='$rmodel'>$rbrand $rmodel</option>";
                }
                ?>
                </select>
                
                <br/>

                <div id="ramResults">
               
                </div>
                <br/><br/>
                
            <label for="Mobo">Motherboard*</label><br/>
            <?php
                $mresult = $mysqli->query("SELECT * FROM pMobo ORDER BY mID asc");
            ?>
                <select id="Mobo" name="Mobo" onchange="moboUpdateFunc()">
                <option value="" disabled selected>Select your Part</option>
                <?php
                while ($rows = $mresult->fetch_assoc()) {
                    $mmodel = $rows['mModel'];
                    $mbrand = $rows['mBrand'];
                    echo "<option value='$mmodel'>$mbrand $mmodel</option>";
                }
                ?>
                </select>
                <br/>

                <div id="moboResults">
               
                </div>
                <br/><br/>
                
                <label for="PSU">PSU*</label><br/>
                <?php
                    $presult = $mysqli->query("SELECT * FROM pPsu ORDER BY pID asc");
                ?>
                <select id="PSU" name="PSU" onchange="PSUUpdateFunc()">
                <option value="" disabled selected>Select your Part</option>
                <?php
                while ($rows = $presult->fetch_assoc()) {
                    $pmodel = $rows['pModel'];
                    $pbrand = $rows['pBrand'];
                    echo "<option value='$pmodel'>$pbrand $pmodel</option>";
                }
                ?>
                </select>
                <br/>
                
                <div id="PSUResults">
               
                </div>
                <br/><br/>
                
                <label for="GPU">GPU</label><br/>
                <?php
                    $gresult = $mysqli->query("SELECT * FROM pGpu ORDER BY gID asc");
                ?>
                <select id="GPU" name="GPU" onchange="GPUUpdateFunc()">
                <option value="" disabled selected>Select your Part</option>
                <?php
                while ($rows = $gresult->fetch_assoc()) {
                    $gmodel = $rows['gModel'];
                    $gbrand = $rows['gBrand'];
                    echo "<option value='$gmodel'>$gbrand $gmodel</option>";
                }
                ?>
                </select>
                <br/>
                
                <div id="GPUResults">
               
                </div>
                <br/><br/>
                
            <label for="Drive">Drive*</label><br/>
                <?php
                    $dresult = $mysqli->query("SELECT * FROM pDrive ORDER BY dID asc");
                ?>
                <select id="Drive" name="Drive" onchange="DriveUpdateFunc()">
                <option value="" disabled selected>Select your Part</option>
                <?php
                while ($rows = $dresult->fetch_assoc()) {
                    $dmodel = $rows['dModel'];
                    $dbrand = $rows['dBrand'];
                    echo "<option value='$dmodel'>$dbrand $dmodel</option>";
                }
                ?>
                </select>
                <br/>
                
                <div id="DriveResults">
               
                </div>
                <br/><br/>
                
            <label for="Case">Case*</label><br/>
                <?php
                    $cresult = $mysqli->query("SELECT * FROM pCase ORDER BY cID asc");
                ?>
                <select id="Case" name="Case" onchange="CaseUpdateFunc()">
                <option value="" disabled selected>Select your Part</option>
                <?php
                while ($rows = $cresult->fetch_assoc()) {
                    $cmodel = $rows['cModel'];
                    $cbrand = $rows['cBrand'];
                    echo "<option value='$cmodel'>$cbrand $cmodel</option>";
                }
                ?>
                </select>
                <br/>
                
                <div id="CaseResults">
               
                </div>
                <br/><br/>
        </fieldset>
         
         <!-- The below fieldset contains the results from the compatibility, wattage and price functions. -->           
        <fieldset class='inf'>
            <legend>Further Info</legend>
            <strong>Compatibility:</strong><br/> <div id="Compat">
            </div>
            
            <br/>
            <strong>Wattage:</strong> <div id="WattResults">
                0
            </div>W<br/><br/>
            <strong>Price:</strong> £<div id="PriceResults">
                0
            </div>
            <br/>
            
            
        </fieldset>
        <br/>
        
        </form>
            
        </section>
          
    
    </main>

  
	<footer>
	    <small>Due to certain copyright laws, the images for each part are not specific to that part. Alternatively, I have used images of parts that show off similarities to the real thing to give a realistic idea of what you can expect of it.</small>
		<br/>
		<small>© 2020, James Beck McGovern.</small>
	</footer>

	</div>

</body></html>