<?php
require_once 'class/common.class.php';
require_once 'class/user.class.php';
require_once 'class/session.class.php';
sessionhelper::checklogin(); 
	require_once 'selector.php';
    $a[11]=1;
	require_once 'layout/header.php';
	$b=0;
 ?>
    
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
                <li class="active">User Tables</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User Detail</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
            	<div class="panel panel-default">
						<div class="panel-heading">User Table</div>
						<div class="panel-body btn-margins">
							<div class="col-md-12">
								<table class="table table-striped">
									<thead>
										<tr>
                                    		<th data-field="id" data-sortable="true">User ID</th>
                                    		<th data-field="name" data-sortable="true">Name</th>
                                    		<th data-field="email" data-sortable="true">Email</th>
                                    		<th data-field="address" data-sortable="true">Address Name</th>
                                    		<th data-field="message" data-sortable="true">Phone No</th>
									</thead>
									<tbody>
											<?php
						    		$user = new user;
									$data = $user->selectuser(); 
									foreach ($data as  $value) { ?> 
									
									<tr>
										<td> <?php echo ++$b ; ?> </td>
									<td> <?php echo $value->name ; ?> </td>
									<td> <?php echo $value->email ; ?></td>
									<td> <?php echo $value->address ; ?> </td>
									<td> <?php echo $value->phone_no ; ?> </td>
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
		 