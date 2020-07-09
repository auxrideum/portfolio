<div id="fh5co-page">
	<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
	<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

		<h1 id="fh5co-logo"><a href="home">Gabriele P.</a></h1>
		<nav id="fh5co-main-menu" role="navigation">
			<ul>
				<li><a href="home">Home</a></li>
				<li><a href="blog">Blog</a></li>
				<li><a href="portfolio">Portfolio</a></li>
				<li><a href="chi-sono">Chi sono</a></li>
				<li class="fh5co-active"><a href="contattami">Contatti</a></li>
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
		<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
			<div class="row">
				<div class="col-md-4">
					<h2>Contattami</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">

							<?php if (isset($success)): ?>
							<div class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<strong>Il tuo messaggio è stato inviato.</strong> Riceverai una risposta entro <strong>24H</strong>
							</div>
							<?php endif; ?>

							<?php if (isset($validation)): ?>
							<div class="alert alert-danger alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<strong><?php echo $validation->listErrors(); ?>
							</div>
							<?php endif; ?>

							<form method="post">
								<div class="form-group">
									<input type="text" name="nome" class="form-control" placeholder="Nome" required>
								</div>
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Email" required>
								</div>
								<div class="form-group">
									<input type="number" name="numero" class="form-control" placeholder="Numero (facoltativo)">
								</div>
								<div class="form-group">
									<textarea style="resize: vertical;" name="messaggio" maxlength="255" cols="30" rows="7" class="form-control" placeholder="Messaggio" required></textarea>
								</div>
								<div class="form-group">
									<input type="submit" name="btnInvia" class="btn btn-primary btn-md" value="Invia">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>