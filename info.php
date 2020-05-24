<!DOCTYPE html>

<!-- Standard HTML set up with some added functionality for fluidity. -->

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        
        <!-- Here i connect the page to the necessary style sheets. -->

        <link rel="stylesheet" type="text/css" href="normalize.css">
        <link rel="stylesheet" type="text/css" href="styles.css">
        
        
        <!-- Addition of shortcut icon. -->
        <link rel="shortcut icon" href="favicon.ico">

		
    <title>What Makes a Computer Run?</title>
    
    
    <!-- Here i connect to the database using an sql query within php. -->
    <?php
    $mysqli = mysqli_connect('localhost', 'jbm15_james', 'Q;Ki&3}+OM*u', 'jbm15_Parts');
    ?>
	</head>

<body id="infoPage" class='center'>
    
    <!-- Here i am connecting to the required ajax library. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<div id="wrapper">
	
    <header>
        <img class="imgLogo" src="images/coolericon.png" alt="Logo for the application that displays a CPU's Cooler.">
        <br/>
		<h6>What Makes a Computer Run?</h6>
	</header>
	
    <main>

    <!-- Adding a navigation button to the right hand side of the page. -->
    <div id="mySidenav" class="sidenav">
      <a href="build.php" id="build">>  &nbsp;&nbsp;&nbsp;Build!</a>
    </div>
    
    	<section>
        <br/>
        	<h2>Click on a part below to find out what it is!</h2>
        <!-- The below is simply information granted to the user regarding the content of the site. -->
        	<div class="centertext" style="margin-left: 2%; margin-right: 2%">
        	<p><strong>This Web App includes 3 (three) main pages that contain the following!</strong>
        	<br/>
        	<ol>
        	    <li>
        	        The page you are currently on. This page includes information about all the different parts in a computer build. Most sections include both text and videos to help you out. Any text that is bold/hyperlinked will also be included within the dictionary!
        	    </li>
        	    <br/>
        	    <li>
        	        This page will be the physical building of a computer. You will get to drag and drop parts on to eachother to simulate the building of a system. You may also encounter some questions along the way so make sure to pay attention!
        	    </li>
        	    <br/>
        	    <li>
        	        This final page will be your area to build a computer from real life part examples! Choose different parts based on what you would like to use the system for and see if they would work together!
        	    </li>
        	</ol>
        	</p>
        	<!-- This button opens the dictionary modal. -->
        	<button type="button" onclick="dictClick()">Dictionary!</button>
        	</div>
        	<br/><br/>
        	
	    <!-- Each of the following modals uses the same functionality, only differing in content. 
	         These modals are opened upon part image click and feature text content, some contain image(s) and videos. Each then has a span in the top right corners that allow the modals to be closed.
	    -->
	    <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <h2>CPU (Central Processing Unit)</h2>
            <h3>The First Part Added to the Motherboard!</h3>
            <h3>What is it?</h3>
            <p>
                A CPU, or Central Processing Unit, is a core part of the PC build. The CPU does most of the heavy lifting within the system. Every process that runs and every time the user does anything on the computer, the processor handles it. 
                <br/><br/>
                A CPU's speed is measured on something called a clock speed. The higher the clock speed, the faster the processor can run/process tasks. To then add more layers to this they also have cores and threads which are in place to assist multiple processes to be run at once. The more cores, the more tasks can be completed.
                <br/><br/>
                From this we can see huge benefits from having fast clock speeds and higher core counts as more can be done at faster speeds rather than sacrificing speed for quantity or vice versa.
                <br/><br/>
                Finally, like many other parts within the PC build, the processor will require power to run. This is covered in more depth within the PSU discussion but its important to keep in mind.
                <h3>How to Choose One</h3>
                <br/>
                The type of processor you decide on entirely depends on what you intend to do with the computer. The easiest way to scale processors is by the below table:
                <br/><br/>
                <!-- Some tables are created throughout the modals. -->
                <table id="tBord" style="width:100%">
                    <tr>
                        <th>CPU</th>
                        <th>Capabilities</th>
                    </tr>
                    <tr>
                        <td>Ryzen 3 and Intel i3</td>
                        <td>Day to Day admin (such as browsing the web or using word processing software) and low to mid-range gaming.</td>
                    </tr>
                    <tr>
                        <td>Ryzen 5 and Intel i5</td>
                        <td>All of the above; plus more power to enable editing, such as video or photo and mid to high-range gaming. </td>
                    </tr>
                    <tr>
                        <td>Ryzen 7 and Intel i7</td>
                        <td>All of the above; Plus more power to enable high end editing with very fast rendering ad high range gaming.</td>
                    </tr>
                    <tr>
                        <td>Ryzen 9 and Intel i9</td>
                        <td>Has the ability to accomplish all of the above at lightning fast speeds.</td>
                    </tr>
                </table>
                <br/><br/>
                It is also important to note that CPU and Motherboard compatibility is very specific, you must get yourself a motherboard and CPU that will work with each other. This means you have to pay attention to 2 things, the CPUs generation and socket type, these can be easily compared on the product pages of the parts but for the sake of this tutorial I have chosen generations and sockets that will work regardless, apart from manufacturer, you must ensure that an intel cpu lines up with the correct motherboard and the same for AMD.
                <br/><br/>
                Below is another table to help with generations and socket types:
                <br/>
                <table id="tBord" style="width:100%">
                    <tr>
                        <th>Processor</th>
                        <th>Socket</th>
                    </tr>
                    <tr>
                        <td>All Ryzen Processors</td>
                        <td>AM4</td>
                    </tr>
                    <tr>
                        <td>Intel 6th-9th Gen</td>
                        <td>LGA1151</td>
                    </tr>
                    <tr>
                        <td>Intel 10th Gen</td>
                        <td>LGA1200</td>
                    </tr>
                </table>
                <br/><br/>
                As seen in the above table, all Ryzen (AMD) processors can work with the AM4 socket, this means that the processors will fit on any motherboard with an AM4 socket. However, this does not mean that the processor will definitely work straight out the box as the processors still have different generations. These generations can then work with certain motherboards that have been updated for these generations. For example: A 3rd generation Ryzen processor can work with a 3rd generation AM4 motherboard, however a motherboard of an earlier generation will have to be updated using an older processor before it can be used with the new generation processor. 
                <br/><br/>
                The Intel processors are very similar in that older generation motherboards must be updated in order to work with newer generation processors. Generations 6 to 9 do have the same socket which makes it easier when decided a CPU-Motherboard combo. However, the latest 10th generation has changed the socket which means if you did want to go with a newer type of CPU you must also get a new motherboard to match.
                <br/><br/>
                <h3>How to install</h3>
                Before building anything, there are a couple points that must be heavily thought about:
                <br/><br/>
                <ol>
                    <li>
            	        Make sure the build is in a dry environment with as little sources of static as possible. A dining room table is perfect as an example. Avoid wearing socks on a carpet floor as this generates a lot of static that could end up being discharged into the parts and frying them.
            	    </li>
            	    <br/>
            	    <li>
            	        To be safe it is also good practice to get yourself an anti-static band, this connects you to the case and keeps you grounded to avoid static discharge.
            	    </li>
        	    </ol>
                <br/>
                When installing a CPU there are a few things to consider. Firstly, you must have a motherboard that is compatible with your processor. This can be found with either part’s manufacturer, although it’s often best to check with the motherboards to gain a list of processors that are compatible. CPU’s are broken down between two different manufacturers, AMD or Intel. All motherboards can either work with AMD or Intel, never both.
                <br/><br/>
                Once you are sure your motherboard is compatible with your processor, you are free to place the processor in its socket. Starting, you must handle the processor with care, only touching the edges, if you can help it. Touching the pins on the bottom of the processor can potentially damage it and keep it from functioning properly.
                <br/><br/>
                Next, motherboards tend to have a lever that open up the socket ready for the processor to be placed.
                <br/><br/>
                Now. How do you know which orientation the CPU must be in? There is a simple way to tell, both on the socket on the motherboard and on the processor itself, there will be a little golden arrow. Simply align the arrows on both parts and lightly drop it into its socket, you shouldn’t be able to wobble the processor too much and it should be clear that it is properly in place.
                <br/><br/>
                Finally, just drop the lever into position from where it was originally, and you have successfully installed a CPU.
                <br/><br/>
                Well Done!
                <br/><br/>
                If you prefer more of a visual approach, below is a video including what was just explained!
                <br/><br/>
                <!-- One of the many videos on this page. These videos have their sources stored within the local structure and use the native video tag. -->
                <video width="" height="" controls>
                  <source src="videos/CPU NEWW.mp4" type="video/mp4">
                Your browser does not support the video tag.
                </video>
            </p>
          </div>
    
        </div>
        
        <div id="coolerModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>CPU Cooler</h2>
                <h3>The Second Part Added to the Motherboard!</h3>
            <h3>What is it?</h3>
                <p>
                As for the cooler, most processors come with one in the box. This is, as the name suggests, to keep the processor cool while it’s working. If you’re keeping your computer busy, your CPU will be working very hard, making it run hot too, the cooler has to keep up with this work and keep the CPU cool to stop it from overheating and either slowing down the system, causing freezes or shutting it down entirely. The type of cooler you go for depends on how much you intend to do with the computer, many day to day users, standard editors and low end gamers can get away with the cooler you get with the CPU.
                <br/><br/>
                If the plan is to get some high end editing or gaming done, then often times its best practice to invest in a better cpu cooler in order to keep up with the system. This will make sure that your CPU runs cool without any issue.
                <br/><br/>
                <h3>How to Choose One</h3>
                <br/>
                The type of cooler you decide on entirely depends on what you intend to do with the computer. In most cases the standard cooler that comes with the CPU is fine to use. The only reason you would need to look into an <a class="hLink" onclick="dictClick()"><strong>aftermarket</strong></a> cooler would be if you're either putting your processor under a lot of stress or <a class="hLink" onclick="dictClick()"><strong>overclocking</strong></a> any part of your system.
                <br/><br/>
                When choosing an <a class="hLink" onclick="dictClick()"><strong>aftermarket</strong></a> cooler you must first decide whether you would like a traditional air cooler or liquid cooling! Below describes the differences!
                <br/><br/>
                
                <table id="tBord" style="width:100%;">
                    <tr>
                        <th>Air Cooling</th>
                        <td>This is the traditional style of cooling that utilises a fan to keep cool air on the cpu and hot air off. Connected to this fan is a heat sink that is in direct contact with the cpu, this is designed to attract heat which keeps it off the cpu.</td>
                    </tr>
                    <tr>
                        <th>AiO (All in One)</th>
                        <td>AiO's traditionally use air cooling to keep the cpu cool but then further use liquid cooling to carry the hot air away for it to be dissapated then run back through to the cpu to repeat the process.</td>
                    </tr>
                </table>
                <br/><br/>
                From here the only thing you need to make sure of is that cooler has the correct connection to connect to your motherboard, although if the connection IS different then the cpu cooler will often have the necessary bracket included. However, if the cooler came with the cpu or you checked to make sure the cooler fits your socket type before hand, you will be good to go ahead!
                <br/><br/>
                <h3>How to install</h3>
                <br/>
                For this tutorial I will be installing an air cooler as they are easier to install and thus more beginner friendly.
                <br/><br/>
                Before considering anything else, it is important to understand whether or not you will be applying <a class="hLink" onclick="dictClick()"><strong>thermal paste</strong></a> to the CPU or not. Most coolers will come with some pre-applied, others will come with none applied but include a packet of paste and the rest will include neither. All coolers that come with the CPU will have some pre-applied, otherwise it is best practice to have some spare <a class="hLink" onclick="dictClick()"><strong>thermal paste</strong></a> on hand just in case it is needed.
                <br/><br/>
                When installing a cooler there are a few things to consider. Firstly, you must have a socket that is compatible. If you are using the cooler that came with the CPU then you are good to go (as long as your cpu and motherboard are compatible). If you are using an <a class="hLink" onclick="dictClick()"><strong>aftermarket</strong></a> cooler, as long as you purchase once that fits your CPU socket type you are good to go.
                <br/><br/>
                Most motherboards come with a plate that sits on the back of the motherboard and allows you to attach the cooler. In most cases this plate will fit your cooler just fine. If not, the cooler will come with another plate for you to use instead, just simply swap them out as they are usually not physically attached to the motherboard.
                <br/><br/>
                Now you are ready to install the cooler, from here (depending on the lock type), you will either have a latch or screws. Both are simple to install. With screws you simply align the screws with the screw holes on the back plate. Best practice is to only tighten the screws partially, then go round again and tighten them further one by one.
                <br/>
                <strong>Note:</strong> Make sure that you are not screwing too tight as you don't want to crush your processor, just to a point where the cooler doesnt move around!
                <br/><br/>
                With a latch mechanism you have a hook on either side of the cooler, one side will also have a lever. Hook the end without the lever to one side of the CPU (usually it is best to hook it on the side that allows the coolers power cord to be on top, this way it has easy access to its power pins). Now latch the other side and push the lever over. Simple as that! Make sure the cooler doesn't move and it's installed.
                <br/><br/>
                Well Done!
                <br/><br/>
                If you prefer more of a visual approach, below is a video including what was just explained!
                <br/><br/>
                <video width="" height="" controls>
                  <source src="videos/Cooler NEWW.mp4" type="video/mp4">
                Your browser does not support the video tag.
                </video>
                </p>
              </div>
        </div>
        
        <div id="ramModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>RAM (Random Access Memory)</h2>
                <h3>The Third Part Added to the Motherboard!</h3>
                <h3>What is it?</h3>
                <p>
                    <br/>
                    RAM stands for Random Access Memory and is mainly used as a resource for programs/processes to run themselves in temporarily. Although the speeds of RAM can be important, a massive part of it is the fact that it gives a ceiling for how much can be ran on the system at once, the more memory the more processes.
                    <br/><br/>
                    Many of the smaller processes within the system don’t affect the RAM too much, it’s mainly the larger, more specialised programs, games and web browsers when multiple tabs have been opened.
                    <br/><br/>
                    RAM does have set speeds to assist with the processes being run. The speed of RAM is its frequency and is measured very similarly to how a CPU is measured. When it comes down to the speed of RAM, it can be important depending on the brand of CPU you are going for. Ryzen processors require faster RAM (higher frequency) whereas Intel processors dont need as much.
                    <br/><br/>
                    The recommended speeds for a Ryzen processor are usually 3000MHz+, while Intel processors can run perfectly fine with mid-2000's+
                    <br/><br/>
                    There are also different types of RAM, i.e. DDR3 and DDR4, the majority of RAM you’ll see these days is DDR4 as this works with CPUs from 2015 onwards and is the current standard. DDR3 is more based towards CPUs from 2007-2015, this is also something that can be checked with the CPU manufacturer.
                    <br/><br/>
                    For the sake of this tutorial, I will be using DDR4 only.
                    <br/><br/>
                    <h3>How to choose one</h3>
                    <br/>
                    Choosing your RAM isn’t an overly difficult task, it is another case of picking based on what you intend to use the system for. Below is a table that provides this information.
                    <br/><br/>
                    <table id="tBord" style="width:100%">
                        <tr>
                            <th>RAM</th>
                            <th>Capability</th>
                        </tr>
                        <tr>
                            <td>4GB</td>
                            <td>Day to Day admin, basic gaming and web browsing.</td>
                        </tr>
                        <tr>
                            <td>8GB</td>
                            <td>All of the above; plus the ability to edit some smaller videos and photos, and some more mid range gaming.</td>
                        </tr>
                        <tr>
                            <td>16GB</td>
                            <td>All of the above; plus higher end rendering and gaming.</td>
                        </tr>
                        <tr>
                            <td>32GB</td>
                            <td>All of the above; Plus highest level rendering and gaming with the ability to run several pieces of specialist software at once.</td>
                        </tr>
                    </table>
                    <br/><br/>
                    You can get more RAM than 16, but most of the time this is overkill unless you plan on running whole servers or rendering Hollywood films!
                    <br/><br/>
                    <h3>How to Install</h3>
                    <br/>
                    RAM is possibly the easiest part of the build to install, it just requires a simple click into place into its DIMM slot(s). DIMM stands for Dual In-Line Memory Module, these slots can simply be called RAM slots as well, there’s no strict term. 
                    The slots are on the motherboard, and the installation of the RAM is best suited to be installed first as they become slightly more difficult once the motherboard is in the case.
                    In order to prepare the slots for the RAM you must first open the latches on the ends of the slots you will use, this helps lock the RAM into place when installed. Once you have your RAM in hand, simply line up the notches on the RAM stick and the slot and click into place.
                    <br/>
                    <strong>Note: </strong> Some DIMM slots will only have a latch one one side, this changes nothing about the overall install, just follow along as normal.
                    <br/><br/>
                    <br/><br/>
                If you prefer more of a visual approach, below is a video including what was just explained!
                <br/><br/>
                <video width="" height="" controls>
                  <source src="videos/RAM NEWW.mp4" type="video/mp4">
                Your browser does not support the video tag.
                </video>
                </p>
              </div>
        </div>
        
        <div id="moboModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Motherboard</h2>
                <h3>This part is used from start to finish!</h3>
                <p>
                    <h3>What is it?</h3>
                    <br/>
                    A motherboard is one of the most crucial parts to a computer system, it essentially allows for all other components to work together. Every part, in one way or another, will find itself connected to the motherboard.
                    <br/><br/>
                    Motherboards also have something called the BIOS installed on it, BIOS stands for Basic Input/Output System, this is a program pre-installed to help the user configure the system with an interactive user interface. Its main use is to give direct access to the different parts of the system and configure them how you seem fit. This could mean choosing a <a class="hLink" onclick="dictClick()"><strong>boot drive</strong></a> for your Operating System for example.
                    <br/><br/>
                    It is also very important to note that the size of the motherboard does matter in comparison to the case that you end up going for. The size of the motherboard is measured as its form factor, cases also share this method of measurement. Motherboards must always be either the same size as the case, or smaller. If the motherboard is larger it simply wont fit.
                    <br/><br/>
                    The form factors are (in order of largest to smallest): <a class="hLink" onclick="dictClick()"><strong>EATX</strong></a>, <a class="hLink" onclick="dictClick()"><strong>ATX</strong></a>, <a class="hLink" onclick="dictClick()"><strong>Micro ATX</strong></a>, <a class="hLink" onclick="dictClick()"><strong>Mini ATX</strong></a>, or <a class="hLink" onclick="dictClick()"><Strong>Mini ITX</strong></a>. There are more types, but you’ll rarely encounter anything beyond these sizes.
                    <br/><br/>
                    <h3>How to Choose One</h3>
                    <br/>
                    When choosing a Motherboard you must consider the CPU that you have chosen. Since CPU's and Motherboard can only work together on a specific basis, having a selected CPU means that you are narrowing down the amount of motherboards that you have to choose from. This is why it is best practice to have the processor chosen first.
                    <br/><br/>
                    Once your processor is chosen, you must look for your motherboard based on the socket type connected to the processor. Once you have found this and are searching based on this criteria. You then want to make sure that you are searching for motherboards that are compatible with the CPUs generation. This will be clearly outlined by both the CPU and Motherboard Manufacturers.
                    <br/><br/>
                    Essentially this decision is narrowed down to 2 things:
                    <ol>
                        <li>Is the motherboard compatible with the CPUs generation?</li>
                        <li>Is the motherboard compatible with the CPUs socket type?</li>
                    </ol>
                    <br/><br/>
                    From here the decision is completely subjective, you can choose what features you would like on the motherboard, how much memory it can support, the amount of a specific port it has e.t.c.
                    <br/><br/>
                    <h3>How to Install</h3>
                    <br/>
                    The installation of the actual motherboard isn’t too difficult, it just requires some aligning and a bit of fiddling to get all the screws into the case.
                    <br/><br/>
                    Before you add anything to the motherboard, it’s always good to check the case for how you’ll place the motherboard in. You’ll notice some screw holes on the base of the case, now these days most cases will come with something called <a class="hLink" onclick="dictClick()"><strong>standoffs</strong></a> already in place. If not, these will be supplied with your case, more on that in the case section.
                    <br/><br/>
                    Once the <a class="hLink" onclick="dictClick()"><strong>standoffs</strong></a> are clearly in place, you can place the motherboard down into the case and you’ll clearly see the holes in the motherboard align with the screw holes in the case.
                    <br/><br/>
                    BUT FIRST!
                    <br/><br/>
                    The best practice is to install as many parts as physically possible onto the motherboard before screwing it into the case, this will make the job much easier in the long run.
                    <br/><br/>
                    Ideally you want to install the CPU + COOLER and RAM first. When installing these, you will want to put the motherboard onto a sturdy, anti-static surface in order to protect some of its more delicate areas. To do this, you can simply put the motherboard onto the box that it came in.
                    <br/><br/>
                    Once you have done that, you can proceed with securing the motherboard. Now, before screwing it into the case you must ensure you have the right orientation, the best way to know is by aligning something called the <a class="hLink" onclick="dictClick()"><strong>IO Shield</strong></a>, this is placed at the back of the case as to protect and give access to the back-panel connectors, for things like USB sticks and other <a class="hLink" onclick="dictClick()"><strong>peripherals</strong></a>. This shield won’t inherently be installed, but this will come with your motherboard and just requires an easy clip into place.
                    <br/><br/>
                    Once you have the right orientation, you simply need to screw the motherboard firmly into place. Here it’s best to be firm but not over do it as you could warp the motherboard with too much pressure, screw the screws in tight to the point where the motherboard doesn’t lift anymore.
                    <br/><br/>
                    Once the screws are in, the motherboard has been successfully installed!
                    <br/><br/>
                    Well Done!
                    <br/><br/>
                    As the motherboard is used constantly throughout the building process, there is no video for this section. If you would like to see the motherboard being added to the case, check out the <a class="hLink" onclick="caseClick()">case</a> section!
                </p>
              </div>
        </div>
        
        
        <div id="psuModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>PSU (Power Supply Unit)</h2>
                <h3>The Sixth Part in the build!</h3>
                <h3>What is it?</h3>
                <p>
                    A Power Supply Unit is there to give power to the rest of the system. Each PSU can supply a certain amount of wattage, and the rest of the parts in the system must add up to a wattage amount that is greater than or equal to the amount of wattage the PSU can supply.
                    <br/><br/>
                    <h3>How to choose one</h3>
                    <br/>
                    Choosing a PSU is important as you want something that can power the whole system without issue. I have mentioned the wattage of a PSU, but it is also important to check the rating of the PSU in order to get one that is most efficient. The ratings are: Non-Rated, 80+, 80+ Bronze, 80+ Silver, 80+ Gold, 80+ Platinum and 80+ Titanium.
                    <br/><br/>
                    It is usually best practice to ignore non-rated PSU and 80+ PSUs. Bronze and above will suffice for most users as anything lower could put the rest of the parts as risk if a fault occurs.
                    <br/><br/>
                    Finally, PSUs also have a form factor. However, this is never an issue unless you have a Mini-ITX case. At which point a smaller PSU should be considered.
                    <br/><br/>
                    <h3>How to Install</h3>
                    <br/>
                    Installing a PSU, in most cases, just requires four screws. You simply line up the PSU in the bottom of the case with the fan facing either up or out in order to keep good airflow. Once done, simply screw the PSU to the case from the back using the screws supplied with the PSU.
                    <br/><br/>
                    Some Cases will have a PSU shroud, this will just require you to remove the shroud and put the case in as normal or put the PSU in through the other side of the case, behind the shroud.
                    <br/><br/>
                    Once this is done, you need to connect the PSU to the parts of your system, most of them will be self-explanatory but here is a table that gives a typical outline:
                    <br/><br/>
                    <table id="tBord" style="width:100%">
                        <tr>
                            <th>Component</th>
                            <th>Connection</th>
                        </tr>
                        <tr>
                            <td>GPU</td>
                            <td>Either one 6 pin and one 8 pin connector or one 8 pin.</td>
                        </tr>
                        <tr>
                            <td>CPU</td>
                            <td>One 8 pin connector.</td>
                        </tr>
                        <tr>
                            <td>Motherboard</td>
                            <td>Either a 20 or 24 pin connector.</td>
                        </tr>
                        <tr>
                            <td>Drives (Doesn't apply to m.2)</td>
                            <td>15 pin <a class="hLink" onclick="dictClick()"><strong>SATA</strong></a> connector.</td>
                        </tr>
                    </table>
                    <br/><br/>
                    <!-- This is one of the iframe tags and embeds a video from google drive. This is used instead of the video tag as there is not enough storage for all the videos added to the site. -->
                    <iframe src="https://drive.google.com/file/d/1zt4YESp9NBaZc-TcgpaeVz3WbuBft8WF/preview" width="640" height="480" allowfullscreen="allowfullscreen" ></iframe>
                </p>
              </div>
        </div>
        
        <div id="gpuModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>GPU (Graphics Processing Unit)</h2>
                <h3>The Final part in the build!</h3>
                <p>
                    <h3>What is it?</h3>
                    <br/>
                    A Graphics Processing Unit is a component that processes all graphics in the system, surprisingly. It’s main usage is to make sure that it is keeping up with all the graphical rendering being demanded by the system, this is why GPUs are so important in gaming and photo/video editing systems.
                    <br/><br/>
                    Different brands can make similar GPUs that follow the same model but just differ in things like build quality and price, which often means its best to shop around for the GPU rather than make a rash, early decision.
                    <h3>How to Choose one</h3>
                    <br/>
                    Choosing a GPU means considering a couple of things, one is to make sure that you have a PSU with enough power to supply to the GPU, as well as the rest of the system. Another thing to consider is what you will be playing on the system. Higher end games will require a higher specification, this means high clock speeds (how fast the GPU works). Good GPUs are not cheap but if you’re looking for a good performance in games with no lag, you’ll require a good GPU.
                    <br/><br/>
                    With this in mind you must consider the clock speed, which should be no lower than 1000MHz and 2GB of GDDR5 RAM. Most modern games can run on this kind of specification, but you may experience some performance issues.
                    <br/><br/>
                    Though this is the case, this decision is made slightly easier by the fact that all GPUs will fit all motherboards as the connection used is universally recognised.
                    <br/>
                    <h3>How to Install</h3>
                    <br/>
                    Graphics cards are usually installed last as they tend to take up the most space in a computer. They are installed just below the processor (in most cases) and are installed on a <a class="hLink" onclick="dictClick()"><strong>PCIe</strong></a> slot. The PCIe slot as mentioned will most likely be the one underneath where the CPU has been installed. However, it is best to check your motherboard manual where the actual best place is as it is fully based on the bandwidth allowance for that slot.
                    <br/>
                    If you were to choose a lane that has lower bandwidth, then you would be limiting the amount that you graphics card could do. In theory, it's like putting a speed limit on a car that could easily achieve much higher speeds.
                    <br/><br/>
                    Similar to the RAM, you open the latch on the slot first and fit the graphics card into place. You may notice on the back of the case there are some slots for the graphics card to be screwed on to. If this is the case, take of the shield that is currently on there and screw the card into place.
                    <br/><br/>
                    From here the last thing to do is connect up the power supply to the GPU and it is done!
                    <br/><br/>
                    <iframe src="https://drive.google.com/file/d/1iydpLBlUtuC-EW0vARMDgmj_umi-SP6F/preview" width="640" height="480" allowfullscreen="allowfullscreen"></iframe>
                </p>
              </div>
        </div>
        
        <div id="driveModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Drives</h2>
                <h3>The Fourth Part Added to the Motherboard! (For this example).</h3>
                <p>
                    <h3>What is it?</h3>
                    <br/>
                    The drives, to put it simply, are what you store everything in. All your personal files that you save, and even your operating system (which, often times will be Windows for these kind of builds). Drives come in a few different forms; one is a HDD, or a Hard Disk Drive. This is the type of drive that has been around the longest, it reads and writes to and from a mechanical spinning disk inside the drive. This makes these types of drive offer a lot of storage but lack in terms of speed.
                    <br/><br/>
                    More recently we have been using SSD’s, or Solid-State Drives. These drives are great for speed as they don’t use any mechanical parts which means the data doesn’t have to be located on the Disk and can be found a lot faster.
                    <br/><br/>
                    To make things a bit more confusing, SSD’s can come in different forms. The more traditional form is an SSD that uses a <a class="hLink" onclick="dictClick()"><strong>SATA</strong></a> connection, and is pictured below. These drives take 2 connections, one data connection that allows transfer of data and one power connection that gives power to the drive.
                    <br/><br/>
                    <img src="images/infoPage/sata.png" style="" alt="A motherboard SATA connection." />
                    <br/><br/>
                    Another type of SSD is called an M.2 Drive, this is an SSD that connects straight to the motherboard, no wires necessary, which gives them the edge on speed. However, not all motherboards have M.2 functionality as it must be specifically built in which makes them less widely used compared to standard SSDs.
                    <br/><br/>
                    <h3>How to Choose One</h3>
                    <br/>
                    Choosing your drives is a fairly important step, this is where you will be storing EVERYTHING, from your Operating System itself to your personal photos. The good thing about drives is that you can add as many as you’d like and it will bolster the amount of storage your system will have, obviously this would be at the consequence of how many drives your case and motherboard will allow. A very popular method would be to get yourself an SSD and a HDD, the SSD gives you a quick location to run your Operating System and any other applications you desire to give a ‘speed boost’ to, such as your video games to assist loading times. The HDD can then be used for more bulk storage, such as photos, as these aren’t needed by the speed of the SSD and can save you money on a larger SSD.
                    <br/><br/>
                    From here you can simply decide how much storage you personally desire, it’s important to not go low here as windows 10 can take up 10-20GB of space right off the bat which will leave a very small amount of space left with a drive of 64GB or less.
                    <br/><br/>
                    <strong>NOTE</strong>: It might be best here to check the applications you’re likely to install for their sizes.

                    <h3>How to Install it</h3>
                    <br/>
                    Installing drives can differ between different builds but the overall idea is the same, with HDDs and the original <a class="hLink" onclick="dictClick()"><strong>SATA</strong></a> SSDs the drive is, usually, put into a bay inside the case. Cases usually have these bays built in no matter what, but these bays can come in different forms, it is often best to consult your case manual before attempting this.
                    <br/><br/>
                    However, to give a more specific example for the type of bay mostly used, the bay should slide out of the case itself (usually located on the right-hand side of the case) and the drive should simply fit into place. Some bays also require the drive to be screwed into the bay, but this will simply be 4 small screws on each corner of the drive. Once this is done, just slide the bay back into its original position.
                    <br/><br/>
                    M.2 drives are different but aren’t any more complex. To install this you must find the place on the motherboard that the drive fits, this is usually underneath the CPU/CPU Cooler. When this is found, you must firstly remove the mounting screw, ready for the drive to get mounted itself. Next you insert the drive into its slot, now you may notice that the drive is slanted, this is where the mounting screw comes back into play. You must secure the drive back down to the original screw hole that we took out at the start.
                    <br/><br/>
                    Once this is done, the M.2 drive has been successfully installed, Well Done!
                    <br/><br/>
                    <video width="" height="" controls>
                      <source src="videos/Drive.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                    </video>
                </p>
              </div>
        </div>
        
        <div id="caseModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Case</h2>
                <h3>The Fifth Part in the build!</h3>
                <p>
                    <h3>What is it?</h3>
                    <br/>
                    The case is exactly what it says it is. A case. Cases keep all the pieces inside the computer together, protects them and, sometimes, gives a nice aesthetic too. In fact, cases are not necessarily needed for a computer build as it doesn’t contribute to any of the logical components of the build. Although, without cases you’d be at risk of damage to your parts through exposure to dust or just the dangers of day to day living.
                    <h3>How to Choose one</h3>
                    <br/>
                    There is more to choosing a case than most first expect, you must consider the form factor (size) of the case in order to check whether or not your parts will fit into it. You must check the drive bays available within the case to make sure there is space for your chosen drive(s). From here it’s more personal considerations such as the space you have in your room/on your desk or that the amount front panel ports suits the amount of <a class="hLink" onclick="dictClick()"><strong>peripherals</strong></a> you will be connecting.
                    <br><br/>
                    Other than these considerations the case can be chosen completely on appearance!
                    <h3>How to Install it</h3>
                    <br/>
                    Now, you don’t necessarily have to install the case, more that you install the rest of the components into the case.
                    <br/><br/>
                    There are some important things to note about cases though, one is something that I have touched on in the motherboard section. Some cases don’t come with something called <a class="hLink" onclick="dictClick()"><strong>standoffs</strong></a>, these are essentially extensions of the screw holes that the motherboard secures itself onto. They are in place to keep the motherboard from touching the case and causing any short-circuits that could break any part. <a class="hLink" onclick="dictClick()"><strong>Standoffs</strong></a> just require a simple screw in, however most cases will come with these prebuilt these days.
                    <br/><br/>
                    Another important thing to note is the case's form factor, this is simply how big the case is. The larger the case, the larger the parts inside can be. This mainly applies to the Motherboard, CPU Cooler and GPU. This does also link into drives too but that is less focussed around the size of the drives and more the amount of drives that can fit in the case. This is something that should always be checked within the case if getting more than 1 SSD and HDD.
                    <br/><br/>
                    The below video includes a run through of the case along with the installation of the motherboard!
                    <br/>
                    <iframe src="https://drive.google.com/file/d/1B8qpvvg_AOuZtxEXGxzqwd42WY8f5yWo/preview" width="640" height="480" allowfullscreen="allowfullscreen"></iframe>

                </p>
              </div>
        </div>
        <!-- This is the dictionary modal, this includes helpful descriptions of important words/phrases. -->
        <div id="dictModal" class="modal">
            <div style="backface-visibility: visible;" class="modal-content">
                <span class="close">&times;</span>
                <h2>Dictionary!</h2>
                <br/>
                <p>
                    <table id="tBord" style="width:100%;">
                        
                        <tr>
                            <th>Word/Item</th>
                            <th>Meaning</th>
                        </tr>
                        <tr>
                            <td>ATX</td>
                            <td>Advanced Technology eXtended, is a form factor metric that specifies a motherboard's size. ATX has been a standard for years but now has different size variants.</td>
                        </tr>
                        <tr>
                            <td>Micro ATX</td>
                            <td>Micro Advanced Technology eXtended, the smallest ATX for factor. Used for those who want a much smaller overall build. Comes at the loss of some ports and features most of the time.</td>
                        </tr>
                        <tr>
                            <td>Mini ATX</td>
                            <td>Mini Advanced Technology eXtended, this is in between the micro and standard ATX sizes. For those that want a slightly smaller build than the standard ATX, usually come with, mostly, the same ports and functionality as a standard size.</td>
                        </tr>
                        <tr>
                            <td>EATX</td>
                            <td>Extended Advanced Technology eXtended, this is larger than a standard ATX by about 3.5". This also means that there is added functionality and ports to the motherboard.</td>
                        </tr>
                        <tr>
                            <td>Mini ITX</td>
                            <td>These motherboards are the smallest around and are used for the very small builds and can only fit the essentials onto the board, meaning nothing fancy can be added.</td>
                        </tr>
                        <tr>
                            <td>Aftermarket</td>
                            <td>This is a product purchased beyond what the manufacturer provided.</td>
                        </tr>
                        <tr>
                            <td>Boot Drive</td>
                            <td>This is the drive (whether it be hard drive or ssd) that you put your operating system onto. Usually the boot drive is the quicket drive you have installed so that start up times are reduced.</td>
                        </tr>
                        <tr>
                            <td>I/O Shield</td>
                            <td>The I/O(Input/Output) shield is used to act as a shield for the back input and output ports on your motherboard from being damaged.</td>
                        </tr>
                        <tr>
                            <td>Overclocking</td>
                            <td>Overclocking is when you make a component run at a higher clock speed (faster) than it was intended to.</td>
                        </tr>
                        <tr>
                            <td>PCIe (Peripheral Component Interconnect express) Slot</td>
                            <td>This is a type of interface to connect certain components to the motherboard. This slot will take things like Graphics Cards and NIC's (Network Interface Cards.)</td>
                        </tr>
                        <tr>
                            <td>SATA (Serial ATA)</td>
                            <td>This is a type of connection used for data transfer between a drive and the motherboard.</td>
                        </tr>
                        <tr>
                            <td>Standoffs</td>
                            <td>Standoffs are a way of keeping the motherboard from touching the case and thus act as platforms.</td>
                        </tr>
                        <tr>
                            <td>Thermal Paste</td>
                            <td>Thermal Paste is a conductive paste that sits between the CPU and the Cooler and allow fors better heat conduction. Simply put, it keeps the CPU much cooler.</td>
                        </tr>
                        <tr>
                            <td>Peripherals</td>
                            <td>Any external input/output device that connects to your computer.</td>
                        </tr>
                    </table>
                </p>
              </div>
        </div>
        <!-- This is a table that has hidden borders. The table includes all the part images. The images have onclicks that display the corresponding modals.
             I chose to use a table here as it meant that with window size changes, the images wouldn't completely lose their structure.
        -->
        <table id="tInfo" width="100%">
            <tr><td>
            <img src="images/infoPage/cpu.png" id="iCpu" class="slct" alt="An AMD Central Processing Unit." onclick="cpuClick()" />
            </td><td>
            <img src="images/infoPage/coolernew.png" id="iCooler" class="slct" alt="An air cooler for a Central Processing Unit" onclick="coolerClick()" />
            </td><td>
            <img src="images/infoPage/ram.png" id="iRam" class="slct" alt="2 Random Access Memory Sticks" onclick="ramClick()" />
            </td></tr>
            <tr><td>
            <img src="images/infoPage/moboo.png" id="iMobo" class="slct" alt="ATX motherboard." onclick="moboClick()" />
            </td><td>
            <img src="images/infoPage/newpsu.png" id="iPsu" class="slct" alt="Corsair 550 Watt Power Supply Unit." onclick="psuClick()" />
            </td><td>
            <img src="images/infoPage/gpu.png" id="iGpu" class="slct" alt="Gigabyte Graphics Processing Unit." onclick="gpuClick()" />
            </td></tr>
            <tr><td>
            <img src="images/infoPage/drive.png" id="iDrive" class="slct" alt="Hard Disk Drive" onclick="driveClick()" />
            </td><td></td><td>
            <img src="images/infoPage/case.png" id="iCase" class="slct" alt="Computer Case" onclick="caseClick()" />
            </td></tr>
        </table>
        </section>
          
    
    </main>
    <!-- Here i am connecting to default.js. -->
    <script type="text/javascript" src="default.js"></script>

  
	<footer style="clear: left;">

		<small>© 2020, James Beck McGovern.</small>
	</footer>

	</div>

</body></html>