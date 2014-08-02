<?php
include_once 'config.php';
include_once 'admin/include/config.php';
include_once 'class/class_recipe.php';
$recipe = new Recipe();


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<!-- Title here -->
        <title>Organeek</title>
		<!-- Description, Keywords and Author -->
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your,Keywords">
	<meta name="author" content="ResponsiveWebInc">
		
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link href="css/settings.css" rel="stylesheet">		
		<!-- FlexSlider Css -->
	<link rel="stylesheet" href="css/flexslider.css" media="screen" />
		<!-- Portfolio CSS -->
	<link href="css/prettyPhoto.css" rel="stylesheet">
		<!-- Font awesome CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">	
		<!-- Custom Less -->
	<link href="css/less-style.css" rel="stylesheet">	
		<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">
		<!--[if IE]><link rel="stylesheet" href="css/ie-style.css"><![endif]-->
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="#">
    </head>
	
    <body>
	<div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=651121894919208&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>	
			
		<!-- Shopping cart Modal -->
        <div class="modal fade" id="shoppingcart1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">Shopping Cart</h4>
                    </div>
                    <div class="modal-body">
						<!-- Items table -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
				</tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Exception Reins Evocative</a></td>
                                    <td>2</td>
                                    <td>$200</td>
				</tr>
				<tr>
                                    <td><a href="#">Taut Mayoress Alias Appendicitis</a></td>
                                    <td>1</td>
                                    <td>$190</td>
				</tr>
				<tr>
                                    <td><a href="#">Sinter et Molests Perfectionist</a></td>
                                    <td>4</td>
                                    <td>$99</td>
				</tr>
				<tr>
                                    <th></th>
                                    <th>Total</th>
                                    <th>P489</th>
				</tr>
                            </tbody>
			</table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Continue Shopping</button>
			<button type="button" class="btn btn-info">Checkout</button>
                    </div>
		</div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- Modal End -->
		 
        <!-- Top Banner -->
        <?php include 'socialheader.php';?>
        <!-- //Top Banner //-->
        
        <!--Header Menu -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-5">
                                        <!-- Link -->
                        <a href="index.php">
                                                <!-- Logo area -->
                            <div class="logo">
                                <img class="img-responsive" src="img/logo/ologo2.png" alt="Organeek"/>
                                <p>Celebrating Beauty & Wellness</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-9 col-sm-7">
                                        <!-- Navigation -->
                        <?php include 'menu.php'; ?>
                    </div>
                </div>
            </div>
        </div>  
        <!-- //Header Menu//-->
			                        
			<!-- Slider Start 
			#################################
				- THEMEPUNCH BANNER -
			#################################	-->
        <div class="tp-banner-bg">
            <div class="tp-banner-container">
                    <div class="tp-banner" >
                            <ul>	<!-- SLIDE  -->
                                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                                            <!-- MAIN IMAGE -->
                                            <img src="img/slider/slide03.jpg"  alt=""  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">

                                            <!-- LAYERS -->
                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption lfl largeblackbg br-red"
                                                    data-x="20" 
                                                    data-y="100"
                                                    data-speed="1500"
                                                    data-start="1200"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="500"
                                                    data-endeasing="Power4.easeIn"
                                                    style="z-index: 3">Promoting...
                                            </div>
                                            <!-- LAYER NR. 2.0 -->
                                            <div class="tp-caption lfl medium_bg_darkblue br-green"
                                                    data-x="20"
                                                    data-y="200"
                                                    data-speed="1500"
                                                    data-start="1800"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="300"
                                                    data-endeasing="Power4.easeIn"
                                                    data-captionhidden="off">Beauty...
                                            </div>
                                            <!-- LAYER NR. 2.1 -->
                                            <div class="tp-caption lfl medium_bg_darkblue br-lblue"
                                                    data-x="20" 
                                                    data-y="250"
                                                    data-speed="1500"
                                                    data-start="2100"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="500"
                                                    data-endeasing="Power4.easeIn"
                                                    style="z-index: 3">Wellness...
                                            </div>
                                            <!-- LAYER NR. 2.2 -->
                                            <div class="tp-caption lfl medium_bg_darkblue br-purple"
                                                    data-x="20" 
                                                    data-y="300"
                                                    data-speed="1500"
                                                    data-start="2400"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="500"
                                                    data-endeasing="Power4.easeIn"
                                                    style="z-index: 3">Natural Home &
                                            </div>
                                            <!-- LAYER NR. 2.3 -->
                                            <div class="tp-caption lfl medium_bg_darkblue br-orange"
                                                    data-x="20" 
                                                    data-y="350"
                                                    data-speed="1500"
                                                    data-start="2700"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="500"
                                                    data-endeasing="Power4.easeIn"
                                                    style="z-index: 3">Inspiration...
                                            </div>
                                            <!-- LAYER NR. 3.0 -->
                                            <div class="tp-caption customin customout"
                                                    data-x="right" data-hoffset="-50"
                                                    data-y="100"
                                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-speed="400"
                                                    data-start="3600"
                                                    data-easing="Power3.easeInOut"
                                                    data-endspeed="300"
                                                    style="z-index: 5"><img class="slide-img img-responsive" src="img/slider/slide.jpg" alt="" />
                                            </div>
                                            <!-- LAYER NR. 3.1 -->
                                            <div class="tp-caption customin customout"
                                                    data-x="right" data-hoffset="-120"
                                                    data-y="130"
                                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-speed="400"
                                                    data-start="3900"
                                                    data-easing="Power3.easeInOut"
                                                    data-endspeed="300"
                                                    style="z-index: 6"><img class="slide-img img-responsive" src="img/slider/slide6.jpg" alt="" />
                                            </div>
                                            <!-- LAYER NR. 3.2 -->
                                            <div class="tp-caption customin customout"
                                                    data-x="right" data-hoffset="-10"
                                                    data-y="160"
                                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-speed="400"
                                                    data-start="4200"
                                                    data-easing="Power3.easeInOut"
                                                    data-endspeed="300"
                                                    style="z-index: 7"><img class="slide-img img-responsive" src="img/slider/slide1.jpg" alt="" />
                                            </div>
                                            <!-- LAYER NR. 3.3 -->
                                            <div class="tp-caption customin customout"
                                                    data-x="right" data-hoffset="-80"
                                                    data-y="190"
                                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-speed="400"
                                                    data-start="4500"
                                                    data-easing="Power3.easeInOut"
                                                    data-endspeed="300"
                                                    style="z-index: 8"><img class="slide-img img-responsive" src="img/slider/slide5.jpg" alt="" />
                                            </div>
                                    </li>
                                    <li data-transition="zoomin" data-slotamount="6" data-masterspeed="400" >
                                            <!-- MAIN IMAGE -->
                                            <img src="img/slider/transparent.png" style="background-color:#fff" alt=""  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">

                                            <!-- LAYERS -->
                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption sfl modern_medium_light"
                                                    data-x="20" 
                                                    data-y="90"
                                                    data-speed="800"
                                                    data-start="1000"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="500"
                                                    data-endeasing="Power4.easeIn"
                                                    style="z-index: 3"> Celebrating Beauty & Wellness
                                            </div>
                                            <!-- LAYER NR. 1.1 -->
                                            <div class="tp-caption large_bold_grey heading customin customout"
                                                    data-x="10"
                                                    data-y="125"
                                                    data-splitin="chars"
                                                    data-splitout="chars"
                                                    data-elementdelay="0.05"
                                                    data-start="1500"
                                                    data-speed="900"
                                                    data-easing="Back.easeOut"
                                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-endspeed="500"
                                                    data-endeasing="Power3.easeInOut"
                                                    data-captionhidden="on"
                                                    style="z-index:5">Organeek
                                            </div>
                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-caption customin customout"
                                                    data-x="right" 
                                                    data-y="100"
                                                    data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-speed="800"
                                                    data-start="2000"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="500"
                                                    data-endeasing="Power4.easeIn"
                                                    style="z-index: 3"><img class="img-responsive" src="img/slider/tr3.png" alt="" />
                                            </div>
                                            <!-- LAYER NR. 2.1 -->
                                            <div class="tp-caption customin customout"
                                                    data-x="right" 
                                                    data-y="100"
                                                    data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-speed="800"
                                                    data-start="2300"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="500"
                                                    data-endeasing="Power4.easeIn"
                                                    style="z-index: 3"><img class="img-responsive" src="img/slider/tr2.png" alt="" />
                                            </div>
                                            <!-- LAYER NR. 2.2 -->
                                            <div class="tp-caption customin customout"
                                                    data-x="right" 
                                                    data-y="100"
                                                    data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-speed="800"
                                                    data-start="2600"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="500"
                                                    data-endeasing="Power4.easeIn"
                                                    style="z-index: 3"><img class="img-responsive" src="img/slider/tr1.png" alt="" />
                                            </div>
                                            <!-- LAYER NR. 2.3 -->
                                            <!--<div class="tp-caption sft"
                                                    data-x="right" data-hoffset="-400"
                                                    data-y="80"
                                                    data-speed="1000"
                                                    data-start="3000"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="500"
                                                    data-endeasing="Power4.easeIn"
                                                    style="z-index: 10"><span class="price-tag br-white">10%<br />Off</span>
                                            </div>
                                            <!-- LAYER NR. 3 -->
                                            <div class="tp-caption finewide_verysmall_white_mw paragraph customin customout tp-resizeme"
                                                    data-x="20"
                                                    data-y="210" 
                                                    data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
                                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-speed="1000"
                                                    data-start="3600"
                                                    data-easing="Power3.easeInOut"
                                                    data-splitin="lines"
                                                    data-splitout="lines"
                                                    data-elementdelay="0.2"
                                                    data-endelementdelay="0.08"
                                                    data-endspeed="300"
                                                    style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;"> Pamper yourself with Organeek's sinfully luscious skin care recipes and products sans harmful chemical! Receive all the latest updates in Organeek by 2-easy steps!
                                            </div>
                                            <!-- LAYER NR. 4 -->
                                            <div class="tp-caption sfb"
                                                    data-x="20" 
                                                    data-y="335"
                                                    data-speed="800"
                                                    data-start="4500"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="500"
                                                    data-endeasing="Power4.easeIn"
                                                    style="z-index: 11"><a class="btn btn-danger" href="#">Subscribe</a>
                                            </div>
                                    </li>
                                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="600" >
                                            <!-- MAIN IMAGE -->
                                            <img src="img/slider/transparent.png" style="background-color:transparent;" alt=""  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
                                            <!-- LAYERS NR. 1 -->
                                            <div class="tp-caption lfl"
                                                    data-x="left"
                                                    data-y="100"
                                                    data-speed="800"
                                                    data-start="1200"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="300"
                                                    data-endeasing="Linear.easeNone"
                                                    data-captionhidden="off"><img class="img-responsive" src="img/slider/kefir.png" alt="" />
                                            </div>
                                            <!-- LAYERS NR. 2 -->
                                            <div class="tp-caption lfr large_bold_grey heading white"
                                                    data-x="right" data-hoffset="-10"
                                                    data-y="120"
                                                    data-speed="800"
                                                    data-start="2000"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="300"
                                                    data-endeasing="Linear.easeNone"
                                                    data-captionhidden="off">Organeek Kefir
                                            </div>
                                            <!-- LAYER NR. 3 -->
                                            <div class="tp-caption whitedivider3px customin customout tp-resizeme"
                                                    data-x="right" data-hoffset="-20"
                                                    data-y="210" data-voffset="0"
                                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-speed="700"
                                                    data-start="2300"
                                                    data-easing="Power3.easeInOut"
                                                    data-splitin="none"
                                                    data-splitout="none"
                                                    data-elementdelay="0.1"
                                                    data-endelementdelay="0.1"
                                                    data-endspeed="500"
                                                    style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                                            </div>
                                            <!-- LAYER NR. 4 -->
                                            <div class="tp-caption finewide_medium_white randomrotate customout tp-resizeme"
                                                    data-x="right" data-hoffset="-10"
                                                    data-y="245" data-voffset="0"
                                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-speed="1000"
                                                    data-start="2700"
                                                    data-easing="Power3.easeInOut"
                                                    data-splitin="chars"
                                                    data-splitout="chars"
                                                    data-elementdelay="0.08"
                                                    data-endelementdelay="0.08"
                                                    data-endspeed="500"
                                                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">Water & Milk
                                            </div>
                                            <!-- LAYER NR. 5 -->
                                            <div class="tp-caption finewide_verysmall_white_mw white customin customout tp-resizeme text-right paragraph"
                                                    data-x="right" data-hoffset="-10"
                                                    data-y="300" 
                                                    data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
                                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                    data-speed="1000"
                                                    data-start="3500"
                                                    data-easing="Power3.easeInOut"
                                                    data-splitin="lines"
                                                    data-splitout="lines"
                                                    data-elementdelay="0.2"
                                                    data-endelementdelay="0.08"
                                                    data-endspeed="300"
                                                    style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Drinking soda has never been morea healthy!<br/> Enjoy refreshing drink of Water Kefir this summer! <br/> Share Kefir with your family with these simple steps...
                                            </div>
                                    </li>
                                    <li data-transition="cube" data-slotamount="7" data-masterspeed="600" >
                                            <!-- MAIN IMAGE -->
                                            <img src="img/slider/mainslide1.png"  alt=""  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
                                            <!-- LAYERS NR. 1 -->
                                            <div class="tp-caption lfl"
                                                    data-x="110"
                                                    data-y="130"
                                                    data-speed="800"
                                                    data-start="1500"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="300"
                                                    data-endeasing="Power4.easeIn"
                                                    data-captionhidden="off"><img src="img/slider/s35.png" class="img-responsive" alt="" />
                                            </div>
                                            <!-- LAYERS NR. 2 -->
                                            <div class="tp-caption lfl"
                                                    data-x="80"
                                                    data-y="265"
                                                    data-speed="800"
                                                    data-start="2200"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="300"
                                                    data-endeasing="Power4.easeIn"
                                                    data-captionhidden="off"><img src="img/slider/s33.png" class="img-responsive" alt="" />
                                            </div>
                                            <!-- LAYERS NR. 3 -->
                                            <div class="tp-caption lfl"
                                                    data-x="450"
                                                    data-y="312"
                                                    data-speed="800"
                                                    data-start="2700"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="300"
                                                    data-endeasing="Power4.easeIn"
                                                    data-captionhidden="off"><img src="img/slider/s34.png" class="img-responsive" alt="" />
                                            </div>
                                            <!-- LAYERS NR. 4 -->
                                            <div class="tp-caption sfr  thinheadline_dark white"
                                                    data-x="right" data-hoffset="-10" 
                                                    data-y="90"
                                                    data-speed="800"
                                                    data-start="3200"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="500"
                                                    data-endeasing="Power4.easeIn"
                                                    style="z-index: 3">Online
                                            </div>
                                            <!-- LAYERS NR. 4.1 -->
                                            <div class="tp-caption lfr largepinkbg br-green"
                                                    data-x="right" data-hoffset="-10"
                                                    data-y="135"
                                                    data-speed="800"
                                                    data-start="3500"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="300"
                                                    data-endeasing="Linear.easeNone"
                                                    data-captionhidden="off">Daily Regimen
                                            </div>
                                            <!-- LAYERS NR. 5 -->
                                            <div class="tp-caption skewfromright medium_text text-right paragraph"
                                                    data-x="right" data-hoffset="-10"
                                                    data-y="225"
                                                    data-speed="800"
                                                    data-start="3800"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="400"
                                                    data-endeasing="Power4.easeOut"
                                                    data-captionhidden="off">Your daily guide for a more beautiful and healthier you!<br /> <p>Coming soon to  tablets and mobiles!</p>                                                          </div>
                                            <!-- LAYERS NR. 6 // -->
                                            <div class="tp-caption lfr modern_big_redbg br-red"
                                                    data-x="right"
                                                    data-hoffset="-10"
                                                    data-y="315"
                                                    data-speed="1500"
                                                    data-start="4100"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="300"
                                                    data-endeasing="Linear.easeNone"
                                                    data-captionhidden="off">Desktop or Laptop
                                            </div>	
                                            <!-- LAYERS NR. 6.1 // -->
                                            <div class="tp-caption lfr modern_big_redbg br-yellow"
                                                    data-x="right"
                                                    data-hoffset="-10"
                                                    data-y="375"
                                                    data-speed="1500"
                                                    data-start="4400"
                                                    data-easing="Power4.easeOut"
                                                    data-endspeed="300"
                                                    data-endeasing="Linear.easeNone"
                                                    data-captionhidden="off">Tablet or Phone
                                            </div>
                                    </li>
                                 </ul>
                            <!-- Banner Timer -->
                            <div class="tp-bannertimer"></div>
                        </div>
                    </div>
                </div>
                <!-- // Slider//-->
                    
                <!-- Main Category -->
                <div class="services_center">
                    <div class="col-md-12 col-sm-12" >    
                        <div class="default-heading padd">
                                <!-- Crown image -->
                                <img class="img-responsive" src="<?php echo $base_url ?>img/crown.png" alt="Organeek" />
                                <!-- Heading -->
                                <h2>Organeek</h2>
                                <!-- Paragraph -->
                                <p></p>
                        </div>
                        <div class="container">
                            <div class="row">   
                                <div class="col-md-4 col-sm-4">
                                    <div class="services_item">
                                        <div class="services_item_regular">
                                            <!-- Check the link services -->
                                                <h3 class="services_item_title"><a href="#">Beauty</a></h3>
                                            <div class="services_backgr">
                                                <p class="services_item_pic"><a href="#"><img src="<?php echo $base_url ?>img/beauty1.png"></a></p>
                                                <div class="services_pic_line"> </div>
                                                <p class="services_item_desc">The best solutions to maintain, achieve and celebrate beauty without subjecting yourself with painful and hazardous chemicals </p>
                                            </div>
                                        </div>
                                        <div class="services_item_hover">
                                            <h3 class="services_item_title-hover"><a href="<?php echo $base_url.'recipe/all/' ?>">Recipe</a></h3>
                                            <h3 class="services_item_title-hover"><a href="<?php echo $base_url ?>blog/beauty/">Blog</a></h3>
                                            <h3 class="services_item_title-hover"><a href="<?php echo $base_url ?>regimen/beauty">Regimen</a></h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4  col-sm-4">
                                        <div class="services_item ">
                                            <div class="services_item_regular">
                                                <!-- Check the link services -->
                                                                <h3 class="services_item_title"><a href="#">Wellness</a></h3>
                                                <div class="services_backgr">
                                                    <p class="services_item_pic"><a href="#"><img src="img/wellness.png"></a></p>
                                                    <div class="services_pic_line"> </div>
                                                    <p class="services_item_desc">Beauty might be skin-deep to some, but wellness and health are definitely not! Immerse yourself with the knowledge that healthy living is not only fun but also enlightening!</p>
                                                </div>
                                            </div>
                                            <div class="services_item_hover">
                                                <h3 class="services_item_title-hover"><a href="<?php echo $base_url.'recipe/wellness/' ?>">Recipe</a></h3>
                                                <h3 class="services_item_title-hover"><a href="<?php echo $base_url ?>blog/wellness/">Blog</a></h3>
                                                <h3 class="services_item_title-hover"><a href="<?php echo $base_url ?>regimen/wellness">Regimen</a></h3>
                                            </div>
                                        </div>
                                </div>

                                <div class="col-md-4  col-sm-4">
                                    <div class="services_item">
                                        <div class="services_item_regular">
                                            <!-- Check the link services -->
                                                            <h3 class="services_item_title"><a href="#">Natural Home</a></h3>
                                            <div class="services_backgr">
                                                <p class="services_item_pic"><a href="#"><img src="img/naturalhome.jpg"></a></p>
                                                <div class="services_pic_line"> </div>
                                                <p class="services_item_desc">Easy and pain-free solutions for you and your family. </p>
                                            </div>
                                        </div>
                                        <div class="services_item_hover">
                                            <h3 class="services_item_title-hover"><a href="<?php echo $base_url.'recipe/household_products/' ?>">Recipe</a></h3>
                                            <h3 class="services_item_title-hover"><a href="<?php echo $base_url ?>blog/naturalhome/">Blog</a></h3>
                                            <h3 class="services_item_title-hover"><a href="<?php echo $base_url ?>regimen/naturalhome">Regimen</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Main Category// -->

                    <!-- Sub Category -->
                    <div class="col-sm-12 col-md-12">
                        <div class="recent-recipe">
                            <div class="container ">
                                <!-- Default Heading -->
                                    <div class="default-heading padd1">
                                            <!-- Crown image -->
                                            <img class="img-responsive" src="img/crown.png" alt="Organeek" />
                                            <!-- Heading -->
                                            <h2>Recipe</h2>
                                            <!-- Paragraph -->
                                            <p>Only the most natural, environment-friendly & cost-effective recipe to a healthier lifestyle! Making your own skin care products has never been this easy and cheap!</p>
                                    </div>
                                    <!-- Carousel-->
                                    <div class="well padd4">
                                        <div id="myCarousel" class="carousel slide">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <div class="row">
                                                        <!-- Body & Skin Care-->
                                                            <div class="col-md-4">	
                                                                <div class="services_item1 first fl">
                                                                    <div class="services_item_regular1">
                                                                            <h3 class="services_item_title1"><a href="#">Body & Skin Care</a></h3>
                                                                        <div class="services_backgr1">
                                                                            <p class="services_item_pic1 img-responsive"><a class="img-responsive" href="#"><img src="img/categories/body.jpg" alt=" Body & Skin Care"></a></p>
                                                                            <div class="services_pic_line1"> </div>
                                                                            <p class="services_item_desc1">Because your skin is your body's first line of defense against harmful contaminants, it deserves your best treatment!</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="services_item_hover1">
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/body_skin">Beautifying Oil</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/body_skin">Body Wash</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/body_skin">Body Scrub</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/body_skin">Exfoliator</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/body_skin">Moisturizer/Cream</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/body_skin">Soap</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/body_skin">Sunscreen</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/body_skin">Whitening & Lightening</a></h3>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Face Care -->
                                                            <div class="col-md-4">	
                                                                <div class="services_item1 first fl">
                                                                    <div class="services_item_regular1">
                                                                            <h3 class="services_item_title1"><a href="#">Face Care</a></h3>
                                                                        <div class="services_backgr1">
                                                                            <p class="services_item_pic1 img-responsive"><a href="#"><img src="img/categories/face.jpg" alt="Face Care"></a></p>
                                                                            <div class="services_pic_line1"> </div>
                                                                            <p class="services_item_desc1">Everything your face needs to stay fresh, glowing and healthy! </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="services_item_hover1">
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/face_care/">Beautifying Oil</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/face_care/">Antiaging Serum</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/face_care/">Cleanser</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/face_care/">Exfoliator</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/face_care/">Facial Scrub</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/face_care/">Mask</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/face_care/">Moisturizer/Cream</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/face_care/">Toner & Mist</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/face_care/">Whitening & Lightening</a></h3>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Hair -->
                                                            <div class="col-md-4">	
                                                                <div class="services_item1 first fl">
                                                                    <div class="services_item_regular1">
                                                                            <h3 class="services_item_title1"><a href="#">Hair</a></h3>
                                                                        <div class="services_backgr1">
                                                                            <p class="services_item_pic1  img-responsive"><a href="#"><img src="img/categories/hair.jpg" alt="Hair"></a></p>
                                                                            <div class="services_pic_line1"> </div>
                                                                            <p class="services_item_desc1">Pamper your glorious locks with these amazing treats!</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="services_item_hover1">
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/hair/">Clarifying Shampoo</a> </h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/hair/">Conditioner</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/hair/">Hair Mask</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/hair/">Hair Spray</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/hair/">Hair Voluminizer</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/hair/">Lightening Shampoo</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/hair/">Shampoo</a></h3>
                                                                        <h3 class="services_item_title-hover1"><a href="recipe/hair/">No-poo Recipe</a></h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div> <!--//row//-->
                                                </div><!--//active//-->
                                                
                                                <!--item-->
                                                <div class="item">
                                                    <div class="row">
                                                        <!-- Household -->
                                                        <div class="col-md-4">	
                                                            <div class="services_item1 first fl">
                                                                <div class="services_item_regular1">
                                                                        <h3 class="services_item_title1"><a href="recipe/household">Household Products</a></h3>
                                                                    <div class="services_backgr1">
                                                                        <p class="services_item_pic1  img-responsive"><a href="#"><img src="img/categories/household.jpg" alt=""></a></p>
                                                                        <div class="services_pic_line1"> </div>
                                                                        <p class="services_item_desc1">Economical and environmental-friendly household solutions for the whole family! </p>
                                                                    </div>
                                                                </div>
                                                                <div class="services_item_hover1">
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/household_products/">Air Freshener</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/household_products/">Cleaner</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/household_products/">Deodorizer</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/household_products/">Dishwasher Soap</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/household_products/">Disinfectant</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/household_products/">Fabric Softener</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/household_products/">Laundry Detergent</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/household_products/">Stain Remover</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/household_products/">Others</a></h3>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Personal Hygiene -->
                                                        <div class="col-md-4">	
                                                            <div class="services_item1 first fl">
                                                                <div class="services_item_regular1">
                                                                        <h3 class="services_item_title1"><a href="recipe/personal_hygiene">Personal Hygiene Solutions</a></h3>
                                                                    <div class="services_backgr1">
                                                                        <p class="services_item_pic1  img-responsive"><a href="beauty.php"><img src="img/categories/personal.jpg" alt="Personal Hygiene Solutions"></a></p>
                                                                        <div class="services_pic_line1"> </div>
                                                                        <p class="services_item_desc1">Smart solutions to address all your personal hygiene fiasco</p> 
                                                                    </div>
                                                                </div>
                                                                <div class="services_item_hover1">
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/personal_hygiene/">Breath Freshener</a> </h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/personal_hygiene/">Deodorant</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/personal_hygiene/">Feminine Hygiene Solution</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/personal_hygiene/">Hair Removal</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/personal_hygiene/">Mouthwash</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/personal_hygiene/">Toothpaste/Dentifrice</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/personal_hygiene/">Others</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Wellness -->
                                                        <div class="col-md-4">	
                                                            <div class="services_item1 first fl">
                                                                <div class="services_item_regular1">
                                                                        <h3 class="services_item_title1"><a href="recipe/wellness">Wellness</a></h3>
                                                                    <div class="services_backgr1">
                                                                        <p class="services_item_pic1  img-responsive"><a href="#"><img src="img/categories/wellness.jpg" alt="Wellness"></a></p>
                                                                        <div class="services_pic_line1"> </div>
                                                                        <p class="services_item_desc1">Who says that living a healthy lifestyle needs to be cumbersome? Well, here in Organeek, it's definitely not! </p>
                                                                    </div>
                                                                </div>
                                                                <div class="services_item_hover1">
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/wellness/">Fermented Product</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/wellness/">Healthy Beverage</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/wellness/">Healthy Dish</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/wellness/">Kefir</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/wellness/">Tincture</a></h3>
                                                                    <h3 class="services_item_title-hover1"><a href="recipe/wellness/">Others</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--//row//-->
                                                </div>
                                            </div><!--/carousel-inner--> 
                                            
                                            <div class="flexslider-arrow">
                                                <a class="left carousel-control tp-leftarrow tparrows default " href="#myCarousel" data-slide="prev">‹</a>
                                                <a class="right carousel-control tp-rightarrow tparrows default" href="#myCarousel" data-slide="next">›</a>
                                            </div>
                                        <!--/myCarousel-->
                                        </div>
                                    <!--/well-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Sub Category // -->
                            
                    <!--Recent Recipe-->
                    <div class="recent-recipe padd5">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="row"> 
                                <!--Recent Recipe Header-->
                                <div class="col-md-9 col-xs-12">
                                    <div class="default-heading padd5">
                                        <!-- Crown image -->
                                        <img class="img-responsive" src="img/crown.png" alt="Organeek" />
                                        <!-- Heading -->
                                        <h2>Recent Recipe</h2>
                                    </div>
                                        <div class="well">
                                            <div id="recentRecipe" class="carousel slide">
                                                <!-- Carousel items -->
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <div class="row">
                                                            <?php 
                                                            $a=$recipe->recipeRecent();
                                                            for($i=0;$i<3;$i++){
                                                                //echo $a[$i]['title'];
                                                            
                                                            ?>

                                                            <div class="col-md-4"> 
                                                                <ul class=box>
                                                                    <li>
                                                                        <img class="img-responsive recipe-picture" src="admin/<?php echo $a[$i]['photo']; ?>" alt="Organeek" />
                                                                        <!-- Title-->
                                                                        <h3 class="h3-body-title color-text">
                                                                            <a href="recipe/all/recipe-single.php?id=<?php echo $a[$i]['id'] ?>"> <?php echo $a[$i]['title']; ?></a>
                                                                        </h3>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <?php } ?>        
                                                            
                                                        </div> <!--//row//-->
                                                    </div> <!--//active//-->
                                                <!--item-->
                                                <div class="item">
                                                    <div class="row">
                                                        <?php 
                                                            $a=$recipe->recipeRecent();
                                                            for($i=3;$i<6;$i++){
                                                                //echo $a[$i]['title'];
                                                            
                                                            ?>
                                                        <div class="col-md-4"> 
                                                                <ul class=box>
                                                                    <li>
                                                                        <img class="img-responsive recipe-picture" src="admin/<?php echo $a[$i]['photo']; ?>" alt="Organeek" />
                                                                        <!-- Title-->
                                                                        <h3 class="h3-body-title color-text">
                                                                            <a href="recipe/all/recipe-single.php?id=<?php echo $a[$i]['id'] ?>"> <?php echo $a[$i]['title']; ?></a>
                                                                        </h3>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <?php } ?>
                                                        
                                                         
                                                    </div> <!--//row//-->
                                                </div> <!--//item//-->
                                                <div class="item">
                                                    <div class="row">
                                                        <?php 
                                                            $a=$recipe->recipeRecent();
                                                            for($i=6;$i<9;$i++){
                                                                //echo $a[$i]['title'];
                                                            
                                                            ?>
                                                        <div class="col-md-4"> 
                                                                <ul class=box>
                                                                    <li>
                                                                        <img class="img-responsive recipe-picture" src="admin/<?php echo $a[$i]['photo']; ?>" alt="Organeek" />
                                                                        <!-- Title-->
                                                                        <h3 class="h3-body-title color-text">
                                                                            <a href="recipe/all/recipe-single.php?id=<?php echo $a[$i]['id'] ?>"> <?php echo $a[$i]['title']; ?></a>
                                                                        </h3>
                                                                    </li>
                                                                </ul>
                                                            </div>  
                                                            <?php } ?>
                                                        
                                                        
                                                    </div> <!--//row//-->
                                                </div> <!--//item//-->
                                            </div> <!--//Carousel Inner//-->
                                            <!--Controller-->
                                                <div class="flexslider-arrow">
                                                     <a class="left carousel-control tp-leftarrow tparrows default" href="#recentRecipe" data-slide="prev"></a>
                                                     <a class="right carousel-control tp-rightarrow tparrows default" href="#recentRecipe" data-slide="next"></a>
                                                </div>
                                            </div>
                                        </div> <!--//well//-->
                                    </div>
                                                      
                                                <!--Ingredient -->
                                                <div class="padd5"> </div>
                                                <div class="col-md-3 col-sm-12">
                                                       <!-- Ingredient List -->   
                                                       <div class="services_item1 first fl">
                                                           <div class="services_item_regular1">
                                                                   <h3 class="services_item_title1"><a href="recipe/body-skin">Ingredients </a></h3>
                                                               <div class="services_backgr1">
                                                                   <p class="services_item_pic1 img-responsive"><a class="img-responsive" href="ingredients.php"><img src="img/categories/spices.jpg" alt=" Body & Skin Care"></a></p>
                                                                   <div class="services_pic_line1"> </div>
                                                                   <p class="services_item_desc1">Know exactly what you're putting in your recipe and what you're getting from it. You might just surprise yourself in formulating the best recipe that perfectly suit your needs.</p>
                                                               </div>
                                                           </div>
                                                           <div class="services_item_hover1">
                                                               <h3 class="services_item_title-hover1"><a href="ingredients.php">Active Ingredients</a></h3>
                                                               <h3 class="services_item_title-hover1"><a href="ingredients.php">Clay</a></h3>
                                                               <h3 class="services_item_title-hover1"><a href="ingredients.php">Condiments</a></h3>
                                                               <h3 class="services_item_title-hover1"><a href="ingredients.php">Dairy Products</a></h3>
                                                               <h3 class="services_item_title-hover1"><a href="ingredients.php">Fruits</a></h3>
                                                               <h3 class="services_item_title-hover1"><a href="ingredients.php">Honey Products</a></h3>
                                                               <h3 class="services_item_title-hover1"><a href="ingredients.php">Oil & Extract</a></h3>
                                                               <h3 class="services_item_title-hover1"><a href="ingredients.php">Seeds & Grains</a></h3>
                                                               <h3 class="services_item_title-hover1"><a href="ingredients.php">Veggies</a></h3>

                                                           </div>
                                                       </div>
                                                   </div>
                                                   <!-- //Ingredient List// --> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <!-- Recent Blog -->
                                        <div class="col-sm-12 col-md-12">
                                            <div class="container">
                                                <!-- Default Heading -->
                                                <div class="default-heading padd">
                                                        <!-- Crown image -->
                                                        <img class="img-responsive" src="img/crown.png" alt="Organeek" />
                                                        <!-- Heading -->
                                                        <h2>Recent Blog</h2>
                                                </div>
                                                <!--
                                                <div class="related-recipe">
                                                    <br>
                                                    <div class="related-recipe-label">
                                                        <div class="recipe-label"> Recent Recipe </div>
                                                    </div>
                                                </div>
                                                -->
                                                    <div class="well padd1">
                                                        <div id="recentBlog" class="carousel slide">
                                                            <!-- Carousel items -->
                                                            <div class="carousel-inner">
                                                                <div class="item active">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="recipe-box-index">
                                                                                <!--Recipe Photo-->
                                                                                <div class="feature">
                                                                                    <div class="img-overlay1 img-responsive">
                                                                                        <img src="img/wellness.png" alt="">
                                                                                    </div>

                                                                                    <div class="feature-content">
                                                                                        <h3 class="h3-body-title color-text">
                                                                                            <a href="#"> ASTOUNDING BENEFITS AND PROPERTIES OF HONEY</a>
                                                                                        </h3>
                                                                                        <div class="recipe-overflow">
                                                                                            <p>
                                                                                                The natural by-product of flower nectar made by bees has been part of our history dated as far as 8,000 years ago with its astounding value in traditional medicine.
                                                                                                Natural or raw honey that was not subjected to extreme heat or any chemical filtering has more than 200 substances that have myriad benefits to one’s  overall physiological and overall health.
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="read-more">
                                                                                            <a href="#">Read more...</a>
                                                                                        </div>
                                                                                        <br>
                                                                                        <!--Recipe Summary-->    
                                                                                        <div class="feature-details-box">
                                                                                            <div class="feature-details"
                                                                                                <i class="fa fa-user"></i></a>  
                                                                                                 <a href="#">Haze</a>  
                                                                                                <span class="details-seperator"></span>

                                                                                                <a href="#"><i class="fa fa-comment"></i><span> &nbsp;4</span></a>
                                                                                                <span class="details-seperator"></span>
                                                                                                    <div class="fa fa-clock-o">
                                                                                                        July 28
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>      
                                                                                     </div>
                                                                               </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-md-3">
                                                                            <div class="recipe-box-index">
                                                                                <!--Recipe Photo-->
                                                                                <div class="feature">
                                                                                    <div class="img-overlay1 img-responsive">
                                                                                        <img src="img/toothpaste.jpg" alt="">
                                                                                    </div>

                                                                                    <div class="feature-content">
                                                                                        <h3 class="h3-body-title color-text">
                                                                                            <a href="#"> ASTOUNDING BENEFITS AND PROPERTIES OF HONEY</a>
                                                                                        </h3>
                                                                                        <div class="recipe-overflow">
                                                                                            <p>
                                                                                                The natural by-product of flower nectar made by bees has been part of our history dated as far as 8,000 years ago with its astounding value in traditional medicine.
                                                                                                Natural or raw honey that was not subjected to extreme heat or any chemical filtering has more than 200 substances that have myriad benefits to one’s  overall physiological and overall health.
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="read-more">
                                                                                            <a href="#">Read more...</a>
                                                                                        </div>
                                                                                        <br>
                                                                                        <!--Recipe Summary-->    
                                                                                        <div class="feature-details-box">
                                                                                            <div class="feature-details"
                                                                                                <i class="fa fa-user"></i></a>  
                                                                                                 <a href="#">Haze</a>  
                                                                                                <span class="details-seperator"></span>

                                                                                                <a href="#"><i class="fa fa-comment"></i><span> &nbsp;4</span></a>
                                                                                                <span class="details-seperator"></span>
                                                                                                    <div class="fa fa-clock-o">
                                                                                                        July 28
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>      
                                                                                     </div>
                                                                               </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-3">
                                                                             <div class="recipe-box-index">
                                                                                <!--Recipe Photo-->
                                                                                <div class="feature">
                                                                                    <div class="img-overlay1 img-responsive">
                                                                                        <img src="img/toothpaste.jpg" alt="">
                                                                                    </div>

                                                                                    <div class="feature-content">
                                                                                        <h3 class="h3-body-title color-text">
                                                                                            <a href="#"> ASTOUNDING BENEFITS AND PROPERTIES OF HONEY</a>
                                                                                        </h3>
                                                                                        <div class="recipe-overflow">
                                                                                            <p>
                                                                                                The natural by-product of flower nectar made by bees has been part of our history dated as far as 8,000 years ago with its astounding value in traditional medicine.
                                                                                                Natural or raw honey that was not subjected to extreme heat or any chemical filtering has more than 200 substances that have myriad benefits to one’s  overall physiological and overall health.
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="read-more">
                                                                                            <a href="#">Read more...</a>
                                                                                        </div>
                                                                                        <br>
                                                                                        <!--Recipe Summary-->    
                                                                                        <div class="feature-details-box">
                                                                                            <div class="feature-details"
                                                                                                <i class="fa fa-user"></i></a>  
                                                                                                 <a href="#">Haze</a>  
                                                                                                <span class="details-seperator"></span>

                                                                                                <a href="#"><i class="fa fa-comment"></i><span> &nbsp;4</span></a>
                                                                                                <span class="details-seperator"></span>
                                                                                                    <div class="fa fa-clock-o">
                                                                                                        July 28
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>      
                                                                                     </div>
                                                                               </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-md-3">
                                                                            <div class="recipe-box-index">
                                                                                <!--Recipe Photo-->
                                                                                <div class="feature">
                                                                                    <div class="img-overlay1 img-responsive">
                                                                                        <img src="img/toothpaste.jpg" alt="">
                                                                                    </div>

                                                                                    <div class="feature-content">
                                                                                        <h3 class="h3-body-title color-text">
                                                                                            <a href="#"> ASTOUNDING BENEFITS AND PROPERTIES OF HONEY</a>
                                                                                        </h3>
                                                                                        <div class="recipe-overflow">
                                                                                            <p>
                                                                                                The natural by-product of flower nectar made by bees has been part of our history dated as far as 8,000 years ago with its astounding value in traditional medicine.
                                                                                                Natural or raw honey that was not subjected to extreme heat or any chemical filtering has more than 200 substances that have myriad benefits to one’s  overall physiological and overall health.
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="read-more">
                                                                                            <a href="#">Read more...</a>
                                                                                        </div>
                                                                                        <br>
                                                                                        <!--Recipe Summary-->    
                                                                                        <div class="feature-details-box">
                                                                                            <div class="feature-details"
                                                                                                <i class="fa fa-user"></i></a>  
                                                                                                 <a href="#">Haze</a>  
                                                                                                <span class="details-seperator"></span>

                                                                                                <a href="#"><i class="fa fa-comment"></i><span> &nbsp;4</span></a>
                                                                                                <span class="details-seperator"></span>
                                                                                                    <div class="fa fa-clock-o">
                                                                                                        July 28
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>      
                                                                                     </div>
                                                                               </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!--/row//-->   
                                                                </div> <!-- //active//-->
                                                                
                                                                <!--/item-->
                                                                <div class="item">
                                                                    <div class="row">
                                                                       <div class="col-md-3">
                                                                             <div class="recipe-box-index">
                                                                                <!--Recipe Photo-->
                                                                                <div class="feature">
                                                                                    <div class="img-overlay1 img-responsive">
                                                                                        <img src="img/toothpaste.jpg" alt="">
                                                                                    </div>

                                                                                    <div class="feature-content">
                                                                                        <h3 class="h3-body-title color-text">
                                                                                            <a href="#"> ASTOUNDING BENEFITS AND PROPERTIES OF HONEY</a>
                                                                                        </h3>
                                                                                        <div class="recipe-overflow">
                                                                                            <p>
                                                                                                The natural by-product of flower nectar made by bees has been part of our history dated as far as 8,000 years ago with its astounding value in traditional medicine.
                                                                                                Natural or raw honey that was not subjected to extreme heat or any chemical filtering has more than 200 substances that have myriad benefits to one’s  overall physiological and overall health.
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="read-more">
                                                                                            <a href="#">Read more...</a>
                                                                                        </div>
                                                                                        <br>
                                                                                    <!--Recipe Summary-->    
                                                                                    <div class="feature-details-box">
                                                                                        <div class="feature-details"
                                                                                            <i class="fa fa-user"></i></a>  
                                                                                             <a href="#">Haze</a>  
                                                                                            <span class="details-seperator"></span>

                                                                                            <a href="#"><i class="fa fa-comment"></i><span> &nbsp;4</span></a>
                                                                                            <span class="details-seperator"></span>
                                                                                                <div class="fa fa-clock-o">
                                                                                                    July 28
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>      
                                                                                 </div>
                                                                           </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                            <div class="recipe-box-index">
                                                                                <!--Recipe Photo-->
                                                                                <div class="feature">
                                                                                    <div class="img-overlay1 img-responsive">
                                                                                        <img src="img/toothpaste.jpg" alt="">
                                                                                    </div>

                                                                                    <div class="feature-content">
                                                                                        <h3 class="h3-body-title color-text">
                                                                                            <a href="#"> ASTOUNDING BENEFITS AND PROPERTIES OF HONEY</a>
                                                                                        </h3>
                                                                                        <div class="recipe-overflow">
                                                                                            <p>
                                                                                                The natural by-product of flower nectar made by bees has been part of our history dated as far as 8,000 years ago with its astounding value in traditional medicine.
                                                                                                Natural or raw honey that was not subjected to extreme heat or any chemical filtering has more than 200 substances that have myriad benefits to one’s  overall physiological and overall health.
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="read-more">
                                                                                            <a href="#">Read more...</a>
                                                                                        </div>
                                                                                        <br>
                                                                                    <!--Recipe Summary-->    
                                                                                    <div class="feature-details-box">
                                                                                        <div class="feature-details"
                                                                                            <i class="fa fa-user"></i></a>  
                                                                                             <a href="#">Haze</a>  
                                                                                            <span class="details-seperator"></span>

                                                                                            <a href="#"><i class="fa fa-comment"></i><span> &nbsp;4</span></a>
                                                                                            <span class="details-seperator"></span>
                                                                                                <div class="fa fa-clock-o">
                                                                                                    July 28
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>      
                                                                                 </div>
                                                                           </div>
                                                                        </div>
                                                                    </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="recipe-box-index">
                                                                                <!--Recipe Photo-->
                                                                                <div class="feature">
                                                                                    <div class="img-overlay1 img-responsive">
                                                                                        <img src="img/toothpaste.jpg" alt="">
                                                                                    </div>

                                                                                    <div class="feature-content">
                                                                                        <h3 class="h3-body-title color-text">
                                                                                            <a href="#"> ASTOUNDING BENEFITS AND PROPERTIES OF HONEY</a>
                                                                                        </h3>
                                                                                        <div class="recipe-overflow">
                                                                                            <p>
                                                                                                The natural by-product of flower nectar made by bees has been part of our history dated as far as 8,000 years ago with its astounding value in traditional medicine.
                                                                                                Natural or raw honey that was not subjected to extreme heat or any chemical filtering has more than 200 substances that have myriad benefits to one’s  overall physiological and overall health.
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="read-more">
                                                                                            <a href="#">Read more...</a>
                                                                                        </div>
                                                                                        <br>
                                                                                    <!--Recipe Summary-->    
                                                                                    <div class="feature-details-box">
                                                                                        <div class="feature-details"
                                                                                            <i class="fa fa-user"></i></a>  
                                                                                             <a href="#">Haze</a>  
                                                                                            <span class="details-seperator"></span>

                                                                                            <a href="#"><i class="fa fa-comment"></i><span> &nbsp;4</span></a>
                                                                                            <span class="details-seperator"></span>
                                                                                                <div class="fa fa-clock-o">
                                                                                                    July 28
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>      
                                                                                 </div>
                                                                           </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                             <div class="recipe-box-index">
                                                                                <!--Recipe Photo-->
                                                                                <div class="feature">
                                                                                    <div class="img-overlay1 img-responsive">
                                                                                        <img src="img/beauty1.png" alt="">
                                                                                    </div>

                                                                                    <div class="feature-content">
                                                                                        <h3 class="h3-body-title color-text">
                                                                                            <a href="#"> ASTOUNDING BENEFITS AND PROPERTIES OF HONEY</a>
                                                                                        </h3>
                                                                                        <div class="recipe-overflow">
                                                                                            <p>
                                                                                                The natural by-product of flower nectar made by bees has been part of our history dated as far as 8,000 years ago with its astounding value in traditional medicine.
                                                                                                Natural or raw honey that was not subjected to extreme heat or any chemical filtering has more than 200 substances that have myriad benefits to one’s  overall physiological and overall health.
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="read-more">
                                                                                            <a href="#">Read more...</a>
                                                                                        </div>
                                                                                        <br>
                                                                                    <!--Recipe Summary-->    
                                                                                    <div class="feature-details-box">
                                                                                        <div class="feature-details"
                                                                                            <i class="fa fa-user"></i></a>  
                                                                                             <a href="#">Haze</a>  
                                                                                            <span class="details-seperator"></span>

                                                                                            <a href="#"><i class="fa fa-comment"></i><span> &nbsp;4</span></a>
                                                                                            <span class="details-seperator"></span>
                                                                                                <div class="fa fa-clock-o">
                                                                                                    July 28
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>      
                                                                                 </div>
                                                                           </div>
                                                                        </div>
                                                                    </div>    
                                                                </div><!--//row//-->
                                                            </div>
                                                        </div><!--/carousel-inner--> 
                                                            
                                                        <div class="flexslider-arrow">
                                                        <a class="left carousel-control tp-leftarrow tparrows default" href="#recentBlog" data-slide="prev">< </a>
                                                        <a class="right carousel-control tp-rightarrow tparrows default" href="#recentBlog" data-slide="next"></a>
                                                    </div>
                                                        <!--/myCarousel-->
                                                    </div>
                                                    <!--/well-->
                                                </div>
                                            </div>
                                        </div> <!--//Recent Blog //-->
                                        
				<!-- Testimonial -->
                                <div class="testimonial">
					<div class="container">
                                            <div class="default-heading padd5">
                                                <!-- Crown image -->
                                                <img class="img-responsive" src="img/crown.png" alt="Organeek" />
                                                <!-- Heading -->
                                                <h2>Testimonial</h2>
                                                <!-- Paragraph -->
                                                <p>Share your Organeek experience with everyone!</p>
                                            </div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- BLock heading -->
								<h3> Most Popular Recipe</h3>
								<!-- Flex slider Content -->
								<div class="flexslider-recent">
									<ul class="slides">
										<li>
											<!-- Image for background -->
											<img class="img-responsive" src="img/toothpaste.jpg" alt="" />
											<!-- Slide content -->
											<div class="slider-content">
												<!-- Heading -->
												<h4>Whitening Tooth Powder</h4>
												<!-- Paragraph -->
												<p>Give your teeth their much needed respite from all the suffocating and hazardous chemical-laden toothpaste and flaunt your brighter and whiter smile with this amazing recipe!</p>
											</div>
										</li>
										<li>
											<!-- Image for background -->
											<img class="img-responsive" src="img/toothpaste.jpg" alt="" />
											<!-- Slide content -->
											<div class="slider-content">
												<!-- Heading -->
												<h4>Whitening Tooth Powder</h4>
												<!-- Paragraph -->
												<p>Sed ut perspiciatis unde omnis iste natus error sitvolua rchitecto beatae vitae dicta sunt explicabo eaque ipsa quae ab illo inventore.</p>
											</div>
										</li>
                                                                                <li>
											<!-- Image for background -->
											<img class="img-responsive" src="img/toothpaste.jpg" alt="" />
											<!-- Slide content -->
											<div class="slider-content">
												<!-- Heading -->
												<h4>Whitening Tooth Powder</h4>
												<!-- Paragraph -->
												<p>Give your teeth their much needed respite from all the suffocating and hazardous chemical-laden toothpaste and flaunt your brighter and whiter smile with this amazing recipe!</p>
											</div>
										</li>
										
									</ul>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- BLock heading -->
								<h3> They Say</h3>
								<!-- Flex slider Content -->
								<div class="flexslider-testimonial">
									<ul class="slides">
										<li>
											<!-- Testimonial Content -->
											<div class="testimonial-item">
												<!-- Quote -->
												<span class="quote green">&#8220;</span> 
												<!-- Your comments -->
												<blockquote>
													<!-- Paragraph -->
													<p>Sed ut perspiciatis unde omnis iste natus error sitvolu accusative ntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.</p>
												</blockquote>
												<!-- Heading with image -->
												<h4><img class="img-responsive img-circle" src="img/user.jpg" alt="" /> Jhon Doe<span>, your designation</span></h4>
												<div class="clearfix"></div>
											</div>
										</li>
										<li>
											<!-- Testimonial Content -->
											<div class="testimonial-item">
												<!-- Quote -->
												<span class="quote green">&#8220;</span> 
												<!-- Your comments -->
												<blockquote>
													<!-- Paragraph -->
													<p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the dislikes.</p>
												</blockquote>
												<!-- Heading with image -->
												<h4><img class="img-responsive img-circle" src="img/user.jpg" alt="" /> Marten<span>, your designation</span></h4>
												<div class="clearfix"></div>
											</div>
										</li>
										<li>
											<!-- Testimonial Content -->
											<div class="testimonial-item">
												<!-- Quote -->
												<span class="quote green">&#8220;</span> 
												<!-- Your comments -->
												<blockquote>
													<!-- Paragraph -->
													<p>At vero eos et accusamus et iusto odio dignis simos ducimus qui bland itiis praes entium volup tatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non laboratory.</p>
												</blockquote>
												<!-- Heading with image -->
												<h4><img class="img-responsive img-circle" src="img/user.jpg" alt="" /> Katrina Doe<span>, your designation</span></h4>
												<div class="clearfix"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
                                            </div>
					</div>
                                        <!-- //Testimonial// -->
                                
                                <!-- Blogger -->
                               <div class="chefs padd5">
                                    <div class="container">
                                             <div class="col-md-12">
						<!-- Default Heading -->
						<div class="default-heading">
							<!-- Crown image -->
                                                        <img class="img-responsive" src="img/crown.png" alt="Organeek" />
							<!-- Heading -->
							<h2>Bloggers & Contributors</h2>
							<!-- Paragraph -->
							<p>Organeek's most dedicated bloggers and contributors who bring forth the most sumptuous tidbit about wellness and beauty.</p>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<!-- Blogger Member -->
								<div class="chefs-member">
									<!-- Chefs member header -->
									<div class="chefs-head">
										<!-- Member background image -->
										<img class="chefs-back img-responsive" src="img/chef/blogger1.jpg" alt="" />
										<!-- chef member image -->
                                                                                <img class="chefs-img img-responsive" src="img/chef/dimple-fin.png" alt="" />
									</div>
                                                                        <div class="services_pic_line1"> </div>
									<!--Name / Heading -->
									<h3><a href="#">Haze</a></h3>
									<!-- Member designation -->
									<span>Founder, Contributor & Designer</span>
									<!-- Social media links -->
                                                                        <div class="padd3"> </div>
                                                                        <div class="recipe-share">
                                                                            <a href="http://facebook.com/hazel.natividad.31105" class="facebook"> <i class="fa fa-facebook"></i></a>
                                                                            <a href="" class="twitter" > <i class="fa fa-twitter"></i></a>
                                                                            <a href="" class="google-plus"> <i class="fa fa-google-plus"></i></a>
                                                                            <a href="" class="instagram"> <i class="fa fa-instagram"></i></a>
                                                                            <a href="mailto:hazel@organeek.net" class="email"> <i class="fa fa-envelope"></i></a>
                                                                        </div>
                                                                        <br>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<!-- Blogger Member -->
								<div class="chefs-member">
									<!-- Chefs member header -->
									<div class="chefs-head">
										<!-- Member background image -->
										<img class="chefs-back img-responsive" src="img/chef/c-back3.jpg" alt="" />
										<!-- chef member image -->
										<img class="chefs-img img-responsive" src="img/chef/hanna.png" alt="" />
									</div>
                                                                        <div class="services_pic_line1"> </div>
									<!--Name / Heading -->
									<h3><a href="#">Hanna Marie</a></h3>
									<!-- Member designation -->
									<span>Developer</span>
									<!-- Social media links -->
                                                                        <div class="padd3"> </div>
                                                                        <div class="recipe-share">
                                                                            <a href="http://facebook.com/hazel.natividad.31105" class="facebook"> <i class="fa fa-facebook"></i></a>
                                                                            <a href="" class="twitter" > <i class="fa fa-twitter"></i></a>
                                                                            <a href="" class="google-plus"> <i class="fa fa-google-plus"></i></a>
                                                                            <a href="" class="instagram"> <i class="fa fa-instagram"></i></a>
                                                                            <a href="mailto:hazel@organeek.net" class="email"> <i class="fa fa-envelope"></i></a>
                                                                        </div>
                                                                        <br>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<!-- Blogger Member -->
								<div class="chefs-member">
									<!-- Chefs member header -->
									<div class="chefs-head">
										<!-- Member background image -->
										<img class="chefs-back img-responsive" src="img/chef/blogger2.jpg" alt="" />
										<!-- chef member image -->
										<img class="chefs-img img-responsive" src="img/userjpg" alt="" />
									</div>
                                                                        <div class="services_pic_line1"> </div>
									<!--Name / Heading -->
									<h3><a href="#">Edgar</a></h3>
									<!-- Member designation -->
									<span>Researcher</span>
									<!-- Social media links -->
                                                                        <div class="padd3"> </div>
                                                                        <div class="recipe-share">
                                                                            <a href="http://facebook.com/hazel.natividad.31105" class="facebook"> <i class="fa fa-facebook"></i></a>
                                                                            <a href="" class="twitter" > <i class="fa fa-twitter"></i></a>
                                                                            <a href="" class="google-plus"> <i class="fa fa-google-plus"></i></a>
                                                                            <a href="" class="instagram"> <i class="fa fa-instagram"></i></a>
                                                                            <a href="mailto:hazel@organeek.net" class="email"> <i class="fa fa-envelope"></i></a>
                                                                        </div>
                                                                        <br>
								</div>
							</div>
						</div>
					</div>
				</div>
                                <!-- // Blogger & Contributor // -->
                    </div><!-- //Blogger//-->
                    
                	
                <!-- Footer -->
                <div class="footer">
                    <br>
                    <div class="container">
                            <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <!-- Footer widget -->
                                        <div class="footer-widget">
                                            <!-- Logo area -->
                                            <a href="aboutus.html">
                                                <!-- Logo area -->
                                                <div class="logo">
                                                        <img class="img-responsive" src="img/logo/ologo2.png" alt="Organeek"/>
                                                        <div class="padd1"> </div>
                                                    <!-- Paragraph -->
                                                    <p>Organeek aspires to be the leading source of natural home, health and beauty information and promotes wellness through knowledge and sustainable living.</p>
                                                    <!-- Heading -->
                                                </div>

                                            </a>
                                                    <!---
                                                    <h4>Online Payment</h4>
                                                    <!-- Images -->
                                                      <!---<a href="#"><img class="payment img-responsive" src="img/payment/discover.gif" alt="" /></a>
                                                    <a href="#"><img class="payment img-responsive" src="img/payment/mastercard.gif" alt="" /></a>
                                                    <a href="#"><img class="payment img-responsive" src="img/payment/paypal.gif" alt="" /></a>
                                                    <a href="#"><img class="payment img-responsive" src="img/payment/visa.gif" alt="" /></a> 
                                                    <!-->
                                                    <h4>Popular Tags</h4>
                                                    <!-- Images -->
                                                    <div class="sidebar-block sidebar-content tags">
                                                                <a href="#">Beauty</a>
                                                                <a href="#">Anti-aging</a>
                                                                <a href="#">Wellness</a>
                                                                <a href="#">Natural Home</a>
                                                                <a href="#">DIY</a>
                                                                <a href="#">Antioxidant</a>
                                                                <a href="#">Chemical</a>
                                                                <a href="#">Recipe</a>
                                                                <a href="#">Cosmetics</a>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                            <!-- Footer widget -->
                                            <div class="footer-widget">
                                                    <!-- Heading -->
                                                    <h4>Famous Recipe</h4>
                                                    <!-- Images -->
                                                    <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                                    <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                                    <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                                    <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                                    <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                                    <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                                    <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                                    <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                                    <a href="#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                                    <div class="padd1"></div>
                                                    <h4>Credit</h4>
                                                    <p> Images used in the banner, menu, ingredients and recipe are courtesy of FreeDigitalPhotos.net and its creator.
                                            </div> <!--/ Footer widget end -->
                                    </div>
                                    <div class="clearfix visible-sm"></div>
                                    <div class="col-md-3 col-sm-6">
                                            <!-- Footer widget -->
                                            <div class="footer-widget">
                                                    <!-- Heading -->
                                                    <h4>Join Us Today</h4>
                                                    <!-- Paragraph -->
                                                    <p>Subscribe to receive FREE newsletter, recipes and blogs and gain access to beauty and wellness regime.</p>
                                                    <br>
                                                    <!-- Subscribe form -->
                                                    <form role="form">
                                                            <div class="form-group">
                                                                    <input class="form-control" type="text" placeholder="Your name" />
                                                            </div>
                                                            <div class="form-group">
                                                                    <input class="form-control" type="email" placeholder="Your email" />
                                                            </div>
                                                            <button class="btn btn-danger" type="button">Subscribe</button>
                                                    </form>
                                            </div> <!--/ Footer widget end -->
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                            <!-- Footer widget -->
                                            <div class="footer-widget">
                                                    <!-- Heading -->
                                                    <h4>Connect</h4>
                                                    <div class="contact-details">
                                                            <!-- Address / Icon -->
                                                            <div class="fb-like-box" data-href="https://www.facebook.com/organeek" data-width="250px" data-height="auto" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                                                    </div>
                                                    <!-- Social media icon -->
                                                    <div class="social-banner pull-left">
                                                    <!-- Social -->
                                                    <div class="social-banner">
                                                        <a class="facebook" href="http://www.facebook.com/organeek"></a>
                                                        <a class="twitter" href="http://twitter.com/organeek"></a>
                                                        <a class="flickr" href="#"></a>
                                                        <a class="google" href="http://plus.google/organeek"></a>
                                                        <a class="pinterest" href="http://www.pinterest.com/organeeek/"></a>
                                                        <a class="vimeo" href="#"></a>
                                                        <a class="youtube" href="#"></a>
                                                        <a class="skype" href="skype:organeek.name?call"></a>
                                                        <a class="rss" href="#"></a>
                                                    </div>
                                                </div>
                                            </div> <!--/ Footer widget end -->
                                    </div>
                            </div>
                        </div>
                            <!-- Copyright -->
                            <div class=" footer footer-copyright">
                                    <!-- Paragraph -->
                                    <p>&copy; Copyright 2014 Organeek. All rights reserved. </p>
                                    <p>This website is for information purposes only, and should not be construed as medical advice or as a replacement for medical treatment. It is neither intended nor implied to be a substitute for professional advice. </p>
                            </div>
                    </div>
                    <!--//Footer//-->
		
                    <!-- Scroll to top -->
                    <span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span> 
		
		
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
		<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
		<!-- FLEX SLIDER SCRIPTS  -->
		<script defer src="js/jquery.flexslider-min.js"></script>
		<!-- Pretty Photo JS -->
		<script src="js/jquery.prettyPhoto.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
		<!-- JS code for this page -->
		<script>
		/* ******************************************** */
		/*  JS for SLIDER REVOLUTION  */
		/* ******************************************** */
				jQuery(document).ready(function() {
					   jQuery('.tp-banner').revolution(
						{
							delay:9000,
							startheight:500,
							
							hideThumbs:10,
							
							navigationType:"bullet",	
														
							hideArrowsOnMobile:"on",
							
							touchenabled:"on",
							onHoverStop:"on",
							
							navOffsetHorizontal:0,
							navOffsetVertical:20,
							
							stopAtSlide:-1,
							stopAfterLoops:-1,

							shadow:0,
							
							fullWidth:"on",
							fullScreen:"off"
						});
				});
		/* ******************************************** */
		/*  JS for FlexSlider  */
		/* ******************************************** */
		
			$(window).load(function(){
				$('.flexslider-recent').flexslider({
					animation:		"fade",
					animationSpeed:	1000,
					controlNav:		true,
					directionNav:	false
				});
				$('.flexslider-testimonial').flexslider({
					animation: 		"fade",
					slideshowSpeed:	5000,
					animationSpeed:	1000,
					controlNav:		true,
					directionNav:	false
				});
			});
		
		/* Gallery */

		jQuery(".gallery-img-link").prettyPhoto({
		   overlay_gallery: false, social_tools: false
		});
		
		</script>
	</body>	
</html>