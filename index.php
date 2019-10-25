<?php
	session_start();//initialize the session

	//check if the user is logged in,if not redirect him to the login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: login.php");
		exit;
	}
?>
<html>
	<head>
		<title>Welcome</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="
https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
">
	</head>
	<body>
		<div class="container">
			<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["user_id"]);?></b>.Welcome to Mush Rush</h1>
		</div>
		<div class="navbar" id="topnav">
				<a href="index.php">Home</a>
				<a href="about.php">About</a>
				<a href="services.php">Services</a>
				<a href="resources.php">Resources</a>
				<a href="contact.php">Contact Us</a>
				<a href="logout.php">Log out</a>
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			    <i class="fa fa-bars"></i>
			  </a>
		</div>
		<script>
			function myFunction(){
				var x = document.getElementById("topnav");
				if (x.className === "navbar"){
					x.className += "responsive";
				}else{
					x.className = "navbar";
				}
			}

		</script>
		<div class="slider" style="min-width:80%">

			  <img class="mySlides" src="images/teams.jpeg" style="width:100%;height: 80%">
			  <img class="mySlides" src="images/variety.jpg" style="width:100%;height: 80%">
			  <!--<img class="mySlides" src="images/mush_room.jpeg" style="width:100%" >-->
			  <img class="mySlides" src="images/mushrooms.jpg" style="width:100%">
		</div>

		<script>
			var myIndex = 0;
			carousel();

			function carousel() {
			  var i;
			  var x = document.getElementsByClassName("mySlides");
			  for (i = 0; i < x.length; i++) {
			    x[i].style.display = "none";  
			  }
			  myIndex++;
			  if (myIndex > x.length) {myIndex = 1}    
			  x[myIndex-1].style.display = "block";  
			  setTimeout(carousel, 4000);    
			}
		</script>

		<!-- Section: Team v.1 -->
		<section class="team-section text-center my-5">

		  <!-- Section heading -->
		  <h2 class="h1-responsive font-weight-bold my-5">Our amazing team</h2>
		  <!-- Section description -->
		  <p class="grey-text w-responsive mx-auto mb-5">.Being a successful trade organisation we owe in large part to this team and the other employees who work hard to produce quality products.Counting with this team is like betting to the winner, we are what we are thanks to the quality of work you do for us.</p>

		  <!-- Grid row -->
		  <div class="row">

		    <!-- Grid column -->
		    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
		      <div class="avatar mx-auto">
		        <img src="images/moses.jpg" class="rounded-circle z-depth-1" height="236" 
		          alt="Sample avatar">
		      </div>
		      <h5 class="font-weight-bold mt-4 mb-3">Moses Wafula</h5>
		      <p class="text-uppercase blue-text"><strong>Director of Member Services</strong></p>
		      <p class="grey-text">Moses has been with Mush Rush since December 2017 and leads the member services department. Moses graduated from  Moi University  in four years with a degree in sociology and psychology specializing in identity and community.
		</p>
		      <ul class="list-unstyled mb-0">
		        <!-- Facebook -->
		        <a class="p-2 fa-lg fb-ic">
		          <i class="fab fa-facebook-f blue-text"> </i>
		        </a>
		        <!-- Twitter -->
		        <a class="p-2 fa-lg tw-ic">
		          <i class="fab fa-twitter blue-text"> </i>
		        </a>
		        <!-- Instagram -->
		        <a class="p-2 fa-lg ins-ic">
		          <i class="fab fa-instagram blue-text"> </i>
		        </a>
		      </ul>
		    </div>
		    <!-- Grid column -->

		    <!-- Grid column -->
		    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
		      <div class="avatar mx-auto">
		        <img src="images/wangamati.jpg" class="rounded-circle z-depth-1" height="236" 
		          alt="Sample avatar">
		      </div>
		      <h5 class="font-weight-bold mt-4 mb-3">Wycliff Wangamati</h5>
		      <p class="text-uppercase blue-text"><strong>Human Resource Manager</strong></p>
		      <p class="grey-text">Wycliff comes to the association with 20 years of experience
							 in policy consulting, government and nonprofit management
							  and enjoys connecting business leaders, elected officials 
							  and community leaders.</p>
		      <ul class="list-unstyled mb-0">
		        <!-- Facebook -->
		        <a class="p-2 fa-lg fb-ic">
		          <i class="fab fa-facebook-f blue-text"> </i>
		        </a>
		        <!-- Instagram -->
		        <a class="p-2 fa-lg ins-ic">
		          <i class="fab fa-instagram blue-text"> </i>
		        </a>
		      </ul>
		    </div>
		    <!-- Grid column -->

		    <!-- Grid column -->
		    <div class="col-lg-3 col-md-6 mb-md-0 mb-5">
		      <div class="avatar mx-auto">
		        <img src="images/mary.jpg" class="rounded-circle z-depth-1" height="236" 
		          alt="Sample avatar">
		      </div>
		      <h5 class="font-weight-bold mt-4 mb-3">Maria Makana</h5>
		      <p class="text-uppercase blue-text"><strong>Executive Officer</strong></p>
		      <p class="grey-text">Maria’s primary responsibilities are overseeing the 
							administration, programs and strategic plan for Mush Rush.</p>
		      <ul class="list-unstyled mb-0">
		        <!-- Facebook -->
		        <a class="p-2 fa-lg fb-ic">
		          <i class="fab fa-facebook-f blue-text"> </i>
		        </a>
		        <!-- Instagram -->
		        <a class="p-2 fa-lg ins-ic">
		          <i class="fab fa-instagram blue-text"> </i>
		        </a>
		        <!-- Dribbble -->
		        <a class="p-2 fa-lg ins-ic">
		          <i class="fab fa-dribbble blue-text"> </i>
		        </a>
		      </ul>
		    </div>
		    <!-- Grid column -->

		    <!-- Grid column -->
		    <div class="col-lg-3 col-md-6">
		      <div class="avatar mx-auto">
		        <img src="images/lucas.jpg" class="rounded-circle z-depth-1" height="236" 
		          alt="Sample avatar">
		      </div>
		      <h5 class="font-weight-bold mt-4 mb-3">Lucas Wafula</h5>
		      <p class="text-uppercase blue-text"><strong>Project Manager</strong></p>
		      <p class="grey-text">Lucas has nearly 10 years of experience working in the corporate world and has her associates degree in business administration. His background includes finance, pharmaceutical logistics and sales.</p>
		      <ul class="list-unstyled mb-0">
		        <!-- Facebook -->
		        <a class="p-2 fa-lg fb-ic">
		          <i class="fab fa-facebook-f blue-text"> </i>
		        </a>
		        <!-- Github -->
		        <a class="p-2 fa-lg ins-ic">
		          <i class="fab fa-github blue-text"> </i>
		        </a>
		      </ul>
		    </div>
		    <!-- Grid column -->

		  </div>
		  <!-- Grid row -->

		</section>
		<!-- Section: Team v.1 -->
		<footer class="page-footer font-small unique-color-dark">

  			<div style="background-color: #1C2331; color: #ffffff">
    		<div class="container">
		    <!-- Grid row -->
		    <div class="row mt-3" >

		      <!-- Grid column -->
		      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" >

		        <!-- Content -->
		        <h6 class="text-uppercase font-weight-bold">About Us</h6>
		        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
		        <p>Mush Rush is a voluntary trade association representing the growers, processors and marketers of cultivated mushrooms in the Uasin Gishu and industry suppliers worldwide. </p>

		      </div>
		      <!-- Grid column -->

		      <!-- Grid column -->
		      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" >

		        <!-- Links -->
		        <h6 class="text-uppercase font-weight-bold">Mush Rush</h6>
		        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
		        <p>
		          <a href="index.php">Home</a>
		        </p>
		        <p>
		          <a href="contact.php">Contact Us</a>
		        </p>
		        <p>
		          <a href="services.php">Services</a>
		        </p>
		        <p>
		          <a href="resources.php">Grower Resources</a>
		        </p>

		      </div>
		      <!-- Grid column -->

		      <!-- Grid column -->
		      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" >

		        <!-- Links -->
		        <h6 class="text-uppercase font-weight-bold">Products</h6>
		        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
		        <p>
		          <a href="signup.php">Your Account</a>
		        </p>
		        <p>
		          <a href="#!">Become an Affiliate</a>
		        </p>
		        <p>
		          <a href="#!">Shipping Rates</a>
		        </p>
		        <p>
		          <a href="#!">Help</a>
		        </p>

		      </div>
		      <!-- Grid column -->

		      <!-- Grid column -->
		      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" background-color="#333">

		        <!-- Links -->
		        <h6 class="text-uppercase font-weight-bold">Contact</h6>
		        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
		        <p>
		          <i class="fas fa-home mr-3"></i> Kesses, Moi University, Kenya</p>
		        <p>
		          <i class="fas fa-envelope mr-3"></i> jwalumbe@outlook.com</p>
		        <p>
		          <i class="fas fa-phone mr-3"></i> + 254 7401 20261</p>
		        <p>
		          <i class="fas fa-print mr-3"></i> + 254 5651 8532</p>

		      </div>
		      <!-- Grid column -->

		    </div>
		    <!-- Grid row -->

		  </div>
		  <!-- Footer Links -->

		  <!-- Copyright -->
		  <div class="footer-copyright text-center py-3">© 2019 Copyright:
		    <a href=""> mushrush.org</a>
		  </div>
		  <!-- Copyright -->

		</footer>
<!-- Footer -->
	</body>
</html>
