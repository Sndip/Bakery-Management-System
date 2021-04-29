
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nice bakery - Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <style id="hide-theme">
    body {
        display: none;
    }
    </style>
    <script type="text/javascript">
    function setTheme(name) {
        var theme = document.getElementById('theme-css');
        var style = 'css/theme-' + name + '.css';
        if (theme) {
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
    if (selectedTheme) {
        setTheme(selectedTheme);
    }
    window.setTimeout(function() {
        var el = document.getElementById('hide-theme');
        el.parentNode.removeChild(el);
    }, 5);
    </script>
    <!-- End Theme Switcher -->
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#"><span>Bakery </span>Admin</a>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="image/profile-pic-1.jpg" width="50" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"><?php 
                            
                            sessionhelper::checklogin();
                            $name = $_SESSION['admin'];
                            echo $name;
                            ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
       
        <ul class="nav menu">
            <li class="<?php if($a[1]==1){ echo "active"; } else { echo "inactive"; } ?>">
                <a href="dashboard.php">
                    <em class="fa fa-dashboard">&nbsp;</em>
                     Dashboard</a>
            </li>
            <li class="<?php if($a[2]==1){ echo "active"; } else { echo "inactive"; } ?>">
                <a href="add_admin.php">
                    <em class="fa fa-user">&nbsp;</em> Admin Insert</a>
            </li>
            <li class="<?php if($a[9]==1){ echo "active"; } else { echo "inactive"; } ?>">
                <a href="add_product.php"><em class="fa fa-cart-plus">&nbsp;</em>  Add Product
                </a>
            </li>
            <li class="<?php if($a[12]==1){ echo "active"; } else { echo "inactive"; } ?>">
                <a href="add_cat.php"><em class="fa fa-puzzle-piece">&nbsp;</em> Add Category
                </a>
            </li>
            <li class="<?php if($a[10]==1){ echo "active"; } else { echo "inactive"; } ?>">
                <a href="product.php"><em class="fa fa-table">&nbsp;</em> Products
                </a>
            </li>
            <li class="<?php if($a[11]==1){ echo "active"; } else { echo "inactive"; } ?>">
                <a href="orders.php"><em class="fa fa-table">&nbsp;</em> User Oders
                </a>
            </li>
            <li class="<?php if($a[3]==1){ echo "active"; } else { echo "inactive"; } ?>">
                <a href="room.php"><em class="fa fa-home">&nbsp;</em> Room
                </a>
            </li>
            <li class="<?php if($a[4]==1){ echo "active"; } else { echo "inactive"; } ?>">
                <a href="room_type.php"><em class="fa fa-university">&nbsp;</em> Room Type
                </a>
            </li>
            <li class="<?php if($a[5]==1){ echo "active"; } else { echo "inactive"; } ?>">
                <a href="bed.php"><em class="fa fa-bed">&nbsp;</em> Beds
                </a>
            </li>
            <li class="<?php if($a[6]==1){ echo "active"; } else { echo "inactive"; } ?>">
                <a href="reservation.php"><em class="fa fa-table">&nbsp;</em> Reservation Table
                </a>
            </li>
            <li class="<?php if($a[7]==1){ echo "active"; } else { echo "inactive"; } ?>">
                <a href="review_tbl.php"><em class="fa fa-table">&nbsp;</em> Reviews
                </a>
            </li>
            <li class="<?php if($a[8]==1){ echo "active"; } else { echo "inactive"; } ?>">
                <a href="room_tbl.php"><em class="fa fa-table">&nbsp;</em> Room Table
                </a>
            </li>
             <li class="<?php if($a[13]==1){ echo "active"; } else { echo "inactive"; } ?>">
                <a href="users.php"><em class="fa fa-users">&nbsp;</em> User Table
                </a>
            </li>
            <li >
                <a href="logout.php"><em class="fa fa-sign-out">&nbsp;</em> Logout
                </a>
            </li>
                </ul>
    </div>
    <!--/.sidebar-->