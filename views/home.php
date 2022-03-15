<?php  

	require __DIR__ . "./banner.php";

?>
<div class="container">
	<section class="solutions">
		<h2>What can you do with Intunetive?</h2>
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Asperiores eveniet reiciendis.</p><img src="../assets/img/Online.webp" alt="">
		<?php  

			for ($i = 0; $i < 3; $i++) :
				echo '
					<article class="solutions-content transition">
						<img src="assets/img/Online.webp" alt="">
						<h3>Lorem, ipsum, dolor.</h3>
						<p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Culpa, officiis recusandae possimus! Accusamus incidunt cumque id exercitationem ab, voluptatum alias nam., hic officia!</p>
					</article>
				';
			endfor;

		?>
	</section>
</div>
<section class="video">
	<div class="container">
		<?php  

			require __DIR__ . "./video.php";

		?>
	</div>
</section>
<div class="container">
	<section class="servic">
		<h2>Featured Services</h2>
		<?php  

			for ($i = 0; $i < 3; $i++) :
				require __DIR__ . "./servic.php";
			endfor;

		?>
	</section>
</div>	
<article class="contact">
	<div class="container">
		<div class="contact-content">
			<div class="contact-form">
				<h2>Get In Touch</h2>
				<p><ion-icon name="location-outline"></ion-icon> maputo cidade,  nº 1223</p>
				<p><ion-icon name="call-outline"></ion-icon> +258 87 69 93 883</p>
				<p><ion-icon name="phone-portrait-outline"></ion-icon> +258 84 43 06 999</p>
				<form method="" enctype="" action="">
					<input type="" name="" value="" placeholder="nome competo">
					<input type="email" name="" value="" placeholder="e-mail">
					<textarea>
						Write your message here
					</textarea>
					<a href="" class="btn btn_big btn_blue btn-contact">send</a>
				</form>
			</div>
			<div class="contact-photo">
			</div>
		</div>
	</div>
</article>
<div class="container">	
	<section class="blog-container">
		<h2>blog</h2>
		<?php  

			for ($i = 0; $i < 3; $i++) :
				require __DIR__ . "/post.php";
			endfor;

		?>
	</section>
</div>