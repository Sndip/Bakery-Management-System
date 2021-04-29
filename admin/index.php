<?php 
    require_once 'class/common.class.php';
    require_once 'class/admin.class.php';
    require_once 'class/session.class.php';

    $admin=new admin;
    $err=[];
    if(isset($_POST['submit']))
    {
        if (isset($_POST['username'])&& !empty($_POST['username']))
         {
            $admin->username= $_POST['username'];
        }
        else
        {
            $err[0]="Username Cannot be blank";
        }
        if(isset($_POST['password'])&& !empty($_POST['password']))
        {
            $password= $_POST['password'];
        }
        else
        {
            $err[1]="Password cannot be blank";
        }
        if(count($err)==0)
        {
            $res=$admin->selectadminbyusername();
            if(!count($res))
            {
                $err[2]="Username/Password doesnot match";
            }
            else
            {
             $salt=$res[0]->salt;
             $ipassword=$res[0]->paswd;
             $newpassword=sha1($salt.$admin->password);
             if($newpassword=$ipassword)
              {
                sessionhelper::set('admin',$admin->username);
                sessionhelper::set('dbid',$res[0]->admin_id);
                header('location:dashboard.php');
              } 
             else
             {
                echo "<script>alert('Username doesnot match')</script>";
             }
        }
        }
        }
    
 ?> 
<!DOCTYPE html>
<html>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Subodhayam - Login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        
        <!--Theme Switcher-->
        <style id="hide-theme">
            body{
                display:none;
            }
        </style>
        <script type="text/javascript">
            function setTheme(name){
                var theme = document.getElementById('theme-css');
                var style = 'css/theme-' + name + '.css';
                if(theme){
                    theme.setAttribute('href', style);
                } else {
                    var head = document.getElementsByTagName('head')[0];
                    theme = document.createElement("link");
                    theme.setAttribute('rel', 'stylesheet');
                    theme.setAttribute('href', style);
                    theme.setAttribute('id', 'theme-css');
                    head.appendChild(theme);
                }
                window.localStorage.setItem('lumino-theme', name);
            }
            var selectedTheme = window.localStorage.getItem('lumino-theme');
            if(selectedTheme) {
                setTheme(selectedTheme);
            }
            window.setTimeout(function(){
                    var el = document.getElementById('hide-theme');
                    el.parentNode.removeChild(el);
                }, 5);
        </script>
        <!-- End Theme Switcher -->

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">Log in</div>
                    <div class="panel-body">
                        <form role="form" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                
                                <div class="text-center">
                                    <input type="submit" value="Login" name="submit" class="btn btn-lg btn-primary"></fieldset>
                                </div>
                                <?php foreach ($err as $error) {
                                    echo $error."<br>";
                                } ?>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->    
    
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
