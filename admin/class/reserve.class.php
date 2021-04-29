<?php
 class reserve extends common{
 	public $id,$fname,$lname,$email,$address,$nationality,$city,$state,$zipcode,$meal,$phone_no,$check_in,$check_out,$adult,$children,$airline,$flight_no,$airport_pickup,$room_id,$arrival_time,$status;

 	public function selectreserve()
 	{
 		$sql = "select * from tbl_room_book";
 		$data= $this->select($sql);
 		return $data;
 	}

 	public function selectreservebyid()
 	{
 		$sql = "select * from tbl_room_book where booking_id = '$this->id' ";
 		return $this->select($sql);
 	}
public function insertreserve()
 	{

 		$sql = "insert into tbl_room_book(fname,lname,email,address,nationality,city,state,zipcode,meal,phone_no,check_in,check_out,adult,children,airline,flight_no,airport_pickup,room_id,arrival_time,status)values('$this->fname','$this->lname','$this->email','$this->address','$this->nationality','$this->city','$this->state','$this->zipcode','$this->meal','$this->phone_no','$this->check_in','$this->check_out','$this->adult','$this->children','$this->airline','$this->flight_no','$this->airport_pickup','$this->room_id','$this->arrival_time','$this->status') ";
 		
 		return $this->insert($sql);
 	}
 	
 	public function deletereserve()
 	{
 		$sql = "delete from tbl_room_book where booking_id = '$this->id' ";
 		return $this->delete($sql);
 	}

 	

}
?>