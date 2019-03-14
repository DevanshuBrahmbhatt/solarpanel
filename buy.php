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

.modal {
  max-height: 90%;
}


</style>	 
	  
	  
	  
</head>
<body bgcolor="#1e1f33">
		<?php
			include_once('navbar.php');
		?>
														<!-- Slider 1 -->
		<section class="section container">
			<div class="row white-text">				
				<div class="col s12">
					<h3 class="product_header"><blockquote>  Product 1</h3>
					 <div class="slider">		
					    <ul class="slides">
					      <li>
					        <img src="images/1.jpeg"> <!-- random image -->
					      </li>
					      <li>
					        <img src="images/2.jpeg"> <!-- random image -->					        
					      </li>
					      <li>
					        <img src="images/4.jpeg"> <!-- random image -->
					      </li>
					      <li>
					        <img src="images/5.jpeg"> <!-- random image -->
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
			        			<form class="col s12">
							      	<div class="row">
							      		<div class="input-field col s6">
							      			<i class="material-icons prefix">build</i>
      										<input value="Product 1" id="product_name_1" type="text" class="validate" required>
      										<label class="active" for="product_name_1">Product Name</label>
    									</div>
							        	<div class="input-field col s12 l6">
							          		<i class="material-icons prefix">account_circle</i>
							          		<input id="icon_prefix" type="text" class="validate" required>
							          		<label for="icon_prefix">Name</label>
							        	</div>						
							      	</div>
							      	<div class="row">
							      		<div class="input-field col s12 l6">
							      			<i class="material-icons prefix">email</i>
							          		<input id="icon_email" type="email" class="validate" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
							          		<label for="icon_email">Email</label>	
							      		</div>
							      		<div class="input-field col s12 l6">
							          		<i class="material-icons prefix">phone</i>
							          		<input id="icon_telephone" type="tel" class="validate" required>
							          		<label for="icon_telephone">Mobile No.</label>
							        	</div>
							      	</div>
							      	<div class="input-field col s12">
							      		<i class="material-icons prefix">business</i>
          								<textarea id="address" class="materialize-textarea" required></textarea>
          								<label for="address">Address</label>
        							</div>
							    </form>
			     			</div>
			    	</div>
					<div class="row">
					<div class="col s6 ">
			    	<div class="modal-footer">
			      		<a   class="waves-effect waves-light btn modal-action modal-close #0288d1 light-blue darken-2">Submit</a>
			    	</div>
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
					        <img src="images/1.jpeg"> <!-- random image -->
					      </li>
					      <li>
					        <img src="images/2.jpeg"> <!-- random image -->					        
					      </li>
					      <li>
					        <img src="images/4.jpeg"> <!-- random image -->
					      </li>
					      <li>
					        <img src="images/5.jpeg"> <!-- random image -->
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
			        			<form class="col s12">
							      	<div class="row">
							      		<div class="input-field col s6">
							      			<i class="material-icons prefix">build</i>
      										<input value="Product 2" id="product_name_2" type="text" class="validate" required>
      										<label class="active" for="product_name_2">Product Name</label>
    									</div>
							        	<div class="input-field col s12 l6">
							          		<i class="material-icons prefix">account_circle</i>
							          		<input id="icon_prefix" type="text" class="validate" required>
							          		<label for="icon_prefix">Name</label>
							        	</div>						
							      	</div>
							      	<div class="row">
							      		<div class="input-field col s12 l6">
							      			<i class="material-icons prefix">email</i>
							          		<input id="icon_email" type="email" class="validate" required>
							          		<label for="icon_email">Email</label>	
							      		</div>
							      		<div class="input-field col s12 l6">
							          		<i class="material-icons prefix">phone</i>
							          		<input id="icon_telephone" type="tel" class="validate" required>
							          		<label for="icon_telephone">Mobile No.</label>
							        	</div>
							      	</div>
							      	<div class="input-field col s12">
							      		<i class="material-icons prefix">business</i>
          								<textarea id="address" class="materialize-textarea" required></textarea>
          								<label for="address">Address</label>
        							</div>
							    </form>
			     			</div>
			    	</div>
			    		<div class="row">
					<div class="col s6 ">
			    	<div class="modal-footer">
			      		<a   class="waves-effect waves-light btn modal-action modal-close #0288d1 light-blue darken-2">Submit</a>
			    	</div>
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
					        <img src="images/1.jpeg"> <!-- random image -->
					      </li>
					      <li>
					        <img src="images/2.jpeg"> <!-- random image -->					        
					      </li>
					      <li>
					        <img src="images/4.jpeg"> <!-- random image -->
					      </li>
					      <li>
					        <img src="images/5.jpeg"> <!-- random image -->
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
			        			<form class="col s12">
							      	<div class="row">
							      		<div class="input-field col s6">
							      			<i class="material-icons prefix">build</i>
      										<input value="Product 3" id="product_name_3" type="text" class="validate">
      										<label class="active" for="product_name_3">Product Name</label>
    									</div>
							        	<div class="input-field col s12 l6">
							          		<i class="material-icons prefix">account_circle</i>
							          		<input id="icon_prefix" type="text" class="validate" required>
							          		<label for="icon_prefix">Name</label>
							        	</div>						
							      	</div>
							      	<div class="row">
							      		<div class="input-field col s12 l6">
							      			<i class="material-icons prefix">email</i>
							          		<input id="icon_email" type="email" class="validate" required>
							          		<label for="icon_email">Email</label>	
							      		</div>
							      		<div class="input-field col s12 l6">
							          		<i class="material-icons prefix">phone</i>
							          		<input id="icon_telephone" type="tel" class="validate" required>
							          		<label for="icon_telephone">Mobile No.</label>
							        	</div>
							      	</div>
							      	<div class="input-field col s12">
							      		<i class="material-icons prefix">business</i>
          								<textarea id="address" class="materialize-textarea"required></textarea>
          								<label for="address">Address</label>
        							</div>
							    </form>
			     			</div>
			    	</div>
			    		<div class="row">
					<div class="col s6 ">
			    	<div class="modal-footer">
			      		<a   class="waves-effect waves-light btn modal-action modal-close #0288d1 light-blue darken-2">Submit</a>
			    	</div>
					</div>
				</div>
  				</div>
		</section>
														<!-- Slider 3 Complete -->
		<?php
			include_once('footer.php');
		?>
	   <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
      <script>
	  
	  
	$(document).ready(function(){
  $('.slider').slider();
  
		autoplay();
		function autoplay() {
			$('.slider').slider('next');
		   setTimeout(autoplay, 2000);
}


  
});

     
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