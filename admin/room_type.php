			
<?php 

require_once 'class/common.class.php';
require_once 'class/roomtype.class.php';
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'selector.php';
 $a[4]=1;
 require_once 'layout/header.php';
 $rtype= new roomtype;
$error=[];

if(isset($_POST['cmdsubmit']))
 {
 	
	if(isset($_POST['room_type'])&& !empty($_POST['room_type']))
	{
		$room_type= $_POST['room_type'];
	}
	else
	{
		$error[1]="Room Type Must Be Selected.";
	}
 	
 	if(isset($_POST['description'])&& !empty($_POST['description']))	
 	{
 		$desc= $_POST['description'];
 	}
 	else
 	{
 		$error[2]="Description must be provided.";
 	}

 	if(count($error)==0)
 	{
 		$rtype->roomtype=$room_type;
 		$rtype->detail=$desc;
 		$ask=$rtype->insertroomtype();
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
					<li class="active">Room Type</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Add room</h1>
				</div>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">Room Detail</div>
						<div class="panel-body">
							<form class="form-horizontal row-border" action="#" method="POST">
								<div class="form-group">
									<label class="col-md-2 control-label">Room Type *</label>
									<div class="col-md-10">
										<input type="text" name="room_type" class="form-control" placeholder="Room Type" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Detail *</label>
									<div class="col-md-10">
										<textarea class="form-control" name="description" rows="10"></textarea>
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
		