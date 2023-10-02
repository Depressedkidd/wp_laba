<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BRANDY</title>
    <?php wp_head(); ?>
</head>

<body>
                <!-- Preloader -->
                <div id="preloader">
                    <div id="status">&nbsp;</div>
                </div>




    <header id="HOME" style="background-position: 50% -125px; ">
	        <div class="section_overlay">

                <!-- Menu -->
	            <nav class="navbar navbar-default navbar-fixed-top">
                
	              <div class="container">
	                <!-- Brand and toggle get grouped for better mobile display -->
	                <div class="navbar-header">
	                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                  </button>
	                  <a class="navbar-brand" href="<?php echo home_url() ?>">
                        <div><?php bloginfo('name'); ?></div>
                        <img src="images/logo.png" alt="">
                      </a>
	                </div>
                    
	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                  <ul class="nav navbar-nav navbar-right">
                      <?php wp_nav_menu(array(
                        'theme_location' => 'top',
                        'container' => null,
                        'menu_class' => 'nav navbar-nav navbar-right',
                        'menu_id' => 'top-menu',
                    )); ?>
	                </div><!-- /.navbar-collapse -->
	              </div><!-- /.container -->
	            </nav> 

	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12 text-center">
	                        <div class="home_text wow fadeInUp animated">
	                            <h2>it’s abdullah noman</h2>
	                            <p>a user interface and user experience specialist</p>
	                            <img src="images/shape.png" alt="">                        
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12 text-center">
	                        <div class="scroll_down">
                            <a href="#SERVICE"><img src="images/scroll.png" alt=""></a>
	                            <h4>Scroll Down</h4>
	                        </div>
	                    </div>
	                </div>
	            </div>            
	        </div>  
	    </section>         
    </header>