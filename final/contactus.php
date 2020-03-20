<?php 
	include('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mini Project website</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
		<link rel="stylesheet" type="text/css" href="contactcss.css">
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
<body class="bgimg">
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
		<div class="container text-left text-white hearderset">
		<h1>Welcome <?php display_name();?></h1>
		<h2>You Can Contact Us Anytime</h2>
		</div>
		<div class="container">  
  <form id="contact" action="index.php" method="post">
    <h3>Contact Form</h3>
    <fieldset>
      <input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" name="phone" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." name="message" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    
  </form>
</div>
</body>
</html>