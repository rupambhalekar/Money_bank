<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Money Bank</title>
<!--

Template 2102 Constructive

http://www.tooplate.com/view/2102-constructive

-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/tooplate-style.css">

	<script>
		var renderPage = true;

	if(navigator.userAgent.indexOf('MSIE')!==-1
		|| navigator.appVersion.indexOf('Trident/') > 0){
   		/* Microsoft Internet Explorer detected in. */
   		alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
   		renderPage = false;
	}
	</script>
</head>

<body>
	<!-- Loader -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	
	<!-- Page Content -->
	<div class="container-fluid tm-main">
		<div class="row tm-main-row">

			<!-- Sidebar -->
			<div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">

				<button id="tmMainNavToggle" class="menu-icon">&#9776;</button>

				<div class="inner">
					<nav id="tmMainNav" class="tm-main-nav">
						<ul>
							<li>
								<a href="#intro" id="tmNavLink1" class="scrolly active" data-bg-img="bank02.jpg" data-page="#tm-section-1">
									<i class="fas fa-home tm-nav-fa-icon"></i>
									<span>Introduction</span>
								</a>
							</li>
							<li>
								<a href="#products" id="tmNavLink2" class="scrolly" data-bg-img="bank02.jpg" data-page="#tm-section-2" data-page-type="carousel">
									<i class="fas fa-map tm-nav-fa-icon"></i>
									<span>All Customers</span>
								</a>
							</li>							
							<li>
								<a href="#company" class="scrolly" data-bg-img="bank02.jpg" data-page="#tm-section-3">
									<i class="fas fa-users tm-nav-fa-icon"></i>
									<span>All Transaction</span>
								</a>
							</li>
							<li>
								<a href="#contact" class="scrolly" data-bg-img="bank02.jpg" data-page="#tm-section-4">
									<i class="fas fa-comments tm-nav-fa-icon"></i>
									<span>Contact Us</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">

					<!-- section 1 -->
					<section id="tm-section-1" class="tm-section">
						<div class="tm-bg-transparent-black tm-contact-box-pad">
						<div class="ml-auto">
							<header class="mb-4"><h1 class="tm-text-shadow">Money Bank </h1></header>
							<p class="mb-5 tm-font-big">A Safe place for your money.</p>
								<header class="mb-4"><h1 class="tm-text-shadow">Transfers Money flawlessly </h1></header>
							<p class="mb-5 tm-font-big">Transfering Money is just easy as Dialing a Phone.</p>
								<header class="mb-4"><h1 class="tm-text-shadow">Banking is Even Easier </h1></header>
							<p class="mb-5 tm-font-big">Visit Our New official Website..</p>
							<a href="#" class="btn tm-btn tm-font-big" data-nav-link="#tmNavLink2">Continue...</a> 
							<!-- data-nav-link holds the ID of nav item, which means this link should behave the same as that nav item  -->
						</div>
					</section>

					<!-- section 2 -->
					<section id="tm-section-2" class="tm-section tm-section-carousel">
					<div class="tm-bg-transparent-black tm-contact-box-pad">						
						<div class="row mb-4">
							<header class="col-xl-12"><h2 class="tm-text-shadow">All Customers</h2></header>		
						 <!-- middle container start-->
        <section id="services" class="services">
        <div class="container my-5">
                    <div class="container">
            <div class="row row-cols-2">       
              <div class="col ">
              <h3>Manage Everything at one place</h3>   
                             <div class="container col my-5">
                   <p class="lead"> To see all Customers</p>
                   <a href="customer.php"><button class="btn btn-primary" type="button" >Get Started</button></a>
                </div>
               
              </div>

              <div class="col">
              <img src="https://images.unsplash.com/photo-1616514197671-15d99ce7a6f8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="rounded img-fluid float-right" alt="...">
              </div>
            </div>
            </section>		               
					</section>

					<!-- section 3 -->
				
					
					<section id="tm-section-3" class="tm-section">	
					<div class="tm-bg-transparent-black tm-contact-box-pad">						
						<div class="row mb-4">
							<header class="col-xl-12"><h2 class="tm-text-shadow">All Transaction</h2></header>		
						 <!-- middle container start-->
        <section id="services" class="services">
        <div class="container my-5">
                    <div class="container">
            <div class="row row-cols-2">       
              <div class="col ">
              <h3>Manage Everything at one place</h3>   
                             <div class="container col my-5">
                   <p class="lead"> To see all Transaction</p>
                   <a href="transaction.php"><button class="btn btn-primary" type="button" >Get Started</button></a>
                </div>
               
              </div>

              <div class="col">
              <img src="https://images.unsplash.com/photo-1616514197671-15d99ce7a6f8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="rounded img-fluid float-right" alt="...">
              </div>
            </div>
            </section>		               
					</section>

					<!-- section 4 -->
					<section id="tm-section-4" class="tm-section">
						<div class="tm-bg-transparent-black tm-contact-box-pad">
							<div class="row mb-4">
								<div class="col-sm-12">
									<header><h2 class="tm-text-shadow">Contact Us</h2></header>
								</div>
							</div>
							<div class="row tm-page-4-content">
								
									<div class="contact_message">
									
									</div>
								</div>
							
									
										
										
										<h5>         Rupam Bhalekar.                              </h5><br>
										<h5>          Gmail:- rupambhalekar@gmail.com           </h5><br>
										<h5>          Phone no.:- +91 9754620076                   </h5><br>
									
									</div>
								</div>
							</div>
						</div>
					</section>					
				</div>	<!-- .tm-content -->							
				<footer class="footer-link">
					<p class="tm-copyright-text">Copyright &copy; RUPAM BHALEKAR. 
                    
                    - CONTACT: rupambhalekar@gmial.com</p>
				</footer>
			</div>	<!-- row -->			
		</div>
		<div id="preload-01"></div>
		<div id="preload-02"></div>
		<div id="preload-03"></div>
		<div id="preload-04"></div>

		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script> <!-- Slick Carousel -->

		<script>

		var sidebarVisible = false;
		var currentPageID = "#tm-section-1";

		// Setup Carousel
		function setupCarousel() {

			// If current page isn't Carousel page, don't do anything.
			if($('#tm-section-2').css('display') == "none") {
			}
			else {	// If current page is Carousel page, set up the Carousel.

				var slider = $('.tm-img-slider');
				var windowWidth = $(window).width();

				if (slider.hasClass('slick-initialized')) {
					slider.slick('destroy');
				}

				if(windowWidth < 640) {
					slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 1,
	              		slidesToScroll: 1
	              	});
				}
				else if(windowWidth < 992) {
					slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 2,
	              		slidesToScroll: 1
	              	});
				}
				else {
					// Slick carousel
	              	slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 3,
	              		slidesToScroll: 2
	              	});
				}

				// Init Magnific Popup
				$('.tm-img-slider').magnificPopup({
				  delegate: 'a', // child items selector, by clicking on it popup will open
				  type: 'image',
				  gallery: {enabled:true}
				  // other options
				});
      		}
  		}

  		// Setup Nav
  		function setupNav() {
  			// Add Event Listener to each Nav item
	     	$(".tm-main-nav a").click(function(e){
	     		e.preventDefault();
		    	
		    	var currentNavItem = $(this);
		    	changePage(currentNavItem);
		    	
		    	setupCarousel();
		    	setupFooter();

		    	// Hide the nav on mobile
		    	$("#tmSideBar").removeClass("show");
		    });	    
  		}

  		function changePage(currentNavItem) {
  			// Update Nav items
  			$(".tm-main-nav a").removeClass("active");
     		currentNavItem.addClass("active");

	    	$(currentPageID).hide();

	    	// Show current page
	    	currentPageID = currentNavItem.data("page");
	    	$(currentPageID).fadeIn(1000);

	    	// Change background image
	    	var bgImg = currentNavItem.data("bgImg");
	    	$.backstretch("img/" + bgImg);		    	
  		}

  		// Setup Nav Toggle Button
  		function setupNavToggle() {

			$("#tmMainNavToggle").on("click", function(){
				$(".sidebar").toggleClass("show");
			});
  		}

  		// If there is enough room, stick the footer at the bottom of page content.
  		// If not, place it after the page content
  		function setupFooter() {
  			
  			var padding = 100;
  			var footerPadding = 40;
  			var mainContent = $("section"+currentPageID);
  			var mainContentHeight = mainContent.outerHeight(true);
  			var footer = $(".footer-link");
  			var footerHeight = footer.outerHeight(true);
  			var totalPageHeight = mainContentHeight + footerHeight + footerPadding + padding;
  			var windowHeight = $(window).height();		

  			if(totalPageHeight > windowHeight){
  				$(".tm-content").css("margin-bottom", footerHeight + footerPadding + "px");
  				footer.css("bottom", footerHeight + "px");  			
  			}
  			else {
  				$(".tm-content").css("margin-bottom", "0");
  				footer.css("bottom", "20px");  				
  			}  			
  		}

  		// Everything is loaded including images.
      	$(window).on("load", function(){

      		// Render the page on modern browser only.
      		if(renderPage) {
				// Remove loader
		      	$('body').addClass('loaded');

		      	// Page transition
		      	var allPages = $(".tm-section");

		      	// Handle click of "Continue", which changes to next page
		      	// The link contains data-nav-link attribute, which holds the nav item ID
		      	// Nav item ID is then used to access and trigger click on the corresponding nav item
		      	var linkToAnotherPage = $("a.tm-btn[data-nav-link]");
			    
			    if(linkToAnotherPage != null) {
			    	
			    	linkToAnotherPage.on("click", function(){
			    		var navItemToHighlight = linkToAnotherPage.data("navLink");
			    		$("a" + navItemToHighlight).click();
			    	});
			    }
		      	
		      	// Hide all pages
		      	allPages.hide();

		      	$("#tm-section-1").fadeIn();

		     	// Set up background first page
		     	var bgImg = $("#tmNavLink1").data("bgImg");
		     	
		     	$.backstretch("img/" + bgImg, {fade: 500});

		     	// Setup Carousel, Nav, and Nav Toggle
			    setupCarousel();
			    setupNav();
			    setupNavToggle();
			    setupFooter();

			    // Resize Carousel upon window resize
			    $(window).resize(function() {
			    	setupCarousel();
			    	setupFooter();
			    });
      		}	      	
		});

		</script>
	</body>
</html>