<div class="container">
	<section class="blog-container">
		<?php  

			for ($i = 0; $i < 3; $i++) :
				require __DIR__ . "/post.php";
			endfor;

		?>
	</section>
</div>