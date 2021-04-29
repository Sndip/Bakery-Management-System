<?php 
require_once 'admin/class/common.class.php';
require_once 'admin/class/order.class.php';
require_once 'session.php';
sessionhelper::checklogin(); 
	require_once 'layout/header.php';
	$order = new order;
?>
    <!-- CONTENT
      ================================================== -->

    <!-- section header -->
    <section class="section__header">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
    	    	<div class="welcome__content">
							<h1 class="welcome_content__title">Thank You</h1>

							<!-- Breadcrumbs -->
              <ol class="breadcrumb">
							  <li><a href="index.php">Home</a></li>
							 <li class="active">Final</li>
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
    	    		<p class="subheading"></p>
    	    		<h2 class="section__heading">Thank you for the order</h2>
    	    		
    	    		<p class="section__subheading"><?php 
    	    		sessionhelper::checklogin();
    	    		$name = $_SESSION['odrid'];
    	    		$order->user = $name;
    	    		$ao = 0;
    	    		$aa =1;
                              echo $name; ?> can check our Shop for <?php 
                              $data = $order->selectorderbyuser(); 
									foreach ($data as  $value) 
									{ 
											echo $value->prdct;
											$ao++;
											
											if($ao>1)
											{
												echo " , ";
											}
											else if ($aa==1 && $ao == 1) {
												echo " .";
											}
											$aa=0;

									} 
									?></p>

            </div> <!-- .reservation__form-body -->
          </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section reservation -->
    <?php 
			require_once "layout/footer.php";
		 ?>