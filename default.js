//Variable that holds the amount of correct answers from the user.
var correct = 0;

/* Drag and drop Functions */

//Function that stops the usual response from occuring, in this case it would usually open the image as a webpage.
function allowDrop(ev) {
  ev.preventDefault();
}

//This will swap over the id from the dragged image to where it is dropped.
function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

//Transfers taken id from image. Then performs some admin on a couple of the dragged images. 
//The mobo for example; moves the src in order to change the images, uses the necessary map in order to allow a specific drop location, then hides the old motherboard images and shows new button.
//Finally, shows modal for the first question.
function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  var current = document.getElementById('current');
  
  if (data == "mobo"){
      current.src = "images/infoPage/moboo.png";
      current.alt = "ATX Motherboard";
      current.useMap = "#cpu-socket";
      document.getElementById('mobo').style.visibility = "hidden";
      document.getElementById('rsBtn').style.visibility = "visible";
      document.getElementById('current').style.marginBottom = "2%";
      qOne();
  }
  if (data == "caseSlct" && current.src.match("images/buildPage/cpucoolerramssd.png")){
      current.src = "images/buildPage/cpucoolerramssdcase.png";
      current.alt = "A computer case containing a built motherboard including CPU, Cooler, RAM and the SSD.";
      current.style.borderRadius = "30px";
      current.useMap = "#for-psu";
      document.getElementById('psu').id = "psuSlct";
      document.getElementById('caseSlct').style.visibility = "hidden";
      qSix();
  }
}

//Does the same as the previous function but for the rest of the drag and drop images.
//Reasoning behind the need for a new function is because the following are all dragged on to specifically mapped areas, the previous is anywhere on the build area.
function newdrop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  var current = document.getElementById('current');
  

  if (data == "cpu" && current.src.match("images/infoPage/moboo.png")){
      current.src="images/buildPage/mobocpu.png";
      current.alt = "A motherboard with a CPU installed.";
      current.useMap = "#for-cooler";
      document.getElementById('cpu').style.visibility = "hidden";
      qTwo();
  }
  if (data == "cooler" && current.src.match("images/buildPage/mobocpu.png")){
      current.src="images/buildPage/mobocpucooler.png";
      current.alt = "A motherboard with a cpu and its cooler installed.";
      current.useMap = "#for-ram";
      document.getElementById('cooler').style.visibility = "hidden";
      qThree();
  }
  if (data == "ram" && current.src.match("images/buildPage/mobocpucooler.png")){
      current.src = "images/buildPage/mobocpucoolerram.png";
      current.alt = "A motherboard with a cpu, its cooler and the ram installed.";
      current.useMap = "#for-ssd";
      document.getElementById('ram').style.visibility = "hidden";
      qFour();
  }
  if (data == "drive" && current.src.match("images/buildPage/mobocpucoolerram.png")){
      current.src = "images/buildPage/cpucoolerramssd.png";
      current.alt = "A motherboard with a cpu, its cooler, ram and an ssd installed.";
      document.getElementById('drive').style.visibility = "hidden";
      qFive();
      document.getElementById('case').id = "caseSlct";
  }
  if (data == "psuSlct" && current.src.match("images/buildPage/cpucoolerramssdcase.png")){
      current.src = "images/buildPage/casepsu.png";
      current.alt = "A built motherboard and a psu contained within a case.";
      current.useMap = "#for-gpu";
      current.style.borderRadius = "30px";
      document.getElementById('psuSlct').style.visibility = "hidden";
      qSeven();
  }
  if (data == "gpu" && current.src.match("images/buildPage/cpucoolerramssdcaseCOPY.png")){
      current.src = "images/buildPage/cpucoolerramssdcasegpu.png";
      current.alt = "A fully built, open-cased pc.";
      current.style.borderRadius = "30px";
      document.getElementById('gpu').style.visibility = "hidden";
      qEight();
  }
}


/* Ajax for updating part information */

var finPrice = 0.0;
var finWatt = 0;


//Each of the following are the same function altered for each part.
//This first function takes the dropdown value and makes an ajax call to the matching php file. The PHP file communicates with the database and returns all the necessary data.
function myUpdateFunc()
{
  var mySelected = document.getElementById("CPU").selectedIndex;

  $.ajax({
    url: "searchParts/searchCPU.php?cmodel=" + mySelected, //searches the php file using the CPU part.
    success: function(result){//If found and returned, write the following to the results div, i.e. writing all the part info to the web page.
    $('#divResults').html ('<table align="center"> <tr> <th>CPU Manufacturer: </th><td>' + result) //Here i begin the HTML and concatenate with the return result from the PHP file.
     }}).always(function(){ //Once completed, the additional information div is updated with the new values for the price, wattage and compatibility.
           PriceUpdateFunc();
           WattUpdateFunc();
           CompatibleUpdate();
  });
}

function coolerUpdateFunc()
{
  var mySelected = document.getElementById("Cooler").selectedIndex;
  
  $.ajax({
    url: "searchParts/searchCooler.php?cmodel=" + mySelected, 
    success: function(result){
    $('#coolerResults').html ('<table align="center"> <tr> <th>Cooler Manufacturer: </th><td>' + result)
     }}).always(function(){
           CoolerUpdatePrice();
           CompatibleUpdate();
  });
}

function ramUpdateFunc()
{
  var mySelected = document.getElementById("RAM").selectedIndex;
  
  $.ajax({
    url: "searchParts/searchRAM.php?cmodel=" + mySelected, 
    success: function(result){
    $('#ramResults').html ('<table align="center"> <tr> <th>RAM Manufacturer: </th><td>' + result)
     }}).always(function(){
           RamUpdatePrice();
           CompatibleUpdate();
  });
}

function moboUpdateFunc()
{
  var mySelected = document.getElementById("Mobo").selectedIndex;
  
  $.ajax({
    url: "searchParts/searchMobo.php?cmodel=" + mySelected, 
    success: function(result){
    $('#moboResults').html ('<table align="center"> <tr> <th>Motherboard Manufacturer: </th><td>' + result)
     }}).always(function(){
           MoboUpdatePrice();
           CompatibleUpdate();
  });
}

function PSUUpdateFunc()
{
  var mySelected = document.getElementById("PSU").selectedIndex;
  $.ajax({
    url: "searchParts/searchPSU.php?cmodel=" + mySelected, 
    success: function(result){
    $('#PSUResults').html ('<table align="center"> <tr> <th>PSU Manufacturer: </th><td>' + result)
     }}).always(function(){
           PsuUpdatePrice();
           CompatibleUpdate();
  });
}

function GPUUpdateFunc()
{
  var mySelected = document.getElementById("GPU").selectedIndex;
  $.ajax({
    url: "searchParts/searchGPU.php?cmodel=" + mySelected, 
    success: function(result){
    $('#GPUResults').html ('<table align="center"> <tr> <th>GPU Manufacturer: </th><td>' + result)
     }}).always(function(){
           GpuUpdatePrice();
           GpuUpdateWatt();
           CompatibleUpdate();
  });
}

function DriveUpdateFunc()
{
  var mySelected = document.getElementById("Drive").selectedIndex;
  $.ajax({
    url: "searchParts/searchDrive.php?cmodel=" + mySelected, 
    success: function(result){
    $('#DriveResults').html ('<table align="center"> <tr> <th>Drive Manufacturer: </th><td>' + result)
     }}).always(function(){
           DriveUpdatePrice();
           CompatibleUpdate();
  });
}

function CaseUpdateFunc()
{
  var mySelected = document.getElementById("Case").selectedIndex;
  $.ajax({
    url: "searchParts/searchCase.php?cmodel=" + mySelected, 
    success: function(result){
    $('#CaseResults').html ('<table align="center"> <tr> <th>Case Manufacturer: </th><td>' + result)
     }}).always(function(){
           CaseUpdatePrice();
           CompatibleUpdate();
  });
}

/* Each of the following update the final pricing based on the part selected. A function has been created for each part. */


//Takes the price from the field underneath the part dropdown. Adds it to the final price and displays within additional information div.
function PriceUpdateFunc()
{
    var cpuPrice = parseFloat(document.getElementById("cpuPrice").innerHTML.substring(1));
    
    finPrice = finPrice + cpuPrice;
    
    document.getElementById("PriceResults").innerHTML = finPrice.toFixed(2);
}

function CoolerUpdatePrice(){
    var coolerPrice = parseFloat(document.getElementById("coolerPrice").innerHTML.substring(1));
    
    finPrice = finPrice + coolerPrice;
    
    document.getElementById("PriceResults").innerHTML = finPrice.toFixed(2);
}

function RamUpdatePrice(){
    var ramPrice = parseFloat(document.getElementById("ramPrice").innerHTML.substring(1));
    
    finPrice = finPrice + ramPrice;
    
    document.getElementById("PriceResults").innerHTML = finPrice.toFixed(2);
}

function MoboUpdatePrice(){
    var moboPrice = parseFloat(document.getElementById("moboPrice").innerHTML.substring(1));
    
    finPrice = finPrice + moboPrice;
    
    document.getElementById("PriceResults").innerHTML = finPrice.toFixed(2);
}

function PsuUpdatePrice(){
    var psuPrice = parseFloat(document.getElementById("psuPrice").innerHTML.substring(1));
    
    finPrice = finPrice + psuPrice;
    
    document.getElementById("PriceResults").innerHTML = finPrice.toFixed(2);
}

function GpuUpdatePrice(){
    var gpuPrice = parseFloat(document.getElementById("gpuPrice").innerHTML.substring(1));
    
    finPrice = finPrice + gpuPrice;
    
    document.getElementById("PriceResults").innerHTML = finPrice.toFixed(2);
}

function DriveUpdatePrice(){
    var drivePrice = parseFloat(document.getElementById("drivePrice").innerHTML.substring(1));
    
    finPrice = finPrice + drivePrice;
    
    document.getElementById("PriceResults").innerHTML = finPrice.toFixed(2);
}

function CaseUpdatePrice(){
    var casePrice = parseFloat(document.getElementById("casePrice").innerHTML.substring(1));
    
    finPrice = finPrice + casePrice;
    
    document.getElementById("PriceResults").innerHTML = finPrice.toFixed(2);
}


/* Each of the following update the final wattage based on the part selected. A function has been created for each necessary part. */


//Similar to the pricing, the wattage is taken from each part, added to the final value and displayed within the results div.
function WattUpdateFunc()
{
    var cpuWatt = parseInt(document.getElementById("cpuWatt").innerHTML.substring(-1));
    
    finWatt = finWatt + cpuWatt;
    
    document.getElementById("WattResults").innerHTML = finWatt;
}

function GpuUpdateWatt()
{
    var gpuWatt = parseInt(document.getElementById("gpuWatt").innerHTML.substring(-1));
    
    finWatt = finWatt + gpuWatt;
    
    document.getElementById("WattResults").innerHTML = finWatt;
}


/* The following updates the final compatibility of the parts chosen. There is one function this time around and it includes all the necessary checks for compatibility. */

function CompatibleUpdate()
{
    var compString = ""; //Holds the final compatibility verdict.


    //Each of the following variables receive the part name.
    var ramElem = document.getElementById("RAM").value;
    var moboElem = document.getElementById("Mobo").value;
    var psuElem = document.getElementById("PSU").value;
    var cpuElem = document.getElementById("CPU").value;
    var caseElem = document.getElementById("Case").value;
    
    
    if (psuElem != ""){ //Checks if there is a PSU selected.
        var psuWatt = parseInt(document.getElementById("psuWatt").innerHTML);//Retrieves wattage of psu.
        if (psuWatt > (finWatt + 100)){//This is the compatibility check, whether the psu can handle the power from the rest of the system (+100 to account for any additional power consumption such as case fans).
            compString = compString + "";//Adds nothing if compatible.
        } else {
            compString = compString + "Power Supply not sufficient for this build!".fontcolor("red") + "\n";//Returns incompatible message in red.
        }
    }

    if (moboElem != "" && ramElem != ""){
        if (parseInt(document.getElementById("dimmCount").innerHTML) >= parseInt(document.getElementById("rMods").innerHTML.charAt(0))){//Compares amount of DIMM slots against amount of RAM sticks in pack.
            compString = compString + "";
        } else {
            compString = compString + "Not enough DIMM slots for the RAM modules!".fontcolor("red") + "\n";
        }
    }
    
    if (moboElem != "" && cpuElem != ""){
        if (document.getElementById("moboSock").innerHTML != document.getElementById("cpuSock").innerHTML){//Checks socket types of the motherboard and CPU.
            compString = compString + "The CPU and Motherboard of this build are not compatible!".fontcolor("red") + "\n";
        }
    }
    
    //The following checks the sizes of the motherboard and the case.
    if (caseElem != "" && moboElem != ""){
        var moboNum;
        var caseNum;
        switch (document.getElementById("moboForm").innerHTML){//Here i assigned numeric values to each form factor, this made it easier for comparing sizes as i could check greater than or less than with numbers against comparing strings.
            case "Mini ITX":
                formNum = 1;
                break;
            case "Micro ATX":
                formNum = 2;
                break;
            case "ATX":
                formNum = 3;
                break;
        }
        
        if (document.getElementById("caseForm").innerHTML.includes("ATX")) {caseNum = 3;}
        if (document.getElementById("caseForm").innerHTML.includes("MicroATX")) {caseNum = 2;}
        if (document.getElementById("caseForm").innerHTML.includes("Mini ITX")) {caseNum = 1;}

        console.log(formNum);
        console.log(caseNum);
        if(caseNum < formNum){
            compString = compString + "Case too small for the motherboard!".fontcolor("red") + "\n";
        }
    }
    
    //The following is the default if no compatability issues are found.
    if(compString == ""){
        document.getElementById("Compat").innerHTML = "\n" + "There are no compatibility issues!".fontcolor("green"); + "\n";
    }else {
        document.getElementById("Compat").innerHTML = compString.replace(/\n/g, "<br />");
    }
}


/* Info page modals for each part */

// Get the modal from web page
var modal = document.getElementById("myModal");
var ramModal = document.getElementById("ramModal");
var moboModal = document.getElementById("moboModal");
var coolerModal = document.getElementById("coolerModal");
var psuModal = document.getElementById("psuModal");
var gpuModal = document.getElementById("gpuModal");
var driveModal = document.getElementById("driveModal");
var caseModal = document.getElementById("caseModal");
var dictModal = document.getElementById("dictModal");



// Get the <span> element that closes the modal, the cross in the corner of each modal.
var span = document.getElementsByClassName("close")[0]; //Here i had to retrieve each using a classname, and since each use the same class name i had to get the data as an array. Which is why an index is used.
var coolerspan = document.getElementsByClassName("close")[1];
var spanram = document.getElementsByClassName("close")[2];
var moboram = document.getElementsByClassName("close")[3];
var psuspan = document.getElementsByClassName("close")[4];
var gpuspan = document.getElementsByClassName("close")[5];
var drivespan = document.getElementsByClassName("close")[6];
var casespan = document.getElementsByClassName("close")[7];
var dictspan = document.getElementsByClassName("close")[8];



// When the user clicks on the part, open the corresponding modal.
function cpuClick() {
  modal.style.display = "block";
}

function ramClick() {
    ramModal.style.display = "block";
}

function moboClick() {
    moboModal.style.display = "block";
}

function coolerClick() {
    coolerModal.style.display = "block";
}

function psuClick() {
    psuModal.style.display = "block";
}

function gpuClick() {
    gpuModal.style.display = "block";
}

function driveClick() {
    driveModal.style.display = "block";
}

function caseClick() {
    caseModal.style.display = "block";
}

function dictClick() {
    dictModal.style.display = "block";
}


// Automatically Pause all videos on modal close.
function pauseVideo() {
    var vidList = document.getElementsByTagName("video");//This first part works for each video tag.
    var i = 0
    var len = vidList.length;
      
    for( ; i < len; i++ ) {
        vidList[i].pause();//Loop through each video and pause them.
    }
    
    var frameList = document.getElementsByTagName("iframe");//The following works for each iframe tag.
    var k = 0
    var len = frameList.length;
      
    for( ; k < len; k++ ) {
        var vSrc = frameList[k].src;//Locates the source of the video.
        
        $(frameList[k]).attr("src", $(frameList[k]).attr("src")); //Simulates a refresh of the video by replacing the source with the same source.
    }
    
}


// When the user clicks on <span> (x), close the modal. This is done for each modal.

span.onclick = function() {//Event listener for a click on the desired span element.
  modal.style.display = "none";//Closes the target modal.
  pauseVideo();//Runs pause function on all videos.
}

spanram.onclick = function(){
    ramModal.style.display = "none";
    pauseVideo();
}

moboram.onclick = function(){
    moboModal.style.display = "none";
    pauseVideo();
}

coolerspan.onclick = function(){
    coolerModal.style.display = "none";
    pauseVideo();
}

psuspan.onclick = function(){
    psuModal.style.display = "none";
    pauseVideo();
}

gpuspan.onclick = function(){
    gpuModal.style.display = "none";
    pauseVideo();
}

drivespan.onclick = function(){
    driveModal.style.display = "none";
    pauseVideo();
}

casespan.onclick = function(){
    caseModal.style.display = "none";
    pauseVideo();
}

dictspan.onclick = function(){
    dictModal.style.display = "none";
    pauseVideo();
}



// When the user clicks anywhere outside of the modal, close it.
window.onclick = function(event) {//Event listener that checks if the page itself is clicked.
  if (event.target == modal) {//If so then check which modal is open and close it. This also pauses the video.
    modal.style.display = "none";
    pauseVideo();
  }
  if (event.target == ramModal){
      ramModal.style.display = "none";
      pauseVideo();
  }
  if (event.target == moboModal) {
      moboModal.style.display = "none";
      pauseVideo();
  }
  if (event.target == coolerModal) {
      coolerModal.style.display = "none";
      pauseVideo();
  }
  if (event.target == psuModal) {
      psuModal.style.display = "none";
      pauseVideo();
  }
  if (event.target == gpuModal) {
      gpuModal.style.display = "none";
      pauseVideo();
  }
  if (event.target == driveModal) {
      driveModal.style.display = "none";
      pauseVideo();
  }
  if (event.target == caseModal) {
      caseModal.style.display = "none";
      pauseVideo();
  }
  if (event.target == dictModal) {
      dictModal.style.display = "none";
      pauseVideo();
  }
}


/* Help modal functions.*/

//Opens the help modal on button click.
function helpClick() {
    var helpModal = document.getElementById("helpModal");
    helpModal.style.display = "block";//Changes certain css properties to help display of modal.
}

//Bound to span (x) of the help modal and closes it on click.
function helpClose() {
  helpModal.style.display = "none";
}

//Bound to the revise button, opens the first page (info page).
function revClick() {
    window.location.href = "http://jbm15.brighton.domains/ci301-project/info.php";
}

/* Question modal functions. */

//Each question includes a function that opens the desired modal and another function that closes said modal (these are currently not used as users shouldn't be able to close the question modals).
function qOne() {
    var qoneModal = document.getElementById("qoneModal");
  qoneModal.style.display = "block";
}

function qoneClose() {
  qoneModal.style.display = "none";
}

function qTwo() {
    var qoneModal = document.getElementById("qtwoModal");
  qtwoModal.style.display = "block";
}

function qtwoClose() {
  qtwoModal.style.display = "none";
}

function qThree() {
    var qthreeModal = document.getElementById("qthreeModal");
  qthreeModal.style.display = "block";
}

function qthreeClose() {
  qthreeModal.style.display = "none";
}

function qFour() {
    var qfourModal = document.getElementById("qfourModal");
  qfourModal.style.display = "block";
}

function qfourClose() {
  qfourModal.style.display = "none";
}

function qFive() {
    var qfiveModal = document.getElementById("qfiveModal");
  qfiveModal.style.display = "block";
}

function qfiveClose() {
  qfiveModal.style.display = "none";
}

function qSix() {
    var qfiveModal = document.getElementById("qsixModal");
  qsixModal.style.display = "block";
}

function qsixClose() {
  qsixModal.style.display = "none";
}

function qSeven() {
    var qsevenModal = document.getElementById("qsevenModal");
  qsevenModal.style.display = "block";
}

function qsevenClose() {
  qsevenModal.style.display = "none";
}

function qEight() {
    var qeightModal = document.getElementById("qeightModal");
  qeightModal.style.display = "block";
}

function qeightClose() {
  qeightModal.style.display = "none";
}


/* Changing content on add page. */

//A function that runs on dropdown change. This function detects what part type has been selected and updates the add parts form based on the selection.
function addPart(){
    var mySelected = $("#parts").find("option:selected").val();
    if (mySelected == "CPU"){//If the dropdown is a CPU, hides all other forms and displays cpu form.
        document.getElementById('coolerForm').style.display = "none";
        document.getElementById('ramForm').style.display = "none";
        document.getElementById('gpuForm').style.display = "none";
        document.getElementById('driveForm').style.display = "none";
        document.getElementById('moboForm').style.display = "none";
        document.getElementById('caseForm').style.display = "none";
        document.getElementById('psuForm').style.display = "none";
        document.getElementById('cpuForm').style.display = "inline-block";
    }
    if (mySelected == "Cooler"){
        document.getElementById('cpuForm').style.display = "none";
        document.getElementById('ramForm').style.display = "none";
        document.getElementById('gpuForm').style.display = "none";
        document.getElementById('driveForm').style.display = "none";
        document.getElementById('moboForm').style.display = "none";
        document.getElementById('caseForm').style.display = "none";
        document.getElementById('psuForm').style.display = "none";
        document.getElementById('coolerForm').style.display = "inline-block";
    }
    if (mySelected == "RAM"){
        document.getElementById('cpuForm').style.display = "none";
        document.getElementById('coolerForm').style.display = "none";
        document.getElementById('gpuForm').style.display = "none";
        document.getElementById('driveForm').style.display = "none";
        document.getElementById('moboForm').style.display = "none";
        document.getElementById('caseForm').style.display = "none";
        document.getElementById('psuForm').style.display = "none";
        document.getElementById('ramForm').style.display = "inline-block";
    }
    if (mySelected == "Motherboard"){
        document.getElementById('cpuForm').style.display = "none";
        document.getElementById('coolerForm').style.display = "none";
        document.getElementById('gpuForm').style.display = "none";
        document.getElementById('driveForm').style.display = "none";
        document.getElementById('ramForm').style.display = "none";
        document.getElementById('caseForm').style.display = "none";
        document.getElementById('psuForm').style.display = "none";
        document.getElementById('moboForm').style.display = "inline-block";
    }
    if (mySelected == "PSU"){
        document.getElementById('cpuForm').style.display = "none";
        document.getElementById('coolerForm').style.display = "none";
        document.getElementById('gpuForm').style.display = "none";
        document.getElementById('driveForm').style.display = "none";
        document.getElementById('ramForm').style.display = "none";
        document.getElementById('caseForm').style.display = "none";
        document.getElementById('moboForm').style.display = "none";
        document.getElementById('psuForm').style.display = "inline-block";
    }
    if (mySelected == "GPU"){
        document.getElementById('cpuForm').style.display = "none";
        document.getElementById('coolerForm').style.display = "none";
        document.getElementById('psuForm').style.display = "none";
        document.getElementById('driveForm').style.display = "none";
        document.getElementById('ramForm').style.display = "none";
        document.getElementById('caseForm').style.display = "none";
        document.getElementById('moboForm').style.display = "none";
        document.getElementById('gpuForm').style.display = "inline-block";
    }
    if (mySelected == "Drive"){
        document.getElementById('cpuForm').style.display = "none";
        document.getElementById('coolerForm').style.display = "none";
        document.getElementById('gpuForm').style.display = "none";
        document.getElementById('psuForm').style.display = "none";
        document.getElementById('ramForm').style.display = "none";
        document.getElementById('caseForm').style.display = "none";
        document.getElementById('moboForm').style.display = "none";
        document.getElementById('driveForm').style.display = "inline-block";
    }
    if (mySelected == "Case"){
        document.getElementById('cpuForm').style.display = "none";
        document.getElementById('coolerForm').style.display = "none";
        document.getElementById('gpuForm').style.display = "none";
        document.getElementById('driveForm').style.display = "none";
        document.getElementById('ramForm').style.display = "none";
        document.getElementById('psuForm').style.display = "none";
        document.getElementById('moboForm').style.display = "none";
        document.getElementById('caseForm').style.display = "inline-block";
    }
}


/* The following check each answer for correctness and adds total to the variable at the top of the document. */

//There is a separate function for each question. This is for the motherboard question.
//First all the radio selections are taken and some necessary variables are taken. These are for the for loop, radio array, boolean checker to find which button was checked and the answer from the user.
function moboAnswer() {
  var radios = document.getElementsByName("mchoice");
  var i = 0, len = radios.length;
  var checked = false;
  var userAnswer;
  var msg = document.getElementById("msg-container").innerHTML;//Div where user feedback will be displayed.
  
  for( ; i < len; i++ ) {//Loops through radios/answers and finds the users answer.
     if(radios[i].checked) {
       checked = true;
       userAnswer = radios[i].value;
     }
  }

  if(!checked) {//If the user doesn't select an answer, asks them to select one.
    
    document.getElementById("msg-container").innerHTML = "Please Select an Answer!";
  }
  
  // Correct answer, gives user feedback and increments score total.
  else if(userAnswer === "NTX") {
    correct++;
    document.getElementById("msg-container").innerHTML = "Correct!";
    document.getElementById("msg-container").style.color = "green";
    setTimeout(function() {//This delay is used throughout the quiz. This allows time for user to read or have generally granted time inbetween tasks.
      qoneClose();//This delay is to close the question modal afte 2 seconds of seeing the feedback.
  }, 2000 );
  }
  
  // incorrect answer
  else {
    document.getElementById("msg-container").innerHTML = "Incorrect!";
    document.getElementById("msg-container").style.color = "red";
    setTimeout(function() {
      qoneClose();
  }, 2000 );
  }
  
  document.getElementById("msg-container").style.display = "inline";//Displays necessary message to user.
  
  
  setTimeout(function() {
      document.getElementById("msg-container").style.display = "none"; //After 2 seconds, hide the message.
  }, 2000 );
}

function cpuAnswer() {
  var radios = document.getElementsByName("cchoice");
  var i = 0, len = radios.length;
  var checked = false;
  var userAnswer;
  var msg = document.getElementById("cpu-container").innerHTML;
  
  for( ; i < len; i++ ) {
     if(radios[i].checked) {
       checked = true;
       userAnswer = radios[i].value;
     }
  } 
  
  if(!checked) {
    
    document.getElementById("cpu-container").innerHTML = "Please Select an Answer!";
  }
  // Correct answer
  else if(userAnswer === "Match up the Arrows.") {
     correct++;
    document.getElementById("cpu-container").innerHTML = "Correct!";
    document.getElementById("cpu-container").style.color = "green";
    setTimeout(function() {
      qtwoClose();
  }, 2000 );
  }
  // incorrect answer
  else {
    document.getElementById("cpu-container").innerHTML = "Incorrect!";
    document.getElementById("cpu-container").style.color = "red";
    setTimeout(function() {
      qtwoClose();
  }, 2000 );
  }
  
  document.getElementById("cpu-container").style.display = "inline";
  
  
  setTimeout(function() {
      document.getElementById("cpu-container").style.display = "none";
  }, 2000 );
}

function coolerAnswer() {
  var radios = document.getElementsByName("cochoice");
  var i = 0, len = radios.length;
  var checked = false;
  var userAnswer;
  var msg = document.getElementById("cooler-container").innerHTML;
  
  for( ; i < len; i++ ) {
     if(radios[i].checked) {
       checked = true;
       userAnswer = radios[i].value;
     }
  } 
  
  if(!checked) {
    
    document.getElementById("cooler-container").innerHTML = "Please Select an Answer!";
  }
  // Correct answer
  else if(userAnswer === "Thermal Paste") {
     correct++;
    document.getElementById("cooler-container").innerHTML = "Correct!";
    document.getElementById("cooler-container").style.color = 'green';
    setTimeout(function() {
      qthreeClose();
  }, 2000 );
  }
  // incorrect answer
  else {
    document.getElementById("cooler-container").innerHTML = "Incorrect!";
    document.getElementById("cooler-container").style.color = 'red';
    setTimeout(function() {
        qthreeClose();
  }, 2000 );
  }

  document.getElementById("cooler-container").style.display = "inline";
  

  setTimeout(function() {
      document.getElementById("cooler-container").style.display = "none";
  }, 2000 );
}


function ramAnswer() {
  var radios = document.getElementsByName("rchoice");
  var i = 0, len = radios.length;
  var checked = false;
  var userAnswer;
  var msg = document.getElementById("ram-container").innerHTML;
  
  for( ; i < len; i++ ) {
     if(radios[i].checked) {
       checked = true;
       userAnswer = radios[i].value;
     }
  } 
  

  if(!checked) {
    
    document.getElementById("ram-container").innerHTML = "Please Select an Answer!";
  }
  // Correct answer
  else if(userAnswer === "Random Access Memory") {
     correct++;
    document.getElementById("ram-container").innerHTML = "Correct!";
    document.getElementById("ram-container").style.color = 'green';
    setTimeout(function() {
      qfourClose();
  }, 2000 );
  }
  // incorrect answer
  else {
    document.getElementById("ram-container").innerHTML = "Incorrect!";
    document.getElementById("ram-container").style.color = 'red';
    setTimeout(function() {
        qfourClose();
  }, 2000 );
  }
  
  document.getElementById("ram-container").style.display = "inline";
  
  
  setTimeout(function() {
      document.getElementById("ram-container").style.display = "none";
  }, 2000 );
}

function ssdAnswer() {
  var radios = document.getElementsByName("schoice");
  var i = 0, len = radios.length;
  var checked = false;
  var userAnswer;
  var msg = document.getElementById("ssd-container").innerHTML;
  
  for( ; i < len; i++ ) {
     if(radios[i].checked) {
       checked = true;
       userAnswer = radios[i].value;
     }
  } 
  
  if(!checked) {
    
    document.getElementById("ssd-container").innerHTML = "Please Select an Answer!";
  }
  // Correct answer
  else if(userAnswer === "sata") {
     correct++;
    document.getElementById("ssd-container").innerHTML = "Correct!";
    document.getElementById("ssd-container").style.color = 'green';
    setTimeout(function() {
      qfiveClose();
  }, 2000 );
  }
  // incorrect answer
  else {
    document.getElementById("ssd-container").innerHTML = "Incorrect!";
    document.getElementById("ssd-container").style.color = 'red';
    setTimeout(function() {
        qfiveClose();
  }, 2000 );
  }
 
  document.getElementById("ssd-container").style.display = "inline";
  
  
  setTimeout(function() {
      document.getElementById("ssd-container").style.display = "none";
  }, 2000 );
}

function caseAnswer() {
  var radios = document.getElementsByName("cachoice");
  var i = 0, len = radios.length;
  var checked = false;
  var userAnswer;
  var msg = document.getElementById("case-container").innerHTML;
  
  for( ; i < len; i++ ) {
     if(radios[i].checked) {
       checked = true;
       userAnswer = radios[i].value;
     }
  } 
  
  
  if(!checked) {
    
    document.getElementById("case-container").innerHTML = "Please Select an Answer!";
  }
  // Correct answer
  else if(userAnswer === "I/O Shield") {
     correct++;
    document.getElementById("case-container").innerHTML = "Correct!";
    document.getElementById("case-container").style.color = 'green';
    setTimeout(function() {
      qsixClose();
  }, 2000 );
  }
  // incorrect answer
  else {
    document.getElementById("case-container").innerHTML = "Incorrect!";
    document.getElementById("case-container").style.color = 'red';
    setTimeout(function() {
        qsixClose();
  }, 2000 );
  }
  
  document.getElementById("case-container").style.display = "inline";
  
  
  setTimeout(function() {
      document.getElementById("case-container").style.display = "none";
  }, 2000 );
}

function psuAnswer() {
  var radios = document.getElementsByName("pchoice");
  var i = 0, len = radios.length;
  var checked = false;
  var userAnswer;
  var msg = document.getElementById("psu-container").innerHTML;
  
  for( ; i < len; i++ ) {
     if(radios[i].checked) {
       checked = true;
       userAnswer = radios[i].value;
     }
  } 
  
  
  if(!checked) {
    
    document.getElementById("psu-container").innerHTML = "Please Select an Answer!";
  }
  // Correct answer
  else if(userAnswer === "8 Pins") {
     correct++;
    document.getElementById("psu-container").innerHTML = "Correct!";
    document.getElementById("psu-container").style.color = 'green';
    setTimeout(function() {
      qsevenClose();
  }, 2000 );
  setTimeout(function() {
      document.getElementById('current').src = "images/buildPage/cpucoolerramssdcaseCOPY.png"
  }, 4000 );
  }
  // incorrect answer
  else {
    document.getElementById("psu-container").innerHTML = "Incorrect!";
    document.getElementById("psu-container").style.color = 'red';
    setTimeout(function() {
        qsevenClose();
  }, 2000 );
  setTimeout(function() {
      document.getElementById('current').src = "images/buildPage/cpucoolerramssdcaseCOPY.png"
  }, 4000 );
  }
  
  document.getElementById("psu-container").style.display = "inline";
  
  
  setTimeout(function() {
      document.getElementById("psu-container").style.display = "none";
  }, 2000 );
}

function gpuAnswer() {
  var radios = document.getElementsByName("gchoice");
  var i = 0, len = radios.length;
  var checked = false;
  var userAnswer;
  var msg = document.getElementById("gpu-container").innerHTML;
  
  for( ; i < len; i++ ) {
     if(radios[i].checked) {
       checked = true;
       userAnswer = radios[i].value;
     }
  } 
  
  
  if(!checked) {
    
    document.getElementById("gpu-container").innerHTML = "Please Select an Answer!";
  }
  // Correct answer
  else if(userAnswer === "It has the most bandwidth.") {
     correct++;
    document.getElementById("gpu-container").innerHTML = "Correct!";
    document.getElementById("gpu-container").style.color = 'green';
    qeightClose();
    finResult();
  }
  // incorrect answer
  else {
    document.getElementById("gpu-container").innerHTML = "Incorrect!";
    document.getElementById("gpu-container").style.color = 'red';
    qeightClose();
    finResult();
  }
  
  document.getElementById("gpu-container").style.display = "inline";
  
  
  setTimeout(function() {
      document.getElementById("gpu-container").style.display = "none";
  }, 2000 );
}

//Final modal close.
function finalClose() {//Once called, checks the amount of correct answers.
  finalModal.style.display = "none";
  if (correct >= 6) {
        window.location.href = "http://jbm15.brighton.domains/ci301-project/index.php";//Opens final page if 6 or greater
    } else if (correct <= 5) {
        window.location.reload();//Restarts build page if 5 or lower.
    }
}

//Final result feedback.
function finResult() {
    var finalModal = document.getElementById("finalModal");//Locates final modal.
    if (correct >= 6) {//If passed.
        document.getElementById("final-container").innerHTML = "You scored " + correct + " out of 8 and have passed!<br/><br/><p style='color:green;'>Click continue to build your own!</p>";//Display pass message in green.
        finalModal.style.display = "block";
    } else if (correct <= 5) {//If failed.
        document.getElementById("final-container").innerHTML = "You scored " + correct + " out of 8 and have not passed!<br/><br/><p style='color:red;'>Please Try Revising and Give it another go!</p>";//Display fail message in red.
        finalModal.style.display = "block";
    }
}
