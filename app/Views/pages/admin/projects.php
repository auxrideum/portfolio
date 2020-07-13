<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin - Dashboard</title>

	<link href="/css/admin/bootstrap.min.css" rel="stylesheet">
	<link href="/css/admin/font-awesome.min.css" rel="stylesheet">
	<link href="/css/admin/datepicker3.css" rel="stylesheet">
	<link href="/css/admin/styles.css" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Adminis</span>tration</a>
				<ul class="nav navbar-top-links navbar-right">
					
				</ul>
			</div>
		</div>
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<!-- <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt=""> -->
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo session()->get('username'); ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="/admin/index"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="/admin/contacts"><em class="fa fa-calendar">&nbsp;</em> Contatti</a></li>
			<li class="active"><a href="/admin/projects"><em class="fa fa-bar-chart">&nbsp;</em> Projects</a></li>
			<li><a href="/admin/blog"><em class="fa fa-toggle-off">&nbsp;</em> Blog</a></li>
			<li><a href="/admin/logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="/admin/">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li class="active"><?php echo $titolo; ?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php echo $titolo; ?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large">120</div>
							<div class="text-muted">Visite</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large">16:21</div>
							<div class="text-muted">Orario</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">13/07/2020</div>
							<div class="text-muted">Data</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
							<div class="large">25.2k</div>
							<div class="text-muted">Page Views</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-sm-12">
				<p class="back-link">Gabriele Portente</a></p>
			</div>
		</div>
	</div>
	
	<script src="/js/admin/jquery-1.11.1.min.js"></script>
	<script src="/js/admin/bootstrap.min.js"></script>
	<script src="/js/admin/chart.min.js"></script>
	<script src="/js/admin/chart-data.js"></script>
	<script src="/js/admin/easypiechart.js"></script>
	<script src="/js/admin/easypiechart-data.js"></script>
	<script src="/js/admin/bootstrap-datepicker.js"></script>
	<script src="/js/admin/custom.js"></script>
</body>
</html>