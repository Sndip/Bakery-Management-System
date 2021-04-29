<html>
  <head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.containerl{
    background:linear-gradient(to right,#61045f,#aa076b);
    height: 60em;
  }
.title{
    background-color: #fff2;
    color: white;
    text-align: center;
    font-size: 30px;
    box-shadow: 0 3px 5px 0 rgba(0,0,0,.2),0 8px 10px 1px rgba(0,0,0,.14),0 3px 14px 2px rgba(0,0,0,.12);
padding: 20px;

margin-bottom: 34px;
  }


.form-heading { color:#fff; font-size:23px;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  padding: 50px 70px 70px 71px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #e91e63 none repeat scroll 0 0;
  border-color: #e91e63;
  color: #fff;
  font-size: 14px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #fff;
  font-size: 14px;
  margin: auto;
}
.botn{
  background: #e91e63;
    color: #fff;
    font-size: 14px;
    padding: 28px;
    line-height: 0;
    border-color: #e91e63;
    width: 13%;
    border-radius: 35px;

}





</style>
  </head>
<body id="LoginForm">

<div class="containerl">
  <div class="title"> User Sign Up <br>
<?php 
  if(isset($_SESSION['admin'])){
  echo $_SESSION['admin'];
}
?>
    </div>
<div class="container">
          <div class="alert alert-success alert-dismissible" style="display:none;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> account Created.
            </div>
          
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Create Account</h2>
   <p>Please enter your username and password</p>
   </div>
    <form id="signup" method="post">

        <div class="form-group">


            <input type="text" class="form-control" name="name" placeholder="Name" required>

        </div>

        <div class="form-group">

            <input type="text" class="form-control" name="username" placeholder=" Username" required>

        </div>
        <div class="form-group">

            <input type="password" class="form-control newPass" name="password" placeholder="Password" required>

        </div>
        <div class="form-group">
            <input type="password" class="form-control confirmPass" name="conformpassword" placeholder="Confirm Password" required>
        </div>
        <div class="form-group">

            <input type="text" class="form-control " name="address" placeholder="Address" required>

        </div>
        <div class="form-group">

            <input type="email" class="form-control" name="email" placeholder="Email" required>

        </div>
        <div class="form-group">

            <input type="text" class="form-control" name="phone_no" placeholder="Phone Number" required>

        </div>
        <div class="text-center">
           <input type="submit" value="Login" name="submit" class=" botn btn btn-lg btn-primary"></fieldset>
         </div>

    </form>

    </div>
</div>
</div>
</div>
</div>


</body>
<script>
$(document).ready(function(){
  $("#create").hide();
  $(".confirmPass").on("keyup", function(){
  newPass = $(".newPass").val();
  confirmPass = $(".confirmPass").val();
    if(newPass != ""){
      if(newPass == confirmPass){
        $("#create").slideDown("1000");
      }
      else{
        $("#create").slideUp("1000");
      }
    }
    else{
        $("#create").slideUp("1000");
    }
  });
  $(".newPass").on("keyup", function(){
  newPass = $(".newPass").val();
  confirmPass = $(".confirmPass").val();
    if(newPass != ""){
      if(confirmPass == newPass){
        $("#create").slideDown("1000");
      }
      else{
        $("#create").slideUp("1000");
      }
    }
    else{
        $("#create").slideUp("1000");
    }
  });
});
</script>
<script>
        $(document).ready(function(e){
        $("#signup").on("submit", function(e) {
            e.preventDefault();
            $.ajax({
                type : "POST",
                url : "signupprocess.php",
                data : new FormData(this),
                contentType : false,       
                cache : false,             
                processData : false,  
                
                success : function(data){
                     if(data == "Success"){
                        $("html, body").animate({scrollTop: 0}, 1000);
                        $(".alert").slideDown("1000");
                        $(".alert").fadeTo(3000, 500).slideUp(500);
                        $("#signup")[0].reset();
                     }
                }
            });
        });
    });
    
   
    </script>

</html>
