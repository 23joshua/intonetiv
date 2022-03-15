<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>InTunetive SaaS</title>
	<link rel="icon" type="image/png" href=""/>
	
	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/boot.css">
	<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
	<header class="header">
		<div class="container">
			<div class="logo"><a href="./">InTunetive</a></div>
			<div><span class="icon"><ion-icon name="menu-outline"></ion-icon></span></div>
			<nav class="nav">
				<a href="./" class="transition">home</a>
				<a href="?file=about" class="transition">about</a>
				<a href="?file=blog" class="transition">blog</a>
				<div class="head-button">
					<a href="?file=sign-up" class="btn btn_blue_out btn_big btn-sign-up">sign up</a>
					<a href="?file=login" class="btn btn_blue btn_big btn-sign-in">sign in</a>
				</div>
			</nav>
		</div>
	</header>

	<main>
		<?php  

			$file = filter_input(INPUT_GET, "file", FILTER_SANITIZE_SPECIAL_CHARS);
			if (empty("$file")) {
				require __DIR__ . "/views/home.php";
			}elseif($file && file_exists(__DIR__ . "/views/{$file}.php")){
				require __DIR__ . "/views/{$file}.php";
			}else{
				require __DIR__ . "/views/404.php";
			}

		?>
	</main>

	<footer class="footer">
		<div class="media-social">
			<div class="container">
				<div class="social-content">
					<div class="media">
						<a href="" class="icon"><ion-icon name="logo-facebook"></ion-icon></a>
						<a href="" class="icon"><ion-icon name="logo-instagram"></ion-icon></a>
						<a href="" class="icon"><ion-icon name="logo-linkedin"></ion-icon></a>
						<a href="" class="icon"><ion-icon name="logo-twitter"></ion-icon></a>
					</div>
					<h2>follow us on our social networks</h2>
					<p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit.</p>
				</div>
			</div>
		</div>
		<div class="newsletter">
			<div class="container">
				<div class="news-content">
					<h2>Newsletter</h2><br>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
					<div class="news-form">
						<label>
							<input type="" name="" placeholder="Your email">
							<span class="icon"><ion-icon name="search-outline"></ion-icon></span>
						</label>
						<a href="" class="btn btn_blue btn_big btn_news">Subscribe</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-menu">
			<div class="container">
				<div class="footer-content">
					<div class="logo"><a href="./">InTunetive</a></div>
					<div class="footer-about">
						<h2>about</h2>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id quisquam cum non quis beatae aliquam, fugiat, eligendi consequuntur, obcaecati, natus earum illo.</p>
					</div>
					<div class="footer-pages">
						<h2>menu</h2>
						<a href="./">home</a>
						<a href="?file=about">about</a>
						<a href="?file=blog">blog</a>
					</div>
					<div class="footer-services">
						<h2>services</h2>
						<a href="">Lorem, ipsum dolor.</a>
						<a href="">Lorem, ipsum.</a>
						<a href="">Lorem ipsum, dolor sit.</a>
						<a href="">Lorem, ipsum, dolor.</a>
						<a href="">Lorem, ipsum.</a>
					</div>
					<div class="footer-terms">
						<h2>terms</h2>
						<a href="">terms & Conditions</a>
						<a href="">Terms of Use</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="container">
				<a href="" class="copy">&copy 2022. all rights reserved</a>
			</div>
		</div>
	</footer>
</body>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/scripts.js"></script>
</html>