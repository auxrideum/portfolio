<div id="fh5co-page">
	<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
	<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

		<h1 id="fh5co-logo"><a href="home">Gabriele P.</a></h1>
		<nav id="fh5co-main-menu" role="navigation">
			<ul>
				<li><a href="<?php echo base_url('home'); ?>">Home</a></li>
				<li class="fh5co-active"><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
				<li><a href="<?php echo base_url('portfolio'); ?>">Portfolio</a></li>
				<li><a href="<?php echo base_url('chi-sono'); ?>">Chi sono</a></li>
				<li><a href="<?php echo base_url('contattami'); ?>">Contatti</a></li>
			</ul>
		</nav>

		<?php echo view('templates/social'); ?>

	</aside>

	<div id="fh5co-main">
		<div class="fh5co-narrow-content">
			<div class="row row-bottom-padded-md">
				<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="fh5co-heading" style="margin-bottom: 0px !important;"><?php echo $post['titolo']; ?></h2>

					<?php

					$time = strtotime($post['data']);
					$post_date = date('d-m-Y', $time);

					?>

					<p style="margin-top: 3px;">da <?php echo $post['creatore']; ?> | <?php echo $post_date; ?> | <?php echo $post['categoria']; ?></p>
					<?php echo $post['testo']; ?>
				</div>
			</div>
		</div>
	</div>
</div>