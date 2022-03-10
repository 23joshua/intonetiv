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
<section class="video">
	<div class="container">
		<?php  

			require __DIR__ . "./video.php";

		?>
	</div>
</section>
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