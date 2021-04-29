<?php
    require_once 'class/common.class.php';
    require_once 'class/review.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'selector.php';
require_once 'layout/header.php';
    $review = new review;
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    	$review->id = $id;
    	$ask = $review->deletereview();
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
<script> window.location="review_tbl.php" </script>