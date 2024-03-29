<?php 
  require_once 'admin/class/common.class.php';
  require_once 'admin/class/review.class.php';
  require_once 'session.php';
  require_once 'layout/header.php';
  $review = new review;
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


    <!-- section header -->
    <section class="section__header">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
    	    	<div class="welcome__content">
							<h2 class="welcome_content__title">Contact us</h2>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Contact</li>
              </ol>

    					<p class="welcome_content__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    				</div> <!-- .welcome__content -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
			<div class="home__bg contacts__bg"></div>
    </section> <!-- / .section header -->

		<!-- section Contacts alt -->
    <section class="section__contacts-alt">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="subheading">If you have any questions don't hesistate to contact us.</h1>        
          </div>
        </div> <!-- / .row -->
      	<div class="row">
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
                  <label for="email" class="sr-only">Email address</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address">
                  <span class="help-block"></span>
                </div>
                
                <!-- Name -->
                <div class="form-group">
                  <label for="name" class="sr-only">Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                  <span class="help-block"></span>
                </div>
                
                <!-- Address -->
                <div class="form-group">
                  <label for="address" class="sr-only">Address</label>
                  <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address">
                  <span class="help-block"></span>
                </div>

                <!-- Message -->
                <div class="form-group">
                  <label for="message" class="sr-only">Message</label>
                  <textarea name="message" class="form-control" id="message" rows="6" placeholder="Enter your message"></textarea>
                  <span class="help-block"></span>
                </div>
                
                <!-- Note -->
                <div class="form-group">
                  <small class="text-muted">
                    * All fields are mandatory.
                  </small>
                </div>
                
                <!-- Submit -->
                <button type="submit" class="btn btn-default" name="submit">
                  Send Message
                </button>

              </form> <!-- .contacts__form -->
              
            </div> <!-- / .section-contacts__form_body -->
	        </div>
	        <div class="col-sm-5">
						<div class="contacts__info">
							<p class="contacts_info__title">Information</p>
							<ul class="contacts_info__content">
                <li>
                  <p class="contact-info-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit eveniet repellat possimus.</p>
                </li>
	              <li>
	                <i class="icon ion-android-pin"></i>
	                <div class="contact-info-content">
	                  <div class="title">Address</div>
	                  <div class="description">10987 1st Avenue, Lorem City, CA</div>
	                </div>
	              </li>
	              <li>
	                <i class="icon ion-android-call"></i>
	                <div class="contact-info-content">
	                  <div class="title">Phone / Fax</div>
	                  <div class="description">+45 789 123 4544 / +45 789 123 4848</div>
	                </div>
	              </li>
	              <li>
	                <i class="icon ion-android-mail"></i>
	                <div class="contact-info-content">
	                  <div class="title">E-mail</div>
	                  <div class="description">admin@sunsethotel.com</div>
	                </div>
	              </li>
	            </ul>
						</div> <!-- / .contacts__info -->
	        </div>
	      </div> <!-- / .row -->
      </div> <!-- / .container -->
      <div class="section_row">
        <div id="map"></div>
      </div> <!-- / .section_row -->
    </section> <!-- / .section__contacts-alt -->

   <?php 
      require_once "layout/footer.php";
     ?>