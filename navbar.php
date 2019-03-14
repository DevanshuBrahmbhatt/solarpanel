<!DOCTYPE html>
  <html>
    <head>
	
		<title>
		
					solarpanel.com
		</title>
		
		<link rel="shotcut icon" type="images/png"  href="images/logo1.png">
		
		
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  
	  

	  
		<style>
		
		@import url('https://fonts.googleapis.com/css?family=Roboto+Slab');
		body{
		font-family: 'Roboto Slab', serif;
		}
	  .description
	  {
		color: white;
	  }
		
   </style>
	  
    </head>
	
	
	
	
    <body bgcolor="#1e1f33">
	
	
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content #424242 grey darken-3">
	
  <li><a href="iot.php">IOT</a></li>
  <li><a href="electronics.php">Electronics</a></li>
  
</ul>

<ul id="dropdown2" class="dropdown-content #424242 grey darken-3">

  <li><a href="iot.php">IOT</a></li>
  <li><a href="electronics.php">Electronics</a></li>
 
</ul>

 <!-- Dropdown Trigger -->
    
<!-----------dropdown complete --------------------->
<!--------------nav for desktop------------------>

<div class="navbar">
  <nav>
    <div class="nav-wrapper #424242 grey darken-3">
	<img  src="images/nalogo1.png" height="70px" width="70px" ></img>
      <a href="index.php"   class="brand-logo">SolarCleaner</a>
      <a href="index.php" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="whysolar.php" target="_blank">Why solar cleaner</a></li>
        <li><a href="procedure.php"target="_blank">How to</a></li>
        <li><a href="buy.php">Buy</a></li>
		 <li><a href="about.php">About us</a></li>
		<li><a class="dropdown-button" href="#!" data-hover="true" data-beloworigin="true" data-activates="dropdown2" onmouseover="fun()">Projects<i class="material-icons right">arrow_drop_down</i></a></li>
		 <li><a href="contact.php" target="_blank">Contact us</a></li>

		
      </ul>
	  <div class="nav" class="blue-text text-darken-2">
      <ul class="side-nav #424242 grey darken-3"  id="mobile-demo">
	  
        <li ><a href="index.php">Home</p></a></li>
        <li><a href="whysolar.php"target="_blank">Why solar cleaner</a></li>
        <li><a href="procedure.php"target="_blank">How to</a></li>
        <li><a href="buy.php">Buy</a></li>
		 <li><a href="about.php">About us</a></li>
		 <li><a href="contact.php" target="_blank" >Contact us</a></li>
		<li><a class="dropdown-button" href="#!" data-activates="dropdown1" data-hover="true" data-beloworigin="true" onmouseover="fun()">Projects<i class="material-icons right">arrow_drop_down</i></a></li>
		

     
	 </ul>
    </div>
	</div>
  </nav>
  </div>
          <!------------------nav for desktop complete------------------------------------------------------------>
	   <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
      <script>
	  
	  function fun(){
	 
        $(".dropdown-button").dropdown();
		}
	

     
		$( document ).ready(function(){$(".button-collapse").sideNav();})
		
		  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );
  
      </script>
	     <script src="js/jquery-3.2.1.min.js"></script>
    <script  src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script  src="js/mdb.min.js"></script>
    <script>new WOW().init();</script>
  
	
    </body>
  </html>
