<?php 
require_once 'class/common.class.php';
require_once 'class/category.class.php';
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'selector.php';
 $a[12]=1;
 require_once 'layout/header.php';
 $category= new category;
$error=[];

if(isset($_POST['cmdsubmit']))
 {
	if(isset($_POST['cat_name'])&& !empty($_POST['cat_name']))
	{
		$cat= $_POST['cat_name'];
	}
	else
	{
		$error[1]="Category Type Must Be Selected.";
	}
 	if(count($error)==0)
 	{
 		$category->cat=$cat;
 		$ask=$category->insertcategory();
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
					<li class="active">Category Type</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Add Category</h1>
				</div>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">Category Detail</div>
						<div class="panel-body">
							<form class="form-horizontal row-border" action="#" method="POST">
								<div class="form-group">
									<label class="col-md-2 control-label">Category Name *</label>
									<div class="col-md-10">
										<input type="text" name="cat_name" class="form-control" placeholder="Category Name" required>
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
		