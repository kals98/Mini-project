<?php 
	include('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mini Project website</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="bgimg">
		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
			<div class="container">
				<a href="" class="navbar-brand text-warning font-weight-bold">Travelmeister Tours</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse text-center" id="collapsenavbar">
					<ul class="navbar-nav ml-auto">
						<li class="nav-ite dropdown">
							<div class="dropdown">
							<a href="" class="nav-link  text-white">OFFERS</a>
							</div>
						</li>
						<li class="nav-item">
							<a href="aboutus.php" class="nav-link text-white">ABOUT US</a>
						</li>

                        <li class="nav-item">
							<a href="contactus.php" class="nav-link text-white">CONTACT US</a>
						</li>

                        <li class="nav-ite dropdown">
							<div class="dropdown">
							<a href="<?php display_link();?>" class="nav-link text-white"><?php display_name();?></a>
							<?php display_Dropdown();?>
							</div>
						</li>
					</ul>
				</div>

			</div>
		</nav>
	<div class="container text-center text-white hearderset">
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>	
		<h1 >Welcome To Travelmeister Tours</h1>
		<h2 >Where Your Travel Dreams are Fulfilled!!!</h2>
		<button class="btn btn-warning text-white btn-lg">SUBSCIRBE</button>
	</div>
	</div>
    <section class="container ourservices text-center">
   	<h1>SERVICES</h1>
   	<p>Extras We Offer</p>

   	<div class="row">
   		<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
   			<div class="imgsetting d-block m-auto bg-warning"><i class="fa fa-bookmark fa-3x text-white"></i></div>
   			<h2>WISHLIST</h2>
   			<p>Make a wishlist!</p>
   		</div>
   		<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
   			<div class="imgsetting d-block m-auto bg-warning"><i class="fa fa-heart fa-3x text-white"></i></div>
   			<h2>Value</h2>
   			<p>Your Feedback is Valued!</p>
   		</div>
   		<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
   			<div class="imgsetting d-block m-auto bg-warning"><i class="fa fa-plane fa-3x text-white"></i></div>
   			<h2>TOUR</h2>
   			<p>Customize Your Own Tours</p>
   		</div>

   	</div>
   </section>

<!--//////////////////portfolio///////////////-->
   <section class="portfolio bg-light">
   	<div class="container text-center">
   		<h1>Popular Destinations</h1>
   		<p>Explore a Destination</p>

   		<div class="row">

   			<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
   				<div class="flip-card">
				<div class="flip-card-inner">
				<div class="flip-card-front">
   					<img src="asia.jpg" class="card-img img-fluid">
   					<div class="flip-card-front">
   						<h2 class="card-title">ASIA</h2>
					</div>
				</div>
					<div class="flip-card-back">
   						<p class="card-text">India, Vietnam, Cambodia</p>
   					</div>
   				</div>
   			</div>
			</div>
   			<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
   				<div class="flip-card">
				<div class="flip-card-inner">
				<div class="flip-card-front">
   					<img src="eu.jpg" class="card-img img-fluid">
   					<div class="flip-card-front">
   						<h2 class="card-title">EUROPE</h2>
					</div>
				</div>
					<div class="flip-card-back">
   						<p class="card-text">Italy, France, Uk</p>
   					</div>
   				</div>
   			</div>
			</div>			
   			<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
   				<div class="flip-card">
				<div class="flip-card-inner">
				<div class="flip-card-front">
   					<img src="am.jpg" class="card-img img-fluid">
   					<div class="flip-card-front">
   						<h2 class="card-title">NORTH AMERICA</h2>
					</div>
				</div>
					<div class="flip-card-back">
   						<p class="card-text">USA, Canada</p>
   					</div>
   				</div>
				</div>

   		</div>
</div>
   		<div class="row">

   			<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
   				<div class="flip-card">
				<div class="flip-card-inner">
				<div class="flip-card-front">
   					<img src="aus.jpg" class="card-img img-fluid">
   					<div class="flip-card-front">
   						<h2 class="card-title">AUSTRALIA</h2>
					</div>
				</div>
					<div class="flip-card-back">
   						<p class="card-text">Australia, New Zealand</p>
   					</div>
   				</div>
				</div>
   			</div>
   			<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
   				<div class="flip-card">
				<div class="flip-card-inner">
				<div class="flip-card-front">
   					<img src="an.jpg" class="card-img img-fluid">
   					<div class="flip-card-front">
   						<h2 class="card-title">ANTARCTICA</h2>
					</div>
				</div>
					<div class="flip-card-back">
   						<p class="card-text">Explore the POLE</p>
   					</div>
   				</div>
				</div>			
   			</div>
   			<div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
  				<div class="flip-card">
				<div class="flip-card-inner">
				<div class="flip-card-front">
   					<img src="sam.jpg" class="card-img img-fluid">
   					<div class="flip-card-front">
   						<h2 class="card-title">SOUTH AMERICA</h2>
					</div>
				</div>
					<div class="flip-card-back">
   						<p class="card-text">Brazil, Peru, Argentina</p>
   					</div>
   				</div>
				</div>						
   			</div>
   			   			
   		</div>
   </section>
   <section class="ourteam">
   	<div class="container text-center">
   		<h1>OUR AMAZING TEAM</h1>
   		<p>Happy To Help</p>
   		<div class="row teamsetting">
   			<div class="col-lg-4 col-md-4 col-sm-10 col-12 d-block m-auto">
   		<figure class="figure">
   			<img src="ka.jpg" class="figure-img img-fluid rounded-circle" height="250px" width="250px">
   			<figcaption>
   				<h4>Kalash</h4>
   				<p class="figure-caption">Co-Founder</p>
   			</figcaption>
   		</figure>
   	</div>
   	<div class="col-lg-4 col-md-4 col-sm-10 col-12 d-block m-auto">
   		<figure class="figure">
   			<img src="pp.jfif" class="figure-img img-fluid rounded-circle" height="250px" width="250px">
   			<figcaption>
   				<h4>Pranita</h4>
   				<p class="figure-caption">Co-Founder</p>
   			</figcaption>
   		</figure>
   	</div>
   	<div class="col-lg-4 col-md-4 col-sm-10 col-12 d-block m-auto">
   		<figure class="figure">
   			<img src="me.jpg" class="figure-img img-fluid rounded-circle" height="250px" width="250px">
   			<figcaption>
   				<h4>Haseeb</h4>
   				<p class="figure-caption">Co-Founder</p>
   			</figcaption>
   		</figure>
   	</div>
   </div>

   	</div>
   </section>
   <footer class="footer">
   	<h6 class="text-center">Copyright @2019 Design by Travelmeister Tours</h6>
   </footer>


</body>
</html>