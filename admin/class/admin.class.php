<?php 
class admin extends common
{
	public $id,$username,$salt,$password;
	public function selectadminbyusername()
	{
		$sql="select * from tbl_admin where username='$this->username'";
		return $this->select($sql);
	}
	public function insertuser()
	{
		$sql ="insert into tbl_admin(username,salt,paswd)values('$this->username','$this->salt','$this->password')";
		return $this->insert($sql);
	}
} 
?>