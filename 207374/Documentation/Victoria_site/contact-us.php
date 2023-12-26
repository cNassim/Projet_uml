
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
	<div class="header-nav">
	<div class="container">
		<div class="nav-left float-left"><div class="ttheader-service">Wants to explore Upcoming Deals on Weekends?</div>
		</div>
		<div class="nav-right float-right d-flex">
		<div class="ttheader-mail"><a href="mailto:demo.store@gmail.com">demo.store@gmail.com</a></div>
		</div>
	</div>
	</div>
	<div class="header-main-head">
	
    <div class="header-main">
	<div class="container">
            <div class="header-left float-left d-flex d-lg-flex d-md-block d-xs-block">
				<div class="language-wrapper toggle">
				<button type="button" class="btn text-capitalize dropdown-toggle"><img src="img/banner/en.png" alt="en"/><span>English</span></button>
					<div id="language-dropdown" class="language">
					<ul>
								<li><img src="img/banner/en.png" alt="en"/><span>English</span></li>
								<li><img src="img/banner/fr.png" alt="fr"/><span>French</span></li>
					</ul>
					</div>
				</div>
				<div class="currency-wrapper toggle">
				<button type="button" class="btn text-capitalize dropdown-toggle"><span>€ Euro</span></button>
					<div id="currency-dropdown" class="currency">
					<ul>
							<li><span>€ Euro</span></li>
							<li><span>£ Pound Sterling</span></li>
							<li><span>$ US Dollar</span></li>
					</ul>
					</div>
				</div>
				  <div class="contact">
						<i class="material-icons">phone</i>
						<span>1234567890</span>
				  </div>
			</div>
		<div class="header-middle float-left">
				<div class="logo">
								<a href="index.php"><img src="img/logos/logo.png" alt="NatureCircle"></a>		</div>
		</div> 
		<div class="header-right d-flex d-xs-block d-sm-flex justify-content-end float-right">
		<div class="search-wrapper"> 
			<a>
			<i class="material-icons search">search</i>
			<i class="material-icons close">close</i>
			</a>
			<form autocomplete="off" action="/action_page.php" class="search-form">
			  <div class="autocomplete" style="width:300px;">
				<input id="myInput" type="text" name="myCountry" placeholder="Search here">
				<button type="button"><i class="material-icons">search</i></button>
			  </div>
			</form>
		</div>  
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
                          <td class="text-center"><a href="#"><img src="img/products/01.jpg" alt="01" title="01"></a></td>
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
		<a class="nav-link dropdown-toggle text-uppercase" href="category.php">
			Home
		  <span class="sr-only">(current)</span>        </a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3">
			<div class="sub-menu mb-xl-0 mb-4">
			  <ul class="list-unstyled">
				<li>
				  <a class="menu-item pl-0" href="index.php">
					Home 1                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="index2.php">
				   Home 2                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="index3.php">
					Home 3                 </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="index4.php">
					Home 4                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="index5.php">
					Home 5                  </a>                </li>
			  </ul>
			</div>
		</div>
		</li>
		<li class="nav-item dropdown mega-dropdown">
		<a class="nav-link dropdown-toggle text-uppercase" href="category.php">Category</a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3">
		  <div class="row">
			<div class="col-md-12 col-xl-4 sub-menu mb-xl-0 mb-4">
			  <h6 class="sub-title text-uppercase font-weight-bold white-text">Variation 1</h6>
			  <!--Featured image-->
			  <ul class="list-unstyled">
				
				 <li>
				  <a class="menu-item pl-0" href="filter-toggle.php">
					filter toggle                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="off-canvas-left.php">
					off canvas left                </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="off-canvas-right.php">
					off canvas right                </a>                </li>
			  </ul>
			</div>
			<div class="col-md-6 col-xl-4 sub-menu mb-md-0 mb-4">
			  <h6 class="sub-title text-uppercase font-weight-bold white-text">Variation 2</h6>
				<ul class="list-unstyled">
				<li>
				  <a class="menu-item pl-0" href="category-5-col.php">
					5 columns mode                 </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="category-6-col.php">
				   6 columns mode                     </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="category-7-col.php">
				   7 columns mode                     </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="category-8-col.php">
				   8 columns mode                 </a>                </li>
			  </ul>
			</div>
			<div class="col-md-6 col-xl-4 sub-menu mb-0">
		
					<ul class="list-unstyled">
				<li>
					<span class="menu-banner"><img src="img/banner/menu-banner.jpg" alt="menu-banner" width="161" height="230"/></span>                </li>
			  </ul>
			</div>
		  </div>
		</div>
		</li>
		<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle text-uppercase" href="category.php">
			Shop
		  <span class="sr-only">(current)</span>        </a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3">
			<div class="sub-menu mb-xl-0 mb-4">
			  <ul class="list-unstyled">
				<li>
				  <a class="menu-item pl-0" href="product-grid.php">
					product grid                </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="product-sticky-right.php">
				   sticky right                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="product-extended-layout.php">
					Extended layout                 </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="product-details.php">
					Default layout                </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="product-compact.php">
					compact layout           </a>                </li>
			  </ul>
			</div>
		</div>
		</li>
		<li class="nav-item dropdown">   
		<a class="nav-link dropdown-toggle text-uppercase" href="category.php">Blog</a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3">
			<div class="sub-menu">
			  <h6 class="sub-title text-uppercase font-weight-bold white-text d-none">Featured</h6>
			<ul class="list-unstyled">
				  <li>
				  <a class="menu-item pl-0" href="blog-2-column.php">
					blog 2 column                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="blog-3-column.php">
				   blog 3 column                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="blog-2-column-masonary.php">
				   blog masonary                 </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="blog-list.php">
					blog list                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="blog-details.php">
				   blog details                  </a>                </li>
			  </ul>
			</div>
		</div>
		</li>
		<li class="nav-item dropdown">   
		<a class="nav-link dropdown-toggle text-uppercase" href="category.php">Pages</a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3">
			<div class="sub-menu">
			<ul class="list-unstyled">
				 <li>
				  <a class="menu-item pl-0" href="about-us.php">
					About us                 </a>				 </li>
					<li>
				  <a class="menu-item pl-0" href="accordions.php">
					Accordions                  </a>                </li>
	              <li>
				  <a class="menu-item pl-0" href="buttons.php">
				   Buttons              </a>                </li>
			  </ul>
			</div>
		</div>
		</li>
		<li class="nav-item dropdown">
		<a class="nav-link text-uppercase" href="contact-us.php">contact us</a>      </li>
		</ul>
		<!-- Links -->
		</div>
		<!-- Collapsible content -->
		
		</nav>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-light d-lg-none navbar-responsive">
		
		<!-- Navbar brand -->
		<a class="navbar-brand text-uppercase d-none" href="#">Navbar</a>
		
		<!-- Collapse button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
		aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"><i class='material-icons'>sort</i></span>
		</button>
		
		<!-- Collapsible content -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent2">
		
		<!-- Links -->
		<ul class="navbar-nav m-auto justify-content-center">
		
		<!-- Features -->
		<li class="nav-item dropdown active">
		<a class="nav-link dropdown-toggle text-uppercase" data-toggle="collapse" data-target="#menu1"
		aria-controls="menu1" aria-expanded="false" aria-label="Toggle navigation" href="#">
			Home
		  <span class="sr-only">(current)</span>        </a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu1">
			<div class="sub-menu mb-xl-0 mb-4">
			  <ul class="list-unstyled">
				<li>
				  <a class="menu-item pl-0" href="index.php">
					Home 1                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="index2.php">
				   Home 2                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="index3.php">
					Home 3                 </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="index4.php">
					Home 4                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="index5.php">
					Home 5                  </a>                </li>
			  </ul>
			</div>
		</div>
		</li>
		<li class="nav-item dropdown mega-dropdown">
		<a class="nav-link dropdown-toggle text-uppercase" data-toggle="collapse" data-target="#menu3"
		aria-controls="menu3" aria-expanded="false" aria-label="Toggle navigation" href="#">Category</a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu3">
		  <div class="row">
			<div class="col-md-12 col-xl-4 sub-menu mb-xl-0 mb-4">
			  <h6 class="sub-title text-uppercase font-weight-bold white-text">Variation 1</h6>
			  <!--Featured image-->
			  <ul class="list-unstyled">
				 <li>
				  <a class="menu-item pl-0" href="filter-toggle.php">
					filter toggle                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="off-canvas-left.php">
					off canvas left                </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="off-canvas-right.php">
					off canvas right                </a>                </li>
			  </ul>
			</div>
			<div class="col-md-6 col-xl-4 sub-menu mb-md-0 mb-4">
			  <h6 class="sub-title text-uppercase font-weight-bold white-text">Variation 2</h6>
				<ul class="list-unstyled">
				<li>
				  <a class="menu-item pl-0" href="category-5-col.php">
					grid 5 column                 </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="category-6-col.php">
				   grid 6 column                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="category-7-col.php">
					grid 7 column                   </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="category-8-col.php">
					grid 8 column                </a>                </li>
			  </ul>
			</div>
			<div class="col-md-6 col-xl-4 sub-menu mb-0">
		
					<ul class="list-unstyled">
				<li>
					<span class="menu-banner"><img src="img/banner/menu-banner.jpg" alt="menu-banner" width="210" height="300"/></span>                </li>
			  </ul>
			</div>
		  </div>
		</div>
		</li>
		
		<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle text-uppercase" data-toggle="collapse" data-target="#menu2"
		aria-controls="menu2" aria-expanded="false" aria-label="Toggle navigation" href="#">
			Shop
		  <span class="sr-only">(current)</span>        </a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu2">
			<div class="sub-menu mb-xl-0 mb-4">
			  <h6 class="sub-title text-uppercase font-weight-bold white-text">Featured</h6>
			  <ul class="list-unstyled">
				<li>
				  <a class="menu-item pl-0" href="product-grid.php">
					product grid                </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="product-sticky-right.php">
				   sticky right                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="product-extended-layout.php">
					Extended layout                 </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="product-details.php">
					Default layout                </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="product-compact.php">
					compact layout           </a>                </li>
			  </ul>
			</div>
		</div>
		</li>
		<!-- Technology -->
		
		
		
		<li class="nav-item dropdown">   
		<a class="nav-link dropdown-toggle text-uppercase"  data-toggle="collapse" data-target="#menu4"
		aria-controls="menu4" aria-expanded="false" aria-label="Toggle navigation" href="#">Blog</a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu4">
			<div class="sub-menu">
			  <h6 class="sub-title text-uppercase font-weight-bold white-text d-none">Featured</h6>
			<ul class="list-unstyled">
				  <li>
				  <a class="menu-item pl-0" href="blog-2-column.php">
					blog 2 column                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="blog-3-column.php">
				   blog 3 column                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="blog-2-column-masonary.php">
				   blog masonary                 </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="blog-list.php">
					blog list                  </a>                </li>
				<li>
				  <a class="menu-item pl-0" href="blog-details.php">
				   blog details                  </a>                </li>
			  </ul>
			</div>
		</div>
		</li>
		
		<li class="nav-item dropdown">
		<a class="nav-link text-uppercase" href="contact-us.php">contact us</a>      </li>
		
		<li class="nav-item dropdown">   
		<a class="nav-link dropdown-toggle text-uppercase"  data-toggle="collapse" data-target="#menu5"
		aria-controls="menu5" aria-expanded="false" aria-label="Toggle navigation" href="#">Pages</a>
		<div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-3 px-3" id="menu5">
			<div class="sub-menu">
			  <h6 class="sub-title text-uppercase font-weight-bold white-text d-none">Featured</h6>
			<ul class="list-unstyled">
				  <li>
				  <a class="menu-item pl-0" href="about-us.php">
					About us                 </a>				 </li>
					<li>
				  <a class="menu-item pl-0" href="accordions.php">
					Accordions                  </a>                </li>
	              <li>
				  <a class="menu-item pl-0" href="buttons.php">
				   Buttons              </a>                </li>
			  </ul>
			</div>
		</div>
		</li>
		</ul>
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
    <li class="breadcrumb-item active" aria-current="page">contact us</li>
  </ol>
</nav>
    	<div class="main-content w-100 float-left"> 
		<div class="container">
			<div class="row">
			<!--Google map-->
<div id="map-container-google-1" class="z-depth-1-half map-container col-sm-12 mb-50" style="height: 500px">
<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d59512.74927226758!2d72.81491575568408!3d21.210153908095307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m5!1s0x3be04efc0f8687bd%3A0xc783857ba5d79622!2sTemplateTrip%2C+4030%2C+Central+Bazzar%2C+opp.+Varachha+Police+Station%2C+Varachha+Main+Road%2C+Surat%2C+Gujarat+395006!3m2!1d21.2100775!2d72.84993519999999!4m0!5e0!3m2!1sen!2sin!4v1565339377691!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>

<!--Google Maps-->
				<div class="contact-form-area col-sm-7">
				<div class="contact-form-inner">
					<h4 class="text-capitalize">tell us your project</h4>
					<form id="contact-form" method="post">
                    <div class="row">
                        <div class="col-md-12">
							<label for="name" class="float-left">First Name<span class="required">*</span></label>
                            <input type="text" name="name" id="name" class="float-right" required>
                        </div>
                        <div class="col-md-12">
							<label for="last_name" class="float-left">Last Name<span class="required">*</span></label>
                            <input type="text" name="last_name" id="last_name" class="float-right" required>
                        </div>
                        <div class="col-md-12">
 							<label for="email" class="float-left">Email<span class="required">*</span></label>
                            <input type="text" name="email" id="email" class="float-right" required>
                        </div>
                        <div class="col-md-12">
 							<label for="subject" class="float-left">Subject<span class="required">*</span></label>
                            <input type="text" name="subject" id="subject" class="float-right" required>
                        </div>
						<div class="col-md-12">
							<label for="message" class="float-left">Message</label>
							<textarea name="message" id="message" class="float-right"></textarea>
                        </div>
                    </div>
					<input type="submit" class="submit-btn default-btn btn-primary btn" value="Send Email">
                    <p class="form-messege"></p>
                </form>
				</div>
				</div>
				<div class="contact-address col-sm-5">
				<div class="contact-inner float-left w-100">
                <div class="contact-information">
									<h4 class="text-capitalize">contact us</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu vehicula turpis. Donec semper, nunc a imperdiet sollicitudin, lacus arcu semper nibh, non fermentum risus est quis augue.</p>
                    <div class="contact-wrapper">
                        <div class="contact-list">
                           <i class="material-icons">place</i>
                            <span>Address :  4030, Central Bazzar, opp. Varachha Police Station, Varachha Main Road, Surat, Gujarat 395006, India</span>
                        </div>
                        <div class="contact-list">
                           <i class="material-icons">call</i>
                            <span>demo@store.com</span>
                        </div>
                        <div class="contact-list">
                          <i class="material-icons">email</i>
                            <span>0(1234) 567 890</span>
                        </div>
                    </div>
                </div>
                <div class="working-time">
                    <h5>Working hours</h5>
                    <div>
					<div>Monday – Saturday</div>
					<div>09AM – 07PM</div>
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
					<span class="data"><a href="mailto:demo.store@gmail.com">demo.store@gmail.com</a></span> </span>           </li>
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



