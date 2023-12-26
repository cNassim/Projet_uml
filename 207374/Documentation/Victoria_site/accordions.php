
<!doctype html>
<html lang="en">
  <head>
	<title>Fashion Template for Bootstrap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,900" rel="stylesheet"> 
	
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl-carousel.css" rel="stylesheet">
	 <link href="css/lightbox.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  </head>

  <body>
  	
	
    <header class="header-area header-sticky text-center header-default">
        <div class="header-main-sticky">
            <div class="header-main-head">

                <div class="header-main">
                    <div class="container">
                        <div class="header-middle float-left">
                            <div class="logo">
                                <a href="index.php"><img src="img/logos/logo.png" alt="NatureCircle"></a>
                            </div>
                        </div>
                        <div class="header-right d-flex d-xs-block d-sm-flex justify-content-end float-right">
                            <div class="user-info">
                                <button type="button" class="btn">
                                    <i class="material-icons">perm_identity</i>
                                </button>
                                <div id="user-dropdown" class="user-menu">
                                    <ul>
                                        <li><a href="my-account.php" class="text-capitalize">my account</a></li>
                                        <li><a href="#" class="modal-view button" data-toggle="modal" data-target="#modalRegisterForm">Register</a></li>
                                        <li><a href="#" class="modal-view button" data-toggle="modal" data-target="#modalLoginForm">login</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cart-wrapper">
                                <button type="button" class="btn">
                                    <i class="material-icons">shopping_cart</i>
                                    <span class="ttcount">2</span>
                                </button>
                                <div id="cart-dropdown" class="cart-menu">
                                    <ul class="w-100 float-left">
                                        <li>
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">
                                                            <a href="#"><img src="img/products/01.jpg" alt="01" title="01"></a>
                                                        </td>
                                                        <td class="text-left product-name"><a href="#">aliquam quaerat voluptatem</a>
                                                            <div class="quantity float-left w-100">
                                                                <span class="cart-qty">1 × </span>
                                                                <span class="text-left price"> $20.00</span>
                                                            </div>
                                                        </td>
                                                        <td class="text-center close"><a class="close-cart"><i class="material-icons">close</i></a></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <table class="table price mb-30">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left"><strong>Total</strong></td>
                                                        <td class="text-right"><strong>$2,122.00</strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                        <li class="buttons w-100 float-left">
                                            <form action="cart_page.php">
                                                <input class="btn pull-left mt_10 btn-primary btn-rounded w-100" value="View cart" type="submit">
                                            </form>
                                            <form action="checkout_page.php">
                                                <input class="btn pull-right mt_10 btn-primary btn-rounded w-100" value="Checkout" type="submit">
                                            </form>
                                        </li>
                                    </ul>
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
            <a class="nav-link text-uppercase" href="shop.php">Shop</a>
            <li class="nav-item dropdown active">
            <a class="nav-link text-uppercase dropdown-toggle" href="shop.php">
                Outfit Finder
              <span class="sr-only">(current)</span></a>
              <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu1">
                  <div class="sub-menu mb-xl-0 mb-4">
                      <ul class="list-unstyled">
                          <li>
                              <a class="menu-item pl-0" href="index.php">
                            Preparation de valises</a> </li>
                          <li>
                              <a class="menu-item pl-0" href="index2.php">
                            Cas n2 (Zineb abdi3i rah nsit smiya) 
                            </a>
                        </li>
						<li>
							<a class="menu-item pl-0" href="accordions.php">
							habada law
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
    </header>
	<nav aria-label="breadcrumb" class="w-100 float-left">
  <ol class="breadcrumb parallax justify-content-center" data-source-url="img/banner/parallax.jpg" style="background-image: url(&quot;img/banner/parallax.jpg&quot;); background-position: 50% 0.809717%;">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
  </ol>
</nav>
    <div id="accordion-main">
			<div class="container">
	<div class="accordion-title tt-toggle w-100 float-left">
		<div class="main-title w-100 float-left">
		<div class="title">
		Accordion 
		</div>
		<div class="code">
			code
		</div>
		</div>
		<div class="code-content w-100 float-left">
		<div class="code-content-main">
				<div class="tt-innertitle w-100 float-left text-capitalize">example 1 code</div>
		&lt;div id="accordion" class=" w-100 float-left"&gt;
			  &lt;div class="card"&gt;
				&lt;div class="card-header" id="headingOne"&gt;
				  &lt;h5 class="mb-0"&gt;
					&lt;button class="btn btn-link float-left w-100 text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"&gt;
					  Lorem ipsum
					&lt;/button&gt;
				  &lt;/h5&gt;
				&lt;/div&gt;
			
				&lt;div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion"&gt;
				  &lt;div class="card-body"&gt;
					Quisque egestas nibh vel ante eleifend, ac venenatis diam rhoncus. Proin sit amet lacus non nisi convallis ultrices ac vel diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin ante nunc, pharetra non justo id, hendrerit dictum quam. Nullam ut dui tempus, pretium erat ac, fringilla ligula. 
				  &lt;/div&gt;
				&lt;/div&gt;
			  &lt;/div&gt;
			  &lt;div class="card"&gt;
				&lt;div class="card-header" id="headingTwo"&gt;
				  &lt;h5 class="mb-0"&gt;
					&lt;button class="btn btn-link collapsed float-left w-100 text-left" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"&gt;
					  Quisque purus
					&lt;/button&gt;
				  &lt;/h5&gt;
				&lt;/div&gt;
				&lt;div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"&gt;
				  &lt;div class="card-body"&gt;
					Quisque lacinia dolor enim. Nulla facilisi. Integer at aliquam magna. Quisque metus purus, vulputate non dolor sit amet, iaculis finibus nibh. Cras ac elit viverra, dignissim neque ut, interdum orci. Quisque venenatis neque at quam finibus, a molestie urna porttitor. Nunc a sem dapibus nisl aliquet aliquam sed pretium ipsum. 
				  &lt;/div&gt;
				&lt;/div&gt;
			  &lt;/div&gt;
			  &lt;div class="card"&gt;
				&lt;div class="card-header" id="headingThree"&gt;
				  &lt;h5 class="mb-0"&gt;
					&lt;button class="btn btn-link collapsed float-left w-100 text-left" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"&gt;
					  Nulla iaculis tellus
					&lt;/button&gt;
				  &lt;/h5&gt;
				&lt;/div&gt;
				&lt;div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion"&gt;
				  &lt;div class="card-body"&gt;
				   Suspendisse tristique arcu at diam fringilla elementum. In in velit quis nulla pulvinar aliquam eu et diam. Curabitur lacinia euismod molestie. Vivamus blandit aliquet sodales. Cras pulvinar risus ut vehicula commodo. Sed eget odio ullamcorper, rhoncus libero non, scelerisque leo. Donec id accumsan lectus, sit amet aliquet massa.
				  &lt;/div&gt;
				&lt;/div&gt;
			  &lt;/div&gt;
	  &lt;/div&gt;
	  </div>
	  <div class="code-content-main">
				<div class="tt-innertitle w-100 float-left text-capitalize">example 2 code</div>
		&lt;div id="accordion1" class=" w-100 float-left"&gt;
			  &lt;div class="card"&gt;
				&lt;div class="card-header" id="headingOne1"&gt;
				  &lt;h5 class="mb-0"&gt;
					&lt;button class="btn btn-link float-left w-100 text-left" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne"&gt;
					  Lorem ipsum
					&lt;/button&gt;
				  &lt;/h5&gt;
				&lt;/div&gt;
				&lt;div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordion1"&gt;
				  &lt;div class="card-body"&gt;
					Quisque egestas nibh vel ante eleifend, ac venenatis diam rhoncus. Proin sit amet lacus non nisi convallis ultrices ac vel diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin ante nunc, pharetra non justo id, hendrerit dictum quam. Nullam ut dui tempus, pretium erat ac, fringilla ligula. 
				  &lt;/div&gt;
				&lt;/div&gt;
			  &lt;/div&gt;
			  &lt;div class="card"&gt;
				&lt;div class="card-header" id="headingTwo1"&gt;
				  &lt;h5 class="mb-0"&gt;
					&lt;button class="btn btn-link collapsed float-left w-100 text-left" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo"&gt;
					  Quisque purus
					&lt;/button&gt;
				  &lt;/h5&gt;
				&lt;/div&gt;
				&lt;div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1" data-parent="#accordion1"&gt;
				  &lt;div class="card-body"&gt;
					Quisque lacinia dolor enim. Nulla facilisi. Integer at aliquam magna. Quisque metus purus, vulputate non dolor sit amet, iaculis finibus nibh. Cras ac elit viverra, dignissim neque ut, interdum orci. Quisque venenatis neque at quam finibus, a molestie urna porttitor. Nunc a sem dapibus nisl aliquet aliquam sed pretium ipsum. 
				  &lt;/div&gt;
				&lt;/div&gt;
			  &lt;/div&gt;
			  &lt;div class="card"&gt;
				&lt;div class="card-header" id="headingThree1"&gt;
				  &lt;h5 class="mb-0"&gt;
					&lt;button class="btn btn-link collapsed float-left w-100 text-left" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree"&gt;
					  Nulla iaculis tellus
					&lt;/button&gt;
				  &lt;/h5&gt;
				&lt;/div&gt;
				&lt;div id="collapseThree1" class="collapse" aria-labelledby="headingThree1" data-parent="#accordion1"&gt;
				  &lt;div class="card-body"&gt;
				   Suspendisse tristique arcu at diam fringilla elementum. In in velit quis nulla pulvinar aliquam eu et diam. Curabitur lacinia euismod molestie. Vivamus blandit aliquet sodales. Cras pulvinar risus ut vehicula commodo. Sed eget odio ullamcorper, rhoncus libero non, scelerisque leo. Donec id accumsan lectus, sit amet aliquet massa.
				  &lt;/div&gt;
				&lt;/div&gt;
			  &lt;/div&gt;
	  &lt;/div&gt;
	  </div>
</div>
	</div>
	
	<div class="accordion-example w-100 float-left">
	<div class="tt-innertitle w-100 float-left text-capitalize">accordion example 1 (default)</div>
	<div id="accordion" class=" w-100 float-left">
			  <div class="card">
				<div class="card-header" id="headingOne">
				  <h5 class="mb-0">
					<button class="btn btn-link float-left w-100 text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  Lorem ipsum
					</button>
				  </h5>
				</div>
			
				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				  <div class="card-body">
					Quisque egestas nibh vel ante eleifend, ac venenatis diam rhoncus. Proin sit amet lacus non nisi convallis ultrices ac vel diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin ante nunc, pharetra non justo id, hendrerit dictum quam. Nullam ut dui tempus, pretium erat ac, fringilla ligula. 
				  </div>
				</div>
			  </div>
			  <div class="card">
				<div class="card-header" id="headingTwo">
				  <h5 class="mb-0">
					<button class="btn btn-link collapsed float-left w-100 text-left" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					  Quisque purus
					</button>
				  </h5>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				  <div class="card-body">
					Quisque lacinia dolor enim. Nulla facilisi. Integer at aliquam magna. Quisque metus purus, vulputate non dolor sit amet, iaculis finibus nibh. Cras ac elit viverra, dignissim neque ut, interdum orci. Quisque venenatis neque at quam finibus, a molestie urna porttitor. Nunc a sem dapibus nisl aliquet aliquam sed pretium ipsum. 
				  </div>
				</div>
			  </div>
			  <div class="card">
				<div class="card-header" id="headingThree">
				  <h5 class="mb-0">
					<button class="btn btn-link collapsed float-left w-100 text-left" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					  Nulla iaculis tellus
					</button>
				  </h5>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
				  <div class="card-body">
				   Suspendisse tristique arcu at diam fringilla elementum. In in velit quis nulla pulvinar aliquam eu et diam. Curabitur lacinia euismod molestie. Vivamus blandit aliquet sodales. Cras pulvinar risus ut vehicula commodo. Sed eget odio ullamcorper, rhoncus libero non, scelerisque leo. Donec id accumsan lectus, sit amet aliquet massa.
				  </div>
				</div>
			  </div>
	  </div>
	 </div>
	  <div class="accordion-example w-100 float-left">
	  	<div class="tt-innertitle w-100 float-left text-capitalize">accordion example 2 (with icon)</div>
		<div id="accordion1" class=" w-100 float-left">
			  <div class="card">
				<div class="card-header" id="headingOne1">
				  <h5 class="mb-0">
					<button class="btn btn-link float-left w-100 text-left" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
					  Lorem ipsum
					</button>
				  </h5>
				</div>
			
				<div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordion1">
				  <div class="card-body">
					Quisque egestas nibh vel ante eleifend, ac venenatis diam rhoncus. Proin sit amet lacus non nisi convallis ultrices ac vel diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin ante nunc, pharetra non justo id, hendrerit dictum quam. Nullam ut dui tempus, pretium erat ac, fringilla ligula. 
				  </div>
				</div>
			  </div>
			  <div class="card">
				<div class="card-header" id="headingTwo1">
				  <h5 class="mb-0">
					<button class="btn btn-link collapsed float-left w-100 text-left" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
					  Quisque purus
					</button>
				  </h5>
				</div>
				<div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1" data-parent="#accordion1">
				  <div class="card-body">
					Quisque lacinia dolor enim. Nulla facilisi. Integer at aliquam magna. Quisque metus purus, vulputate non dolor sit amet, iaculis finibus nibh. Cras ac elit viverra, dignissim neque ut, interdum orci. Quisque venenatis neque at quam finibus, a molestie urna porttitor. Nunc a sem dapibus nisl aliquet aliquam sed pretium ipsum. 
				  </div>
				</div>
			  </div>
			  <div class="card">
				<div class="card-header" id="headingThree1">
				  <h5 class="mb-0">
					<button class="btn btn-link collapsed float-left w-100 text-left" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
					  Nulla iaculis tellus
					</button>
				  </h5>
				</div>
				<div id="collapseThree1" class="collapse" aria-labelledby="headingThree1" data-parent="#accordion1">
				  <div class="card-body">
				   Suspendisse tristique arcu at diam fringilla elementum. In in velit quis nulla pulvinar aliquam eu et diam. Curabitur lacinia euismod molestie. Vivamus blandit aliquet sodales. Cras pulvinar risus ut vehicula commodo. Sed eget odio ullamcorper, rhoncus libero non, scelerisque leo. Donec id accumsan lectus, sit amet aliquet massa.
				  </div>
				</div>
			  </div>
	  </div>
 </div>
	</div>
	</div>

    <!-- Footer -->
	<div class="block-newsletter"> 
				<div class="parallax" data-source-url="img/banner/parallax.jpg" style="background-image:url(img/banner/parallax.jpg); background-position:50% 65.8718%;">
				<div class="container">
					<div class="tt-newsletter col-sm-7">
							<h2 class="text-uppercase">Subscribe to our Newsletter</h2>
					</div>
					<div class="block-content col-sm-5">
					<form method="post" action="contact-us.php">
						<div class="input-group">
							<input type="email" name="email" value="" placeholder="Email address.." required="" class="form-control">
							<span class="input-group-btn">
			 <button class="btn btn-theme text-uppercase btn-primary" type="submit">Subscribe</button>
			 </span>
						</div>
					</form>
		</div>
				</div>
				</div>
			</div>
<footer class="page-footer font-small footer-default">
    <div class="container text-center text-md-left">
      <div class="row">
        <div class="col-md-2 footer-cms footer-column">
			<div class="ttcmsfooter">
              <div class="footer-logo"><img src="img/logos/footer-logo.png" alt="footer-logo"></div>
              <div class="footer-desc">At vero eos et accusamus et iusto odio dignissimos ducimus, duis faucibus enim vitae</div>
			  </div>
		</div>
        <div class="col-md-2 footer-column">
		<div class="title">
          <a href="#company" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">company</a>		  </div>
          <ul id="company" class="list-unstyled collapse">
            <li>
              <a href="#">search</a>            </li>
            <li>
              <a href="#">New Products</a>            </li>
            <li>
              <a href="category.php">Best Collection</a>            </li>
            <li>
              <a href="wishlist.php">wishlist</a>            </li>
          </ul>
        </div>
        <div class="col-md-2 footer-column">
			<div class="title">
          <a href="#products" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">products</a>		  </div>
          <ul id="products" class="list-unstyled collapse">
            <li>
              <a href="blog-details.php">blog</a>            </li>
            <li>
              <a href="about-us.php">about us</a>            </li>
            <li>
              <a href="contact-us.php">contact us</a>            </li>
            <li>
              <a href="my-account.php">my account</a>            </li>
          </ul>

        </div>
		<div class="col-md-2 footer-column">
					<div class="title">
          <a href="#account" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">your account</a>		  </div>
  <ul id="account" class="list-unstyled collapse">
	<li>
	  <a href="blog-details.php">personal info</a>            </li>
	<li>
	  <a href="#">orders</a>            </li>
	<li>
	  <a href="contact-us.php">addresses</a>            </li>
	<li>
	  <a href="my-account.php">my wishlists</a>            </li>
  </ul>

</div>
        <div class="col-md-2 footer-column">
		<div class="title">
          <a href="#information" class="font-weight-normal text-capitalize mb-10" data-toggle="collapse" aria-expanded="false">store information</a>		  </div>
          <ul id="information" class="list-unstyled collapse">
            <li class="contact-detail links">
              <span class="address">
			  		<span class="icon"><i class="material-icons">location_on</i></span>
					<span class="data"> 4030, Central Bazzar, opp. Varachha Police Station, Varachha Main Road, Surat, Gujarat 395006, India</span>			  </span>            </li>
            <li class="links">
               <span class="contact">
			  		<span class="icon"><i class="material-icons">phone</i></span>
					<span class="data"><a href="tel:(99)55669999">+ (99) 55-669-999</a></span>			  </span>            </li>
            <li class="links">
               <span class="email"> 
			  		<span class="icon"><i class="material-icons">email</i></span>
					<span class="data"><a href="mailto:demo.store@gmail.com">demo.store@gmail.com</a></span>  </span>          </li>
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
  
  <!-- Register modal -->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header text-center">
	<h4 class="modal-title w-100 font-weight-medium text-left">Sign up</h4>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
  </div>
  <div class="modal-body mx-3">
	<div class="md-form mb-4">
	  <input type="text" id="RegisterForm-name" class="form-control validate" placeholder="Your name">
	</div>
	<div class="md-form mb-4">
	  <input type="email" id="RegisterForm-email" class="form-control validate" placeholder="Your email">
	</div>
	<div class="md-form mb-4">
	  <input type="password" id="RegisterForm-pass" class="form-control validate" placeholder="Your password">
	</div>
	<div class="checkbox-link d-flex justify-content-between">
	<div class="left-col">
		<input id="remember-me" type="checkbox"><label for="remember_me">Remember Me</label>
	</div>
	<div class="right-col"><a href="#">Forget Password?</a></div>
</div>
  </div>
  
  <div class="modal-footer d-flex justify-content-center">
	<button class="btn btn-primary">Sign up</button>
  </div>
</div>
</div>
</div>

<!-- Login modal -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header text-center">
	<h4 class="modal-title w-100 font-weight-medium text-left">Sign in</h4>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
  </div>
  <div class="modal-body mx-3">
	<div class="md-form mb-4">
	  <input type="text" id="LoginForm-name" class="form-control validate" placeholder="Your name">
	</div>
	<div class="md-form mb-4">
	  <input type="password" id="LoginForm-pass" class="form-control validate" placeholder="Your password">
	</div>
	<div class="checkbox-link d-flex justify-content-between">
	<div class="left-col">
		<input type="checkbox" id="remember_me"><label for="remember_me">Remember Me</label>
	</div>
	<div class="right-col"><a href="#">Forget Password?</a></div>
</div>
  </div>
  
  <div class="modal-footer d-flex justify-content-center">
	<button class="btn btn-primary">Sign in</button>
  </div>
</div>
</div>
</div>

<!-- product_view modal -->
<div class="modal fade product_view" id="product_view" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			 <h4 class="modal-title w-100w-100w-100 font-weight-bold d-none">Quick view</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	  <span aria-hidden="true">×</span>
	</button>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-6 left-columm">
						<div class="product-large-image tab-content">
						<div class="tab-pane active" id="product-1" role="tabpanel" aria-labelledby="product-tab-1">
							<div class="single-img img-full">
								<a href="img/products/01.jpg"><img src="img/products/01.jpg" class="img-fluid" alt=""></a>
							</div>
						</div>
						<div class="tab-pane" id="product-2" role="tabpanel" aria-labelledby="product-tab-2">
							<div class="single-img">
								<a href="img/products/02.jpg"><img src="img/products/02.jpg" class="img-fluid" alt=""></a>
							</div>
						</div>
						<div class="tab-pane" id="product-3" role="tabpanel" aria-labelledby="product-tab-3">
							<div class="single-img">
								<a href="img/products/03.jpg"><img src="img/products/03.jpg" class="img-fluid" alt=""></a>
							</div>
						</div>
						<div class="tab-pane" id="product-4" role="tabpanel" aria-labelledby="product-tab-4">
							<div class="single-img">
								<a href="img/products/04.jpg"><img src="img/products/04.jpg" class="img-fluid" alt=""></a>
							</div>
						</div>
						<div class="tab-pane" id="product-5" role="tabpanel" aria-labelledby="product-tab-5">
							<div class="single-img">
								<a href="img/products/05.jpg"><img src="img/products/05.jpg" class="img-fluid" alt=""></a>
							</div>
						</div>
				</div>
				<div class="small-image-list float-left w-100"> 
                                <div class="nav-add small-image-slider-single-product-tabstyle-3 owl-carousel" role="tablist">
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="product-tab-1" href="#product-1" class="img active"><img src="img/products/01.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="product-tab-2" href="#product-2" class="img"><img src="img/products/02.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="product-tab-3" href="#product-3" class="img"><img src="img/products/03.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="product-tab-4" href="#product-4" class="img"><img src="img/products/04.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="product-tab-5" href="#product-5" class="img"><img src="img/products/05.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                            </div>
				</div>
				<div class="col-md-6 product_content">
					<h4 class="product-title text-capitalize">aliquam quaerat voluptatem</h4>
					<div class="rating">
					<div class="product-ratings d-inline-block align-middle">
																				<span class="fa fa-stack"><i class="material-icons">star</i></span>
									   <span class="fa fa-stack"><i class="material-icons">star</i></span>
									   <span class="fa fa-stack"><i class="material-icons">star</i></span>
									   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
									   <span class="fa fa-stack"><i class="material-icons off">star</i></span>			</div>							</div>
					<span class="description float-left w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
					<h3 class="price float-left w-100"><span class="regular-price align-middle">$75.00</span><span class="old-price align-middle">$60.00</span></h3>
					
					<div class="product-variants float-left w-100">
						<div class="col-md-4 col-sm-6 col-xs-12 size-options d-flex align-items-center">
											<h5>Size:</h5>

								<select class="form-control" name="select">
											<option value="" selected="">Size</option>
											<option value="black">Medium</option>
											<option value="white">Large</option>
											<option value="gold">Small</option>
											<option value="rose gold">Extra large</option>
								</select>
						</div>
						<div class="color-option d-flex align-items-center">
                                        <h5>color :</h5>
                                        <ul class="color-categories">
                                            <li class="active">
                                                <a class="tt-pink" href="#" title="Pink"></a>
                                            </li>
                                            <li>
                                                <a class="tt-blue" href="#" title="Blue"></a>
                                            </li>
                                            <li>
                                                <a class="tt-yellow" href="#" title="Yellow"></a>
                                            </li>
                                        </ul>
                                    </div>
					</div>
					<div class="btn-cart d-flex align-items-center float-left w-100">
						<h5>qty:</h5>
						<input value="1" type="number">
						<button type="button" class="btn btn-primary"><i class="material-icons">shopping_cart</i> Add To Cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- cart-pop modal -->
<div class="modal fade" id="cart-pop" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header alert-success">
			 <h4 class="modal-title w-100w-100w-100">Product successfully added to your shopping cart</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	  <span aria-hidden="true">×</span>
	</button>
		</div>
		<div class="modal-body">
			<div class="row">
			<div class="col-md-6 divide-right">
			<div class="row">
				<div class="col-md-5 col-xs-4 product-img float-left">
					<img src="img/products/01.jpg" class="img-responsive" alt="01">
				</div>
				<div class="col-md-7 col-xs-8 product-desc float-left">
					<h4 class="product-title text-capitalize">aliquam quaerat voluptatem</h4>
					<div class="rating">
					<div class="product-ratings">
					<span class="fa fa-stack"><i class="material-icons">star</i></span>
				   <span class="fa fa-stack"><i class="material-icons">star</i></span>
				   <span class="fa fa-stack"><i class="material-icons">star</i></span>
				   <span class="fa fa-stack"><i class="material-icons off">star</i></span>
				   <span class="fa fa-stack"><i class="material-icons off">star</i></span></div></div>
					<h3 class="price float-left w-100"><span class="regular-price align-middle">$75.00</span><span class="old-price align-middle">$60.00</span></h3>
				</div>
			</div>
			</div>
				<div class="col-md-6 divide-left">
					<p class="cart-products-count">There are 2 items in your cart.</p>
					<p class="total-products float-left w-100">
						<strong>Total products:</strong> $150.00
					</p>
					<p class="shipping float-left w-100">
						<strong>Total shipping:</strong> free
					</p>
					<p class="total-price float-left w-100">
						<strong>Total:</strong> $150.00(tax incl.)
					</p>
					<div class="cart-content-btn float-left w-100">
					<form action="#">
                      <input class="btn pull-right mt_10 btn-primary" value="Continue shopping" type="submit">
                    </form>
					<form action="checkout_page.php">
                      <input class="btn pull-right mt_10 btn-primary" value="Proceed to checkout" type="submit">
                    </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/parallax.js"></script>
		<script src="js/lightbox-2.6.min.js"></script>
		<script src="js/ResizeSensor.min.js"></script>
		<script src="js/theia-sticky-sidebar.min.js"></script>
		<script src="js/inview.js"></script>
		<script src="js/cookiealert.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
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


