
<nav class="navbar navbar-default navbar-right" role="navigation">
    <div class="container-fluid">
                                                        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

                                                        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo $base_url.'index.php' ?>"><img src="<?php echo $base_url ?>img/nav-menu/home-nav.png" class="img-responsive" alt="" />Home</a></li>
                
                <li class="dropdown">
                    <a href="<?php echo $base_url.'ingredients/all/' ?>" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $base_url ?>img/nav-menu/ingredients-nav.png" class="img-responsive" alt="" /> Ingredients <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $base_url.'ingredients/active_ingredients/' ?>">Active Ingredients</a></li>
                        <li><a href="<?php echo $base_url.'ingredients/clay/' ?>">Clay</a></li>
                        <li><a href="<?php echo $base_url.'ingredients/condiments/' ?>">Condiments</a></li>
                        <li><a href="<?php echo $base_url.'ingredients/dairy_products/' ?>">Dairy Products</a></li>
                        <li><a href="<?php echo $base_url.'ingredients/fermented_products/' ?>">Fermented Products</a></li>
                        <li><a href="<?php echo $base_url.'ingredients/fruits/' ?>">Fruits</a></li>
                        <li><a href="<?php echo $base_url.'ingredients/honey_products/' ?>">Honey Products</a></li>
                        <li><a href="<?php echo $base_url.'ingredients/oil_extract/' ?>">Oil & Extract</a></li>
                        <li><a href="<?php echo $base_url.'ingredients/seed_grains/' ?>">Seeds & Grains</a></li>
                        <li><a href="<?php echo $base_url.'ingredients/spices/' ?>">Spices</a></li>
                        <li><a href="<?php echo $base_url.'ingredients/tea/' ?>">Tea</a></li>
                        <li><a href="<?php echo $base_url.'ingredients/veggies/' ?>">Veggies</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="<?php echo $base_url.'recipe/all/' ?>" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $base_url ?>img/nav-menu/recipe-nav.png" class="img-responsive" alt="" /> Recipe <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $base_url.'recipe/all/' ?>">All</a></li>
                        <li><a href="<?php echo $base_url.'recipe/body_skin/' ?>">Body & Skin Care</a></li>
                        <li><a href="<?php echo $base_url.'recipe/face_care/' ?>">Face Care</a></li>
                        <li><a href="<?php echo $base_url.'recipe/hair/' ?>">Hair </a></li>
                        <li><a href="<?php echo $base_url.'recipe/household_products/' ?>">Household Products</a></li>
                        <li><a href="<?php echo $base_url.'recipe/personal_hygiene/' ?>">Personal Hygiene</a></li>
                        <li><a href="<?php echo $base_url.'recipe/wellness/' ?>">Wellness</a></li>

                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="blog.php" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $base_url ?>img/beauty1.png" class="img-responsive" alt="Blog" /> Blog <b class="caret"></b></a>
                    <ul class="dropdown-menu dropdown-md">
                        <li>
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                                    <!-- Menu Item -->
                                    <div class="menu-item">
                                                                                                                        <!-- Heading -->
                                        <h3>Beauty</h3>
                                                                                                                        <!-- Image -->
                                        <img src="<?php echo $base_url ?>img/nav-menu/beautyrecipe.jpg" class="img-responsive" alt="" />
                                                                                                                        <!-- Paragraph -->
                                        <p>Easy-to-follow beauty recipes without the nasty chemicals</p>
                                                                                                                        <!-- Button -->
                                        <a href="<?php echo $base_url.'beauty/recipe/' ?>" class="btn btn-danger btn-xs">View Menu</a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                                                                                                <!-- Menu Item -->
                                    <div class="menu-item">
                                                                                                                        <!-- Heading -->
                                        <h3>Wellness</h3>
                                                                                                                        <!-- Image -->
                                        <img src="<?php echo $base_url ?>img/nav-menu/beautyblog.jpg" class="img-responsive" alt="" />
                                                                                                                        <!-- Paragraph -->
                                        <p>All you need to know about beauty-related topics</p>
                                                                                                                        <!-- Button -->
                                        <a href="<?php echo $base_url.'beauty/blog/' ?>" class="btn btn-danger btn-xs">View Menu</a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                                                                                                <!-- Menu Item -->
                                    <div class="menu-item">
                                                                                                                        <!-- Heading -->
                                        <h3>Natural Home</h3>
                                                                                                                        <!-- Image -->
                                        <img src="<?php echo $base_url ?>img/nav-menu/beautyregimen.jpg" class="img-responsive" alt="" />
                                                                                                                        <!-- Paragraph -->
                                        <p>Sure guide to achieve and maintain beauty</p>
                                                                                                                        <!-- Button -->
                                        <a href="<?php echo $base_url.'beauty/regimen/' ?>" class="btn btn-danger btn-xs">View Menu</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="http://astore.amazon.com/organeek-20"> <img src="<?php echo $base_url ?>img/nav-menu/shoppingcart.png" class="img-responsive" alt="" /> Shop <b class="caret"></b></a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>