<?php 
require_once 'admin/class/common.class.php';
require_once 'admin/class/order.class.php';
require_once 'admin/class/product.class.php';
require_once 'admin/class/user.class.php';
require_once 'session.php';
sessionhelper::checklogin(); 
$err=[];
if(!isset($_SESSION['admin']))
		{
			header('location:login.php');
		}
	require_once 'layout/header.php';
	$order = new order;
	$product = new product;
	$product->id=$_GET['id'];
	$data = $product->selectproductbyid(); 
	$order->prdct = $data[0]->name;
	$order->price= $data[0]->price;
	$order->cat_name = $data[0]->cat_name;
	$order->user = $_SESSION['admin'];
	$user = new user;
	$user->username = $_SESSION['admin'];
	$dat = $user->selectuserbyusername();
 if(isset($_POST['cmdsubmit']))
	{
		
		if (isset($_POST['arrival'])&& !empty($_POST['arrival']))
		 {
			$order->dbo= $_POST['arrival'];
		}
		else
		{
			$err[1]=" Date must be Entered";
		}
		if (isset($_POST['address'])&& !empty($_POST['address']))
		 {
			$order->address= $_POST['address'];
		}
		else
		{
			$err[3]="Address number must be Entered";
		}
		
		if(isset($_POST['phone'])&& !empty($_POST['phone']))
		{
			$order->phone_no= $_POST['phone'];
		}
		else
		{
			$err[5]="Phone number cannot be empty";
		}
		if(count($err)==0)
		{	
			$ask =$order->insertorder();
			if($ask==1)
			{
				sessionhelper::set('odrid',$order->user);
				echo "<script> window.location='thankyou.php' </script>";
				
			}	
			else
			{
				echo "<script>alert('Order not registered')</script>";
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
							<h1 class="welcome_content__title">Order</h1>

							<!-- Breadcrumbs -->
              <ol class="breadcrumb">
							  <li><a href="index.php">Home</a></li>
							 <li class="active">Order</li>
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
    	    		<p class="subheading">Order details</p>
    	    		<h2 class="section__heading">Selected order</h2>
    	    		<figure class="room__details">
								<img src="admin/image/<?php echo $data[0]->picture; ?>" class="img-responsive" alt="...">
								<figcaption>
									<h3><?php echo $data[0]->name; ?></h3>
									<div class="room__price">$<?php echo $data[0]->price; ?> <small>/ night</small>
									</div>
									<p class="room__desc"><?php echo $data[0]->disc; ?></p>
								</figcaption>
							</figure> <!-- / .room__details -->
						<?php $price=$data[0]->price;
									 
									 $present=date('Y-m-d'); ?>
							<ul class="details-info">
               
                <li>
                  <label>Services Tax</label>
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
                  <p class="info-text">If you have some questions with Order please contact us.</p>
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
    	    		<p class="subheading">Order form</p>
    	    		<h2 class="section__heading">Personal info</h2>
    	    		
    	    		<p class="section__subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla ea doloremque tenetur quidem odit repellat omnis beatae obcaecati tempora.</p>

							<!-- Alert message -->
              <div class="alert" id="form_reservation" role="alert"></div>

              <!-- Please carefully read the README.pdf file in order to setup the PHP reservation form properly -->

             <form id="reservation-form_sendemail" class="reservation__form" data-animate-in="animateUp" action="#" method="POST">
              	<div class="col-sm-12 col-md-6">
              		<div class="form-group">
	                  <label for="check-in" class="sr-only">Arrival date</label>
	                  <input type="date" name="arrival" class="form-control" id="check-in" value="<?php echo $present; ?>">
	                  <span class="help-block"></span>
	                </div>
	              </div>
              <div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="phone" class="sr-only">Phone</label>
	                  <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone" value="<?php echo $dat[0]->phone_no; ?>">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="address" class="sr-only">Address</label>
	                  <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="<?php echo $dat[0]->address; ?>">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12">
               		<p>
               			<input type="checkbox" name="checkbox"> I have read and accept <a href="#" class="conditions">the terms and conditions.</a>
               		</p>
               		<button type="submit" name="cmdsubmit" class="btn btn-booking">Submit</button>
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