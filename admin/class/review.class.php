 <?php
 class review extends common{
 	public $id,$name,$email,$address,$message;

 	public function selectreview()
 	{
 		$sql = "select * from tbl_review";
 		$data= $this->select($sql);
 		return $data;
 	}
 	public function deletereview()
 	{
 		$sql = "delete from tbl_review where review_id = '$this->id' ";
 		return $this->delete($sql);
 	}
 	public function insertreview()
 	{

 		$sql = "insert into tbl_review(name,email,address,message)values('$this->name','$this->email','$this->address','$this->message') ";
 		echo $sql;
 		
 		return $this->insert($sql);
 	}
}
?>