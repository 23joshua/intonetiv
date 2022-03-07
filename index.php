<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>InTunetive SaaS</title>
	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/boot.css">
	<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
	<header class="header">
		<div class="container">
			<div class="logo"><a href="">logo</a></div>
			<nav class="nav">
				<a href="./">home</a>
				<a href="?file=about">about</a>
				<a href="?file=blog">blog</a>
			</nav>
			<div class="head-button">
				<a href="" class="btn btn_blue contact">contacto</a>
			</div>
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
		
	</footer>
</body>
</html>