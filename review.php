			
<?php 
	require_once 'admin/class/common.class.php';
	require_once 'admin/class/room.class.php';
	require_once 'admin/class/review.class.php';
	require_once 'session.php';
  require_once 'layout/header.php';
	$review = new review;
	$err=[];
	if(isset($_POST['cmdsubmit']))
	{	
		if (isset($_POST['name'])&& !empty($_POST['name']))
		 {
			$review->name= $_POST['name'];
		}
		else
		{
			$err[1]="Name must be Entered";
		}
		if (isset($_POST['address'])&& !empty($_POST['address']))
		 {
			$review->address= $_POST['address'];
		}
		else
		{
			$err[2]="Address must be Entered";
		}
		if (isset($_POST['message'])&& !empty($_POST['message']))
		 {
			$review->message= $_POST['message'];
		}
		else
		{
			$err[3]="Message must be Entered";
		}
		
		if(isset($_POST['email'])&& !empty($_POST['email']))
		{
			$review->email= $_POST['email'];
		}
		else
		{
			$err[4]="E-mail cannot be empty";
		}
		if(count($err)==0)
		{
			$ask =$review->insertreview();
			if($ask==1)
			{
				echo "<script>alert('inserted successfully')</script>";
			}	
			else
			{
				echo "<script>alert('Failed to insert')</script>";
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
					<li class="active">Get in touch</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Your message</h1>
				</div>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">Review</div>
						<div class="panel-body">
							  <form id="form_sendemail" class="contacts__form" action="#" method="POST">
							  <!-- Email -->
							  <div class="form-group">
							    <label for="email" class="sr-only">Email address</label>
							    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address">
							    <span class="help-block"></span>
							  </div>
							  
							  <!-- Name -->
							  <div class="form-group">
							    <label for="name" class="sr-only">Name</label>
							    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
							    <span class="help-block"></span>
							  </div>
							   <!-- Address -->
							  <div class="form-group">
							    <label for="name" class="sr-only">Address</label>
							    <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address">
							    <span class="help-block"></span>
							  </div>
							  
							  <!-- Message -->
							  <div class="form-group">
							    <label for="message" class="sr-only">Message</label>
							    <textarea name="message" class="form-control" id="message" rows="6" placeholder="Enter your message"></textarea>
							    <span class="help-block"></span>
							  </div>
							  
							  <!-- Note -->
							  <div class="form-group">
							    <small class="text-muted">
							      * All fields are mandatory.
							    </small>
							  </div>
							  
							  <!-- Submit -->
								<button type="submit" class="btn btn-default" title="" name="cmdsubmit">Submit</button>
								

							</form>
						</div>
					</div>
				</div>
			</div><!--/.row-->
			
				
<?php 
	require_once 'layout/footer.php';
 ?>
		