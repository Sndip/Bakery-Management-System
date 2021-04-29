			
<?php 
require_once 'class/common.class.php';
require_once 'class/room.class.php';
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'selector.php';
  $a[3]=1;
require_once 'layout/header.php';
$room= new room;
$room->id=$_GET['id'];
if(isset($_POST['cmdsubmit']))
    			{
			    	$room->price = $_POST['price']; 
			    	$room->roomtype = $_POST['room_type'];
			    	$room->bed = $_POST['bed_no'];
			    	 if (!empty($_FILES['image'])) {
                         $image =  $_FILES['image']['name'];
                         move_uploaded_file($_FILES['image']['tmp_name'],'image/'.$image);
                         $room->picture = $image;
                    }
			    	$ask = $room->updateroom();
			    	if($ask==="Duplicate")
			    	{
			    		echo "<script>alert('Duplicate Entry')</script>";
			    	}
			    	else if($ask)
			    	{
			    		echo "<script>alert('Updated Sucessfully')</script>";
			    	}
			    	else
			    	{
			    		echo "<script>alert('Update Failed')</script>";
			    	}

	    		}
    
    $data = $room->selectroombyid();
	
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
											<input type="text" class="form-control" name="price" value="<?php echo $data[0]->price; ?>"><span class="input-group-addon" >.00</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Room type</label>
									<div class="col-md-10">
										<select class="form-control input-lg" name="room_type">
											<option></option>
											<option>Single</option>
											<option>Double</option>
											<option>Standard</option>
											<option>Dulex</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Image</label>
									<div class="col-md-10">
										<input  type="file" name="image" value="<?php echo $data[0]->picture; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Number of Beds</label>
									<div class="col-md-10">
										<select class="form-control input-lg" name="bed_no">
											<option></option>
											<option>Single</option>
											<option>Double</option>
											<option>Tripel</option>
											<option>Quad</option>
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
		