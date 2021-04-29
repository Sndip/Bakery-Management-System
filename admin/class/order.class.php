<?php
 class order extends common{
 	public $id,$prdct,$price,$cat_name,$dbo,$address,$phone_no,$user;

 	public function selectorder()
 	{
 		$sql = "select * from tbl_order";
 		$data= $this->select($sql);
 		return $data;
 	}
 	public function selectorderbyuser()
	{
		$sql="select * from tbl_order where user='$this->user'";
		return $this->select($sql);
	}
 	public function deleteorder()
 	{
 		$sql = "delete from tbl_order where order_id = '$this->id' ";
 		return $this->delete($sql);
 	}
 	public function insertorder()
 	{

 		$sql = "insert into tbl_order(prdct,price,cat_name,dbo,address,phone_no,user)values('$this->prdct','$this->price','$this->cat_name','$this->dbo','$this->address','$this->phone_no','$this->user') ";
 		
 		return $this->insert($sql);
 	}
}
?>


