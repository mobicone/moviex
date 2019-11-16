<?php include 'config.php'; 
session_start();

$direct = $_GET['direct'];

if(isset($_SESSION['login'])){
	if(empty($direct)){
	header('Location: /');

} else if($direct == 'signup'){ 

} else if($direct == 'login'){

}
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $sitedata['title'].' - '.$sitedata['discription']; ?></title>
	<?php include 'includes/head_options.php'; ?>
</head>
<body>
	<div class="navbar">
	<a href="/"><div class="logo"></div></a>
	<?php include 'includes/menu.php';  ?>
	</div>
	<h1 class="section_title">Sign Up</a></h1>
	<form action="php-functions/signup.php" method="POST" class="signup-form">
		<div class="test">

		<input class="default-form" type="text" name="username" placeholder="Username">
		<input class="default-form" type="password" name="password" placeholder="Password">
		<input class="default-form" type="password" name="password2" placeholder="Repeat password">
		<input class="default-form" type="email" name="email"
		placeholder="Email">
		<input class="default-form submit-form" type="submit" name="" value="Sign up">
	    </form>
	</div>
</body>
</html>