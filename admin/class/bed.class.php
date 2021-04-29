 <?php 
class bed extends common
{
	public $id,$bed_no;
	public function insertbed()
	{
		$sql ="insert into bed(number)values('$this->bed_no')";
		return $this->insert($sql);
	}
	public function selectbed()
	{
		$sql= "select * from bed";
		return $this->select($sql);
	}
} 
?>