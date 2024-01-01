<?php
    session_start(); // Start the session if not started already
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
?>
<!doctype html>
<html lang="en">
  <head>
  	    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Demo powered by Templatetrip">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,900" rel="stylesheet"> 
	
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/styles.css" rel="stylesheet">
	<link href="css/styles-register.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl-carousel.css" rel="stylesheet">
	 <link href="css/lightbox.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  </head>

  <body class="index layout1">
  	
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
			<li><a href="checkout_page.php" class="modal-view button">Checkout</a></li>
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
  <ol class="breadcrumb parallax justify-content-center" data-source-url="img/banner/parallax.jpg" style="background-image: url(&quot;img/banner/parallax.jpg&quot;); background-position: 50% 0.809717%;">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
  </ol>
</nav>
    
	<div class="cart-area table-area pt-110 pb-95 float-left w-100">
            <div class="container">
			<div class=" cart-wrapper float-left w-100">
                <div class="table-responsive">
                    <table class="table product-table text-center">
                        <thead>
                            <tr>
                                <th class="table-remove text-uppercase">remove</th>
                                <th class="table-image text-uppercase">image</th>
                                <th class="table-p-name text-uppercase">product</th>
                                <th class="table-p-price text-uppercase">price</th>
                                <th class="table-color text-uppercase">Color</th>
                                <th class="table-total text-uppercase">add to cart</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-remove"><button><i class="material-icons">delete</i></button></td>
                                <td class="table-image"><a href="product-details.php"><img src="img/products/02.jpg" alt=""></a></td>
                                <td class="table-p-name text-capitalize"><a href="product-details.php">aspetur autodit autfugit</a></td>
                                <td class="table-p-price"><p>$100.00</p></td>
                                <td class="table-p-qty">in stock</td>
                                <td class="table-addtocart"><a href="cart_page.php" class="btn-primary btn">Add to cart</a></td>
                            </tr>
                            <tr>
                                <td class="table-remove"><button><i class="material-icons">delete</i></button></td>
                                <td class="table-image"><a href="product-details.php"><img src="img/products/03.jpg" alt=""></a></td>
                                <td class="table-p-name text-capitalize"><a href="product-details.php">magni dolores eosquies</a></td>
                                <td class="table-p-price"><p>$100.00</p></td>
                                <td class="table-p-qty">in stock</td>
                                <td class="table-addtocart"><a href="cart_page.php" class="btn-primary btn">Add to cart</a></td>
                            </tr>
                        </tbody>
                    </table>
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
                            <a href="shop.php">Offers</a> </li>
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
                            <a href="blog-details.php">personal info</a> </li>
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
	<script src="js/parallax.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/ResizeSensor.min.js"></script>
	<script src="js/theia-sticky-sidebar.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/jquery.countdown.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>	
	<script src="js/jquery.sticky-kit.min.js"></script>
	
		
			<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ac1aabb4b401e45400e4197/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->	   
  </body>
</html>




