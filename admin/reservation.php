<?php 
 require_once 'class/common.class.php';
require_once 'class/reserve.class.php';
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'selector.php';
  $a[6]=1;
require_once 'layout/header.php';
$b=0;
$c=0;
$d=0;
$e=0;
 ?>
    
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Reservation Tables</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Reserve Booking Detail</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                        <div class="panel-heading">User Detail</div>
                        <div class="panel-body btn-margins">
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th data-field="id" data-sortable="true">Reserve ID</th>
                                             <th data-field="roomid" data-sortable="true">Room ID</th>
                                            <th data-field="fname" data-sortable="true">First Name</th>
                                            <th data-field="lname" data-sortable="true">Last name</th>
                                            <th data-field="email" data-sortable="true">Email</th>
                                            <th data-field="address" data-sortable="true">Address</th>
                                            <th data-field="nationality" data-sortable="true">Nationality</th>
                                            <th data-field="city" data-sortable="true">City</th>
                                            <th data-field="state" data-sortable="true">State</th>
                                            <th data-field="zip-code" data-sortable="true">Zip Code</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                    $reserve = new reserve;
                                    $data = $reserve->selectreserve(); 
                                    foreach ($data as  $value) { ?> 
                                    
                                    <tr>
                                    <td> <?php echo ++$b ; ?> </td>
                                    <td> <?php echo $value->room_id ; ?> </td>
                                    <td> <?php echo $value->fname ; ?> </td>
                                    <td> <?php echo $value->lname ; ?> </td>
                                    <td> <?php echo $value->email ; ?> </td>
                                    <td> <?php echo $value->address ; ?> </td>
                                    <td> <?php echo $value->nationality ; ?> </td>
                                    <td> <?php echo $value->city ; ?> </td>
                                    <td> <?php echo $value->state ; ?> </td>
                                    <td> <?php echo $value->zipcode ; ?> </td>
                                    </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- /.panel-->
                    <div class="panel panel-default">
                        <div class="panel-heading">Extra Detail Table</div>
                        <div class="panel-body btn-margins">
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th data-field="id" data-sortable="true">Reserve ID</th>
                                            <th data-field="check-in" data-sortable="true">Check In</th>
                                            <th data-field="check-out" data-sortable="true">Check Out</th>
                                            <th data-field="phone_no" data-sortable="true">Phone No</th>
                                            <th data-field="meal" data-sortable="true">Meal</th>
                                            <th data-field="adult" data-sortable="true">Adult</th>
                                            <th data-field="child" data-sortable="true">children</th>
                                            <th data-field="arrival_date" data-sortable="true">Arrival Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                         foreach ($data as  $value) { ?> 
                                <tr>
                                    <td> <?php echo ++$c ; ?> </td>
                                    <td> <?php echo $value->check_in ; ?> </td>
                                    <td> <?php echo $value->check_out ; ?> </td>
                                    <td> <?php echo $value->phone_no ; ?> </td>
                                    <td> <?php echo $value->meal ; ?> </td>
                                    <td> <?php echo $value->adult ; ?> </td>
                                    <td> <?php echo $value->children ; ?> </td>
                                    <td> <?php echo $value->arrival_time ; ?> </td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div><!-- /.panel-->

                    <div class="panel panel-default">
                        <div class="panel-heading">Flight Detail Table</div>
                        <div class="panel-body btn-margins">
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                           <th data-field="id" data-sortable="true">Reserve ID</th>
                                            <th data-field="airline" data-sortable="true">Airline</th>
                                            <th data-field="flight_no" data-sortable="true">Flight No</th>
                                            <th data-field="airport_pickup" data-sortable="true">Airport pickup</th>
                                            <th data-field="status" data-sortable="true">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                         foreach ($data as  $value) { ?>
                                     <tr>
                                   <td> <?php echo ++$d ; ?> </td>
                                    <td> <?php echo $value->airline ; ?> </td>
                                    <td> <?php echo $value->flight_no ; ?> </td>
                                    <td> <?php echo $value->airport_pickup ; ?> </td>
                                    <td> <?php echo $value->status ; ?> </td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- /.panel-->
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">Action Table</div>
                        <div class="panel-body btn-margins">
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                   <th data-field="id" data-sortable="true">Reserve ID</th>
                                            <th data-field="fname" data-sortable="true">First Name</th>
                                            <th data-field="lname" data-sortable="true">Last name</th>
                                            <th data-field="email" data-sortable="true">Email</th>
                                            <th data-field="address" data-sortable="true">Address</th>
                                            <th data-field="action" data-sortable="true">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                         foreach ($data as  $value) { ?>
                                    <tr>
                                    <td> <?php echo ++$e ; ?> </td>
                                    <td> <?php echo $value->fname ; ?> </td>
                                    <td> <?php echo $value->lname ; ?> </td>
                                    <td> <?php echo $value->email ; ?> </td>
                                    <td> <?php echo $value->address ; ?> </td>
                                    <td> <?php  
                                                        echo "<a class='btn btn-danger' href='delete_reserve.php?id=".$value->booking_id."'>Delete</a>";
                                                    
                                            ?>
                                            </td>
                                            </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- /.panel-->
            </div>
            <!-- /.col-->
           <?php 
    require_once 'layout/footer.php';
 ?>
         