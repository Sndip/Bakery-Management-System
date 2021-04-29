<?php
require_once 'admin/class/common.class.php';
require_once 'admin/class/user.class.php';
$user = new user;
$err=[];
if(isset($_POST['cmdsubmit']))
	{
		
		if (isset($_POST['name'])&& !empty($_POST['name']))
		 {
			$user->name= $_POST['name'];
		}
		else
		{
			$err[1]=" Name must be Entered";
		}
		if (isset($_POST['username'])&& !empty($_POST['username']))
		 {
			$user->username= $_POST['username'];
		}
		else
		{
			$err[2]="UserName must be Entered";
		}
		if (isset($_POST['password'])&& !empty($_POST['password']))
		 {
			$password= $_POST['password'];
		}
		else
		{
			$err[2]="UserName must be Entered";
		}
		if (isset($_POST['address'])&& !empty($_POST['address']))
		 {
			$user->address= $_POST['address'];
		}
		else
		{
			$err[3]="Address number must be Entered";
		}
		if (isset($_POST['email'])&& !empty($_POST['email']))
		 {
			$user->email= $_POST['email'];
		}
		else
		{
			$err[4]="Email number must be Entered";
		}
		if(isset($_POST['phone_no'])&& !empty($_POST['phone_no']))
		{
			$user->phone_no= $_POST['phone_no'];
		}
		else
		{
			$err[5]="Phone number cannot be empty";
		}
		if(count($err)==0)
		{	
			$user->salt = uniqid();
			$user->password= sha1($user->salt.$password);
			$ask =$user->insertuser();
			if($ask==1)
			{
				echo "<script>alert('Account is created')</script>";

				echo "<script> window.location='login.php' </script>";
			}	
			else
			{
				echo "<script>alert('Account is not created')</script>";
			}
		}
	}
?>