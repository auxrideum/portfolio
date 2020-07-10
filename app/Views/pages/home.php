<div id="fh5co-page">
	<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
	<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

		<h1 id="fh5co-logo"><a href="home">Gabriele P.</a></h1>
		<nav id="fh5co-main-menu" role="navigation">
			<ul>
				<li class="fh5co-active"><a href="home">Home</a></li>
				<li><a href="blog">Blog</a></li>
				<li><a href="portfolio">Portfolio</a></li>
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
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
					<li style="background-image: url(images/img_bg_1.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
									<div class="slider-text-inner">
										<h1>Lorem <strong></strong> ipsum dolor sit amet.</h1>
										<h2>Cras efficitur tempus ex, ac commodo tortor pretium ac. Suspendisse nec volutpat augue.</h2>
										<p><a class="btn btn-primary btn-learn">Learn More<i class="icon-arrow-right3"></i></a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/img_bg_2.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
									<div class="slider-text-inner">
										<h1>Duis <strong></strong> blandit leo quis eleifend efficitur.</h1>
										<h2>Cras efficitur tempus ex, ac commodo tortor pretium ac. Suspendisse nec volutpat augue.</h2>
										<p><a class="btn btn-primary btn-learn">Learn More<i class="icon-arrow-right3"></i></a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/img_bg_3.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
									<div class="slider-text-inner">
										<h1>Etiam <strong></strong> ac eros iaculis, dictum neque volutpat.</h1>
										<h2>Cras efficitur tempus ex, ac commodo tortor pretium ac. Suspendisse nec volutpat augue.</h2>
										<p><a class="btn btn-primary btn-learn">Learn More<i class="icon-arrow-right3"></i></a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>

		<div class="fh5co-narrow-content">
			<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Servizi</h2>
			<div class="row">
				<div class="col-md-6">
					<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
						<div class="fh5co-icon">
							<i class="fa fa-laptop"></i>
						</div>
						<div class="fh5co-text">
							<h3>Web Development</h3>
							<p>Sviluppo e progettazione design del tuo sito web. Realizzazione di siti web aziendali, personali ed e-commerce.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
						<div class="fh5co-icon">
							<i class="fa fa-mobile"></i>
						</div>
						<div class="fh5co-text">
							<h3>Mobile Development</h3>
							<p>Realizzaione applicazioni mobile per Android e iOS con la tecnologia <a href="https://flutter.dev/">Flutter</a>, design moderno e prestazioni ottime.</p>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
						<div class="fh5co-icon">
							<i class="fa fa-desktop"></i>
						</div>
						<div class="fh5co-text">
							<h3>Desktop Development</h3>
							<p>Realizzazione applicazione desktop multipiattaforma. Console applications e Windows applications.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fh5co-narrow-content">
			<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Ultimi articoli</h2>
			<div class="row row-bottom-padded-md">
				<?php if (! empty($posts) && is_array($posts)) : ?>
					<?php foreach ($posts as $post): ?>
						<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<img src="<?php echo $post['img_url']; ?>" class="img-responsive">
								<div class="desc">
									<h3>
										<a href="<?php echo 'blog/'.$post['slug'];?>"><?php echo $post['titolo']; ?></a>
									</h3>

									<span>
										<small>da <?php echo $post['creatore']; ?></small> / <small> <?php echo $post['categoria']; ?> </small> / <small> <i class="icon-comment"></i> 14</small>
									</span>

									<p>
										<?php
										$truncated = (strlen($post['testo']) > 80) ? substr($post['testo'], 0, 80) . '...' : $post['testo'];
										echo $truncated;
										?>
									</p>
									<a href="<?php echo 'blog/'.$post['slug'];?>" class="lead">Leggi <i class="icon-arrow-right3"></i></a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>

		<div id="get-in-touch">
			<div class="fh5co-narrow-content">
				<div class="row">
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<h1 class="fh5co-heading-colored">Richiedi una consulenza gratuita.</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">Vuoi richiedere un preventivo o desideri ricevere informazioni?</p>
						<p><a href="contattami" class="btn btn-primary">Contattami</a></p>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>