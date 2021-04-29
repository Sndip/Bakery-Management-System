<?php 
	require_once 'admin/class/common.class.php';
	require_once 'admin/class/room.class.php';
	require_once 'admin/class/review.class.php';
	require_once 'session.php';
	require_once 'layout/header.php';
	$review = new review;
	$err=[];
	if(isset($_POST['cmdsubmit']))
	{
		
		if (isset($_POST['name'])&& !empty($_POST['name']))
		 {
			$review->name= $_POST['name'];
		}
		else
		{
			$err[1]="Name must be Entered";
		}
		if (isset($_POST['address'])&& !empty($_POST['address']))
		 {
			$review->address= $_POST['address'];
		}
		else
		{
			$err[2]="Address must be Entered";
		}
		if (isset($_POST['message'])&& !empty($_POST['message']))
		 {
			$review->message= $_POST['message'];
		}
		else
		{
			$err[3]="Message must be Entered";
		}
		
		if(isset($_POST['email'])&& !empty($_POST['email']))
		{
			$review->email= $_POST['email'];
		}
		else
		{
			$err[4]="E-mail cannot be empty";
		}
		if(count($err)==0)
		{
			$ask =$review->insertreview();
			if($ask==1)
			{
				echo "<script>alert('Your message is send successfully')</script>";
			}	
			else
			{
				echo "<script>alert('Something is missing in form')</script>";
			}
		}
	}
 ?>	


    <!-- CONTENT
      ================================================== -->

    <!-- section home -->
    <section class="section__home" id="section__home">
    	<div class="container">
    		<div class="row">
  	    	<div class="col-sm-12">
  	    		<div class="welcome__content">

  	    			<!-- logo -->
							<h1 class="welcome_content__title">Sunset Hotel</h1>
							<p class="welcome_content__title-primary">grand</p>

							<div class="divider">
	    					<hr class="line1">
	    					<hr class="line2">
	    					<hr class="line1">
	    				</div> <!-- / .divider -->

	  					<p class="welcome_content__desc">In our hotel you will find everything you need to enjoy your vacation</p>

	  					<!-- button -->
	  					<a href="#section__about" class="btn btn-reservation">Explore it</a>

		  			</div> <!-- .welcome__content -->
    	    </div>
	    	</div> <!-- / .row -->
    	</div> <!-- / .container -->

			<!-- background image (insert via CSS) -->
			<div class="home__bg"></div>

    </section> <!-- / .section__home -->
	   
	<!-- section about -->
    <section class="section__about" id="section__about">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12"> 		  	
    				<h2 class="section__title">Welcome to <strong>Sunset Hotel</strong></h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    			</div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container-fluid">
    		<div class="row">
		    	<div class="section_about__content">
		    	  <div class="col-md-6">
		    	  	<div class="about__pic">
		    				<img src="assets/img/about_img.jpg" class="img-responsive" alt="...">
		    			</div> <!-- / .about__pic -->
		    	  </div>
		    	  <div class="col-md-6">
			    	  <div class="about__desc">
			    	  	<p class="about_desc__subtitle">About us</p>
			  				<h3 class="about_desc__title">Probably the best place to enjoy your life</h3>
								<p class="about_desc__desc">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary.</p>
								<h4 class="about_desc__quote">The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</h4>
								<a href="about.html" class="btn btn-default">Learn More</a>
			  			</div> <!-- / .about__desc -->
		    	  </div>
		    	</div> <!-- / .section_about__content -->
		    </div> <!-- / .row -->
    	</div>
	    
    </section> <!-- / .section__about -->
		
		<!-- section best-rooms -->
    <section class="section__best-rooms">
    	<div class="container">
    		<div class="row">
    		  <div class="col-sm-12"> 		  	
    				<h2 class="section__title">Our <strong>Best rooms</strong></h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    				<p class="section__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis.</p>
    		  </div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container">
    		<div class="best-rooms__content">
		    	<div class="row">
		    		<?php 
		    			$room = new room;
						$data = $room->selectroom(); 
						foreach ($data as  $value) { ?> 
		    	  <div class="col-sm-6">
		    	  	<figure class="best-rooms__item">
	    	  			<img src="admin/image/<?php echo $value->picture ?>" class="img-responsive" alt="">
								<figcaption>
									<h3> <?php echo $value->type ; ?></h3>
									<div class="item__price">$<?php echo $value->price ; ?><small>/ night</small>
									</div>
									<p class="item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis.</p>
									<?php 
									echo "<a class='btn-book' href='reservation.php?id=".$value->room_id."'>Book now <i class='icon ion-chevron-right'></i><i class='icon ion-chevron-right'></i></a>";
									?>
								</figcaption>
							</figure> <!-- / .best-rooms__item -->
		    	  </div>
		    	  <?php } ?> 
		    	<div class="row">
			    	<div class="col-xs-12">
			    		<div class="rooms__button">
			    			<a href="rooms-1.html" class="btn">See all rooms</a>
			    		</div> <!-- / .rooms__button -->
			    	</div>
		    	</div> <!-- / .row -->
		    </div> <!-- / .best-rooms__content -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__best-rooms -->

    <!-- section services -->
    <section class="section__services">
    	<div class="container-fluid">
		    <div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="services__item">
							<h2 class="services_item__title">Parking</h2>
							<div class="services_item__divider">
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
							</div> <!-- .services_item__divider -->
							<p class="services_item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel temporibus adipisci mollitia ducimus facilis nesciunt at minima magni optio, dignissimos, neque dolore iste labore dolor enim, ipsam quisquam, quae nihil!</p>
						</div> <!-- .services__item -->
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="services__item">
							<h2 class="services_item__title">Fitness hall</h2>
							<div class="services_item__divider">
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
							</div> <!-- .services_item__divider -->
							<p class="services_item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi eaque, eum. Voluptates corporis tenetur commodi nihil velit perspiciatis natus fugit rerum nisi, at, voluptas autem quisquam reprehenderit odit dolores quas!</p>
						</div> <!-- .services__item -->
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="services__item">
							<h2 class="services_item__title">Restaurant</h2>
							<div class="services_item__divider">
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
							</div> <!-- .services_item__divider -->
							<p class="services_item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non nesciunt ullam porro ipsa, architecto, doloribus illo veritatis consequatur temporibus eveniet labore, vitae laudantium possimus placeat libero magnam.</p>
						</div> <!-- .services__item -->
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="services__item">
							<h2 class="services_item__title">Spa center</h2>
							<div class="services_item__divider">
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
							</div> <!-- .services_item__divider -->
							<p class="services_item__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed animi voluptates, laudantium aspernatur, libero nulla ut. Quibusdam distinctio eaque cum officia expedita dolore, perspiciatis quisquam vel et neque tempora cupiditate.</p>
						</div> <!-- .services__item -->
					</div>
		    </div> <!-- / .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__services -->

    <!-- section gallery -->
    <section class="section__gallery">
    	<div class="container">
    		<div class="row">
    		  <div class="col-sm-12"> 		  	
    				<h2 class="section__title">Our <strong>Gallery</strong></h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    				<p class="section__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis aperiam mollitia enim corporis ex praesentium reprehenderit.</p>
    		  </div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container-fluid">
		    <div class="row">
		    	<div class="col-xs-12">
		    		<div id="gallery__carousel" class="owl-carousel owl-theme gallery__body">
		    			<div class="gallery__item">
	              <a href="assets/img/gallery_img1.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img1.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img2.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img2.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img3.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img3.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img4.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img4.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img5.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img5.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img6.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img6.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img7.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img7.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img8.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img8.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img9.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img9.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img10.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img10.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img11.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img11.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/gallery_img12.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/gallery_img12.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
		    		</div> <!-- .gallery__body -->
		    	</div>
		    </div> <!-- / .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__gallery -->

    <!-- section testimonials -->
    <section class="section__testimonials">
    	<div class="container">
    		<div class="row">
    		  <div class="col-sm-12"> 		  	
    				<h2 class="section__title"><strong>Testimonials</strong></h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    				<p class="section__subtitle testimonials__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis aperiam.</p>
    		  </div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container">
    		<div class="row">
					<div class="col-xs-12">
		    		<div id="testimonials__carousel" class="owl-carousel owl-theme testimonials__body">
		    			<?php 
		    			$review = new review;
						$data = $review->selectreview(); 
						foreach ($data as  $value) { ?> 
		    			<div class="testimonials__wrapper">
		    				<div class="testimonials__item">
				    			<div class="testimonials__img">
				    				<img src="assets/img/user.png" class="img-responsive" alt="...">
				    			</div>
		              <div class="testimonials__caption">
		              	<h3 class="testimonials_caption__name"><?php echo $value->name ; ?></h3>
		              	<p class="testimonials_caption__prof"><?php echo $value->address ; ?></p>
		              	<p class="testimonials_caption__text"><?php echo $value->message ; ?></p>
		              </div> <!-- .testimonials__caption -->
		            </div> <!-- .testimonials__item -->
		    			</div><!-- .testimonials__wrapper -->
		    			<?php } ?> 
		    	</div>
		    </div> 
	    </div> <!-- / .row -->
	</div> <!-- / .container -->
    </section> <!-- / .section__testimonials -->

<!-- section Contacts -->
    <section class="section__contacts">
    	<div class="container">
    		<div class="row">
    		  <div class="col-sm-12"> 		  	
    				<h2 class="section__title"><strong>Contact</strong> us</h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    		  </div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
      <div class="section_row">
        <div id="map"></div>
      </div> <!-- / .section_row -->
      <div class="container">
      	<div class="row">
	        <div class="col-sm-5">
						<div class="contacts__info">
							<p class="contacts_info__title">Information</p>
							<ul class="contacts_info__content">
	              <li>
	                <i class="icon ion-android-pin"></i>
	                <div class="contact-info-content">
	                  <div class="title">Address</div>
	                  <div class="description">Baltimore Ave, Hot Springs,USA</div>
	                </div>
	              </li>
	              <li>
	                <i class="icon ion-android-call"></i>
	                <div class="contact-info-content">
	                  <div class="title">Phone / Fax</div>
	                  <div class="description">+9779867356243/+9779867356243</div>
	                </div>
	              </li>
	              <li>
	                <i class="icon ion-android-mail"></i>
	                <div class="contact-info-content">
	                  <div class="title">E-mail</div>
	                  <div class="description">admin@sunsethotel.com</div>
	                </div>
	              </li>
	            </ul> <!-- .contacts_info__content -->
						</div> <!-- / .contacts__info -->
						<p class="subheading">If you have any questions don't hesistate to contact us.</p>
	        </div>
	        <div class="col-sm-7">
	        	<div class="section-contacts__form_body">
							
							<p class="section-contacts__title">Get in touch</p>

              <!-- Please carefully read the README file in order to setup the PHP contact form properly -->

              <!-- Alert message -->
              <div class="alert" id="form_message" role="alert"></div>

              <!-- Form -->
							  <form id="form_sendemail" class="contacts__form" action="#" method="POST">
							  <!-- Email -->
							  <div class="form-group">
							    <label for="email" class="sr-only">Email address *</label>
							    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address">
							    <span class="help-block"></span>
							  </div>
							  
							  <!-- Name -->
							  <div class="form-group">
							    <label for="name" class="sr-only">Name *</label>
							    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
							    <span class="help-block"></span>
							  </div>
							   <!-- Address -->
							  <div class="form-group">
							    <label for="name" class="sr-only">Address *</label>
							    <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address" required>
							    <span class="help-block"></span>
							  </div>
							  
							  <!-- Message -->
							  <div class="form-group">
							    <label for="message" class="sr-only">Message *</label>
							    <textarea name="message" class="form-control" id="message" rows="6" placeholder="Enter your message" required></textarea>
							    <span class="help-block"></span>
							  </div>
							  
							  <!-- Note -->
							  <div class="form-group">
							    <small class="text-muted">
							      * All fields are mandatory.
							    </small>
							  </div>
							  
							  <!-- Submit -->
								<button type="submit" class="btn btn-default" title="" name="cmdsubmit">Submit</button>
								

							</form> <!-- .contacts__form -->
            </div> <!-- / .secction-contacts__form_body -->
	        </div>
	      </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section> <!-- / .section__contacts -->

		<?php 
			require_once 'layout/footer.php';
		 ?>