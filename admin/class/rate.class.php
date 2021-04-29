 <?php 
class rate extends common
{
	public $id,$rate,$room,$average,$avroom,$avtotal;
	public function insertrate()
	{
		$sql ="insert into tbl_rating(rate,room,average)values('$this->rate','$this->room','$this->average')";
		return $this->insert($sql);
	}
	public function selectrate()
	{
		$sql= "select * from tbl_rating";
		return $this->select($sql);
	}
	public function selectratebyid()
 	{
 		$sql = "select * from tbl_rating where room = '$this->room'" ;
 		return $this->select($sql);
 	}
 	public function selectlastid()
 	{
 		$sql = "SELECT * FROM average ORDER BY ID DESC LIMIT 1" ;
 		return $this->select($sql); 
 	}
 	public function insertaverage()
 	{	
 		$sql ="insert into average(room,average)values('$this->avroom','$this->avtotal')";
 		return $this->insert($sql);
 	}
 	public function deleteaverage()
 	{
 		$sql = "delete from average";
 		return $this->delete($sql);
 	}
} 
?>