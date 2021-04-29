<?php
 class product extends common{
 	public $id,$name,$price,$cat,$picture,$disc;

 	public function selectproduct()
 	{
 		$sql = "select * from tbl_product";
 		$data= $this->select($sql);
 		return $data; 
 	}

 	public function selectproductbyid()
 	{
 		$sql = "select * from tbl_product where id = '$this->id' ";
 		return $this->select($sql);
 	}

 	public function insertproduct()
 	{

 		$sql = "insert into tbl_product(name,price,cat_name,picture,disc)values('$this->name','$this->price','$this->cat','$this->picture','$this->disc') ";
 		
 		return $this->insert($sql);
 	}

 	public function insertwithoutimg()
 	{
 		 $sql = "insert into tbl_product(name,price,cat_name,disc)values('$this->name','$this->price','$this->cat','$this->disc')";
 	
 		return $this->insert($sql);
 	}

 	public function deleteproduct()
 	{
 		$sql = "delete from tbl_product where id = '$this->id' ";
 		return $this->delete($sql);
 	}

 	public function updateproduct()
 	{

 		if(!empty($this->picture))
 		{
 			$sql = "update tbl_product set name = '$this->name',price = '$this->price',cat_name = '$this->cat',picture = '$this->picture',disc = '$this->disc' where id='$this->id'";
 		}
	 	else	
	 	{
	 		$sql = "update tbl_product set name = '$this->name',price = '$this->price',cat_name = '$this->cat',disc = '$this->disc' where id='$this->id'";
	 	}
	 	return $this->update($sql);
	 }

}
?>