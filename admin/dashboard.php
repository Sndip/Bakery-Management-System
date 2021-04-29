<?php
require_once 'class/common.class.php';
require_once 'class/review.class.php';
    require_once 'class/session.class.php';
    sessionhelper::checklogin();
    require_once 'selector.php';
    $a[1]=1;
    require_once 'layout/header.php';
    $review = new review;
         $data = $review->selectreview(); 
          ?>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default articles">
                        <div class="panel-heading">
                            Review
                            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                        <div class="panel-body articles-container">
                            <?php foreach ($data as  $value) { ?> 
                            <div class="article border-bottom">
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-10 col-md-10">
                                <div class="left clearfix">
                                    <div class="chat-body clearfix">
                                        <div class="header"><strong class="primary-font"> <?php echo $value->name ; ?></strong>
                                            <small class="text-muted"> <?php echo $value->address ; ?></small></div>
                                        <p> <?php echo $value->message ; ?></p>
                                    </div>
                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div><!--End .article-->
                        <?php } ?>
                            
                        </div>
                    </div><!--End .articles-->
            
          <?php 
    require_once 'layout/footer.php';
 ?>