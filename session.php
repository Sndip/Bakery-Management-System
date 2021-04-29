<?php 
class sessionhelper
{
   static function init()
	{
		@session_start();
	}

	static function set($var,$value)
	{
		self::init();
		$_SESSION[$var] = $value;
	}

	static function get($var)
	{
		self::init();
		return $_SESSION[$var];
	}

	static function checklogin()
	{
		self::init();
		
	}

	static function end()
	{
		self::init();
		session_destroy();
		header('location:login.php');
	}
 }

 ?>
