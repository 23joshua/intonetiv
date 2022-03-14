<?php  

	// for ($i = 0; $i < 2; $i++) :
	// 	require __DIR__ . "/banner-blog.php";
	// endfor;

?>

<div class="container">
	<article class="blog-post">
		<figure>
			<a href="" class="category-post">category name | data</a>
			<a href="?file=blog-post"><img src="assets/img/blog-post.jpg"></a>
			<figcaption>
				<a href="" class="author-name">Write by author name</a>
			</figcaption>
		</figure> 
		<h1>What is the Ideal Design Workflow for UX/UI Designers?</h1>

		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
		invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
		accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata 
		sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing 
		elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
		sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd 
		gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>		

		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
		invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
		accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata 
		sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing 
		elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
		sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd 
		gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
		invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
		accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata 
		sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing 
		elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
		sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd 
		gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

		<p><img src="assets/img/blog-post.jpg"></p>

		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
		invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
		accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata 
		sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing 
		elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
		sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd 
		gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>



		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
		invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
		accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata 
		sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing 
		elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
		sed diam voluptua.</p> 



		<p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea 
		takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur 
		sadipscing elitr.</p>
		<div class="like-post">
			<a href="" class="icon-heart"><span><ion-icon name="heart-outline"></ion-icon></span> 128 likes</a>
			<div class="social-post">
				<a href="" class="icon"><ion-icon name="logo-facebook"></ion-icon></a>
				<a href="" class="icon"><ion-icon name="logo-instagram"></ion-icon></a>
				<a href="" class="icon"><ion-icon name="logo-linkedin"></ion-icon></a>
				<a href="" class="icon"><ion-icon name="logo-twitter"></ion-icon></a>
			</div>
		</div>
		<aside class="comment-post">
			<div class="comments">
				<h3>16 Comments</h3>
				<textarea>Write a response...</textarea>
				<a href="" class="btn btn_blue btn_big btn_submit">submit</a>
			</div>
			<?php  

				for ($i = 0; $i < 3; $i++) :
					echo '
						<div class="comments-response">
							<figure>
								<img src="assets/img/banner-home.jpg" alt="">
								<figcaption>
									<span class="name-response">name</span><br>
									<span class="hours-response"> 5 hours ago</span>
								</figcaption>
							</figure>
							<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, at impedit! Error voluptatem debitis cum iste deserunt atque laboriosam dignissimos excepturi modi, quaerat, accusamus itaque ullam esse neque iure aliquam.</p>
							<div class="comments-like">
								<a href="" class="icon"><ion-icon name="heart-outline"></ion-icon><span>16</span></a>
								<a href="" class="icon"><ion-icon name="chatbox-outline"></ion-icon><span>12</span></a>
							</div>
						</div>	
				   ';
				endfor;

			?>
		</aside>
	</article>
</div>
<div class="next-previous">
	<div class="container">
		<div class="next-previous-container">
			<div class="next-previous-content">
				<div class="previous">
					<a href="" class="icon"><ion-icon name="chevron-back-outline"></ion-icon> <span>previous</span></a>
					<a href="">A beginner’s guide to organizing a product usability testing</a>
				</div>
				<div class="next">
					<a href="" class="icon"><span>next</span> <ion-icon name="chevron-forward-outline"></ion-icon></a>
					<a href="">7 ideation techniques to supercharge your next workshop</a>
				</div>
			</div>
		</div>
	</div>
</div>