<?php
session_start();
include_once '../class/class_recipe.php';
include_once '../include/config.php';
$recipe = new Recipe();

if(!isset($_SESSION['username'])){
    header("Location: ../login.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["photo"]["name"]);
    $extension = end($temp);

 /*   if ((($_FILES["photo"]["type"] == "image/gif")
    || ($_FILES["photo"]["type"] == "image/jpeg")
    || ($_FILES["photo"]["type"] == "image/jpg")
    || ($_FILES["photo"]["type"] == "image/pjpeg")
    || ($_FILES["photo"]["type"] == "image/x-png")
    || ($_FILES["photo"]["type"] == "image/png"))
    && ($_FILES["photo"]["size"] < 20000000)
    && in_array($extension, $allowedExts)) {*/
        if ($_FILES["photo"]["error"] > 0) {
            //echo "Return Code: " . $_FILES["photo"]["error"] . "<br>";
            $recipe->title = mysql_escape_string($_POST['title']);
                $recipe->benefits = mysql_escape_string($_POST['benefits']);
                $recipe->overview = mysql_escape_string($_POST['overview']);
                $recipe->instructions = mysql_escape_string($_POST['instructions']);
                $recipe->ingredients = mysql_escape_string($_POST['ingredients']);
                $recipe->category = mysql_escape_string($_POST['category']);
                $recipe->sub_category = mysql_escape_string($_POST['sub_category']);
                $recipe->sub_category2 = mysql_escape_string($_POST['sub_category2']);
                $recipe->photo = 'recipes/images/'.$_FILES['photo']['name'];
                $recipe->thumbnail = 'recipes/thumbnail/'.$_FILES['photo']['name'];
                $recipe->recommended = mysql_escape_string($_POST['recommended']);
                $recipe->recipeAdd();
        } else {
            //echo "Upload: " . $_FILES["photo"]["name"] . "<br>";
            //echo "Type: " . $_FILES["photo"]["type"] . "<br>";
            //echo "Size: " . ($_FILES["photo"]["size"] / 1024) . " kB<br>";
            //echo "Temp file: " . $_FILES["photo"]["tmp_name"] . "<br>";
            if (file_exists("images/" . $_FILES["photo"]["name"])) {
                //echo $_FILES["photo"]["name"] . " already exists. ";
            } else {
                move_uploaded_file($_FILES["photo"]["tmp_name"],
                "images/" . $_FILES["photo"]["name"]);
                $path = 'images/';
                $thumb = 'thumbnail/';
                createThumbs($path, $thumb, '200');
                //echo "Stored in: " . "images/" . $_FILES["photo"]["name"];
                $recipe->title = mysql_escape_string($_POST['title']);
                $recipe->benefits = mysql_escape_string($_POST['benefits']);
                $recipe->overview = mysql_escape_string($_POST['overview']);
                $recipe->instructions = mysql_escape_string($_POST['instructions']);
                $recipe->ingredients = mysql_escape_string($_POST['ingredients']);
                $recipe->category = mysql_escape_string($_POST['category']);
                $recipe->sub_category = mysql_escape_string($_POST['sub_category']);
                $recipe->sub_category2 = mysql_escape_string($_POST['sub_category2']);
                $recipe->photo = 'recipes/images/'.$_FILES['photo']['name'];
                $recipe->thumbnail = 'recipes/thumbnail/'.$_FILES['photo']['name'];
                $recipe->recommended = mysql_escape_string($_POST['recommended']);
                $recipe->recipeAdd();
            }
        }
   // } else {
//            echo "Invalid file";
//    }
    
    
    
}
function createThumbs( $pathToImages, $pathToThumbs, $thumbWidth ) 
{
  // open the directory
  $dir = opendir( $pathToImages );

  // loop through it, looking for any/all JPG files:
  while (false !== ($fname = readdir( $dir ))) {
    // parse path for the extension
    $info = pathinfo($pathToImages . $fname);
    // continue only if this is a JPEG image
    if ( strtolower($info['extension']) == 'jpg' ) 
    {
      echo "Creating thumbnail for {$fname} <br />";

      // load image and get image size
      $img = imagecreatefromjpeg( "{$pathToImages}{$fname}" );
      $width = imagesx( $img );
      $height = imagesy( $img );

      // calculate thumbnail size
      $new_width = $thumbWidth;
      $new_height = floor( $height * ( $thumbWidth / $width ) );

      // create a new temporary image
      $tmp_img = imagecreatetruecolor( $new_width, $new_height );

      // copy and resize old image into new image 
      imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );

      // save thumbnail into a file
      imagejpeg( $tmp_img, "{$pathToThumbs}{$fname}" );
    }
  }
  // close the directory
  closedir( $dir );
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="../css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                AdminLTE
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $_SESSION['username'] ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Charts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
                                <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
                                <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Blog</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="blogs/add.php"><i class="fa fa-angle-double-right"></i> Add Blog</a></li>
                                <li><a href="blogs/index.php"><i class="fa fa-angle-double-right"></i> List of Blogs</a></li>                                
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Recipe</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add.php"><i class="fa fa-angle-double-right"></i> Add Recipe</a></li>
                                <li><a href="index.php"><i class="fa fa-angle-double-right"></i> List of Recipe</a></li>                                
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Users</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../users/add.php"><i class="fa fa-angle-double-right"></i> Add User</a></li>
                                <li><a href="../users/index.php"><i class="fa fa-angle-double-right"></i> List of Users</a></li>                                
                            </ul>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Orders</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Add Order</a></li>
                                <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> List of Order</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Recipe
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-10 col-xs-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Add Recipe</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="add.php" method="post" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category">
                                                <option value="--">--</option>
                                                <option value="Beauty">Beauty</option>
                                                <option value="Wellness">Wellness</option>
                                                <option value="Natural Home">Natural Home</option>  
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Category</label>
                                            <select class="form-control" name="sub_category">
                                                <option value="--">--</option>
                                                <option value="Face Care">Face Care</option>
                                                <option value="Body and Skin Care">Body and Skin Care</option>
                                                <option value="Household Products">Household Products</option>
                                                <option value="Wellness">Wellness</option>
                                                <option value="Hair">Hair</option>
                                                <option value="Personal Hygiene">Personal Hygiene</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Category2</label>
                                            <select class="form-control" name="sub_category2">
                                                <option value="--">--</option>
                                                <option value="Beautifying Oil">Beautifying Oil</option>
                                                <option value="C Serum">C Serum</option>
                                                <option value="Cleanser">Cleanser</option>
                                                <option value="Exfoliator">Exfoliator</option>
                                                <option value="Facial Scrub">Facial Scrub</option>
                                                <option value="Mask">Mask</option>
                                                <option value="Moisturizer/Cream">Moisturizer/Cream</option>
                                                <option value="Toner & Mist">Toner & Mist</option>
                                                <option value="Whitening/Lightening">Whitening/Lightening</option>
                                                <option value="Body Wash">Body Wash</option>
                                                <option value="Body Scrub">Body Scrub</option>
                                                <option value="Soap">Soap</option>
                                                <option value="Clarifying Shampoo">Clarifying Shampoo</option>
                                                <option value="Conditioner">Conditioner</option>
                                                <option value="Hair Mask">Hair Mask</option>
                                                <option value="Hair Spray">Hair Spray</option>
                                                <option value="Hair Voluminizer">Hair Voluminizer</option>
                                                <option value="Lightening Shampoo & Conditioner">Lightening Shampoo & Conditioner</option>
                                                <option value="Shampoo">Shampoo</option>
                                                <option value="No-poo Recipe">No-poo Recipe</option>
                                                <option value="Air Freshener">Air Freshener</option>
                                                <option value="Cleaner">Cleaner</option>
                                                <option value="Deodorizer">Deodorizer</option>
                                                <option value="Dishwasher Soap">Dishwasher Soap</option>
                                                <option value="Disinfectant">Disinfectant</option>
                                                <option value="Fabric Softener">Fabric Softener</option>
                                                <option value="Laundry Detergent">Laundry Detergent</option>
                                                <option value="Stain Remover">Stain Remover</option>
                                                <option value="Breath Freshener">Breath Freshener</option>
                                                <option value="Deodorant">Deodorant</option>
                                                <option value="Feminine Hygiene Solution">Feminine Hygiene Solution</option>
                                                <option value="Hair Removal">Hair Removal</option>
                                                <option value="Mouthwash">Mouthwash</option>
                                                <option value="Toothpaste/Tooth Powder">Toothpaste/Tooth Powder</option>
                                                <option value="Fermented Product">Fermented Product</option>
                                                <option value="Healthy Beverage">Healthy Beverage</option>
                                                <option value="Healthy Food">Healthy Food</option>
                                                <option value="Kefir">Kefir</option>
                                                <option value="Tincture">Tincture</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label>Benefits</label>
                                            <textarea id="editor1" rows="10" cols="80" name="benefits">
                                            Use SOURCE BUTTON
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Overview</label>
                                            <textarea id="editor2" rows="10" cols="80" name="overview">
                                            Use SOURCE BUTTON
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Directions</label>
                                            <textarea id="editor3" rows="10" cols="80" name="instructions">
                                            Use SOURCE BUTTON
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Recommended Recipe</label>
                                            <textarea id="editor4" rows="10" cols="80" name="recommended">
                                            Enter here
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Ingredients</label>
                                            <textarea id="editor5" rows="10" cols="80" name="ingredients">
                                            Enter here
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <input type="file" id="exampleInputFile" name="photo">
                                            <p class="help-block">Upload picture here</p>
                                        </div>
                                        
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                            
                        </div><!-- ./col -->
                        
                    </div><!-- /.row -->

                    <!-- top row -->
                    
                    <!-- /.row -->

                    <!-- Main row -->
                    

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../js/AdminLTE/demo.js" type="text/javascript"></script>        
        <!-- CK Editor -->
        <script src="../js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="../js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                CKEDITOR.replace('editor2');
                CKEDITOR.replace('editor3');
                CKEDITOR.replace('editor4');
                CKEDITOR.replace('editor5');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>

    </body>
</html>