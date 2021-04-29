<?php
    require_once 'class/common.class.php';
    require_once 'class/order.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'selector.php';
require_once 'layout/header.php';
    $order = new order;
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    	$order->id = $id;
    	$ask = $order->deleteorder();
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
<script> window.location="orders.php" </script>