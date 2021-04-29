<?php 
  require_once 'admin/class/common.class.php';
  require_once 'admin/class/room.class.php';
  require_once 'admin/class/roomtype.class.php';
  require_once 'admin/class/review.class.php';
  require_once 'admin/class/rate.class.php';
  require_once 'session.php';
  require_once 'layout/header.php';
  $review = new review;
  $rate = new rate;
  $room = new room;
  $room->id=$_GET['id'];
  $err=[];
  if(isset($_POST['submit']))
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
    if (isset($_POST['rating'])&& !empty($_POST['rating']))
    {
      $rate->rate= $_POST['rating'];
    }
    else
    {
      $err[5]="Rate must be given";
    }
    $rate->room = $room->id;
    $count=$average=0;
    $data = $rate->selectratebyid();
     foreach ($data as  $value) 
    {
      $average=$average + $value->rate;
      $count++;
    }
    $rate->average=$average/$count;
    if(count($err)==0)
    {
      $ask =$review->insertreview();
      $askk =$rate->insertrate();
      if($ask==1 && $askk==1)
      {
        echo "<script>alert('Your message is send successfully')</script>";
      } 
      else
      {
        echo "<script>alert('Something is missing in form')</script>";
      }
    }
  }
   $rate->room = $rate->avroom = $room->id;
     $ed=$rate->deleteaverage();
    if($ed == 1)
  {
    $data = $rate->selectratebyid(); 
    foreach ($data as  $number) 
    {
      $rate->avtotal=$number->average;
      $rate->insertaverage();
    }
  } 
  $avr = $rate->selectlastid();
 
    foreach ($avr as  $num) 
      {
        $avg = $num->average;
      }
  ?>

    <!-- section text header -->
    <section class="section__text-header">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
    	    	<div class="welcome__content">
							<h1 class="welcome_content__title">Deluxe double room</h1>
              <div class="divider blog-divider">
                <hr class="line1">
                <hr class="line2">
                <hr class="line1">
              </div> <!-- / .divider -->
    				</div> <!-- .welcome__content -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section text-header -->

    <!-- section room-detail -->
    <section class="section__room-detail">
    	<div class="container">
    	  <div class="row">
          <?php 
              
           $data = $room->selectroombyid(); 
            foreach ($data as  $value) {
            $types=$value->type; ?>  
    	    <div class="col-sm-7 col-md-8">
    	    	<div class="room_detail__body">
              <div id="room-detail__carousel" class="owl-carousel owl-theme room-detail__gallery">
                <div class="room_gallery__item">
                  <img src="admin/image/<?php echo $value->picture; ?>" class="img-responsive" alt="...">
                </div> <!-- .room_gallery__item -->
                <div class="room_gallery__item">
                  <img src="assets/img/gallery_img2.jpg" class="img-responsive" alt="...">
                </div> <!-- .room_gallery__item -->
                <div class="room_gallery__item">
                  <img src="assets/img/gallery_img4.jpg" class="img-responsive" alt="...">
                </div> <!-- .room_gallery__item -->
                <div class="room_gallery__item">
                  <img src="assets/img/gallery_img7.jpg" class="img-responsive" alt="...">
                </div> <!-- .room_gallery__item -->
              </div> <!-- .room-detail__gallery -->
              <div class="room_price__body">
                <h2 class="room__name"><?php echo $value->type; echo $value->bed_no;?> room</h2>
                <p class="room__price"><span>$<?php echo $value->price; ?></span> / night</p>
              </div>
            <?php } ?>
              <p class="subheading">Room description</p>
              <div class="room__desc">
                
                <?php 
              $roomtype = new roomtype;
              $roomtype->roomtype= $types;
           $datas = $roomtype->selectroombytype(); 
            foreach ($datas as  $values) { 
                  echo $values->detail;
                }?>
              </div>
              <div class="room__desc">
                A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.
              </div>
               <div class="col-sm-12">
                    <?php require 'rating.php'; ?>
                  </div>
               <?php 
                  echo "<a class='btn' href='reservation.php?id=".$value->room_id."'>Book this room now</a>";
                  ?>
            </div> <!-- .room-detail__body -->
             <div class="room__reviews">
               <p class="subheading">Leave a review</p>
              <form class="comments__form" data-animate-in="animateUp" action="#" method="POST">
                
                <div class="form-group">
                  <label for="name">Name (Required)</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Full Name" required="">
                </div>

                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your E-mail">
                </div>

                 <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address" class="form-control" id="address" placeholder="Enter Your Address" required="">
                </div>

                <div class="form-group">
                  <label for="message">Comment (Required)</label>
                  <textarea name="message" class="form-control" rows="6" id="message" placeholder="Enter Your Comment" required=""></textarea>
                  <span class="help-block"></span>
                </div>
                <div class="form-group">
                   <label for="rating" class="col-md-4">Rating</label>
                 </div>
                  <div class="col-sm-5"><?php require_once 'rate.php'; ?>
                </div>
              
                <button type="submit" class="btn " name="submit">
                  Submit review
                </button>
              </form>
            </div> <!-- .room__reviews -->
          </div>
          <div class="col-sm-5 col-md-4">
    	    	<div class="room-detail__sidebar">
              <div class="room_features__body">
                <p class="subheading">Room features</p>
                <ul class="room__features">
                  <li class="feature__item">
                    <i class="icon ion-android-people"></i>
                    <div class="feature_item__title">
                      Double king bed
                    </div>
                  </li>
                  <li class="feature__item">
                    <i class="icon ion-coffee"></i>
                    <div class="feature_item__title">
                      Breakfast
                    </div>
                  </li>
                  <li class="feature__item">
                    <i class="icon ion-android-sunny"></i>
                    <div class="feature_item__title">
                      Air conditioning
                    </div>
                  </li>
                  <li class="feature__item">
                    <i class="icon ion-wineglass"></i>
                    <div class="feature_item__title">
                      Mini bar
                    </div>
                  </li>
                  <li class="feature__item">
                    <i class="icon ion-wifi"></i>
                    <div class="feature_item__title">
                      Wi-Fi service
                    </div>
                  </li>
                  <li class="feature__item">
                    <i class="icon ion-model-s"></i>
                    <div class="feature_item__title">
                      Free parking
                    </div>
                  </li>
                </ul> <!-- .room__features -->
              </div> <!-- .room_features__body -->
              <div class="similar__rooms">
                <p class="subheading">Recommended rooms</p>
                
                <ul class="similar-rooms__list">
                  <?php 
                  require "recommend.php";
                  $est = $recommend->average();
                  foreach ($est as $key)
                   { 
                    $avd=$key->average;
                   $room->id=$key->room;                   
                    $data = $room->selectroombyid(); 
                     foreach ($data as  $value) { ?>
                  <li class="list__item">
                     <?php 
                  echo "<a href='room_detail.php?id=".$value->room_id."'>";
                  ?>
                      <figure class="list_item__body">
                        <img src="admin/image/<?php echo $value->picture ?>" class="img-responsive" alt="...">
                        <figcaption>
                          <h3><?php echo $value->type ; ?> room</h3>
                          <div class="item__price">
                            $<?php echo $value->price ; ?> <small>/ night</small>
                          </div>
                          <div>Rating</div>
                          <div><?php require "recom.php"; ?></div>
                        </figcaption>

                      </figure> <!-- / .list_item__body -->  
                    </a>
                  </li>  <!-- .list__item -->
                <?php } } ?>
               
                </ul> <!-- .similar-rooms__list -->
              </div> <!-- .similar__rooms -->
           
              <div class="info__body">
                <p class="info__title">Information</p>
                <ul class="info__content">
                  <li>
                    <p class="info-text">For more information about rooms please contact us.</p>
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
  	    		</div> <!-- .room-detail__sidebar -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section reservation -->
<!-- section footer -->
    <footer class="section__footer">
      <div class="container">
        <div class="footer__body">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-sm-push-4 col-md-6 col-md-push-3">
              <div class="footer__item">
                <h2 class="brand__logo">Sunset Hotel</h2>
                <p class="brand__sublogo">Grand</p>
                <ul class="social__icons">
                  <li class="social-icons__item"><a href="#"><i class="icon ion-social-twitter" aria-hidden="true"></i></a></li>
                  <li class="social-icons__item"><a href="#"><i class="icon ion-social-facebook" aria-hidden="true"></i></a></li>
                  <li class="social-icons__item"><a href="#"><i class="icon ion-social-googleplus" aria-hidden="true"></i></a></li>
                </ul> <!-- .social__icons -->
              </div> <!-- .footer__item -->
            </div>
            <div class="col-xs-12 col-sm-4 col-sm-pull-4 col-md-3 col-md-pull-6">
              <div class="footer__item">
                <ul class="footer__links">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                </ul> <!-- .footer__links -->
              </div> <!-- .footer__item -->
            </div>
  
          </div> <!-- / .row -->
        </div> <!-- / .footer__body -->
        <div class="footer__copyright">
          <div class="row">
            <div class="col-xs-12">
              <hr>
              <p class="footer_copyright__text">&#169; 2017 Sunset Grand Hotel. All rights reserved.</p>
            </div>
          </div> <!-- / .row -->  
        </div> <!-- / .footer__copyright -->
        
      </div> <!-- / .container -->
    </footer> <!-- .section__footer -->

    <!-- 
    ================================================== -->

    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- JS Plugins -->
    <script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>

    <!-- JS Custom -->
    <!--build:js assets/js/theme.min.js -->
    <script src="assets/js/theme.js"></script>
    <!-- endbuild -->

    <!-- JS Plugins -->
    <script src="assets/plugins/moment-develop/moment.js"></script>
    <script src="assets/plugins/lightbox/dist/js/lightbox.min.js"></script>
    <script src="assets/plugins/owl-carousel/dist/owl.carousel.min.js"></script>

    <!-- JS Custom -->
    <!--build:js assets/js/theme.min.js -->
    
    <!-- endbuild -->
  </body>
</html>