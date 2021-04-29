<?php
    require_once 'class/common.class.php';
    require_once 'class/reserve.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'layout/header.php';
    $reserve = new reserve;
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    	$reserve->id = $id;
    	$ask = $reserve->deletereserve();
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
<script> window.location="reservation.php" </script>