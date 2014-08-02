<?php
session_start();
include_once 'config.php';
include_once '../admin/include/config.php';
include_once 'class/class_recipe.php';
$recipe = new Recipe();
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
                <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>
                <link href="http://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53bb9bff3d4d308e"></script>

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
		<!-- Modal End -->
		
		<!-- Top Banner -->
                <?php include 'socialheader.php';?>
                <!-- //Top Banner //-->
                
                <!-- Header Menu-->    
                <div class="header">
                    <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-sm-5">
                                        <!-- Link -->
                                        <a href="index.php">
                                                <!-- Logo area -->
                                                <div class="logo">
                                                        <img class="img-responsive" src="img/logo/ologo2.png" alt="Organeek"/>
                                                        <!-- Heading 
                                                        <h1>Organeek</h1>-->
                                                        <!-- Paragraph -->
                                                        <p>Celebrating Beauty & Wellness</p>
                                                </div>
                                        </a>
                                </div>
                                <div class="col-md-8 col-sm-7">
                                        <!-- Navigation -->
                                        <?php include 'menu.php';?>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <!-- // Header Menu// -->
			
			<!-- Banner -->
                            <div class=" banner-bg">
                                <div class="banner">
                                        <div class="container">
                                                <!-- Heading -->
                                                <ol class="breadcrumb">
                                                        <li><a href="index.php">Home</a></li>
                                                        <li><a href="recipe.php">Recipe</a></li>
                                                        <li class="active">All</li>
                                                </ol>
                                                <div class="clearfix"></div>
                                        </div>
                                </div>
                            </div>
                        <!--// Banner //-->
			
                        <!-- Inner Content -->
                        <div class="inner-page padd">
			
                        <!-- Recipe  -->
                        <div class="body-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9 col-sm-12">
                                    <?php foreach($recipe->recipeList() as $a): ?>
                                        <div class="col-md-4"> 
                                            <div class="recipe-box">
                                                <!--Recipe Photo-->
                                                <div class="feature">
                                                    <div class="img-overlay1 img-responsive">
                                                        <img src="../admin/<?php echo $a['photo'] ?>" alt="">
                                                    </div>

                                                    <div class="feature-content">
                                                        <h3 class="h3-body-title color-text">
                                                            <a href="recipe-single.php?id=<?php echo $a['recipe_id'] ?>"><?php echo $a['title']; ?></a>
                                                        </h3>
                                                        <div class="recipe-overflow">
                                                            <p>
                                                                <?php
                                                                    $out = strlen($a['overview']) > 550 ? substr($a['overview'],0,550)."......." : $a['overview'];
                                                                    echo $out;
                                                                ?>
                                                            </p>
                                                        </div>
                                                        <div class="read-more">
                                                            <a href="recipe-single.php?id=<?php echo $a['recipe_id'] ?>">Read more...</a>
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
                                    <?php endforeach; ?> 
                                
                                    <!-- Pagination -->
                                        <ul class="pagination">
                                            <li class="disabled"><a href="#">&laquo;</a></li>
                                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">6</a></li>
                                            <li><a href="#">7</a></li>
                                            <li><a href="#">8</a></li>
                                            <li><a href="#">9</a></li>
                                            <li><a href="#">10</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    <!-- //Pagination // -->
                                </div> <!--// Recipe List//-->
                                
                            <!-- Sidebar Starts-->
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
                            </div>
                        </div>
                    </div> <!--//Inner Page// -->

                    <!-- Footer Start -->
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
                                                    <div class="social-banner">
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

                        </div><!-- / Wrapper End -->


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
                <!-- Star Rating-->
                <script src="../../js/star-rating.js"></script>
		<!-- JS code for this page -->
		<script>
		
		</script>
	</body>	
</html>