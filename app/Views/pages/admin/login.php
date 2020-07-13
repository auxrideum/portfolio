<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Lumino - Login</title>

		<link rel="stylesheet" href="<?php echo base_url('css/admin/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('css/admin/datepicker3.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('css/admin/styles.css'); ?>">
	</head>

	<body>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">Log in</div>
					<div class="panel-body">
						<form role="form" method="post" >
							<fieldset>
								<?php if (isset($error)): ?>
									<div class="alert bg-danger alert-dismissible" role="alert">
										<em class="fa fa-lg fa-warning">&nbsp;</em> <?php echo $error; ?> 
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								<?php endif; ?>

								<div class="form-group">
									<input class="form-control" placeholder="E-mail" name="username" type="text" autofocus="">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" type="password" value="">
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary">Log in</button>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>

		<script src="<?php echo base_url('js/admin/jquery-1.11.1.min.js'); ?>"></script>
		<script src="<?php echo base_url('js/admin/bootstrap.min.js'); ?>"></script>
	</body>
</html>