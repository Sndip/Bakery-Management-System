<?php 
$pay=0;
	require_once 'admin/class/common.class.php';
	require_once 'admin/class/room.class.php';
	require_once 'admin/class/review.class.php';
	require_once 'admin/class/reserve.class.php';
	require_once 'session.php';
  require_once 'layout/header.php';
	$reserve = new reserve;
	$room = new room;
	$room->id=$_GET['id'];
	$err=[];
	if(isset($_POST['submit']))
	{
		
		if (isset($_POST['fname'])&& !empty($_POST['fname']))
		 {
			$reserve->fname= $_POST['fname'];
		}
		else
		{
			$err[1]="First Name must be Entered";
		}
		if (isset($_POST['lname'])&& !empty($_POST['lname']))
		 {
			$reserve->lname= $_POST['lname'];
		}
		else
		{
			$err[2]="Last Name must be Entered";
		}

		if (isset($_POST['adult'])&& !empty($_POST['adult']))
		 {
			$reserve->adult= $_POST['adult'];
		}
		else
		{
			$err[3]="Adult number must be Entered";
		}
		if (isset($_POST['children'])&& !empty($_POST['children']))
		 {
			$reserve->children= $_POST['children'];
		}
		else
		{
			$err[4]="Children number must be Entered";
		}
		if (isset($_POST['address'])&& !empty($_POST['address']))
		 {
			$reserve->address= $_POST['address'];
		}
		else
		{
			$err[5]="Address must be Entered";
		}
		if(isset($_POST['email'])&& !empty($_POST['email']))
		{
			$reserve->email= $_POST['email'];
		}
		else
		{
			$err[6]="E-mail cannot be empty";
		}
		if(isset($_POST['phone'])&& !empty($_POST['phone']))
		{
			$reserve->phone_no= $_POST['phone'];
		}
		else
		{
			$err[7]="Phone number cannot be empty";
		}
		if(isset($_POST['nation'])&& !empty($_POST['nation']))
		{
			$reserve->nationality= $_POST['nation'];
		}
		else
		{
			$err[8]="Nationality cannot be empty";
		}
		if(isset($_POST['state'])&& !empty($_POST['state']))
		{
			$reserve->state= $_POST['state'];
		}
		else
		{
			$err[9]="State cannot be empty";
		}
		if(isset($_POST['city'])&& !empty($_POST['city']))
		{
			$reserve->city= $_POST['city'];
		}
		else
		{
			$err[10]="City cannot be empty";
		}
		if(isset($_POST['zip_code'])&& !empty($_POST['zip_code']))
		{
			$reserve->zipcode= $_POST['zip_code'];
		}
		else
		{
			$err[11]="Zip-Code cannot be empty";
		}
		if(isset($_POST['meal'])&& !empty($_POST['meal']))
		{
			$reserve->meal= $_POST['meal'];
		}
		else
		{
			$err[12]="meal cannot be empty";
		}
		if(isset($_POST['check_in'])&& !empty($_POST['check_in']))
		{
			$reserve->check_in= $_POST['check_in'];
		}
		else
		{
			$err[13]="Check in is not selected";
		}
		if(isset($_POST['check_out'])&& !empty($_POST['check_out']))
		{
			$reserve->check_out= $_POST['check_out'];
		}
		else
		{
			$err[14]="Check out is not selected";
		}
		if(isset($_POST['airline'])&& !empty($_POST['airline']))
		{
			$reserve->airline= $_POST['airline'];
		}
		else
		{
			$err[15]="Airline cannot be empty";
		}
		if(isset($_POST['flight'])&& !empty($_POST['flight']))
		{
			$reserve->flight_no= $_POST['flight'];
		}
		else
		{
			$err[16]="Flight no cannot be empty";
		}
		if(isset($_POST['pickup'])&& !empty($_POST['pickup']))
		{
			$reserve->airport_pickup= $_POST['pickup'];
		}
		else
		{
			$err[17]="Airport Pickup cannot be empty";
		}
		if(isset($_POST['arrival_time'])&& !empty($_POST['arrival_time']))
		{
			$reserve->arrival_time= $_POST['arrival_time'];
		}
		else
		{
			$err[18]="Arrival time is not given";
		}
		if(count($err)==0)
		{	
			echo "Insert";
			$reserve->status=1;
			$reserve->room_id=$room->id;
			$ask =$reserve->insertreserve();
			if($ask==1)
			{
				echo "<script>alert('Your room is booked')</script>";
				$pay=1;
			}	
			else
			{
				echo "<script>alert('Room is not booked')</script>";
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
							 <?php if($pay!=1){ ?><h1 class="welcome_content__title">Reservation</h1>
							<?php } elseif ($pay==1) {?><h1 class="welcome_content__title">Payment</h1><?php } ?>

							<!-- Breadcrumbs -->
              <ol class="breadcrumb">
							  <li><a href="index.php">Home</a></li>
							  <?php if($pay!=1){ ?><li class="active">Reservation</li>
							<?php } elseif ($pay==1) {?><li class="active">Payment</li><?php } ?>
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
    	    		<p class="subheading">Booking details</p>
    	    		<h2 class="section__heading">Selected room</h2>
    	    		<?php 
						$data = $room->selectroombyid(); 
						foreach ($data as  $value) { ?>
    	    		<figure class="room__details">
								<img src="admin/image/<?php echo $value->picture; ?>" class="img-responsive" alt="...">
								<figcaption>
									<h3><?php echo $value->type; ?></h3>
									<div class="room__price">$<?php echo $value->price; ?> <small>/ night</small>
									</div>
									<p class="room__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis mollitia voluptas vero vel eligendi sint.</p>
								</figcaption>
							</figure> <!-- / .room__details -->
						<?php $price=$value->price;
									 }
									 $present=date('Y-m-d'); ?>
							<ul class="details-info">
                <li>
                  <label>Adults</label>
                  <p>2 Person</p>
                </li>
                <li>
                  <label>Children</label>
                  <p>1 Chind</p>
                </li>
                <li>
                  <label>Nights</label>
                  <p>9 Nights</p>
                </li>
                <li>
                  <label>Services</label>
                  <p>$ 65</p>
                </li>
                <li class="total-price">
                  <label>Total price</label>
                  <p>$<?php echo $price+65; ?></p>
                </li>
            </ul>
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
    	    		 <?php if($pay!=1){ ?><p class="subheading">Booking form</p>
    	    		<h2 class="section__heading">Personal info</h2>
							<?php } elseif ($pay==1) {?><li class="active">Payment proceed</li><?php } ?>
    	    		
    	    		<p class="section__subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla ea doloremque tenetur quidem odit repellat omnis beatae obcaecati tempora.</p>

							<!-- Alert message -->
              <div class="alert" id="form_reservation" role="alert"></div>

              <!-- Please carefully read the README.pdf file in order to setup the PHP reservation form properly -->

             <?php 
             	if ($pay!=1) {
              ?> <form id="reservation-form_sendemail" class="reservation__form" data-animate-in="animateUp" action="#" method="POST">
              	<div class="col-sm-12 col-md-6">
              		<div class="form-group">
	                  <label for="check-in" class="sr-only">Arrival date</label>
	                  <input type="date" name="check_in" class="form-control" id="check-in" value="<?php echo $present; ?>">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <?php 
	              	$mod_date = strtotime($present."+ 10 days");
	              	$ano_date=date("Y-m-d",$mod_date);
	               ?>
	              <div class="col-sm-12 col-md-6">
	              	<div class="form-group">
	                  <label for="check-out" class="sr-only">Departure date</label>
	                  <input type="date" name="check_out" class="form-control" id="check-out" value="<?php echo $ano_date; ?>">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	              	<div class="form-group">
	                  <label for="form-adults" class="sr-only">Adults</label>
	                  <select class="form-control" name="adult" id="form-adults">
                      <option selected="">Adults</option>
                      <option value="1">1 Adult</option>
                      <option value="2">2 Adults</option>
                      <option value="3">3 Adults</option>
                  	</select>
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	              	<div class="form-group">
	                  <label for="form-children" class="sr-only">Children</label>
	                  <select class="form-control" name="children" id="form-children">
                      <option  selected="">Children</option>
                      <option value="1">1 Child</option>
                      <option value="2">2 Children</option>
                      <option value="3">3 Children</option>
                  	</select>
	                  <span class="help-block"></span>
	                </div>
	              </div>
              	<div class="col-sm-12 col-md-6">
              		<div class="form-group">
	                  <label for="first-name" class="sr-only">First name</label>
	                  <input type="text" name="fname" class="form-control" id="first-name" placeholder="First Name">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
              		<div class="form-group">
	                  <label for="last-name" class="sr-only">Last name</label>
	                  <input type="text" name="lname" class="form-control" id="last-name" placeholder="Last Name">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="email" class="sr-only">Email</label>
	                  <input type="email" name="email" class="form-control" id="email" placeholder="Email">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="phone" class="sr-only">Phone</label>
	                  <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="address" class="sr-only">Address</label>
	                  <input type="text" name="address" class="form-control" id="address" placeholder="Address">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="Nationality" class="sr-only">Nationality</label>
	                  <input type="text" name="nation" class="form-control" id="nationality" placeholder="Nationality">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="state" class="sr-only">State / Region</label>
	                  <input type="text" name="state" class="form-control" id="state" placeholder="State / Region">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="city" class="sr-only">City</label>
	                  <input type="text" name="city" class="form-control" id="city" placeholder="City">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="zip-code" class="sr-only">Zip Code</label>
	                  <input type="text" name="zip_code" class="form-control" id="zip-code" placeholder="Zip code">
	                  <span class="help-block"></span>
	                </div>
              	</div>
               <div class="col-sm-12 col-md-6">
	              	<div class="form-group">
	                  <label for="meal" class="sr-only">Meal</label>
	                  <select class="form-control" name="meal" id="meal">
                      <option  selected="">Meal</option>
                      <option value="breakfast">Break Fast</option>
                      <option value="dinner">Dinner</option>
                      <option value="both">both</option>
                  	</select>
	                  <span class="help-block"></span>
	                </div>
	              </div>
              	<div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="airline" class="sr-only">Airline</label>
	                  <input type="text" name="airline" class="form-control" id="airline" placeholder="Airline">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="flight" class="sr-only">Flight No</label>
	                  <input type="text" name="flight" class="form-control" id="flight" placeholder="Flight No">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12 col-md-6">
	              	<div class="form-group">
	                  <label for="meal" class="sr-only">Airport Pick up</label>
	                  <select class="form-control" name="pickup" id="meal">
                      <option  selected="">Pick up</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                  	</select>
	                  <span class="help-block"></span>
	                </div>
	              </div>
              	 
              	<div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="arrival" class="sr-only">Arrival Time</label>
	                  <input type="text" name="arrival_time" class="form-control" id="arrivaltime" placeholder="Arrival Time" >
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
              <?php 
              	}
              	elseif ($pay==1) {
              		echo "<a class='btn-book' href='payment.php?id=".$room->id."'>Payment<i class='icon ion-chevron-right'></i><i class='icon ion-chevron-right'></i></a>";
              	}
               ?>
            </div> <!-- .reservation__form-body -->
          </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section reservation -->
    <?php 
			require_once "layout/footer.php";
		 ?>