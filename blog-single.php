<?php
session_start();
include_once '../admin/include/config.php';
include_once 'class/class_blog.php';
$recipe = new Blog();
$id = $_GET['id'];
$recipe->blogData($id);
?>
<!DOCTYPE html>
<html>
	<head>	
		<meta charset="utf-8">
		<!-- Title here -->
		<title>Recipe - Organeek</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Portfolio CSS -->
		<link href="css/prettyPhoto.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">	
		<!-- Custom Less -->
		<link href="css/less-style.css" rel="stylesheet">	
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		<!--[if IE]><link rel="stylesheet" href="css/ie-style.css"><![endif]-->
		<!--Sidebar Theme-->
                <link rel="stylesheet" href="css/theme-elements.css">
                <link rel="stylesheet" href="css/theme.css">
                <link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>
                <link href="http://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">
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
}(document, 'script', 'facebook-jssdk'));</script>

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
		<!-- Model End -->
		
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
                                        <img class="img-responsive" src="img/logo/logo1.png" alt="Organeek"/>
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
                <!--// Header// -->
			
                <!-- Banner Start -->
                <div class="banner">
                        <div class="container">
                                <!-- Heading -->
                                <ol class="breadcrumb">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="#"><?php echo $recipe->category ?></a></li>
                                        <li class="active"> <?php echo $recipe->sub_category ?> </li>
                                </ol>
                                <div class="clearfix"></div>
                        </div>
                </div>
                <!-- // Banner // -->
			
			<!-- Inner Content -->
			<div class="inner-page padd1">
			
                        <!-- Blog Start -->
                        <div class="body-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9">
                                       <!-- Recipe Post -->  
                                            <div class="blog-span">
                                                <div class="blog-post">
                                                    <div class="blog-post-featured-img img-overlay">
                                                        <img src="../admin/<?php echo $a['photo'] ?>" alt="" class="img-responsive">
                                                        <div class="item-img-overlay">
                                                            <a class="portfolio-zoom fa fa-plus" href="../admin/<?php echo $a['photo'] ?>" data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>                    
                                                            <div class="item_img_overlay_content">
                                                            
                                                                <div class="blog-post-details-item2 blog-post-details-item-left share-article">
                                                                    <span>Share It On</span>
                                                                    <a href="#" class="fa fa-facebook"></a>
                                                                    <a href="#" class="fa fa-twitter"></a>
                                                                    <a href="#" class="fa fa-google-plus"></a>
                                                                    <a href="#" class="fa fa-pinterest"></a>
                                                                </div>                        
                                                                <div class="blog-post-details-item blog-post-details-item-right">
                                                                    <a href="#" class="fa fa-heart">&nbsp;25 &nbsp; &nbsp; &nbsp;</a>
                                                                </div>                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6>
                                                    <?php echo $recipe->title ?>
                                                </h6>
                                                
                                                <!-- Social Plugins -->
                                                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

                                                 <div class="blog-post-body">
                                                    <?php
                                                        $out = strlen($a['body']) > 550 ? substr($a['body'],0,550)."......." : $a['body'];
                                                        echo $out;
                                                    ?>
                                                </div>
                                              
                                                <br>
                                              <!-- Summary Line Start -->   
                                              <div class="blog-post">
                                                <div class="blog-post-details">
                                                <!-- Date -->
                                                <div class="blog-post-details-item created fa fa-calendar">
                                                    <?php echo $blog->created ?>
                                                </div>

                                                <div class="blog-post-details-item blog-post-details-item-left fa fa-user">
                                                    <a href="">
                                                        Haze
                                                    </a>
                                                </div>
                                                <!-- Author Name End -->

                                                <!-- Tags -->
                                                <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags fa fa-file">
                                                    <a href="#"><?php echo $blog->category ?></a>,
                                                    <a href="#"><?php echo $blog->sub_category ?></a>,
                                                    <li class="active"><?php echo $blog->sub_category2 ?></li>
                                                </div>
                                                <!-- // Tags End // -->

                                                <!-- No Comments -->
                                                <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last fa fa-comment">
                                                    <a href="">
                                                        3 Comments
                                                    </a>
                                                </div>
                                                <!-- // No Comments // -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Blog Post End -->
                                        
                        

                    <!-- About The Author -->
                    <div class="commentbox">
                        <div class="comment-text">
                        Author
                        </div>
                    </div>
                    <br>
                    <div class="component-content1">
                     <div class="row">
                        <div class="col-sm-9 col-md-12">
                            <div class="the-author-thumbnail">
                                <img src="img/user.jpg" alt="Hazel Marie" class="img-responsive">
                            </div>  
                            <br>
                            <div class="the-author-small-bio">
                                    <div class="the-author-name">
                                        Haze
                                    </div>
                                <span class="social-banner author-social">
                                    <a href="#" class="facebook"><i class="fa fa-facebook circle-social"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus circle-social"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter circle-social"></i></a>
                                    <a href="#" class="pinterest"><i class="fa fa-pinterest circle-social"></i></a>
                                </span>
                               
                                <!-- Paragraph-->                                    
                                    <p> Haze is the founder of Organeek. She loves animals, plants and everything that encompasses nature and though she lives in the city most of her life, she believes that everything that nature gives us is a gift that we must protect, nurture and celebrate. </p>
                                    <p> Subscribe to receive all the latest updates, recipes and articles by 2 simple steps!</p>
                                    <br>
                                    <form role="form">
                                            <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="Your name" />
                                            </div>
                                            <div class="form-group">
                                                    <input class="form-control" type="email" placeholder="Your email" />
                                            </div>
                                            <button class="btn btn-danger" type="button">Subscribe</button>
                                    </form>
                            </div>
                        </div>
                     </div>
                    </div>
                    <div class="padd1"> </div>
                    <!-- //End About The Author// -->
                    
                    <!-- Related Post Start -->
                    
                    
                    <!-- Related Post End --> 

                    <!-- Comment Section -->
                    <div class="commentbox">
                        <div class="comment-text">
                        Comment
                        </div>
                    </div>
                    <br>
                    <div class="blog-post">
                            <div class="comments">
                                    <ul class="comment-list">
                                            <li class="comment">
                                                    <a class="pull-left" href="#">
                                                        <img class="avatar" src="img/user.jpg" alt="" />
                                                    </a>
                                                    <div class="comment-author"><a href="#">Uiousve Rsionsha</a></div>
                                                    <div class="cmeta">Commented on 26/1/2014</div>
                                                    <p>Nulla facilisi. Sed justo dui, scelerisque ut consectetur vel, eleifend id erat. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat.</p>
                                                    <div class="clearfix"></div>
                                            </li>
                                            <li class="comment reply">
                                                    <a class="pull-left" href="#">
                                                            <img class="avatar" src="img/user.jpg" alt="" />
                                                    </a>
                                                    <div class="comment-author"><a href="#">Uiousve Rsionsha</a></div>
                                                    <div class="cmeta">Commented on 02/2/2014</div>
                                                    <p>Nulla facilisi. Sed justo dui, scelerisque ut consectetur vel, eleifend id erat. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat.</p>
                                                    <div class="clearfix"></div>
                                            </li>
                                    </ul>
                                <div class="clearfix"></div>
                            </div><!--/ Comment section end -->
                        </div><!--/ Blog post class end -->
                
                    
                    <!--  Start Comment Posting -->
                    <div class="respond well">
                        <div class="title"><h5>Post Reply</h5></div>
                            <div class="form">
                                    <form class="form-horizontal" role="form" action="recipe-single.php?id=<?php echo $id; ?>" method="post">
                                            <div class="form-group">
                                                    <label for="name" class="col-lg-2 control-label">Name</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="email" class="col-lg-2 control-label">Email</label>
                                                    <div class="col-lg-10">
                                                        <input type="email" class="form-control" id="email" name="email_add" placeholder="Email">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="website" class="col-lg-2 control-label">Website</label>
                                                    <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="website" name="website" placeholder="Website">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="control-label col-lg-2" for="comment">Comment</label>
                                                    <div class="col-lg-10">
                                                         <textarea class="form-control" id="comment" rows="3" name="comment" placeholder="Comment"></textarea>
                                                    </div>
                                            </div>

                                            <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                            <button type="submit" class="btn btn-danger btn-sm">Submit</button> &nbsp;
                                                            <button type="reset" class="btn btn-default btn-sm">Reset</button>
                                                    </div>
                                            </div>
                                    </form>
                                </div>
                            </div>

                        <!--   Comment Posting End -->
                                                                    
                        <!-- Next/Previous Navigation -->
                            <div class="navigation button">  
                                    <div class="pull-left">
                                        <a href="blog.html" class="btn btn-danger btn-sm">&laquo; Previous </a>
                                    </div>
                                    <div class="pull-right">
                                            <a href="blog.html" class="btn btn-danger btn-sm">Next  &raquo;</a>
                                    </div>
                                    <div class="clearfix"></div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Next/Previous Navigation End -->
                    
                    <br>
                    <!-- Sidebar Start -->
                    <div class="padd1"></div>
                    <div class="col-md-3 col-sm-12">
                            <aside class="sidebar">
                                <!-- Search Sidebar Start-->
                                        <div class="sidebar-widget">
                                            <!-- search button and input box -->
                                                <form role="form" class="form-inline">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search Recipe...">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-danger" type="button"><i class="fa fa-search"></i></button>
                                                        </span>
                                                    </div>
                                                </form><!--/ Form end -->
                                        </div>
                                        <div class="padd1"></div>
                                        <!-- Search Sidebar End-->

                                        <!-- Category Sidebar Start-->
                                        <div class="category">
                                            <div class="category-text">
                                            Categories
                                            </div>
                                        </div>
                                        <br>
                                        <div class=" blog-post-details-item-right">
                                        <ul class="nav nav-list primary">
                                            <li>
                                                <a href="#" data-toggle="collapse" data-target="#bodyMenu"> 
                                                 <i class="fa fa-angle-double-right">&nbsp; &nbsp; Body & Skin Care </i>
                                                </a>
                                               <ul style="list-style: none;" class="collapse nav" id="bodyMenu">
                                                  <li><a href="recipe/body/beautifyingoil">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Beautifying Oil</a></li>
                                                  <li><a href="recipe/body/body-wash">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Body Wash</a></li>
                                                  <li><a href="recipe/body/body-scrub">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Body Scrub</a></li>
                                                  <li><a href="recipe/body/exfoliator">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Exfoliator</a></li>
                                                  <li><a href="recipe/body/moisturizer">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Moisturizer/Cream</a></li>
                                                  <li><a href="recipe/body/soap">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Soap</a></li>
                                                  <li><a href="recipe/body/sunscreen">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Sunscreen</a></li>
                                                  <li><a href="recipe/body/whitening">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Whitening/Lightening</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="collapse" data-target="#faceMenu">
                                                 <i class="fa fa-angle-double-right">&nbsp; &nbsp; Face Care</i>
                                                </a>
                                                <ul style="list-style: none;" class="collapse nav" id="faceMenu">
                                                  <li class="active"><a href="recipe/face-care/beautifyingoil">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Beautifying Oil</a></li>
                                                  <li><a href="recipe/face-care/c-serum">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; C Serum</a></li>
                                                  <li><a href="recipe/face-care/cleanser">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Cleanser</a></li>
                                                  <li><a href="recipe/face-care/exfoliator">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Exfoliator</a></li>
                                                  <li><a href="recipe/face-care/facial-scrub">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Facial Scrub</a></li>
                                                  <li><a href="recipe/face-care/mask">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Mask</a></li>
                                                  <li><a href="recipe/face-care/moisturizer">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Moisturizer/Cream</a></li>
                                                  <li><a href="recipe/face-care/sunscreen">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Sunscreen</a></li>
                                                  <li><a href="recipe/face-care/toner-mist">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Toner & Mist</a></li>
                                                  <li><a href="recipe/face-care/whitening">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Whitening/Lightening</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="collapse" data-target="#hairMenu">
                                                 <i class="fa fa-angle-double-right">&nbsp; &nbsp; Hair</i>
                                                </a>
                                                <ul style="list-style: none;" class="collapse nav" id="hairMenu">
                                                  <li class="active"><a href="recipe/hair/beautifyingoil">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Clarifying Shampoo</a></li>
                                                  <li><a href="recipe/hair/conditioner">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Conditioner</a></li>
                                                  <li><a href="recipe/hair/hair-mask">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Hair Mask </a></li>
                                                  <li><a href="recipe/hair/hair-spray">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Hair Spray</a></li>
                                                  <li><a href="recipe/hair/hair-voluminizer">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Hair Voluminizer </a></li>
                                                  <li><a href="recipe/hair/lightening-shampoo">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Lightening Recipe </a></li>
                                                  <li><a href="recipe/hair/shampoo">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Shampoo</a></li>
                                                  <li><a href="recipe/hair/no-poo">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; No-poo Recipe</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="collapse" data-target="#householdMenu">
                                                 <i class="fa fa-angle-double-right">&nbsp; &nbsp; Household Products</i>
                                                </a>
                                                <ul style="list-style: none;" class="collapse nav" id="householdMenu">
                                                  <li class="active"><a href="recipe/household/air-freshener"">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Air Freshener</a></li>
                                                  <li><a href="recipe/household/cleaner">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Cleaner</a></li>
                                                  <li><a href="recipe/household/deodorizer">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Deodorizer</a></li>
                                                  <li><a href="recipe/household/dishwasher">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Dishwasher Soap</a></li>
                                                  <li><a href="recipe/household/disinfectant">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Disinfectant</a></li>
                                                  <li><a href="recipe/household/fabric-softener">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Fabric Softener</a></li>
                                                  <li><a href="recipe/household/laundry-detergent">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Laundry Detergent</a></li>
                                                  <li><a href="recipe/household/stain-remover">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Stain Remover</a></li>
                                                  <li><a href="recipe/household/others">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Others</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="collapse" data-target="#personalMenu">
                                                 <i class="fa fa fa-angle-double-right">&nbsp; &nbsp; Personal Hygiene</i>
                                                </a>
                                                <ul style="list-style: none;" class="collapse nav" id="personalMenu">
                                                  <li class="active"><a href="recipe/personal-hygiene/breath-freshener">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Breath Freshener</a></li>
                                                  <li><a href="recipe/personal-hygiene/deodorant">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Deodorant</a></li>
                                                  <li><a href="recipe/personal-hygiene/feminine-wash">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Feminine Hygiene Solution</a></li>
                                                  <li><a href="recipe/personal-hygiene/hair-removal">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Hair Removal</a></li>
                                                  <li><a href="recipe/personal-hygiene/mouthwash">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Mouthwash</a></li>
                                                  <li><a href="recipe/personal-hygiene/toothpaste">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Toothpaste/Tooth Powder</a></li>
                                                  <li><a href="recipe/personal-hygiene/others">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Others</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="collapse" data-target="#wellnessMenu">
                                                 <i class="fa fa-angle-double-right">&nbsp; &nbsp; Wellness</i>
                                                </a>
                                                <ul style="list-style: none;" class="collapse nav" id="wellnessMenu">
                                                  <li class="active"><a href="recipe/wellness/fermented-products">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Fermented Product</a></li>
                                                  <li><a href="recipe/wellness/beverage">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Healthy Beverage</a></li>
                                                  <li><a href="recipe/wellness/healthy-food">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Healthy Dish</a></li>
                                                  <li><a href="recipe/wellness/kefir">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Kefir</a></li>
                                                  <li><a href="recipe/wellness/tincture">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Tincture</a></li>
                                                  <li><a href="recipe/wellness/others">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Others</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Category Sidebar End-->

                                    <!-- Tab Sidebar Start-->
                                    <div class="category">
                                        <div class="category-text">
                                        Recipes & Tags
                                        </div>
                                    </div>
                                    
                                    <br>
                                   
                                    <div class="tabs">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star">&nbsp;&nbsp;</i>Popular</a></li>
                                                <li><a href="#recentPosts" data-toggle="tab"><i class="fa fa-cutlery">&nbsp;&nbsp;</i></i>Recent</a></li>
                                                <li><a href="#tags" data-toggle="tab"><i class="fa fa-tag">&nbsp;&nbsp;</i></i>Tags</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="popularPosts">
                                                    <ul class="simple-post-list">
                                                        <li>
                                                            <div class="post-image">
                                                                <a href="#"><img class=" imgs-thumbnail img-responsive" src="img/dish/dish2.jpg" alt="" /></a>
                                                            </div>
                                                            <div class="p">
                                                                <a href="recipe-single.html">Why you should not use soap with Triclosan</a>

                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="post-image">
                                                                <a href="#"><img class=" imgs-thumbnail img-responsive" src="img/toothpaste.jpg" alt="" /></a>
                                                            </div>
                                                            <div class="post-info">
                                                                <a href="recipe-single.html">What does FDA says about soap with Triclosan and SLS</a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="post-image">
                                                                <a href="#"><img class=" imgs-thumbnail img-responsive" src="img/dish/dish2.jpg" alt="" /></a>
                                                            </div>
                                                            <div class="post-info">
                                                                <a href="recipe-single.html">Vitae Nibh Un Odiosters</a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="post-image">
                                                                <a href="#"><img class=" imgs-thumbnail img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                                            </div>
                                                            <div class="post-info">
                                                                <a href="recipe-single.html">Vitae Nibh Un Odiosters</a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="post-image">
                                                                <a href="#"><img class=" imgs-thumbnail img-responsive" src="img/dish/dish2.jpg" alt="" /></a>
                                                            </div>
                                                            <div class="post-info">
                                                                <a href="recipe-single.html">Vitae Nibh Un Odiosters</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="tab-pane" id="recentPosts">
                                                    <ul class="simple-post-list">
                                                        <li>
                                                            <div class="post-image">
                                                                <a href="#"><img class=" imgs-thumbnail img-responsive" src="img/dish/dish2.jpg" alt="" /></a>
                                                            </div>
                                                            <div class="post-info">
                                                                <a href="recipe-single.html">Nullam Vitae Nibh Un Odiosters</a>

                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="post-image">
                                                                <a href="#"><img class=" imgs-thumbnail img-responsive" src="img/dish/dish1.jpg" alt="" /></a>
                                                            </div>
                                                            <div class="post-info">
                                                                <a href="recipe-single.html">Vitae Nibh Un Odiosters</a>
                                                            </div>
                                                        </li>   
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" id="tags">
                                                    <div class="sidebar-block sidebar-content tags">
                                                                <a href="#">Dessert</a>
                                                                <a href="#">Dessert</a>
                                                                <a href="#">Dessert</a>
                                                                <a href="#">Dessert</a>
                                                                <a href="#">Dessert</a>
                                                                <a href="#">Dessert</a>
                                                                <a href="#">Dessert</a>
                                                                <a href="#">Dessert</a>
                                                                <a href="#">Dessert</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   </aside>
                                <!-- Advertisement -->
                                <div class="category">
                                <div class="category-text">
                                Advertisement
                                </div>
                                <!-- Advertisement End -->    
                                </div>
                            </div>        <!-- Sidebar Ends -->  
                </div>
            </div><!-- / Inner Page Content End -->	
			
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
                                            </div> <!--//Footer widget//-->
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
                                                            <div class="fb-like-box" data-href="https://www.facebook.com/organeek" data-width="200" data-height="200" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                                                    </div>
                                                    <!-- Social media icon -->
                                                    <div class="social-banner">
                                                    <!-- Social -->
                                                    <div class="social-banner">
                                                        <a class="facebook" href="#"></a>
                                                        <a class="twitter" href="#"></a>
                                                        <a class="flickr" href="#"></a>
                                                        <a class="google" href="#"></a>
                                                        <a class="pinterest" href="#"></a>
                                                        <a class="vimeo" href="#"></a>
                                                        <a class="youtube" href="#"></a>
                                                        <a class="skype" href="#"></a>
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
			
		</div><!-- / Wrapper End -->
		
		
		<!-- Scroll to top -->
		<span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span> 
		
		
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Pretty Photo JS -->
		<script src="js/jquery.prettyPhoto.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
		<!-- JS code for this page -->
		
	</body>	
</html>