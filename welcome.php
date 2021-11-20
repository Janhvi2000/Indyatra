<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Indyatra</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
	<header id="header">
				<div class="logo">
				<img src="images/logo-01.png" width="130" height="90" align="left">
				<a href="index.html"></a></div>
				<a href="#menu"><span>Menu</span></a>
	</header>
	<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="index.html#one">Seasons</li></a>
					<li><a href="summer.html">Summer</a></li>
					<li><a href="spring.html">Spring</a></li>
					<li><a href="spring.html">Autumn</a></li>
					<li><a href="winter.html">Winter</a></li>
					<li><a href="contact us.html">Designed By</a></li>
				</ul>
			</nav>

	<section id="one" class="wrapper post bg-img" data-bg="banner2.jpg" >
	<div class="inner" style="overflow: hidden;">
	<article class="box">
	<div class="content">
	<p>
	<div class="page-header" style="text-align:center;">
        <h1><b>Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?>. Welcome to our site.</b></h1>
    	</div>
    	<p>
		<a href="index.html" class="btn btn-info">Go to homepage</a>&nbsp
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>&nbsp
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
   	</p>
	</p>
	</div>
	</article>
	</div>
	</section>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>