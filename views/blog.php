<div class="container">
	<h1>blog</h1>
	<section class="blog-container">
		<?php  

			for ($i = 0; $i < 12; $i++) :
				require __DIR__ . "/post.php";
			endfor;

		?>
	</section>
</div>