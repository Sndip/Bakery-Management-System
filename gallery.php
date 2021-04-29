<?php 
  require_once 'session.php';
  require_once 'layout/header.php';
  ?>

    <!-- section header -->
    <section class="section__header" id="section__header">
    	<div class="container">
    		<div class="row">
  	    	<div class="col-sm-12">
  	    		<div class="welcome__content">
							<h1 class="welcome_content__title">Our gallery</h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Gallery</li>
              </ol>

	  					<p class="welcome_content__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
		  			</div> <!-- .welcome__content -->
    	    </div>
	    	</div> <!-- / .row -->
    	</div> <!-- / .container -->
			<div class="home__bg gallery__bg"></div>
    </section> <!-- / .section__header -->

    <!-- section gallery-alt -->
    <section class="section__gallery-alt">
    	<div class="container">
    		<div class="row">
    		  <div class="col-sm-12">
            <h2 class="subheading">Some shots of our beautiful interior</h2>
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
		    <div id="gallery__items" class="row">
		    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 gallery__item all double-room">
            <a href="assets/img/gallery_img1.jpg" data-lightbox="gallery" data-title="Your caption">
              <img src="assets/img/gallery_img1.jpg" class="img-responsive" alt="...">
            </a>
          </div> <!-- .gallery__item -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 gallery__item all single-room">
            <a href="assets/img/gallery_img2.jpg" data-lightbox="gallery" data-title="Your caption">
              <img src="assets/img/gallery_img2.jpg" class="img-responsive" alt="...">
            </a>
          </div> <!-- .gallery__item -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 gallery__item all deluxe-room">
            <a href="assets/img/gallery_img3.jpg" data-lightbox="gallery" data-title="Your caption">
              <img src="assets/img/gallery_img3.jpg" class="img-responsive" alt="...">
            </a>
          </div> <!-- .gallery__item -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 gallery__item all single-room deluxe-room">
            <a href="assets/img/gallery_img4.jpg" data-lightbox="gallery" data-title="Your caption">
              <img src="assets/img/gallery_img4.jpg" class="img-responsive" alt="...">
            </a>
          </div> <!-- .gallery__item -->
		    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 gallery__item all lobby">
            <a href="assets/img/gallery_img5.jpg" data-lightbox="gallery" data-title="Your caption">
              <img src="assets/img/gallery_img5.jpg" class="img-responsive" alt="...">
            </a>
          </div> <!-- .gallery__item -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 gallery__item all lobby">
            <a href="assets/img/gallery_img6.jpg" data-lightbox="gallery" data-title="Your caption">
              <img src="assets/img/gallery_img6.jpg" class="img-responsive" alt="...">
            </a>
          </div> <!-- .gallery__item -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 gallery__item all  single-room deluxe-room">
            <a href="assets/img/gallery_img7.jpg" data-lightbox="gallery" data-title="Your caption">
              <img src="assets/img/gallery_img7.jpg" class="img-responsive" alt="...">
            </a>
          </div> <!-- .gallery__item -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 gallery__item all double-room">
            <a href="assets/img/gallery_img8.jpg" data-lightbox="gallery" data-title="Your caption">
              <img src="assets/img/gallery_img8.jpg" class="img-responsive" alt="...">
            </a>
          </div> <!-- .gallery__item -->
		    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 gallery__item all lobby">
            <a href="assets/img/gallery_img9.jpg" data-lightbox="gallery" data-title="Your caption">
              <img src="assets/img/gallery_img9.jpg" class="img-responsive" alt="...">
            </a>
          </div> <!-- .gallery__item -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 gallery__item all double-room">
            <a href="assets/img/gallery_img10.jpg" data-lightbox="gallery" data-title="Your caption">
              <img src="assets/img/gallery_img10.jpg" class="img-responsive" alt="...">
            </a>
          </div> <!-- .gallery__item -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 gallery__item all double-room">
            <a href="assets/img/gallery_img11.jpg" data-lightbox="gallery" data-title="Your caption">
              <img src="assets/img/gallery_img11.jpg" class="img-responsive" alt="...">
            </a>
          </div> <!-- .gallery__item -->
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 gallery__item all lobby">
            <a href="assets/img/gallery_img12.jpg" data-lightbox="gallery" data-title="Your caption">
              <img src="assets/img/gallery_img12.jpg" class="img-responsive" alt="...">
            </a>
          </div> <!-- .gallery__item -->
        </div> <!-- .row -->
	            
	    </div> <!-- / .container-fluid -->
    </section> <!-- / .section__gallery-alt -->

    <?php 
      require_once "layout/footer.php";
     ?>