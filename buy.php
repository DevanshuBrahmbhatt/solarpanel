<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Our IOT Projects</title>
	<link rel="shotcut icon" type="images/png"  href="images/onlinelogo.png">
		
		
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="style.css">
	 <style>
		.modal {
  			max-height: 90%;
		}
		blockquote{
			border-left:5px solid teal;
		}		
	</style>
</head>
<body bgcolor="#1e1f33">
		<?php
			require('navbar.php');
			if(isset($_POST["submit"])){
			// Checking For Blank Fields..
			if($_POST["name"]==""||$_POST["email"]==""||$_POST["phno"]==""||$_POST["address"]==""||$_POST["pname"]==""){
			echo "<script>alert('Please fill all the Fields...')</script>";
			}else{
			// Check if the "Sender's Email" input field is filled out
			$email=$_POST['email'];
			// Sanitize E-mail Address
			$email =filter_var($email, FILTER_SANITIZE_EMAIL);
			// Validate E-mail Address
			$email= filter_var($email, FILTER_VALIDATE_EMAIL);
			if (!$email){
			echo "<script>alert('Invalid Email Address!')</script>";
			}
			else{
			$subject = "Buy IOT Project";
			$message="Product Name: ".$_POST['pname']."\n";
			$message.="Name: ".$_POST['name']."\n";
			$message.="Email: ".$_POST['email']."\n";
			$message.="Phone Number: ".$_POST['phno']."\n";
			$message.="Address: ".$_POST['address']."\n";
			// Message lines should not exceed 70 characters (PHP rule), so wrap it
			$message = wordwrap($message, 70);
			// Send Mail By PHP Mail Function
			$_SESSION['success']=mail("adilotha@gmail.com", $subject, $message);
			}
			}
			}
			if(isset($_SESSION['success'])){				
				echo "<script>alert('Your mail has been sent successfuly!')</script>";
				session_destroy();
			}
		?>
														<!-- Slider 1 -->
		<section class="section container">
			<div class="row white-text">				
				<div class="col s12">
					<h3 class="product_header"><blockquote>Product 1</h3>
					 <div class="slider">		
					    <ul class="slides">
					      <li>
					        <img src="https://gooiest-lick.000webhostapp.com/1.jpeg"> <!-- random image -->
					      </li>
					      <li>
					        <img src="https://gooiest-lick.000webhostapp.com/2.jpeg"> <!-- random image -->					        
					      </li>
					      <li>
					        <img src="https://gooiest-lick.000webhostapp.com/3.jpeg"> <!-- random image -->
					      </li>
					      <li>
					        <img src="https://gooiest-lick.000webhostapp.com/4.jpeg"> <!-- random image -->
					      </li>
					    </ul>
  					</div>
				</div>
			</div>
			<div class="row white-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
            <a href="#">Know More</a>
			</div>
			<div class="row center-align">
				<a class="waves-effect waves-light btn modal-trigger #0288d1 light-blue darken-2" href="#modal1">Buy</a>
			</div>
															<!-- Modal Structure 1-->
			  	<div id="modal1" class="modal">
			    	<div class="modal-content">
			      		<h4>Buy</h4>
							<div class="row">
			        			<form class="col s12" action="buy.php" method="post" id="form1">
							      	<div class="row">
							      		<div class="input-field col s6">
							      			<i class="material-icons prefix">build</i>
      										<input value="Product 1" id="product_name_1" name="pname" type="text" class="validate" required>
      										<label class="active" for="product_name_1">Product Name</label>
    									</div>
							        	<div class="input-field col s12 l6">
							          		<i class="material-icons prefix">account_circle</i>
							          		<input id="icon_prefix" name="name" type="text" class="validate" required>
							          		<label for="icon_prefix">Name</label>
							        	</div>						
							      	</div>
							      	<div class="row">
							      		<div class="input-field col s12 l6">
							      			<i class="material-icons prefix">email</i>
							          		<input id="icon_email" name="email" type="email" class="validate" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
							          		<label for="icon_email">Email</label>	
							      		</div>
							      		<div class="input-field col s12 l6">
							          		<i class="material-icons prefix">phone</i>
							          		<input id="icon_telephone" name="phno" type="tel" class="validate" required>
							          		<label for="icon_telephone">Mobile No.</label>
							        	</div>
							      	</div>
							      	<div class="input-field col s12">
							      		<i class="material-icons prefix">business</i>
          								<textarea id="address" name="address" class="materialize-textarea" required></textarea>
          								<label for="address">Address</label>
        							</div>
        							<div class="modal-footer">     
        								<button class="modal-action waves-effect waves-green btn-flat light-blue darken-2 white-text" type="submit" name="submit" form="form1">Submit</button>
			    					</div>
							    </form>
			     			</div>
			    	</div>
			    	
  				</div>
		</section>
														<!-- Slider 1 Complete -->


															<!-- Slider 2 -->
		<section class="section container">
			<div class="row white-text">				
				<div class="col s12">
					<h3 class="product_header"><blockquote>Product 2</h3>
					 <div class="slider">		
					    <ul class="slides">
					      <li>
					        <img src="https://gooiest-lick.000webhostapp.com/1.jpeg"> <!-- random image -->
					      </li>
					      <li>
					        <img src="https://gooiest-lick.000webhostapp.com/2.jpeg"> <!-- random image -->					        
					      </li>
					      <li>
					        <img src="https://gooiest-lick.000webhostapp.com/3.jpeg"> <!-- random image -->
					      </li>
					      <li>
					        <img src="https://gooiest-lick.000webhostapp.com/4.jpeg"> <!-- random image -->
					      </li>
					    </ul>
  					</div>
				</div>
			</div>
			<div class="row white-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
            <a href="#">Know More</a>
			</div>
			<div class="row center-align">
				<a class="waves-effect waves-light btn modal-trigger #0288d1 light-blue darken-2" href="#modal2">Buy</a>
			</div>
														<!-- Modal Structure 2 -->
			  	<div id="modal2" class="modal">
			    	<div class="modal-content">
			      		<h4>Buy</h4>
							<div class="row">
			        			<form class="col s12" action="buy.php" method="post" id="form2">
							      	<div class="row">
							      		<div class="input-field col s6">
							      			<i class="material-icons prefix">build</i>
      										<input value="Product 2" id="product_name_2" name="pname" type="text" class="validate" required>
      										<label class="active" for="product_name_2">Product Name</label>
    									</div>
							        	<div class="input-field col s12 l6">
							          		<i class="material-icons prefix">account_circle</i>
							          		<input id="icon_prefix" name="name" type="text" class="validate" required>
							          		<label for="icon_prefix">Name</label>
							        	</div>						
							      	</div>
							      	<div class="row">
							      		<div class="input-field col s12 l6">
							      			<i class="material-icons prefix">email</i>
							          		<input id="icon_email" name="email" type="email" class="validate" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
							          		<label for="icon_email">Email</label>	
							      		</div>
							      		<div class="input-field col s12 l6">
							          		<i class="material-icons prefix">phone</i>
							          		<input id="icon_telephone" name="phno" type="tel" class="validate" required>
							          		<label for="icon_telephone">Mobile No.</label>
							        	</div>
							      	</div>
							      	<div class="input-field col s12">
							      		<i class="material-icons prefix">business</i>
          								<textarea id="address" name="address" class="materialize-textarea" required></textarea>
          								<label for="address">Address</label>
        							</div>
        							<div class="modal-footer">        			
			      						<button class="modal-action waves-effect waves-green btn-flat light-blue darken-2 white-text" type="submit" name="submit" form="form2">Submit</button>
			    					</div>
							    </form>
			     			</div>
			    	</div>			
  				</div>
		</section>
																<!-- Slider 2 Complete -->
																	<!-- Slider 3-->
		<section class="section container">
			<div class="row white-text">				
				<div class="col s12">
					<h3 class="product_header"><blockquote>Product 3</h3>
					 <div class="slider">		
					    <ul class="slides">
					      <li>
					        <img src="https://gooiest-lick.000webhostapp.com/1.jpeg"> <!-- random image -->
					      </li>
					      <li>
					        <img src="https://gooiest-lick.000webhostapp.com/2.jpeg"> <!-- random image -->					        
					      </li>
					      <li>
					        <img src="https://gooiest-lick.000webhostapp.com/3.jpeg"> <!-- random image -->
					      </li>
					      <li>
					        <img src="https://gooiest-lick.000webhostapp.com/4.jpeg"> <!-- random image -->
					      </li>
					    </ul>
  					</div>
				</div>
			</div>
			<div class="row white-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
            <a href="#">Know More</a>
			</div>
			<div class="row center-align">
				<a class="waves-effect waves-light btn modal-trigger #0288d1 light-blue darken-2" href="#modal3">Buy</a>
			</div>
														<!-- Modal Structure 3 -->
			  	<div id="modal3" class="modal">
			    	<div class="modal-content">
			      		<h4>Buy</h4>
							<div class="row">
			        			<form class="col s12" action="buy.php" method="post" id="form3">
							      	<div class="row">
							      		<div class="input-field col s6">
							      			<i class="material-icons prefix">build</i>
      										<input value="Product 3" id="product_name_3" name="pname" type="text" class="validate" required>
      										<label class="active" for="product_name_3">Product Name</label>
    									</div>
							        	<div class="input-field col s12 l6">
							          		<i class="material-icons prefix">account_circle</i>
							          		<input id="icon_prefix" name="name" type="text" class="validate" required>
							          		<label for="icon_prefix">Name</label>
							        	</div>						
							      	</div>
							      	<div class="row">
							      		<div class="input-field col s12 l6">
							      			<i class="material-icons prefix">email</i>
							          		<input id="icon_email" name="email" type="email" class="validate" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
							          		<label for="icon_email">Email</label>	
							      		</div>
							      		<div class="input-field col s12 l6">
							          		<i class="material-icons prefix">phone</i>
							          		<input id="icon_telephone" name="phno" type="tel" class="validate" required>
							          		<label for="icon_telephone">Mobile No.</label>
							        	</div>
							      	</div>
							      	<div class="input-field col s12">
							      		<i class="material-icons prefix">business</i>
          								<textarea id="address" name="address" class="materialize-textarea" required></textarea>
          								<label for="address">Address</label>
        							</div>
        							<div class="modal-footer">        			
			      						<button class="modal-action waves-effect waves-green btn-flat light-blue darken-2 white-text" type="submit" name="submit" form="form3">Submit</button>
			    					</div>
							    </form>
			     			</div>
			    	</div>
  				</div>
		</section>
														<!-- Slider 3 Complete -->
		<?php
			require('footer.php');
		?>
<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
      <script>
	  
	  
	$(document).ready(function(){
  $('.slider').slider({
  	interval: 4000
  });
  });
  
// 		autoplay();
// 		function autoplay() {
// 			$('.slider').slider('next');
// 		   setTimeout(autoplay, 2000);
// }

     
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
  
 // function f1()
  //{
 // window.alert('working');
  
  //}
  
  function valid(){
  var feed=document.form1.phone.value;
  if(feed>10)
  {
	alert('Enter correct number');
  }
  }
	$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  	});    
        
      </script>
</body>
</html>