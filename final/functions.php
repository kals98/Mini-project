<?php 
	session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'multi_login');
    
	// variable declaration
	$username = "";
	$email    = "";
	$dob      = "";
	$c        = "";
	$d        = "";
	$errors   = array(); 

	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}

	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}
	if (isset($_POST['update_btn'])) {
		update();
	}	

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: login.php");
	}

	// REGISTER USER
	function register(){
		global $db, $errors;

		// receive all input values from the form
		$username    =  e($_POST['username']);
		$email       =  e($_POST['email']);
		$password_1  =  e($_POST['password_1']);
		$password_2  =  e($_POST['password_2']);
		$date=$_POST['dob'];
		$dob=date('Y-m-d', strtotime($date));

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		if (empty($date)) { 
			array_push($errors, "DOB is required"); 
		}
		else{
			$d=date('Y', strtotime($dob));
			$c=date('Y');
			if(($c-$d)<18){
			array_push($errors, "Should be above 18 years"); 
			}
		}
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		elseif ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		if (strlen($_POST["password_1"]) <= '8') {
			array_push($errors, "Your Password Must Contain At Least 8 Characters!");
		}
		elseif(!preg_match("#[0-9]+#",$password_1)) {
			array_push($errors, "Your Password Must Contain At Least 1 Number!");
		}
		elseif(!preg_match("#[A-Z]+#",$password_1)) {
			array_push($errors, "Your Password Must Contain At Least 1 Capital Letter!");
		}
		elseif(!preg_match("#[a-z]+#",$password_1)) {
			array_push($errors, "Your Password Must Contain At Least 1 Lowercase Letter!");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database

			if (isset($_POST['user_type'])) {
				$user_type = e($_POST['user_type']);
				$query = "INSERT INTO users (username, email, dob, user_type, password) 
						  VALUES('$username', '$email', '$dob', '$user_type', '$password')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "New user successfully created!!";
				header('location: index.php');
			}else{
				$query = "INSERT INTO users (username, email, dob, user_type, password) 
						  VALUES('$username', '$email', '$dob', 'user', '$password')";
				mysqli_query($db, $query);

				// get id of the created user
				$logged_in_user_id = mysqli_insert_id($db);

				$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
				$_SESSION['success']  = "You are now logged in";
				header('location: index.php');				
			}

		}

	}

	// return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// LOGIN USER
	function login(){
		global $db, $username, $errors;

		// grap form values
		$username = e($_POST['username']);
		$password = e($_POST['password']);

		// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = md5($password);

			$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['user_type'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: admin/home.php');		  
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";

					header('location: index.php');
				}
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	
	function update(){
		global $db, $errors, $username;

		// receive all input values from the form
		$usernamea   =  e($_POST['username']);
		$email       =  e($_POST['email']);
		$password_1  =  e($_POST['password_1']);
		$password_2  =  e($_POST['password_2']);
		$date=$_POST['dob'];
		$dob=date('Y-m-d', strtotime($date));

		// form validation: ensure that the form is correctly filled
		if (empty($usernamea)) { 
			array_push($errors, "Username is required"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		if (empty($date)) { 
			array_push($errors, "DOB is required"); 
		}
		else{
			$d=date('Y', strtotime($dob));
			$c=date('Y');
			if(($c-$d)<18){
			array_push($errors, "Should be above 18 years"); 
			}
		}
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		elseif ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		if (strlen($_POST["password_1"]) <= '8') {
			array_push($errors, "Your Password Must Contain At Least 8 Characters!");
		}
		elseif(!preg_match("#[0-9]+#",$password_1)) {
			array_push($errors, "Your Password Must Contain At Least 1 Number!");
		}
		elseif(!preg_match("#[A-Z]+#",$password_1)) {
			array_push($errors, "Your Password Must Contain At Least 1 Capital Letter!");
		}
		elseif(!preg_match("#[a-z]+#",$password_1)) {
			array_push($errors, "Your Password Must Contain At Least 1 Lowercase Letter!");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
				$password = md5($password_1);//encrypt the password before saving in the database
				$query = "UPDATE users SET username='$usernamea', email='$email', dob='$dob', 
				          WHERE username ='$username'";
				mysqli_query($db, $query);
				$querya = "SELECT * FROM users WHERE username='$usernamea' AND password='$password' LIMIT 1";
				$results = mysqli_query($db, $querya);				

				// get id of the created user
				$logged_in_user_id = mysqli_insert_id($db);

				$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
				$username=$usernamea;
					$_SESSION['success'] = "You are Details are now Updated";
					header('location: dashboard.php');
				} 
				
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}

	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}
	function display_link() {
		if (!isLoggedIn()) {
			echo "login.php";
		}
		else{
			echo "dashboard.php";
		}
	}
	function display_name() {
		if (isLoggedIn()) {
			echo $_SESSION['user']['username'];
		}
		else{
			echo "SIGNUP";
		}			
	}
	function display_uname() {
		if (isLoggedIn()) {
			echo $_SESSION['user']['username'];
		}		
	}
	function display_email() {
		if (isLoggedIn()) {
			echo $_SESSION['user']['email'];
		}

	}
	function display_dob() {
		if (isLoggedIn()) {
			echo $_SESSION['user']['dob'];
		}
	}
		function display_password() {
		if (isLoggedIn()) {
			echo $_SESSION['user']['password'];
		}

	}
	
	function display_Dropdown() {
		if (isLoggedIn()) {
			echo '<div class="dropdown-menu">
							<a class="dropdown-item" href="dashboard.php">Account Settings</a>
							<a class="dropdown-item" href="#">WishList</a>
							<a class="dropdown-item" href=login.php?logout="1"" style="color: red;">logout</a>
							</div>';
		}
	}

?>