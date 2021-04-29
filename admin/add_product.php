			
<?php 
	require_once 'class/common.class.php';
	require_once 'class/product.class.php';
	require_once 'class/category.class.php';
	require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'selector.php';
    $a[9]=1;
    require_once 'layout/header.php';
	$product=new product;
	$err=[];
	if(isset($_POST['cmdsubmit']))
	{
		
		if (isset($_POST['product'])&& !empty($_POST['product']))
		 {
			$prdct= $_POST['product'];
		}
		else
		{
			$err[1]="Product must be Entered";
		}
		if(isset($_POST['price'])&& !empty($_POST['price']))
		{
			$price=$_POST['price'];
		}
		else
		{ 
			$err[2]="Price Must Be Provided.";
		}
		if(isset($_POST['cat_name'])&& !empty($_POST['cat_name']))
		{
			$cat_name= $_POST['cat_name'];
		}
		else
		{
			$err[3]="Category Name Must Be Selected.";
		}
		if(isset($_POST['disc'])&& !empty($_POST['disc']))	
	 	{
	 		$desc= $_POST['disc'];
	 	}
	 	else
	 	{
	 		$err[3]="Discription must be provided.";
	 	}
		if(count($err)==0)
 		{
 		$product->name=$prdct;
 		$product->price=$price;
 		$product->cat=$cat_name;
 		$product->disc=$desc;
 		if($_FILES['image']['error']==0 && $_FILES['image']['size']!=0)  
 		{
 			$iname=$_FILES['image']['name'];
 			move_uploaded_file($_FILES['image']['tmp_name'], 'image/'.$iname);
 				$product->picture =$iname;
 				$ask=$product->insertproduct();
 			}
 		else
 		{
 			$ask=$product->insertwithoutimg();
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
					<li class="active">Product</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Add Product</h1>
				</div>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">Product Detail</div>
						<div class="panel-body">
							<form class="form-horizontal row-border" action="#" role="form" enctype="multipart/form-data" method="POST">
								<div class="form-group">
									<label class="col-md-2 control-label">Product name *</label>
									<div class="col-md-10">
										<input type="text" name="product" class="form-control" placeholder="Product Name" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Price</label>
									<div class="col-md-10">
										<div class="input-group"><span class="input-group-addon">$</span>
											<input type="text" class="form-control" name="price"><span class="input-group-addon">.00</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Category name</label>
									<div class="col-md-10">
										<select class="form-control input-lg" name="cat_name">
											<option></option>
											<?php
						    		$cat= new category;
									$data = $cat->selectcategory(); 
									foreach ($data as  $value) { 
											echo "<option>".$value->category_name."</option>";
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
									<label class="col-md-2 control-label">Detail *</label>
									<div class="col-md-10">
										<textarea class="form-control" name="disc" rows="10"></textarea>
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
		