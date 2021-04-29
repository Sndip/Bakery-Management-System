<?php
 class user extends common{
 	public $id,$name,$username,$password,$salt,$phone_no,$email,$address;

 	public function selectuser()
 	{
 		$sql = "select * from tbl_user";
 		$data= $this->select($sql);
 		return $data;
 	}
 	public function selectuserbyusername()
	{
		$sql="select * from tbl_user where username='$this->username'";
		return $this->select($sql);
	}
 		public function selectuserbyid()
 	{
 		$sql = "select * from tbl_user where id = '$this->id' ";
 		return $this->select($sql);
 	}
 	public function deleteuser()
 	{
 		$sql = "delete from tbl_user where id = '$this->id' ";
 		return $this->delete($sql);
 	}
 	public function insertuser()
 	{

 		$sql = "insert into tbl_user(name,username,password,salt,phone_no,email,address)values('$this->name','$this->username','$this->password','$this->salt','$this->phone_no','$this->email','$this->address') ";
 		
 		return $this->insert($sql);
 	}
}
?>


