			
<?php 
require_once 'class/common.class.php';
require_once 'class/room.class.php';
require_once 'class/roomtype.class.php';
require_once 'class/bed.class.php';
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'selector.php';
  $a[3]=1;
require_once 'layout/header.php';
$room= new room;
$error=[];

if(isset($_POST['cmdsubmit']))
 {
 	if(isset($_POST['price'])&& !empty($_POST['price']))
	{
		$price=$_POST['price'];
	}
	else
	{ 
		$error[0]="Price Must Be Provided.";
	}


	if(isset($_POST['room_type'])&& !empty($_POST['room_type']))
	{
		$room_type= $_POST['room_type'];
	}
	else
	{
		$error[1]="Room Type Name Must Be Selected.";
	}


	if(isset($_POST['bed_no'])&& !empty($_POST['bed_no'])) 
	{
		$bed_no=$_POST['bed_no'];
	}


 	if(count($error)==0)
 	{
 		$room->price =$price;
 		$room->roomtype=$room_type;
 		$room->bed=$bed_no;
 		echo $room->price."<br>";
 		echo $room->roomtype."<br>";
 		echo $room->bed."<br>";
 		if($_FILES['image']['error']==0 && $_FILES['image']['size']!=0)  
 		{
 			$iname=$_FILES['image']['name'];
 			move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$iname);
 				$room->picture =$iname;
 				$ask=$room->insertroom();
 			}
 		else
 		{
 			$ask=$room->insertwithoutimg();
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
							<form class="form-horizontal row-border" action="#" role="form" enctype="multipart/form-data" method="POST">
								<div class="form-group">
									<label class="col-md-2 control-label">Price</label>
									<div class="col-md-10">
										<div class="input-group"><span class="input-group-addon">$</span>
											<input type="text" class="form-control" name="price"><span class="input-group-addon">.00</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Room type</label>
									<div class="col-md-10">
										<select class="form-control input-lg" name="room_type">
											<option></option>
											<?php
						    		$rtype= new roomtype;
									$data = $rtype->selectroomtype(); 
									foreach ($data as  $value) { 
											echo "<option>".$value->room_type."</option>";
									}?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Image</label>
									<div class="col-md-10">
										<input  type="file" name="image">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Number of Beds</label>
									<div class="col-md-10">
										<select class="form-control input-lg" name="bed_no">
											<option></option>
											<?php
						    		$bed= new bed;
									$data = $bed->selectbed(); 
									foreach ($data as  $value) { 
											echo "<option>".$value->number."</option>";
									}?>
										</select>
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
		