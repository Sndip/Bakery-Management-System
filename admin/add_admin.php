			
<?php 
	require_once 'class/common.class.php';
	require_once 'class/admin.class.php';
	require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'selector.php';
    $a[2]=1;
    require_once 'layout/header.php';
	$admin=new admin;
	$err=[];
	if(isset($_POST['cmdsubmit']))
	{
		
		if (isset($_POST['username'])&& !empty($_POST['username']))
		 {
			$admin->username= $_POST['username'];
		}
		else
		{
			$err[1]="Username must be Entered";
		}
		
		if(isset($_POST['password'])&& !empty($_POST['password']))
		{
			$password= $_POST['password'];
		}
		else
		{
			$err[3]="Password cannot be empty";
		}
		if(count($err)==0)
		{
			$admin->salt = uniqid();
			$admin->password= sha1($admin->salt.$password);
			$ask =$admin->insertuser();
			if($ask==1)
			{
				echo "<<script>alert('inserted successfully')</script>";
			}	
			else
			{
				echo "<<script>alert('Failed to adinsert')</script>";
			}
		}
	}
 ?>	
			<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active">Admin</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Add admin</h1>
				</div>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">Admin Detail</div>
						<div class="panel-body">
							<form class="form-horizontal row-border" action="#" method="POST">
								<div class="form-group">
									<label class="col-md-2 control-label">Username *</label>
									<div class="col-md-10">
										<input type="text" name="username" class="form-control" placeholder="Username" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Password *</label>
									<div class="col-md-10">
										<input class="form-control" type="password" name="password" placeholder="At least 6 character" required minlength="6">
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
			
				
<?php 
	require_once 'layout/footer.php';
 ?>
		