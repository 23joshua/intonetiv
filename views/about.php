<div class="container">
	<article class="about">
		<h2>Our Mission</h2>
		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>
		<h2>our vision</h2>
		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>
		<h2>our value</h2>
		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>
	</article>
</div>

<section class="meet-leaders">
	<div class="container">
		<h2>Meet Our Leaders</h2>
		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		<article class="meet">
			<?php  

				for ($i = 0; $i < 4; $i++) :
					echo '
							<figure>
								<a href=""><img src="assets/img/social-media-gbe4f443fe_1280.jpg" alt=""></a>
								<figcaption>
									<p class="name-leaders">name lead</p>
									<p class="name-office">ceo</p>
									<div class="media">
										<a href="" class="icon"><ion-icon name="logo-linkedin"></ion-icon></a>
										<a href="" class="icon"><ion-icon name="logo-twitter"></ion-icon></a>
									</div>
								</figcaption>
							</figure>
					';
				endfor;

			?>
		</article>		
	</div>	
</section>
<div class="container">
	<article class="servic">
		<h2>Featured Services</h2>
		<?php  

			for ($i = 0; $i < 3; $i++) :
				require __DIR__ . "./servic.php";
			endfor;

		?>
	</article>
</div>

<section class="video">
	<div class="container">
		<?php  

			require __DIR__ . "./video.php";

		?>
	</div>
</section>

<div class="container">
	<section class="questions">
		<h2>Common Questions</h2>
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Voluptatum, exercitationem</p>
		<?php  

			for ($i = 0; $i < 4; $i++) :
				echo '
					<article class="questions-content">
						<div class="questions-title">
							<h4>Lorem, ipsum, dolor</h4>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam amet dolor recusandae.</p>
						</div>
						<div class="questions-icon">
							<a href="" class="icon"><ion-icon name="add-circle-outline"></ion-icon></a>
							<!-- <a href="" class="icon"><ion-icon name="remove-circle-outline"></ion-icon></a> -->
						</div>
						<div class="questions-response">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti obcaecati tenetur odit, ducimus reiciendis ipsum aperiam quam iusto dolorum in sint. Aliquam ea repellat facilis. Dolorem, dolorum autem esse unde?</p>
							<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Provident, culpa.</p>
						</div>
					</article>
				';
			endfor;

		?>	
	</section>
</div>