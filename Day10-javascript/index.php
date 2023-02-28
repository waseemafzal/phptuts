<!DOCTYPE html >
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>JS</title>
    </head>

    <body>
    <p>Click any button</p>
    <div id="message"></div>
    <button style="background-color:#03F; color: white" onClick="checkClick('blue')"> Blue</button>
    <button style="background-color:red; color: white" onClick="checkClick('red')" > Red</button>
    
    <p class="pera">Lorem ipsum duymmy text</p>
    <p class="pera">Lorem ipsum duymmy text</p>
    <p class="pera">Lorem ipsum duymmy text</p>
    
        <button style="background-color:#03F; color: white" onClick="hideme()"> Hide message</button>
    <button style="background-color:red; color: white" onClick="showme()" > Show message</button>

    </body>
</html>
<script type="text/javascript">

// https://www.w3schools.com/js/js_examples.asp

//document.write(5 + 6);
document.addEventListener("DOMContentLoaded", function(event) {
	console.log('document ready'); 
  //do work
});
function checkClick(val){

	document.getElementById("message").innerHTML="You click " + val;
	document.getElementById("message").style.fontSize='35px';	

	//alert(val);
	}
	
	function hideme(){
	document.getElementById("message").style.display='none';	
		}
	function showme(){
	document.getElementById("message").style.display='block';	
		}
</script>
