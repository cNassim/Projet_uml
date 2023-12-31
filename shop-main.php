<?php
session_start(); // Start the session if not started already
include('php/config.php');
$_SESSION['ch']=false;
    // Logout logic
    if (isset($_GET['logout'])) {
        unset($_SESSION['logged_in']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy(); // Optional: Destroy the session data completely
        header('Location: index.php');
        exit;
    }
$selectedRange = '';
if (isset($_GET['product_category'])){
	$product_category = $_GET['product_category'];
	$stmt = $conn->prepare("SELECT * FROM products WHERE product_category = ?");
	$stmt->bind_param("s", $product_category);
	$stmt->execute();
	$products = $stmt->get_result();
	}
else{
	$stmt = $conn->prepare("SELECT * FROM products");
	$stmt->execute();
	$products = $stmt->get_result();
	if (isset($_GET['range'])) {
		$selectedRange = $_GET['range'];
		switch ($selectedRange) {
			case 'All':
				$stmt = $conn->prepare("SELECT * FROM products");
				$stmt->execute();
				$products = $stmt->get_result();
				break;
			case '30' :
				$stmt = $conn->prepare("SELECT * FROM products WHERE product_price<=30");
				$stmt->execute();
				$products = $stmt->get_result();
				break;
			case '50' :
				$stmt = $conn->prepare("SELECT * FROM products WHERE product_price>=30 AND product_price<=50");
				$stmt->execute();
				$products = $stmt->get_result();
				break;
			case '100' :
				$stmt = $conn->prepare("SELECT * FROM products WHERE product_price>=50 AND product_price<=100");
				$stmt->execute();
				$products = $stmt->get_result();
				break;
			default :
				break;
		}
	}
}
if (isset($_GET['product_color'])){
	$product_color = $_GET['product_color'];
	$stmt = $conn->prepare("SELECT * FROM products WHERE product_color = ?");
	$stmt->bind_param("s", $product_color);
	$stmt->execute();
	$products = $stmt->get_result();
	}
$stmt1 = $conn->prepare("SELECT product_category, COUNT(*) AS count_per_category FROM products GROUP BY product_category;");
$stmt1->execute();
$nbr = $stmt1->get_result();
?>

<!doctype html>
<html lang="en">
<head>
	<title>ThriftIt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap2.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/styles-register.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl-carousel.css" rel="stylesheet">
	 <link href="css/lightbox.css" rel="stylesheet">

  </head>

  <body id="category" class="category">
  	
	<header class="header-area header-sticky text-center header-default">
		<div class="header-main-sticky">
		</div>
		<div class="header-main-head">
		
		<div class="header-main">
		<div class="container">
			<div class="header-middle float-lg-left float-md-left float-sm-left float-xs-none">
					<div class="logo">
									<a href="index.php"><img src="img/logos/logo.png" alt="logo" width="200" height="50" ></a>		</div>
			</div> 
			<div class="header-right d-flex d-xs-flex d-sm-flex justify-content-end float-right">
			<div class="user-info">
					<?php

    // Check if the user is logged in
    $isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'];

    if ($isLoggedIn) {
        // Display 'My Account' and 'Logout' if the user is logged in
        echo '
        <button type="button" class="btn">
            <i class="material-icons">perm_identity</i>
        </button>
        <div id="user-dropdown" class="user-menu">
            <ul>
                <li><a href="my-account.php" class="text-capitalize">my account</a></li>
                <li><a href="index.php?logout=1" class="text-capitalize">Logout</a></li>
            </ul>
        </div>';
    } else {
        // Display Register and Login options if the user is not logged in
        echo '
        <button type="button" class="btn">
            <i class="material-icons">perm_identity</i>
        </button>
        <div id="user-dropdown" class="user-menu">
            <ul>
                <li><a href="register.php" class="modal-view button">Register</a></li>
                <li><a href="login.php" class="modal-view button">Login</a></li>
            </ul>
        </div>';
    }
?>
			</div>
			<div class="cart-wrapper">
	<button type="button" class="btn">
				<i class="material-icons">shopping_cart</i>
				</button>
				<div id="cart-dropdown" class="user-menu">
		<ul>
			<li><a href="cart_page.php" class="modal-view button">View Cart</a></li>
			<li><a href="wishlist.php" class="modal-view button">Wishlist</a></li>
		</ul>
	</div>

          </div>

		</div>
		</div>
	</div>
	</div>

		<div class="menu">
		<div class="container">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-light d-sm-none d-xs-none d-lg-block navbar-full">
			
				<!-- Navbar brand -->
				<a class="navbar-brand text-uppercase d-none" href="#">Navbar</a>
				
				<!-- Collapse button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
				aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				
				<!-- Collapsible content -->
				<div class="collapse navbar-collapse">
				
				<!-- Links -->
				<ul class="navbar-nav m-auto justify-content-center">
				<li class="nav-item dropdown active">
				<a class="nav-link text-uppercase" href="index.php">
					Home
				  <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown mega-dropdown">
				<a class="nav-link text-uppercase" href="shop-main.php">Shop</a>
				<li class="nav-item dropdown active">
				<a class="nav-link text-uppercase dropdown-toggle" href="shop-main.php">
					Outfit Finder
				  <span class="sr-only">(current)</span></a>
				  <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu1">
					  <div class="sub-menu mb-xl-0 mb-4">
						  <ul class="list-unstyled">
							  <li>
								  <a class="menu-item pl-0" href="valises.php">
								Trip Planner</a> </li>
							  <li>
								  <a class="menu-item pl-0" href="advices.php">
								Style Tips
								</a>
							</li>
							<li>
								<a class="menu-item pl-0" href="suggest.php">
								DailyOutfitSuggestions
							  </a>
						  </li>
						  </ul>
					  </div>
				  </div>
				</li>
				<li class="nav-item">
				<a class="nav-link text-uppercase" href="about-us.php">About us </a>
				</li>
				<!-- Links -->
				</div>
				<!-- Collapsible content -->
				
				</nav>
		</div>
		</div>
		</div>
		</div>
		</header>
	<nav aria-label="breadcrumb" class="w-100 float-left">
  <ol class="breadcrumb parallax justify-content-center" data-source-url="img/banner/another.png" style="background-image: url(&quot;img/banner/parallax.jpg&quot;); background-position: 50% 0.809717%;">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">shop</li>
  </ol>
</nav>
	<div class="main-content w-100 float-left"> 
		<div class="container">
			<div class="row">
				<div class="content-wrapper col-xl-9 col-lg-9 order-lg-2">
				<div class="block-category mb-30 w-100 float-left">
					<div class="category-cover">
						<img src="img/banner/category-banner.png" alt="category-banner"/>
					</div>
					<div class="title-category text-capitalize">women</div>
					<div class="category-description">Dive into a world of timeless elegance and sustainable fashion. Here, every piece tells a story—curated with care and handpicked for its unique style and quality. From chic dresses to vintage accessories, our collection celebrates individuality and conscious fashion choices. Rediscover the joy of fashion exploration with our ever-evolving selection, where each find is a treasure waiting to be cherished. Embrace the allure of eco-conscious shopping while embracing your distinct style at our Women's Thriftit Haven.</div>
				</div>
				<div class="tab-content text-center products w-100 float-left">
				<div class="tab-pane grid fade active" id="grid" role="tabpanel">
				<div class="row">
				<?php while ($row = $products->fetch_assoc()){ ?>
				<div class="product-layouts col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="product-thumb">
						<div class="image zoom">
							<a href="<?php echo "product-details.php?product_id=".$row['product_id'];?>">
							<img src="img/products/<?php echo $row['product_image'];?>"/>
							<img src="img/products/<?php echo $row['product_image2'];?>" class="second_image img-responsive"/></a>
						</div>
						<div class="thumb-description">
							<div class="caption">
								<h4 class="product-title text-capitalize"><a href="<?php echo "product-details.php?product_id=".$row['product_id'];?>"><?php echo $row['product_name']; ?></a></h4>
							</div>
							<div class="rating">
								<div class="product-ratings d-inline-block align-middle">
									<span class="fa fa-stack"><i class="material-icons">star</i></span>
									<span class="fa fa-stack"><i class="material-icons">star</i></span>
									<span class="fa fa-stack"><i class="material-icons">star</i></span>
									<span class="fa fa-stack"><i class="material-icons off">star</i></span>
									<span class="fa fa-stack"><i class="material-icons off">star</i></span>
								</div>
							</div>
							<div class="price">
								<div class="regular-price">$<?php echo $row['product_price']; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<!--Category-->
		<div class="left-column sidebar col-xl-3 col-lg-3 order-lg-1">
			<form action="shop-main.php" methode="POST">
				<div class="sidebar-filter left-sidebar w-100 float-left">
					<div class="title">
						<a data-toggle="collapse" href="#sidebar-main" aria-expanded="false" aria-controls="sidebar-main" class="d-lg-none block-toggler">Product Categories</a>
					</div>
					<div id="sidebar-main" class="sidebar-main collapse">
						<div class="sidebar-block categories">
						<h3 class="widget-title"><a data-toggle="collapse" href="#categoriesMenu" role="button" aria-expanded="true" aria-controls="categoriesMenu">Categories</a></h3>
						<div id="categoriesMenu" class="expand-lg collapse show">
							<div class="nav nav-pills flex-column mt-4">
								<a href="<?php echo "shop-main.php"; $_SESSION['product_category']=NULL;?>" class="nav-link d-flex justify-content-between mb-2 "><span>All</span><span class="sidebar-badge">32</span></a>
								<?php while ($row1 = $nbr->fetch_assoc()){ ?>
								<a href="<?php echo "shop-main.php?product_category=".$row1['product_category'];?>" class="nav-link d-flex justify-content-between mb-2 "><span><?php echo $row1['product_category']; ?></span><span class="sidebar-badge"><?php echo $row1['count_per_category']; ?></span></a>
								<?php }?>
							</div>
						</div>
					</div>
					<div class="sidebar-block color">
						<h3 class="widget-title"><a data-toggle="collapse" href="#color" role="button" aria-expanded="true" aria-controls="color">Color</a></h3>
						<div id="color" class="sidebar-widget-option-wrapper collapse show">
							<div class="color-inner">
								<div class="sidebar-widget-option">
									<a href="shop-main.php?product_color=Black" style="background-color: #000000;"></a>
									Black
								</div>
								<div class="sidebar-widget-option">
									<a href="shop-main.php?product_color=Blue" style="background-color: #11426b;"></a>
									Blue
								</div>
								<div class="sidebar-widget-option">
									<a href="shop-main.php?product_color=Brown" style="background-color: #7d5a3c;"></a>
									Brown
								</div>
								<div class="sidebar-widget-option">
									<a href="shop-main.php?product_color=White" style="background-color: #ffffff;"></a>
									White
								</div>
								<div class="sidebar-widget-option">
									<a href="shop-main.php?product_color=Beige" style="background-color: ##C8AD7F;"></a>
									Beige
								</div>
								<div class="sidebar-widget-option">
									<a href="shop-main.php?product_color=Gray" style="background-color: #808080 ;"></a>
									Gray
								</div>
								<div class="sidebar-widget-option">
									<a href="shop-main.php?product_color=Green" style="background-color: #008000;"></a>
									Green
								</div>
								<div class="sidebar-widget-option">
									<a href="shop-main.php?product_color=Burgundy" style="background-color: #800020;"></a>
									Burgundy
								</div>
								<div class="sidebar-widget-option">
									<a href="shop-main.php?product_color=Light_blue" style="background-color: #ADD8E6"></a>
									Light blue
								</div>
							</div>
						</div>
					</div>
					<div class="sidebar-block size">
						<h3 class="widget-title"><a data-toggle="collapse" href="#size" role="button" aria-expanded="true" aria-controls="size">Price</a></h3>
						<div id="size" class="sidebar-widget-option-wrapper collapse show">
							<div class="size-inner">
								<form method="GET">
									<div class="sidebar-widget-option">
									<input type="radio" name="range" id="All" value="All" <?php if ($selectedRange === 'All') echo 'checked'; ?> onchange="this.form.submit()">
									<label for="size-1">All</label>
								</div>
								<div class="sidebar-widget-option">
									<input type="radio" name="range" id="30" value="30" <?php if ($selectedRange === '30') echo 'checked'; ?> onchange="this.form.submit()">
									<label for="size-2">&le; $30</label>
								</div>
								<div class="sidebar-widget-option">
									<input type="radio" name="range" id="50" value="50" <?php if ($selectedRange === '50') echo 'checked'; ?> onchange="this.form.submit()">
									<label for="size-3">$30 &le; X &le; $50<span></label>
								</div>
								<div class="sidebar-widget-option">
									<input type="radio" name="range" id="100" value="100" <?php if ($selectedRange === '100' ) echo 'checked'; ?> onchange="this.form.submit()">
									<label for="size-4">$50 &le; X &le; $100</label>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
</div>
</div>
    

 <!-- Footer -->
 <footer class="page-footer font-small footer-default">
		<div class="container text-center text-md-left">
			<div class="row">
				<div class="col-md-2 footer-cms footer-column">
					<div class="ttcmsfooter">
						<div class="footer-logo"><img src="img/logos/footer-logo.png" alt="footer-logo"></div>
						<div class="footer-desc">"Stylish Choices, Sustainable Impact – ThriftIt"</div>
					</div>
				</div>
				<div class="col-md-2 footer-column">
					<div class="title">
						<a href="#company" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">QUICK LINKS</a> </div>
					<ul id="company" class="list-unstyled collapse">
						<li>
							<a href="index.php">Home</a> </li>
						<li>
							<a href="about-us.php">About Us</a> </li>
						<li>
							<a href="shop-main.php">Offers</a> </li>
						<li>
							<a href="about-us.php">Contact Us</a> </li>
					</ul>
				</div>
				<div class="col-md-2 footer-column">
					<div class="title">
						<a href="#products" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">ABOUT</a> </div>
					<ul id="products" class="list-unstyled collapse">
						<li>
							<a href="about-us.php">Who are we?</a> </li>
						<li>
							<a href="about-us.php">Our story</a> </li>
						<li>
							<a href="about-us.php">Our mission</a> </li>
					</ul>

				</div>
				<div class="col-md-2 footer-column">
					<div class="title">
						<a href="#account" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">HELP CENTER</a> </div>
					<ul id="account" class="list-unstyled collapse">
						<li>
							<a href="my-account.php">personal info</a> </li>
						<li>
							<a href="cart_page.php">Orders</a> </li>
						<li>
							<a href="wishlist.php">my wishlists</a> </li>
						<li>
							<a href="my-account.php">Sign In / Sign Up</a> </li>
					</ul>

				</div>
				<div class="col-md-2 footer-column">
					<div class="title">
						<a href="#information" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">store information</a> </div>
					<ul id="information" class="list-unstyled collapse">
						<li class="contact-detail links">
							<span class="address">
					  <span class="icon"><i class="material-icons">insta</i></span>
							<span class="data">ThriftiT_Shop</span> </span>
						</li>
						<li class="links">
							<span class="contact">
					  <span class="icon"><i class="material-icons">phone</i></span>
							<span class="data"><a href="tel:(99)55669999">+(212) 788776633</a></span> </span>
						</li>
						<li class="links">
							<span class="email"> 
					  <span class="icon"><i class="material-icons">email</i></span>
							<span class="data"><a href="mailto:demo.store@gmail.com">support@thriftit.com</a></span> </span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Copyright -->
		<div class="footer-bottom-wrap">
			<div class="container">
				<div class="row">
					<div class="footer-copyright text-center py-3">
						© 2023 - Copyright Claimed -ThriftiT™
					</div>
				</div>
			</div>
		</div>
		<a href="#" id="goToTop" title="Back to top" class="btn-primary"><i class="material-icons arrow-up">keyboard_arrow_up</i></a>

	</footer>
  <!-- Footer -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/ResizeSensor.min.js"></script>
	<script src="js/theia-sticky-sidebar.min.js"></script>
	<script src="js/jquery.countdown.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
		</body>
</html>