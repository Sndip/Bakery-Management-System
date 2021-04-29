<?php
 class room extends common{
 	public $id,$price,$roomtype,$picture,$bed;

 	public function selectroom()
 	{
 		$sql = "select * from tbl_room";
 		$data= $this->select($sql);
 		return $data;
 	}

 	public function selectroombyid()
 	{
 		$sql = "select * from tbl_room where room_id = '$this->id' ";
 		return $this->select($sql);
 	}

 	public function insertroom()
 	{

 		$sql = "insert into tbl_room(price,type,picture,bed_no)values('$this->price','$this->roomtype','$this->picture','$this->bed') ";
 		
 		return $this->insert($sql);
 	}

 	public function insertwithoutimg()
 	{
 		 $sql = "insert into tbl_room(price,type,bed_no)values('$this->price','$this->roomtype','$this->bed')";
 	
 		return $this->insert($sql);
 	}

 	public function deleteroom()
 	{
 		$sql = "delete from tbl_room where room_id = '$this->id' ";
 		return $this->delete($sql);
 	}

 	public function updateroom()
 	{

 		if(!empty($this->picture))
 		{
 			$sql = "update tbl_room set price = '$this->price',type = '$this->roomtype',picture = '$this->picture',bed_no = '$this->bed' where room_id='$this->id'";
 		}
	 	else	
	 	{
	 		$sql = "update tbl_room set price = '$this->price',type = '$this->roomtype',bed_no = '$this->bed' where room_id='$this->id'";
	 	}
	 	return $this->update($sql);
	 }

}
?>