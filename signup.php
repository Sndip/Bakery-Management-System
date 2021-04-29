
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title class="text-center">Sign Up</title>
		<link href="admin/css/bootstrap.min.css" rel="stylesheet">
		<link href="admin/css/font-awesome.min.css" rel="stylesheet">
		<link href="admin/css/datepicker3.css" rel="stylesheet">
		<link href="admin/css/styles.css" rel="stylesheet">
		
		<!--Theme Switcher-->
		<style id="hide-theme">
			body{
				display:none;
			}
		</style>
		<script type="text/javascript">
			function setTheme(name){
				var theme = document.getElementById('theme-css');
				var style = 'css/theme-' + name + '.css';
				if(theme){
					theme.setAttribute('href', style);
				} else {
					var head = document.getElementsByTagName('head')[0];
					theme = document.createElement("link");
					theme.setAttribute('rel', 'stylesheet');
					theme.setAttribute('href', style);
					theme.setAttribute('id', 'theme-css');
					head.appendChild(theme);
				}
				window.localStorage.setItem('lumino-theme', name);
			}
			var selectedTheme = window.localStorage.getItem('lumino-theme');
			if(selectedTheme) {
				setTheme(selectedTheme);
			}
			window.setTimeout(function(){
					var el = document.getElementById('hide-theme');
					el.parentNode.removeChild(el);
				}, 5);
		</script>
		<!-- End Theme Switcher -->
		
		<!--Custom Font-->
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
					<a class="navbar-brand" href="#"><span>Sign </span>Up</a>
					
					
				</div>
			</div><!-- /.container-fluid -->
		</nav>
		
			<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active">Sign Up</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Please enter your info</h1>
				</div>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">User Detail</div>
						<div class="panel-body">
							<form class="form-horizontal row-border" action="signupprocess.php" role="form" enctype="multipart/form-data" method="POST">
								<div class="form-group">
									<label class="col-md-2 control-label">Name *</label>
									<div class="col-md-10">
										<input type="text" name="name" class="form-control" placeholder="Your Name" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Username *</label>
									<div class="col-md-10">
										<input type="text" name="username" class="form-control" placeholder="Username" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Password *</label>
									<div class="col-md-10">
										<input type="password" name="password" class="form-control" placeholder="Enter your password" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Address *</label>
									<div class="col-md-10">
										<input type="text" name="address" class="form-control" placeholder="Address" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Phone no *</label>
									<div class="col-md-10">
										<input type="text" name="phone_no" class="form-control" placeholder="Phone Number" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Email *</label>
									<div class="col-md-10">
										<input type="email" name="email" class="form-control" placeholder="Email" required>
									</div>
								</div>
								<div class="col-md-2"></div>
								<div class="col-md-10">
								<button type="submit" class="btn btn-primary btn-lg" title="" name="cmdsubmit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!--/.row-->
				
		
			
		</div><!-- /.row -->
		</div><!--/.main-->
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/chart-data.js"></script>
		<script src="js/easypiechart.js"></script>
		<script src="js/easypiechart-data.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/custom.js"></script>
		
	</body>
</html>
