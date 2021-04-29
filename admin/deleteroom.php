<?php
    require_once 'class/common.class.php';
    require_once 'class/room.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'selector.php';
  $a[8]=1;
require_once 'layout/header.php';
    $room = new room;
    if(isset($_GET['id']))
    {
    	$id = $_GET['id'];
    	$room->id = $id;
    	$ask = $room->deleteroom();
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
<script> window.location="room_tbl.php" </script>