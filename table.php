<?php 
  require_once 'admin/class/common.class.php';
  require_once 'admin/class/table.class.php';
  require_once 'session.php';
  require_once 'layout/header.php';
  ?>
    <!-- section header -->
    <section class="section__header" id="section__header">
    	<div class="container">
    		<div class="row">
  	    	<div class="col-sm-12">
  	    		<div class="welcome__content">
							<h1 class="welcome_content__title">Table</h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Table Numbers</li>
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
              $table = new table;
            $data = $table->selecttable(); 
            foreach ($data as  $value) { ?> 
          <div class="rooms__item">
            <div class="col-md-6">
              <div class="rooms__pic">
                <img src="admin/image/table.jpg" class="img-responsive" alt="...">
              </div> <!-- / .about__pic -->
            </div>
            <div class="col-md-6">
              <div class="rooms__desc">
                <div class="rooms_desc__header">
                  <h2 class="rooms_desc__title">Table No :<?php echo $value->tbl_no ; ?></h2>
                </div> <!-- .rooms_desc__header -->
                <p class="rooms_desc__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil dolorem illum vitae facere doloremque quas voluptates dolore.</p>
                <div class="col-sm-6">
                  <ul class="rooms_desc__services">
                    <li><i class="icon ion-wineglass"></i><?php echo $value->chair_no ; ?> Seats</li>
                    <li><i class="icon ion-monitor"></i><?php  if($value->smoke==1)
                    {
                      echo "Smoking Area";
                    } 
                    elseif($value->smoke==2)
                    {
                      echo "Smoke Restricted Area";
                    }

                      ?>  </li>
                    
                    <li><i class="icon ion-wifi"></i><?php  if($value->status==0)
                    {
                      echo "Available";
                    } 
                    elseif($value->smoke==1)
                    {
                      echo "Un-Available";
                    }

                      ?> </li>
                  </ul> <!-- .rooms_desc__services -->
                </div>
                <?php 
                if($value->status==0)
                    {
                  echo "<a class='btn btn-rooms' href='tbl_reserve.php?id=".$value->id."'>Book Table</a>";
                }
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