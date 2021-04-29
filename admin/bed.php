<?php 
require_once 'class/common.class.php';
require_once 'class/bed.class.php';
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'selector.php';
 $a[5]=1;
 require_once 'layout/header.php';
 $bed= new bed;
$error=[];

if(isset($_POST['cmdsubmit']))
 {
 	
	if(isset($_POST['bed_no'])&& !empty($_POST['bed_no']))
	{
		$bed_no= $_POST['bed_no'];
	}
	else
	{
		$error[1]="Bed number Must Be Selected.";
	}

 	if(count($error)==0)
 	{
 		$bed->bed_no=$bed_no;
 		$ask=$bed->insertbed();
 	}

 		if($ask==1)
 		{
 			echo "<script> alert('Inserted successfully.')</script>";
 		}
 		else
 		{
 			echo "<script> alert('Failed to insert.')</script>";
 		}
 	}
?>
			<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active">Beds</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">No of Beds</h1>
				</div>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">Beds</div>
						<div class="panel-body">
							<form class="form-horizontal row-border" action="#" role="form" enctype="multipart/form-data" method="POST">
								<div class="form-group">
									<label class="col-md-2 control-label">Numbers *</label>
									<div class="col-md-10">
										<input type="text" name="bed_no" class="form-control" placeholder="Number of Beds" required>
									</div>
								</div>
								<div class="col-md-2"></div>
								<div class="col-md-10">
									<button type="submit" class="btn btn-primary btn-lg" title="" name="cmdsubmit">Submit
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!--/.row-->
			
				
<?php 
	require_once 'layout/footer.php';
 ?>
		