<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="
https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
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
	<footer class="page-footer font-small unique-color-dark">

  			<div style="background-color: #1C2331; color: #ffffff">
    		<div class="container">
		<div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">About Us</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Mush Rush is a voluntary trade association representing the growers, processors and marketers of cultivated mushrooms in the Uasin Gishu and industry suppliers worldwide.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

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
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

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
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

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
</body>
</html>