<?php 
  require_once 'admin/class/common.class.php';
  require_once 'admin/class/product.class.php';
   require_once 'session.php';
  require_once 'layout/header.php';

  ?>
    <!-- section header -->
    <section class="section__header" id="section__header">
    	<div class="container">
    		<div class="row">
  	    	<div class="col-sm-12">
  	    		<div class="welcome__content">
							<h1 class="welcome_content__title">Our Products</h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Product</li>
              </ol>

	  					<p class="welcome_content__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
		  			</div> <!-- .welcome__content -->
    	    </div>
	    	</div> <!-- / .row -->
    	</div> <!-- / .container -->
			<div class="home__bg rooms__bg"></div>
    </section> <!-- / .section__header -->

    <!-- section rooms-1 -->
    <section class="section__rooms-1">
    	<div class="container">
    		<div class="row">
          <?php 
              $product = new product;
            $data = $product->selectproduct(); 
            foreach ($data as  $value) { ?> 
          <div class="rooms__item">
            <div class="col-md-6">
              <div class="rooms__pic">
                <img src="admin/image/<?php echo $value->picture ?>" class="img-responsive" alt="...">
              </div> <!-- / .about__pic -->
            </div>
            <div class="col-md-6">
              <div class="rooms__desc">
                <div class="rooms_desc__header">
                  <h2 class="rooms_desc__title"><?php echo $value->name ; ?></h2>
                  <p class="rooms_desc__price"><span>$<?php echo $value->price ; ?></span> / Piece</p>
                </div> <!-- .rooms_desc__header -->
                <p class="rooms_desc__desc"><?php echo $value->disc ; ?></p>
               
                <?php 
                  echo "<a class='btn btn-rooms' href='order.php?id=".$value->id."'>Order Now</a>";
                  ?>
              </div> <!-- / .rooms__desc -->
            </div>
          </div> <!-- .rooms__item -->
          <?php } ?> 
        </div> <!-- .row -->
        <div class="row">
          <div class="col-sm-12">
        
          </div>
        </div> <!-- / .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__rooms-1 -->
<?php 
      require_once 'layout/footer.php';
     ?>