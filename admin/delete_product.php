<?php
    require_once 'class/common.class.php';
    require_once 'class/product.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'selector.php';
require_once 'layout/header.php';
    $product = new product;
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    	$product->id = $id;
    	$ask = $product->deleteproduct();
    	if($ask == 1)
    	{
    		 echo "<script>alert('Deleted Successfully')</script>";
    	}
    	else
    	{
    		 echo "<script>alert('Failed to delete')</script>";
    	}
    }
?>
<script> window.location="product.php" </script>