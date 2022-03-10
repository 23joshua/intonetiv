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
		<?php  

			for ($i = 0; $i < 3; $i++) :
				require __DIR__ . "/post.php";
			endfor;

		?>
	</section>
</div>