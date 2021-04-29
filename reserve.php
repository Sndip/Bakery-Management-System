<?php 
	require_once 'admin/class/common.class.php';
	require_once 'admin/class/room.class.php';
	require_once 'admin/class/review.class.php';
	require_once 'session.php';
  require_once 'layout/header.php';
	if(isset($_GET['id']))
  {

  }
  else
  {
  	 echo "<script>alert('Room is not selected')</script>";
  	 echo "<script> window.location='room.php' </script>";
  }
	?>

    <!-- section header -->
    <section class="section__header">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
    	    	<div class="welcome__content">
							<h1 class="welcome_content__title">Reservation</h1>

							<!-- Breadcrumbs -->
              <ol class="breadcrumb">
							  <li><a href="index.php">Home</a></li>
							  <li class="active">Reservation</li>
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
    	    		<figure class="room__details">
								<img src="assets/img/gallery_img1.jpg" class="img-responsive" alt="...">
								<figcaption>
									<h3>Sample room</h3>
									<div class="room__price">
										$50 <small>/ night</small>
									</div>
									<p class="room__desc">Room Not selected</p>
								</figcaption>
							</figure> <!-- / .room__details -->
							<ul class="details-info">
                <li>
                  <label>Check in</label>
                  <p>2017-04-09</p>
                </li>
                <li>
                  <label>Check out</label>
                  <p>2017-04-18</p>
                </li>
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
                  <p>$ 515</p>
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
    	    		<p class="subheading">Booking form</p>
    	    		<h2 class="section__heading">Personal info</h2>
    	    		<p class="section__subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla ea doloremque tenetur quidem odit repellat omnis beatae obcaecati tempora.</p>

							<!-- Alert message -->
              <div class="alert" id="form_reservation" role="alert"></div>

              <!-- Please carefully read the README.pdf file in order to setup the PHP reservation form properly -->

              <form id="reservation-form_sendemail" class="reservation__form" data-animate-in="animateUp" action="#" method="POST">
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
            </div> <!-- .reservation__form-body -->
          </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section reservation -->
    <?php 
			require_once "layout/footer.php";
		 ?>