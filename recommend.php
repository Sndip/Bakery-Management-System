<?php
  require_once 'admin/class/recommend.class.php';

    $room = new room;
    $rate = new rate;
    $recommend = new recommend;
    $re= $recommend->deleterecom();
    $data = $room->selectroom(); 
    foreach ($data as  $value) 
    {
      $recommend->id = $value->room_id;
      $rate->room =$rate->avroom= $value->room_id;
       $ed=$rate->deleteaverage();
       if($ed == 1)
       {
        $dat = $rate->selectratebyid();
         foreach ($dat as  $number) 
         {
            $rate->avtotal=$number->average;
            $rate->insertaverage();
          }
           $avr=$rate->selectlastid();
            foreach ($avr as  $num) 
              {
              $recommend->avs=$num->average;
              }
              $lamp=$recommend->insertvalue();
        }
    } 

  ?>
 
  