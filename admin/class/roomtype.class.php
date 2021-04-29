 <?php 
class roomtype extends common
{
	public $id,$roomtype,$detail;
	public function selectroombytype()
	{
		$sql="select * from rank where room_type='$this->roomtype'";
		return $this->select($sql);
	}
	public function insertroomtype()
	{
		$sql ="insert into rank(room_type,detail)values('$this->roomtype','$this->detail')";
		return $this->insert($sql);
	}
	public function selectroomtype()
	{
		$sql= "select * from rank";
		return $this->select($sql);
	}
} 
?>