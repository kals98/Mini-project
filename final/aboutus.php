<?php 
	include('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system for Mini Project</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="aboutus.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:60'>
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
<body class="bgimgl">
	<div >
		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
			<div class="container">
				<a href="index.php" class="navbar-brand text-warning font-weight-bold">Travelmeister Tours</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse text-center" id="collapsenavbar">
					<ul class="navbar-nav ml-auto">
						<li class="nav-ite dropdown">
							<div class="dropdown">
							<a href="" class="nav-link  text-white">OFFERS</a>
							<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Link 1</a>
							<a class="dropdown-item" href="#">Link 2</a>
							<a class="dropdown-item" href="#">Link 3</a>
							</div>
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
		<h1>Welcome user</h1>
	</div>
	<div class="ct-pageWrapper" id="ct-js-wrapper">
  <section class="company-heading intro-type" id="parallax-one">
    <div class="container">
      <div class="row product-title-info">
        <div class="col-md-12">
          <h1>About Us</h1>
        </div>
      </div>
    </div>
    <div class="parallax" id="parallax-cta" style="background-image:'C:\xampp\htdocs\final\about.jpp';"></div>
  </section>
  <section class="story-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding" id="section">
    <div class="container text-center text-white">
      <h2>WHAT DRIVES US</h2>
      <h3>LEARN ABOUT US</h3>
      <div class="container text-center text-white">
        <div class="red-border"></div>
        <!-- <a class="ct-u-marginTop60 btn btn-solodev-red btn-fullWidth-sm ct-u-size19" href="#">Learn More</a> -->
      </div>
    </div>
  </section>
  <section class="culture-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding">
    <div class="container">
      <div class="row">
        <div class="container text-center">
          <h2>TRAVEL WITH US</h2>
     <p><center>
	 Travel Tourister is a leading Travel portal where we introduce travellers
 to trusted travel agents to make their journey hasselfree, memorable And
 happy. Travel Tourister is a platform where travellers get Tour packages
 ,Hotel packages deals through trusted travel companies And hoteliers who
 are working with us across the world. We always try to find new and more
 travel agents and hoteliers from every nook and corners across the world
 so that you could compare the deals with different travel agents and hote
 liers and book your tour or hotel with the one you have chosen according 
 your taste and budget.</p>
<p>Travel Tourister is an online travel portal which provide customers to the 
travel agents where the travel agents provide the tour packages according to the requirement given by the clients that will be delivered to him by 
our team members and he will make the tour packages according to the customer's needs.
Our objective is to provide the customer with best deals and offers and time saving process that he might look out to spend his valuable time on
 selecting the holiday destinations, booking tickets , managing budgets , looking for a travel agents that will help to guide him with other option.
In this way, travel tourister provide one step solution to the customers.In order to fulfil the requirements of the clientele, we offer broad spectrum
 of travel related services. We are highly acknowledged by our clients 
 because we offer unforgettable itineraries and quality services to them.We also offer our clients certain theme based tours which includes Family
 Vacations, Honeymoon tours, Culinary Tours, Private Tours, Yoga Tours, Religious Tours, Golf Tours, Adventure tours, Safari Tours, Beach tours,
 Corporate and Business Tours and many more.</p>
<p>Our team of destination experts creatively design the tour packages, corporate packages, conferences and meetings for the esteemed clients.
 We make the special arrangements for guests to delegate kit design and production, from venue selection to organizing social evenings. For your 
 incentive programs we select the perfect itinerary, and choose the perfect ideal theme to make your incentive tour a once in a lifetime 
 experience. According to the requirement provided by the clients, we also customize the tour packages. We offer excellent services to our 
 clients, so that they enjoy travelling with us. We always aim to provide the best quality services to all our clients,
so that they are well-satisfied and do not face any inconvenience while travelling. And we always aim to have long term business associations with
 all our esteemed clients and they would surely refer our name to their friends/ relatives/ business colleagues/ neighbours for any holiday plan 
 in India aw well as abroad. 
	 </p></center>
    </div>
  </section>
  <section class="customers-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding">
    <div class="container">
      <div class="row">
        <div class="container text-center text-white">
          <h2><center>CUSTOMERS</center></h2>
          <h3>Trusted by some of the world’s leading brands.</h3>
        </div>
        <div class="clearfix">
      </div>
    </div>
  </section>
</div>
</body>
</html>