<!DOCTYPE HTML>
<html>
	<head>
		<title>Form Submission - OxygenAlpha</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
        <header id="header" class="alt">
				
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>
	<nav id="menu">
				<ul class="links">
					<li><a href="C:\xampp\htdocs\OxygenAlpha\index.html">Home</a></li>
					<li><a href="https://www.facebook.com/oxygenalpha.bot.7">Social</a></li>
					<li><a href="https://www.facebook.com/upkar.saraswat">Founder</a></li>
				</ul>
			</nav>
			<section id="banner" data-video="images/banner">
				<div class="inner">
					<h1>Congratulations</h1>
					<p>We have recorded your message!<br />
					 
                    Under the name : <?php echo $_POST["username"]; ?><br>
         Your email address is:
         <?php echo $_POST["email"]; ?><br>
                    </p>
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