<!DOCTYPE html>
<html>
<head>
	<title>Solar panel</title>
	<link rel="shotcut icon" type="images/png"  href="images/logo1.png">
		
		
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
		color:white;
		}
	


</style>	 
	  
	  
	  
</head>
<body bgcolor="#1e1f33">
		<?php
			include_once('navbar.php');
		?>

        <!--------------------------about--------------->
		
  <!-------------------------feedbackform------------------------------>
  
   <!--<div class="row #ffffff white">
  <div class="col s12 m5 ">
  <p></p>
  </div>
  </div>-->
  	<div class="container" >	
	<div class="feedback" class="col s6" >
	
	  
<div class="row">		
										
			<h5  align="center" > Contact Form ..</h5>	


		
			</div>							
    <form class="col s6" name="form1" id="contact">
	
	
	<div class="row">
     
	  
        <div class="input-field col s6">
          <input  id="first_name" type="text" class="validate" required>
          <label for="first_name">First Name</label>
        </div>
		
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" required>
          <label for="last_name">Last Name</label>
        </div>
		
    
     
	  
       
	
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"required>
          <label for="email">Email</label>
        </div>
     
	 
	  <div class="input-field col s12">
          <input id="no" type="number" class="validate" name="phone" required>
          <label for="phone">Phone no</label>
        </div>
     
	  
	
        <div class="input-field col s12">
          <input id="message-box" type="text" class="validate" required>
          <label for="disabled">Message</label>
       </div>
		
      
		<div class="input-field col s6">
				<button class="btn waves-effect waves-light" type="submit" name="submit"  onclick="valid()">Submit
				<i class="material-icons right">send</i>
				</button>
		</div>
        
	  
	  
	  
	  </div>
	  
	 
	  
    </form>
	</div>
	</div>
	<!-- <div class="row #ffffff white">
  <div class="col s12 m5 ">
  <p></p>
  </div>
  </div>->
	<!-------------------feedbackcomplete-------------------------------------------------------->
	
		
		
		<?php 
	include_once('footer.php');
	?>
	
	<script>
	
      </script>
	     <script src="js/jquery-3.2.1.min.js"></script>
    <script  src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script  src="js/mdb.min.js"></script>
    <script>new WOW().init();</script>
  
	
    </body>
  </html>
