<?php
session_start();
include_once '../../admin/include/config.php';
include_once '../../class/class_recipe.php';
include_once '../../config.php';
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
                <link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
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
                <?php include '../../socialheader.php';?>
                <!-- //Top Banner //-->
                
                <!-- Header Menu-->    
                <div class="header">
                    <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-sm-5">
                                        <!-- Link -->
                                        <a href="<?php echo $base_url ?>index.php">
                                                <!-- Logo area -->
                                                <div class="logo">
                                                    <img class="img-responsive" src="../../img/logo/ologo2.png" alt="Organeek"/>
                                                        <!-- Heading 
                                                        <h1>Organeek</h1>-->
                                                        <!-- Paragraph -->
                                                        <p>Celebrating Beauty & Wellness</p>
                                                </div>
                                        </a>
                                </div>
                                        <div class="col-md-8 col-sm-7">
                                        <!-- Navigation -->
                                        <?php include '../../menu.php';?>
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
                                                        <li><a href="<?php echo $base_url ?>index.php">Home</a></li>
                                                        <li><a href="<?php echo $base_url ?>recipe/all">Recipe</a></li>
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
                                        <div class="col-md-4 col-sm-4 col-xs-12"> 
                                            <div class="recipe-box">
                                                <!--Recipe Photo-->
                                                <div class="feature">
                                                    <div class="img-overlay1 img-overlay img-responsive">
                                                        <img src="../../admin/<?php echo $a['photo'] ?>" alt="">
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
                                    <div class="col-md-12 col-sm-12">
                                        <ul class="pagination">
                                            <li class="disabled"><a href="#">&laquo;</a></li>
                                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                    <!-- //Pagination // -->
                                </div> <!--// Recipe List//-->
                                
                                <div class="padd1"></div>
                    
                                    <!-- Sidebar-->
                                    <?php include '../../sidebar.php'; ?>
                                    <!--//Sidebar//-->
                                
                                </div> <!--//row//-->
                            </div> <!--.//container//-->
                        </div> <!--//body wrapper//-->
                    </div> <!--//Inner Page// -->

                   <!-- Footer -->
                    <?php include '../../footer.php'; ?>
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
                <!-- Star Rating-->
                <script src="../../js/star-rating.js"></script>
		<!-- JS code for this page -->
		<script>
		
		</script>
	</body>	
</html>