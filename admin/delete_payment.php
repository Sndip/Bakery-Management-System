<?php
    require_once 'class/common.class.php';
    require_once 'class/payment.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'selector.php';
require_once 'layout/header.php';
    $payment = new payment;
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    	$payment->id = $id;
    	$ask = $payment->deletepayment();
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
<script> window.location="payment_tbl.php" </script>