 <?php 
class recommend extends common
{
	public $id,$rate,$room,$avs;
	public function insertvalue()
	{
		$sql ="insert into recommend(room,average)values('$this->id','$this->avs')";
		return $this->insert($sql);
	}
	public function selectrecommend()
 	{
 		$sql = "select * from recommend";
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
 	public function deleterecom()
 	{
 		$sql = "delete from recommend";
 		return $this->delete($sql);
 	}
 	public function average()
 	{
 		$sql="SELECT * FROM recommend ORDER BY average DESC";
 		return $this->select($sql);
 	}
} 
?>