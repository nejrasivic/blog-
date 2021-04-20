<?php  include('config.php'); ?>
<!-- Source code for handling registration and login -->
<?php  include('includes/registration_login.php'); ?>

<?php include('includes/head_section.php'); ?>

<title>Love Of Food | Sign up </title>
</head>
<body>
<div class="container">
	<!-- Navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<!-- // Navbar -->

	<div class="register">

<form method="post" action="register.php">

<div class="card p-3 text-gray " style="width: 36rem;">

<h1>Registrirajte se ovdje </h1>
  <div class="card-body">
    <h5 class="card-title">Ispunite registracionu formu</h5>
    <form method="post" action="register.php" id="captcha_form">
			
	<div style="width: 40%; margin: 20px auto;">
	<form method="post" action="register.php" >
	<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username">
			<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
			<input type="password" name="password_1" placeholder="Password">
			<input type="password" name="password_2" placeholder="Password confirmation">
			<button type="submit" class="btn" name="reg_user">Register</button>
			<p> Već ste član? <a href="login.php">Sign in</a></p>
		
	?>
	
<!--	if($_SERVER['REQUEST_METHOD']=='POST') {
		$username = strip_tags($_POST['username']);
		$password = strip_tags($_POST['password']);
		$email = strip_tags($_POST['email']);
		$db = mysqli_connect("localhost", "root", "", "myblogprojekt") or die ("Failed to connect");
		$query = "INSERT INTO accounts(username,password,email) VALUES('$username', '$password', '$email')";
		$result = mysqli_query($db,$query);
		if($result) {
			echo "Registracija uspjesna";
			header('Location: index.php');
		}
		else {
			echo "Registracija nije uspjela, pokusajte ponovno";
		}
	} -->
	

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="blog.css" rel="stylesheet" type="text/css">	
<title>Register</title>
</head>
<body>


<!--	<div class="jedan">
		<label for="username">
		</label>
		<input class="form-control form-control-lg" type="text" name="username" placeholder="Korisnicko ime" id="username" required>
		<span id="username_error" class="text-danger"></span>
	</div>
	<div class="dva">	
		<label for="password">
		</label>
		<input class="form-control form-control-lg" type="password" name="password" placeholder="Password" id="password" required>
		<span id="password_error" class="text-danger"></span>
	</div>
	<div class="tri">	
		<label for="email">
		</label>
		<input class="form-control form-control-lg" type="email" name="email" placeholder="name@example.com" id="email" required>
		<br>
		<span id="email_error" class="text-danger"></span>
	</div>
		
		
</form>



<p id="but">
<div class="btn-group d-flex justify-content-center" role="group" aria-label="buttons"> 
<a href="index.php" input type="submit" value="Login" >
<input type="submit" name="submit" value="Register">
<input type="submit" value="Login">
</p>-->
</div>
</body>
</html>
</body>
<!-- // container -->
<!-- Footer -->
	<?php include( ROOT_PATH . '/includes/footer.php'); ?>
<!-- // Footer -->
