<?php
session_start();
include_once '../../admin/include/config.php';
include_once '../../class/class_blog.php';
include_once '../../config.php';
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
		<link href="../../css/bootstrap.min.css" rel="stylesheet">
		<!-- Portfolio CSS -->
		<link href="../../css/prettyPhoto.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="../../css/font-awesome.min.css" rel="stylesheet">	
		<!-- Custom Less -->
		<link href="../../css/less-style.css" rel="stylesheet">	
                <!-- Custom CSS -->
		<link href="../../css/style.css" rel="stylesheet">
		<!--[if IE]><link rel="stylesheet" href="css/ie-style.css"><![endif]-->
		<!--Sidebar Theme-->
                <link rel="stylesheet" href="../../css/theme-elements.css">
                <link rel="stylesheet" href="../../css/theme.css">
                <link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
                <link href="http://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">
                <!-- Photo CSS -->
                <script src="../../js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
                <!-- Social Plugins -->
                <script type="text/javascript">var switchTo5x=true;</script>
                <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
                <script type="text/javascript">stLight.options({publisher: "7f42f70d-a8a2-4e5a-a561-d0c36c07495c", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>
                <!-- // Social Plugins //-->
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53bb9bff3d4d308e"></script>
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
                <?php include '../../socialheader.php';?>
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
                                        <img class="img-responsive" src="<?php echo $base_url ?>img/logo/logo1.png" alt="Organeek"/>
                                        <p>Celebrating Beauty & Wellness</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-9 col-sm-7">
                                                <!-- Navigation -->
                                <?php include '../../menu.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>  
                <!--// Header// -->
			
                <!-- Banner -->
                <div class=" banner-bg">
                            <div class="banner">
                                    <div class="container">
                                            <!-- Heading -->
                                            <ol class="breadcrumb">
                                                    <li><a href="<?php echo $base_url ?>index.php">Home</a></li>
                                                    <li><a href="blog.php">Blog</a></li>
                                                    <li><a href="#"><?php echo $recipe->category ?></a></li>
                                                    <li class="active"> <?php echo $recipe->sub_category ?> </li>
                                            </ol>
                                            <div class="clearfix"></div>
                                    </div>
                            </div>
                        </div>
                <!-- // Banner // -->
			
			<!-- Inner Content -->
			<div class="inner-page padd1">
			
                        <!-- Blog Content -->
                        <div class="body-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9">
                                       <!-- Recipe Post -->  
                                            <div class="blog-span">
                                                <div class="blog-post">
                                                    <div class="blog-post-featured-img img-overlay">
                                                        <img src="../../admin/<?php echo $recipe->photo ?>" alt="" class="img-responsive">
                                                        <div class="item-img-overlay">
                                                            <a class="portfolio-zoom fa fa-plus" href="../../admin/<?php echo $recipe->photo ?>" data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>                    
                                                            <div class="item_img_overlay_content">
                                                            
                                                                <div class="blog-post-details-item2 blog-post-details-item-left share-article">
                                                                    <span>Share It On</span>
                                                                        <span class='st_sharethis' displayText='ShareThis'></span>
                                                                        <span class='st_facebook' displayText='Facebook'></span>
                                                                        <span class='st_twitter' displayText='Tweet'></span>
                                                                        <span class='st_linkedin' displayText='LinkedIn'></span>
                                                                        <span class='st_pinterest' displayText='Pinterest'></span>
                                                                        <span class='st_email' displayText='Email'></span>
                                                                </div>                      
                                                                <div class="blog-post-details-item blog-post-details-item-right">
                                                                    <a href="#" class="fa fa-heart">&nbsp;25 &nbsp; &nbsp; &nbsp;</a>
                                                                </div>                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Summary Line -->   
                                                <div class="blog-post">
                                                    <div class="blog-post-details">
                                                    <!-- Date -->
                                                    <div class="blog-post-details-item created fa fa-calendar">
                                                        <?php echo $recipe->created ?>
                                                    </div>

                                                    <div class="blog-post-details-item blog-post-details-item-left fa fa-user">
                                                        <a href="">
                                                            Haze
                                                        </a>
                                                    </div>
                                                    <!-- Author Name End -->

                                                    <!-- Tags -->
                                                    <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags fa fa-file">
                                                        <a href="#"><?php echo $recipe->category ?></a>,
                                                        <a href="#"><?php echo $recipe->sub_category ?></a>,
                                                    </div>
                                                    <!-- // Tags End // -->

                                                    <!-- No Comments -->
                                                    <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last fa fa-comment">
                                                        <a href="">
                                                            3 Comments
                                                        </a>
                                                    </div>
                                                    <!-- // No Comments // -->
                                                </div> <!-- // Summary Line // -->
                                            </div>
                                        </div>
                                    <!--//Recipe Post//-->
                                    
                                    <div class="recipe-single-title">
                                    <h6><?php echo $recipe->title ?></h6>
                                    </div>
                                            <!-- Social Plugins -->
                                            <div class="addthis_native_toolbox"></div>          
                                            <div class="padd1"> </div>
                                            <!-- //Social Plugins //-->
                                     <div class="blog-post-body">
                                        <?php
                                            //$out = strlen($recipe->body) > 550 ? substr($recipe->body,0,550)."......." : $recipe->body;
                                            echo $recipe->body;
                                        ?>
                                    </div>
                                    <br>

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
                                   <img src="<?php echo $base_url ?>img/chef/dimple-fin.png" alt="Haze" class="img-responsive">
                               </div>  
                               <br>
                               <div class="the-author-small-bio">
                                       <div class="the-author-name">
                                           <h1> Haze </h1>
                                       <!-- Paragraph-->                                    
                                       <p> Haze is the founder of Organeek. She loves animals, plants and everything that encompasses nature and though she lives in the city most of her life, she believes that everything that nature gives us is a gift that we must protect, nurture and celebrate. </p>
                                         <br>
                                       <p> Subscribe to receive all the latest updates, recipes and articles by 2 simple steps!</p>
                                       </div>
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
                    <!-- // About The Author// -->
                    
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
                                                        <img class="avatar" src="<?php echo $base_url ?>img/user.jpg" alt="" />
                                                    </a>
                                                    <div class="comment-author"><a href="#">Uiousve Rsionsha</a></div>
                                                    <div class="cmeta">Commented on 26/1/2014</div>
                                                    <p>Nulla facilisi. Sed justo dui, scelerisque ut consectetur vel, eleifend id erat. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat.</p>
                                                    <div class="clearfix"></div>
                                            </li>
                                            <li class="comment reply">
                                                    <a class="pull-left" href="#">
                                                            <img class="avatar" src="<?php echo $base_url ?>img/user.jpg" alt="" />
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

                        <!-- // Comment Posting //-->
                                                                    
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
                    <!-- //Next/Previous Navigation// -->
                    
                <div class="padd1"> </div>
                 <!-- Sidebar-->
                        <div class="col-md-3 col-sm-12">
                            <aside class="sidebar">
                                <!-- Search Sidebar-->
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
                                        <div class="padd2"></div>
                                        <!-- //Search Sidebar//-->

                                        <!-- Category Sidebar -->
                                        <div class="category">
                                            <div class="category-text">
                                            Categories
                                            </div>
                                        </div>
                                        <br>
                                        <div class=" blog-post-details-item-right">
                                            <ul class="nav nav-list primary">
                                                    <li>
                                                        <a href="#" data-toggle="collapse" data-target="#beautyMenu"> 
                                                         <i class="fa fa-angle-double-right">&nbsp; &nbsp; Beauty </i>
                                                        </a>
                                                       <ul style="list-style: none;" class="collapse nav" id="beautyMenu">
                                                          <li><a href="blog/beauty/beautifyingoil">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Body & Skin Care</a></li>
                                                          <li><a href="blog/beauty/body-wash">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Eye Care</a></li>
                                                          <li><a href="blog/beauty/body-scrub">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Face Care</a></li>
                                                          <li><a href="blog/beauty/exfoliator">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Hair</a></li>
                                                          <li><a href="blog/beauty/moisturizer">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Hands & Feet</a></li>
                                                          <li><a href="blog/beauty/sunscreen">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Oral Care</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="collapse" data-target="#wellnessMenu">
                                                         <i class="fa fa-angle-double-right">&nbsp; &nbsp; Wellness</i>
                                                        </a>
                                                        <ul style="list-style: none;" class="collapse nav" id="wellnessMenu">
                                                          <li><a href="blog/wellness/beautifyingoil">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Body & Skin Care</a></li>
                                                          <li><a href="blog/wellness/sunscreen">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Exercise</a></li>
                                                          <li><a href="blog/wellness/body-wash">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Eye Care</a></li>
                                                          <li><a href="blog/wellness/body-scrub">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Face Care</a></li>
                                                          <li><a href="blog/wellness/exfoliator">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Hair</a></li>
                                                          <li><a href="blog/wellness/moisturizer">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Hands & Feet</a></li>
                                                          <li><a href="blog/wellness/sunscreen">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Health</a></li>
                                                          <li><a href="blog/wellness/sunscreen">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Oral Care</a></li>
                                                          <li><a href="blog/wellness/sunscreen">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Personal Hygiene</a></li>

                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="collapse" data-target="#homeMenu">
                                                         <i class="fa fa-angle-double-right">&nbsp; &nbsp; Natural Home</i>
                                                        </a>
                                                        <ul style="list-style: none;" class="collapse nav" id="homeMenu">
                                                         <li><a href="blog/naturalhome/beautifyingoil">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Gardening</a></li>
                                                          <li><a href="blog/naturalhome/sunscreen">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Household Products</a></li>
                                                          <li><a href="blog/naturalhome/body-wash">&nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-chevron-right"></i>&nbsp; &nbsp; Kitchen</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                        </div>

                                    <!--// Category Sidebar//-->

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
                                                                <a href="#"><img class=" imgs-thumbnail img-responsive" src="<?php echo $base_url ?>img/dish/dish2.jpg" alt="" /></a>
                                                            </div>
                                                            <div class="p">
                                                                <a href="recipe-single.html">Why you should not use soap with Triclosan</a>

                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="post-image">
                                                                <a href="#"><img class=" imgs-thumbnail img-responsive" src="<?php echo $base_url ?>img/toothpaste.jpg" alt="" /></a>
                                                            </div>
                                                            <div class="post-info">
                                                                <a href="recipe-single.html">What does FDA says about soap with Triclosan and SLS</a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="post-image">
                                                                <a href="#"><img class=" imgs-thumbnail img-responsive" src="<?php echo $base_url ?>img/dish/dish2.jpg" alt="" /></a>
                                                            </div>
                                                            <div class="post-info">
                                                                <a href="recipe-single.html">Vitae Nibh Un Odiosters</a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="post-image">
                                                                <a href="#"><img class=" imgs-thumbnail img-responsive" src<?php echo $base_url ?>img/dish/dish1.jpg" alt="" /></a>
                                                            </div>
                                                            <div class="post-info">
                                                                <a href="recipe-single.html">Vitae Nibh Un Odiosters</a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="post-image">
                                                                <a href="#"><img class=" imgs-thumbnail img-responsive" src="<?php echo $base_url ?>img/dish/dish2.jpg" alt="" /></a>
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
                                                                <a href="#"><img class=" imgs-thumbnail img-responsive" src="<?php echo $base_url ?>img/dish/dish2.jpg" alt="" /></a>
                                                            </div>
                                                            <div class="post-info">
                                                                <a href="recipe-single.html">Nullam Vitae Nibh Un Odiosters</a>

                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="post-image">
                                                                <a href="#"><img class=" imgs-thumbnail img-responsive" src="<?php echo $base_url ?><?php echo $base_url ?>img/dish/dish1.jpg" alt="" /></a>
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
                            </div>
                        </div>
                        <!-- // Sidebar // -->  
                    </div><!--//Row//-->
                </div>
                <!-- // Blog // -->
            </div>
        </div><!-- //Inner Page Content // -->
			
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
                                                        <img class="img-responsive" src="../../img/logo/ologo2.png" alt="Organeek"/>
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
                                                    <a href="#"><img class="dish img-responsive" src="../../img/dish/dish1.jpg" alt="" /></a>
                                                    <a href="#"><img class="dish img-responsive" src="../../img/dish/dish1.jpg" alt="" /></a>
                                                    <a href="#"><img class="dish img-responsive" src="../../img/dish/dish1.jpg" alt="" /></a>
                                                    <a href="#"><img class="dish img-responsive" src="../../img/dish/dish1.jpg" alt="" /></a>
                                                    <a href="#"><img class="dish img-responsive" src="../../img/dish/dish1.jpg" alt="" /></a>
                                                    <a href="#"><img class="dish img-responsive" src="../../img/dish/dish1.jpg" alt="" /></a>
                                                    <a href="#"><img class="dish img-responsive" src="../../img/dish/dish1.jpg" alt="" /></a>
                                                    <a href="#"><img class="dish img-responsive" src="../../img/dish/dish1.jpg" alt="" /></a>
                                                    <a href="#"><img class="dish img-responsive" src="../../img/dish/dish1.jpg" alt="" /></a>
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
                                                            <div class="fb-like-box" data-href="https://www.facebook.com/organeek" data-width="200" data-height="200" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
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
		<script src="../../js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="../../js/bootstrap.min.js"></script>
		<!-- Pretty Photo JS -->
		<script src="../../js/jquery.prettyPhoto.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="../../js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="../../js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="../../js/custom.js"></script>
		<!-- JS code for this page -->
		
	</body>	
</html>