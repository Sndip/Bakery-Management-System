<?php 
$pay=0;
	require_once 'admin/class/common.class.php';
	require_once 'admin/class/table.class.php';
	require_once 'admin/class/reserve.class.php';
	require_once 'session.php';
  require_once 'layout/header.php';
	$reserve = new reserve;
	$table = new table;
	$table->id=$_GET['id'];
	$data = $table->selecttablebyid(); 
	$err=[];
	if(isset($_POST['submit']))
	{
		if(isset($_POST['check_in'])&& !empty($_POST['check_in']))
		{
			$reserve->dbo= $_POST['check_in'];
		}
		else
		{
			$err[1]="Check in is not selected";
		}
		if(isset($_POST['geust'])&& !empty($_POST['geust']))
		{
			$reserve->no_people= $_POST['geust'];
		}
		else
		{
			$err[3]="Check in is not selected";
		}
		if(isset($_POST['time'])&& !empty($_POST['time']))
		{
			$reserve->tim= $_POST['time'];
		}
		else
		{
			$err[4]="Time is not selected";
		}
		if(isset($_POST['smoke'])&& !empty($_POST['smoke']))
		{
			$reserve->smoke= $_POST['smoke'];
		}
		else
		{
			$err[5]="Area is not selected";
		}

		
		if(count($err)==0)
		{	
			$table->status=1;
			$aer=$table->updatetable();
			$reserve->user =$_SESSION['admin'];
			$reserve->tbl_no=$data[0]->tbl_no;
			$ask =$reserve->insertreserve();
			if($ask==1)
			{
				echo "<script>alert('Your Table is booked')</script>";
				$pay=1;
			}	
			else
			{
				echo "<script>alert('Table is not booked')</script>";
			}
		}
	}
 ?>	


    <!-- CONTENT
      ================================================== -->

    <!-- section header -->
    <section class="section__header">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
    	    	<div class="welcome__content">
							<?php if ($pay!=1) {?>
							<h1 class="welcome_content__title">Table Reservation</h1>
						<?php } elseif ($pay==1) { ?>

							<h1 class="welcome_content__title">Thank You</h1>
						 <?php } ?>

							<!-- Breadcrumbs -->
              <ol class="breadcrumb">
							  <li><a href="index.php">Home</a></li>
							<?php if ($pay!=1) {?> <li class="active">Table Reservation</li>
								<?php } elseif ($pay==1) { ?>
									<li class="active">Thank You Page</li>
								 <?php } ?>	
							</ol>

    					<p class="welcome_content__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    				</div> <!-- .welcome__content -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
			<div class="home__bg reservation__bg"></div>
    </section> <!-- / .section header -->

    <!-- section reservation -->
   
    <section class="section__reservation">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-5 col-sm-push-7 col-md-4 col-md-push-8">
    	    	<div class="booking__details-body">
    	    		<?php  if ($pay!=1) { ?><p class="subheading">Booking details</p>
    	    		<h2 class="section__heading">Selected table</h2>
    	    		<?php } elseif ($pay==1) { ?>
    	    			<p class="subheading">Table</p>

    	    		<?php 
    	    			}
    	    		    $present=date('Y-m-d');
						 ?>
    	    		<figure class="room__details">
								<img src="admin/image/table.jpg" class="img-responsive" alt="...">
								<figcaption>
									<h3>Table No:<?php echo $data[0]->tbl_no; ?></h3>
									<div class="room__price"><?php echo $data[0]->chair_no; ?> Geusts
									</div>
									<p class="room__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis mollitia voluptas vero vel eligendi sint.</p>
								</figcaption>
							</figure> <!-- / .room__details -->
  	    		</div> <!-- .booking__details-body -->
  	    		<div class="info__body">
							<p class="info__title">Information</p>
							<ul class="info__content">
                <li>
                  <p class="info-text">If you have some questions with booking please contact us.</p>
                </li>
	              <li>
	                <i class="icon ion-android-pin"></i>
	                <div class="info-content">
	                  <div class="title">Address</div>
	                  <div class="description">Baltimore Ave, Hot Springs,USA</div>
	                </div>
	              </li>
	              <li>
	                <i class="icon ion-android-call"></i>
	                <div class="info-content">
	                  <div class="title">Phone / Fax</div>
	                  <div class="description">+9779867356243/+9779867356243</div>
	                </div>
	              </li>
	              <li>
	                <i class="icon ion-android-mail"></i>
	                <div class="info-content">
	                  <div class="title">E-mail</div>
	                  <div class="description">admin@sunsethotel.com</div>
	                </div>
	              </li>
	            </ul> <!-- .info__content -->
  	    		</div> <!-- / .info__body -->
    	    </div>
    	    <div class="col-sm-7 col-sm-pull-5 col-md-8 col-md-pull-4">
    	    	<div class="reservation__form-body">
    	    		<?php  if ($pay!=1) { ?><p class="subheading">Booking Detail</p>
    	    		<?php } elseif ($pay==1) { ?>
    	    		 <p class="subheading">We are very glad you are interested in our service</p>
    	    		<?php } ?>
    	    		<p class="section__subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla ea doloremque tenetur quidem odit repellat omnis beatae obcaecati tempora.</p>

							<!-- Alert message -->
              <div class="alert" id="form_reservation" role="alert"></div>

              <!-- Please carefully read the README.pdf file in order to setup the PHP reservation form properly -->

             <?php if ($pay!=1) {?>
               <form id="reservation-form_sendemail" class="reservation__form" data-animate-in="animateUp" action="#" method="POST">
              	<div class="col-sm-12 col-md-6">
              		<div class="form-group">
	                  <label for="check-in" class="sr-only">Arrival date</label>
	                  <input type="date" name="check_in" class="form-control" id="check-in" value="<?php echo $present; ?>">
	                  <span class="help-block"></span>
	                </div>
	              </div>
              	<div class="col-sm-12 col-md-6">
              		<div class="form-group">
	                  <label for="first-name" class="sr-only">User</label>
	                  <input type="text" name="name" class="form-control" id="first-name" placeholder="Name" value="<?php $name = $_SESSION['admin'];
                              echo $name; ?>">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	              	<div class="form-group">
	                  <label for="geust" class="sr-only">No of Geust</label>
	                  <select class="form-control" name="geust" id="geust">
	                  	<?php $num = $data[0]->chair_no; 
	                  	for ($i=1; $i <=$num ; $i++) { ?>
	                  	 	<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	                  <?php	 } ?>
                  	</select>
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="address" class="sr-only">Time</label>
	                  <input type="text" name="time" class="form-control" id="address" placeholder="Time">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              
               <div class="col-sm-12 col-md-6">
	              	<div class="form-group">
	                  <label for="smoke" class="sr-only">Smoking</label>
	                  <select class="form-control" name="smoke" id="smoke">
                      <option  value="1">NO smoking</option>
                      <option value="2">Smoking</option>
                  	</select>
	                  <span class="help-block"></span>
	                </div>
	              </div>
              	
               	<div class="col-sm-12">
               		<p>
               			<input type="checkbox" name="checkbox"> I have read and accept <a href="#" class="conditions">the terms and conditions.</a>
               		</p>
               		<button type="submit" name="submit" class="btn btn-booking">Submit</button>
               	</div>
              </form> <!-- .reservation__form -->
             <?php  } elseif ($pay==1) {?>
             	<p>Thank You For Your Involvement</p>
             <?php } ?>
            </div> <!-- .reservation__form-body -->
          </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section reservation -->


    <?php 
			require_once "layout/footer.php";
		 ?>