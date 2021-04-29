 <?php 
class category extends common
{
	public $id,$cat;
	public function selectcategorybytype()
	{
		$sql="select * from category where category_name='$this->cat'";
		return $this->select($sql);
	}
	public function insertcategory()
	{
		$sql ="insert into category(category_name) values ('$this->cat')";
		return $this->insert($sql);
	}
	public function selectcategory()
	{
		$sql= "select * from category";
		return $this->select($sql);
	} 
} 
?>