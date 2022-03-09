<div class="container">
	<section class="blog-container">
		<div class="category">
			<a href="">all</a>
			<a href="">category 1</a>
			<a href="">category 2</a>
			<a href="">category 3</a>
			<a href="">category 4</a>
		</div>
		<?php  

			for ($i = 0; $i < 12; $i++) :
				require __DIR__ . "/post.php";
			endfor;

		?>
		<div class="blog-learn">
			<a href="" class="btn btn_blue btn_big btn_news">view more</a>
		</div>
	</section>
</div>