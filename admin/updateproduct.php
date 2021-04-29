			
<?php 
require_once 'class/common.class.php';
require_once 'class/product.class.php';
require_once 'class/category.class.php';
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'selector.php';
require_once 'layout/header.php';
$product=new product;
$product->id=$_GET['id'];
if(isset($_POST['cmdsubmit']))
    			{
    				$product->name=$_POST['product'];;
			 		$product->price=$_POST['price'];
			 		$product->cat=$_POST['cat_name'];
			 		$product->disc= $_POST['disc'];
			    	 if (!empty($_FILES['image'])) {
                         $image =  $_FILES['image']['name'];
                         move_uploaded_file($_FILES['image']['tmp_name'],'image/'.$image);
                         $product->picture =$image;
                    }
			    	$ask = $product->updateproduct();
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
    
    $data = $product->selectproductbyid();
	
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
										<input type="text" name="product" class="form-control" placeholder="Product Name" value="<?php echo $data[0]->name; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Price</label>
									<div class="col-md-10">
										<div class="input-group"><span class="input-group-addon">$</span>
											<input type="text" class="form-control" name="price" value="<?php echo $data[0]->price; ?>"><span class="input-group-addon">.00</span>
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
										<textarea class="form-control" name="disc" rows="10" value="<?php echo $data[0]->disc; ?>"></textarea >
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
		