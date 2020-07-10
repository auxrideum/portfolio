<div id="fh5co-page">
	<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
	<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

		<h1 id="fh5co-logo"><a href="home">Gabriele P.</a></h1>
		<nav id="fh5co-main-menu" role="navigation">
			<ul>
				<li><a href="home">Home</a></li>
				<li><a href="blog">Blog</a></li>
				<li class="fh5co-active"><a href="portfolio">Portfolio</a></li>
				<li><a href="chi-sono">Chi sono</a></li>
				<li><a href="contattami">Contatti</a></li>
			</ul>
		</nav>

		<div class="fh5co-footer">
			<p><small>&copy; 2020 All Rights Reserved.</small></p>
			<ul>
				<li><a href="https://twitter.com/auxrideum" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://www.linkedin.com/in/gabriele-portente-24504919b/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="https://github.com/auxrideum" target="_blank"><i class="fa fa-github"></i></a></li>
				<li><a href="mailto:me@gabrieleportente.it"><i class="fa fa-envelope"></i></a></li>
			</ul>
		</div>

	</aside>

	<div id="fh5co-main">
		<div class="fh5co-narrow-content">
			<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Portfolio</h2>
			<div class="row row-bottom-padded-md">
				<?php if (! empty($projects) && is_array($projects)) : ?>
					<?php foreach ($projects as $project): ?>
						<div class="col-md-3 col-sm-6 col-padding text-center animate-box">
							<a href="#" class="img-responsive work image-popup" style="background-image: url(<?php echo $project['img_url']; ?>);">
								<div class="desc">
									<h3><?php echo $project['name']; ?></h3>
									<span><?php echo $project['category']; ?></span>
								</div>
							</a>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>