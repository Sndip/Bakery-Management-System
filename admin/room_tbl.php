<?php 

	require_once 'class/common.class.php';
require_once 'class/room.class.php';
require_once 'class/session.class.php';
sessionhelper::checklogin();
require_once 'selector.php';
  $a[8]=1;
require_once 'layout/header.php';
$b=0;
 ?>
    
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
                <li class="active">Room Tables</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Room Detail</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
            	<div class="panel panel-default">
						<div class="panel-heading">Room Table</div>
						<div class="panel-body btn-margins">
							<div class="col-md-12">
								<table class="table table-striped">
									<thead>
										<tr>
                                    		<th data-field="id" data-sortable="true">Room ID</th>
                                    		<th data-field="type" data-sortable="true">Room Type</th>
                                    		<th data-field="picture" data-sortable="true">Picture</th>
                                    		<th data-field="price" data-sortable="true">Price</th>
                                    		<th data-field="bed_number" data-sortable="true">Bed Number</th>
                                    		<th data-field="action" data-sortable="false">Actions</th>
										</tr>
									</thead>
									<tbody>
											<?php
						    		$room = new room;
									$data = $room->selectroom(); 
									foreach ($data as  $value) { ?> 
									
									<tr>
										<td> <?php echo ++$b ; ?> </td>
									<td> <?php echo $value->type ; ?> </td>
									<td> <?php if(!empty($value->picture))
									{ ?>
									 <img src="image/<?php echo $value->picture; ?> " width = "100" height ="50" >  </td>
									<?php } ?>
									<td> <?php echo $value->price ; ?> </td>
									<td> <?php echo $value->bed_no ; ?> </td>
									<td> <?php 
														echo "<a  class='btn btn-primary' href='update_room.php?id=".$value->room_id."'>Update</a>"."&nbsp"; 
														echo "<a class='btn btn-danger' href='deleteroom.php?id=".$value->room_id."'>Delete</a>";
													
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
		 