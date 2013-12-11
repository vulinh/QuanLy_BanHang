<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="no-js">
<head>
	<meta charset="utf-8" />
	<title><?php echo $title_for_layout?></title>
	<meta name="viewport" content="width=device-width" />
	<?php
		echo $this->Html->script('jquery.min');
		
		echo $this->Html->script('jquery-ui-1.9.2.custom.min');
		
		// echo $this->Html->script('libs/bootstrap.min');

		echo $this->Html->script('jquery.uniform.min');

		echo $this->Html->script('modernizr');

		echo $this->Html->script('hoverIntent');

		echo $this->Html->script('superfish');

		echo $this->Html->script('supersubs');

		echo $this->Html->script('jquery.jcarousel.min');

		echo $this->Html->script('jquery.flexslider-min');

		echo $this->Html->script('jquery.elevatezoom.min');

		echo $this->Html->script('jquery.isotope.min');

		echo $this->Html->script('uptake');
	?>
	

	<?php
		echo $this->Html->meta('icon');
			
		echo $this->fetch('meta');

		// echo $this->Html->css('bootstrap.min');
			
		// echo $this->Html->css('bootstrap-responsive.min');
			
		// echo $this->Html->css('font-awesome');
		
		// echo $this->Html->css('uniform');

		echo $this->Html->css('superfish');

		echo $this->Html->css('flexslider');

		echo $this->Html->css('skin');

		echo $this->Html->css('960');

		echo $this->Html->css('style');

		
	?>
	 
</head>
<body>
	<div id="wrapper" class="container_12">
		<header id="header" class="grid_12">
			<div class="header-top pull clearfix">
				<div class="grid_12">
					<div class="float-l">
						<ul class="nav-info">
							<li class="hover"><a href="#"><span>VI</span></a></li>
							<li><a href="#"><span>EN</span></a></li>
							
						</ul>
					<!-- 	<ul class="nav-currency">
							<li class="hover"><a href="#"><span>$</span></a></li>
							<li><a href="#"><span>&pound;</span></a></li>
							<li><a href="#"><span>&euro;</span></a></li>
						</ul> -->
					</div>
					<div class="float-r">
						<nav>
							<!-- <ul class="main-nav">
								<li class="hover">
									<a href="index-2.html">Trang Chủ</a>
								</li>
								<li>
									<a href="about-us.html">Customer Service</a>
								</li>
								<li>
									<a href="about-us.html">About Uptake</a>
								</li>
								<li>
									<a href="checkout.html">Checkout</a>
								</li>
							</ul> -->
							<div class="nav-right">
								<a href="signin.html">Đăng Nhập</a> | <a href="register.html">Đăng Ký</a>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<div class="header-center clearfix">
				<div class="logo grid_5 alpha">
					<a href="index-2.html"><img src="../img/logo_u.png" alt="logo" /></a>
				</div>
				<div class="top-components grid_7 omega">
					
					<!--<div class="grid_3 omega">
						<div class="basket">
							<div class="textbox basket-text float-r">
								<label>3 Items</label>: <label class="hl-text">220€</label>
								<a href="javascript:;" class="drop-arrow">&nbsp;</a>
							</div>
							<a href="javascript:;" class="button has-icon basket-button border pull-right"><span>&nbsp;</span></a>
							<div class="clearfix"></div>
							
							<ul class="basket-dropdown">
								<li class="dropdown-header overlay">
									<span class="basket-arrow">&nbsp;</span>
									<label class="item"><strong>Item</strong></label>
									<label class="price-each"><strong>Price Each</strong></label>
									<label class="price"><strong>Price</strong></label>
								</li>
								<li class="dropdown-line clearfix">
									<div class="line-col media">
										<img src="images/basket-item-1.jpg" alt="" />
									</div>
									<div class="line-col desc">
										<strong><a href="details.html">Eames Plastict...</a></strong><br />
										Color: White<br />
										Quantity: 1 
									</div>
									<div class="line-col price-each">
										$1,785.00 
									</div>
									
									<div class="line-col price">
										$1,785.00<br /><br />
										<a href="#">Remove</a>
									</div>
								</li>
								<li class="dropdown-line clearfix">
									<div class="line-col media">
										<img src="images/basket-item-2.jpg" alt="" />
									</div>
									<div class="line-col desc">
										<strong><a href="details.html">Foscarini Rock....</a></strong><br />
										Color: White<br />
										Quantity: 2 
									</div>
									<div class="line-col price-each">
										$1,050.00
									</div>
									
									<div class="line-col price">
										$2,100.00<br /><br />
										<a href="#">Remove</a>
									</div>
								</li>
								<li class="dropdown-total">
									<strong>Subtotal</strong>: <span class="hl-text">$3,885.00</span>
								</li>
								<li class="dropdown-footer clearfix">
									<a href="#" class="button dark shadow">Checkout</a>
									<a href="checkout.html" class="button dark shadow">View cart</a>
								</li>
							</ul>
						</div>
					</div>
				</div>-->
			</div>
			<nav id="main-menu" class="header-bottom pull overlay clearfix">
				<ul class="sf-menu grid_12">
					<li>
						<a href="#">Trang Chủ</a>
					</li>
					<li>
						<a href="#">Sản Phẩm<span class="indicator">&nbsp;</span></a>
						<ul>
							<li>
								<a href="categories.html">Featured</a>
								<ul>
									<li><a href="categories.html">Create a Backyard Escape</a></li>
									<li><a href="categories.html">Cafe Solutions</a></li>
								</ul>
							</li>
							<li>
								<a href="categories.html">Shop by category</a>
								<ul>
									<li><a href="categories.html">Collection</a></li>
									<li><a href="categories.html">Living</a></li>
									<li><a href="categories.html">Dining</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Dịch Vụ</a>
					</li>
					<li class="current">
						<a href="#">Dự Án</a>
					</li>
					<li>
						<a href="#">Đánh Giá</a>
					</li>
					<li>
						<a href="#">Hướng Dẫn</a>
					</li>
					<li>
						<a href="#">Liên Hệ</a>
					</li>
					<!-- <li>
						<a href="shortcodes.html">Shortcodes</a>
					</li>
					<li>
						<a href="categories.html">Accessories<span class="indicator">&nbsp;</span></a>
						<ul>
							<li>
								<a href="categories.html">Featured</a>
								<ul>
									<li><a href="categories.html">Create a Backyard Escape</a></li>
									<li><a href="categories.html">Cafe Solutions</a></li>
								</ul>
							</li>
							<li>
								<a href="categories.html">Shop by category</a>
								<ul>
									<li><a href="categories.html">Collection</a></li>
									<li><a href="categories.html">Living</a></li>
									<li><a href="categories.html">Dining</a></li>
								</ul>
							</li>
						</ul>
					</li> -->
				</ul>
			</nav>

			<div class="grid_4 float-r" style="margin:5px">
						<form action="#" method="get">
							<input type="text" name="s" class="large search-text float-l" placeholder="Searching" />
							<a href="#" class="button has-icon search-button border float-l"><span>&nbsp;</span></a>
						</form>
			</div>
		</header> <!-- #header -->
		
		<div class="clearfix"></div>
		
		<section id="content" class="grid_12">
			
			 <!-- <span>
				Welcome to Uptake template
			</span> -->
			<article id="body">
				<div class="home-slide pull overlay">
					<div class="flexslider grid_12">
						<ul class="slides">
							<li>
								<div class="slide-media">
									<img src="../img/banner1.jpg" />
								</div>
								<div class="slide-content">
									<div class="content-inner">
										<span class="slide-title">Seminannial</span>
										<span class="slide-text">Sale</span>
										<hr class="slide-hr">
										<span class="mini-text">save hundreds of thousand dollars!</span><br>
										<span class="shopping-bag circle-icon"><a href="details.html" class="lock-icon">&nbsp;</a></span>
									</div>
								</div>
							</li>
							<li>
								<div class="slide-media">
									<img src="../img/banner2.jpg" />
								</div>
								<div class="slide-content">
									<div class="content-inner">
										<span class="slide-title">Seminannial</span>
										<span class="slide-text">Sale</span>
										<hr class="slide-hr">
										<span class="mini-text">save hundreds of thousand dollars!</span><br>
										<a href="details.html" class="button dark shadow">Read more</a>
									</div>
								</div>
							</li>
							<li>
								<div class="slide-media">
									<img src="../img/banner3.jpg" />
								</div>
								<div class="slide-content">
									<div class="content-inner">
										<span class="slide-title">Seminannial</span>
										<span class="slide-text">Sale</span>
										<hr class="slide-hr">
										<span class="mini-text">save hundreds of thousand dollars!</span><br>
										<span class="shopping-bag circle-icon"><a href="#" class="lock-icon">&nbsp;</a></span>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</article>
			<article>
				<header>
					<p class="text4">THINGS THAT HAVE A SOUL</p>
					<div class="news-title clearfix">
						<label class="label2 float-l">News</label>
						<label class="label uppercase float-r"><a href="categories.html">View all news</a></label>
					</div>
				</header>
				<div class="news-slide pull overlay clearfix">
					<div class="grid_12">
						<ul class="slides jcarousel-skin-default">
							<li>
								<a href="details.html">
									<div class="slide-content">
										<strong class="slide-title">Lorem Ipsum</strong><br />
										is simply dummy text of the printing.
									</div>
									<img src="../img/slide1.jpg" />
								</a>
							</li>
			  	    		<li>
			  	    	    	<a href="details.html">
									<div class="slide-content">
										<strong class="slide-title">Lorem Ipsum</strong><br />
										has been the industry's standard
									</div>
		  	    	    			<img src="../img/slide2.jpg" />
		  	    	    		</a>
			  	    	    </li>
			  	    		<li>
			  	    	    	<a href="details.html">
									<div class="slide-content">
										<strong class="slide-title">Lorem Ipsum</strong><br />
										dummy text ever since the 1500s, 
									</div>
		  	    	    			<img src="../img/slide3.jpg" />
		  	    	    		</a>
			  	    		</li>
			  	    		<li>
			  	    	    	<a href="details.html">
									<div class="slide-content">
										<strong class="slide-title">Lorem Ipsum</strong><br />
										dummy text ever since the 1500s, 
									</div>
		  	    	    			<img src="../img/slide4.jpg" />
		  	    	    		</a>
			  	    	    </li>
			  	    		<li>
			  	    	    	<a href="details.html">
									<div class="slide-content">
										<strong class="slide-title">Lorem Ipsum</strong><br />
										has been the industry's standard
									</div>
		  	    	    			<img src="../img/slide5.jpg" />
		  	    	    		</a>
			  	    	    </li>
			  	    		<li>
			  	    	    	<a href="details.html">
									<div class="slide-content">
										<strong class="slide-title">When an unknown</strong><br />
										is simply dummy text of the printing.
									</div>
		  	    	    			<img src="../img/slide6.jpg" />
		  	    	    		</a>
			  	    		</li>
			  	    		<li>
			  	    	    	<a href="details.html">
									<div class="slide-content">
										<strong class="slide-title">When an unknown</strong><br />
										scrambled it to make a type specimen book.
									</div>
		  	    	    			<img src="../img/slide7.jpg" />
		  	    	    		</a>
			  	    	    </li>
						</ul>
					</div>
				</div>
			</article>
			<?php echo $this->Session->flash(); ?>
			
			<?php echo $this->fetch('content'); ?>
			<!--<article>
				<header>
					<p class="text4">THINGS THAT HAVE A SOUL</p>
					<div class="news-title clearfix">
						<label class="label2 float-l">News</label>
						<label class="label uppercase float-r"><a href="categories.html">View all news</a></label>
					</div>
				</header>
				<div class="news-slide pull overlay clearfix">
					<div class="grid_12">
						<ul class="slides jcarousel-skin-default">
							<li>
								<a href="details.html">
									<div class="slide-content">
										<strong class="slide-title">Lorem Ipsum</strong><br />
										is simply dummy text of the printing.
									</div>
									<img src="images/slide1.jpg" />
								</a>
							</li>
			  	    		<li>
			  	    	    	<a href="details.html">
									<div class="slide-content">
										<strong class="slide-title">Lorem Ipsum</strong><br />
										has been the industry's standard
									</div>
		  	    	    			<img src="images/slide2.jpg" />
		  	    	    		</a>
			  	    	    </li>
			  	    		<li>
			  	    	    	<a href="details.html">
									<div class="slide-content">
										<strong class="slide-title">Lorem Ipsum</strong><br />
										dummy text ever since the 1500s, 
									</div>
		  	    	    			<img src="images/slide3.jpg" />
		  	    	    		</a>
			  	    		</li>
			  	    		<li>
			  	    	    	<a href="details.html">
									<div class="slide-content">
										<strong class="slide-title">Lorem Ipsum</strong><br />
										dummy text ever since the 1500s, 
									</div>
		  	    	    			<img src="images/slide4.jpg" />
		  	    	    		</a>
			  	    	    </li>
			  	    		<li>
			  	    	    	<a href="details.html">
									<div class="slide-content">
										<strong class="slide-title">Lorem Ipsum</strong><br />
										has been the industry's standard
									</div>
		  	    	    			<img src="images/slide5.jpg" />
		  	    	    		</a>
			  	    	    </li>
			  	    		<li>
			  	    	    	<a href="details.html">
									<div class="slide-content">
										<strong class="slide-title">When an unknown</strong><br />
										is simply dummy text of the printing.
									</div>
		  	    	    			<img src="images/slide6.jpg" />
		  	    	    		</a>
			  	    		</li>
			  	    		<li>
			  	    	    	<a href="details.html">
									<div class="slide-content">
										<strong class="slide-title">When an unknown</strong><br />
										scrambled it to make a type specimen book.
									</div>
		  	    	    			<img src="images/slide7.jpg" />
		  	    	    		</a>
			  	    	    </li>
						</ul>
					</div>
				</div>
			</article>
			<article>
				<div class="grid_4 alpha">
					<h2>PHILOSOPHI</h2>
					<p>
						On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, 
						et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. 
						Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard.
					</p>
				</div>
				<div class="grid_4">
					<h2>CLASS OF QUALITY</h2>
					<p>
						Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie 
						d'entre elles a été altérée par l'addition d'humour ou de mots aléatoires qui ne ressemblent pas.
					</p>
					<p>
						Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu'il n'y a rien d'embarrassant caché dans le texte.
					</p>
				</div>
				<div class="grid_4 omega">
					<h2>WHY UPTAKE?</h2>
					<ul class="qa-list list-style square">
						<li><a href="#">Le Aorem Ipsum ainsi obtenu ne contient</a></li>
						<li><a href="#">Contrairement à une opinion répandue</a></li>
						<li><a href="#">On sait depuis longtemps que travailler avec</a></li>
						<li><a href="#">Al contrario di quanto si pensi, Lorem Ipsum</a></li>
						<li><a href="#">Sopravvissuto non solo a più di cinque secoli</a></li>
						<li><a href="#">Sait depuis longtemps que travailler avec</a></li>
					</ul>
					<a href="details.html" class="button dark shadow float-r">Read more about Uptake</a>
				</div>
			</article>
			<article class="quote text-r">
				<p><span class="text4">Good design is as little design as possible.</span><br />
					– Dieter Rams
				</p>
			</article> -->
		</section> <!-- #content -->
		
		<div class="clearfix"></div>
	
		<footer id="footer" class="grid_12">
			<div class="row clearfix">
				<div class="line overlay clearfix">&nbsp;</div>
				<div class="widgets clearfix">
					<div class="grid_3 alpha">
						<h4>Customer service</h4>
						<a href="contact.html">Contact Us</a><br />
						<a href="#">Shipping Information</a><br />
						<a href="#">Returns & Exchanges</a><br />
						<a href="#">FAQ</a><br />
						<a href="#">Privacy and Security</a>
					</div>
					<div class="grid_3">
						<h4>Customer Information</h4>
						<a href="#">My Account</a><br />
						<a href="#">Gift Card</a><br />
						<a href="#">Uptake Credit Card</a><br />
						<a href="#">Trade & Contract Sales</a><br />
						<a href="#">Manufacturers</a>
					</div>
					<div class="grid_3">
						<h4>Corporate Info</h4>
						<a href="#">About Us</a><br />
						<a href="#">Press</a><br />
						<a href="#">Careers</a><br />
						<a href="#">Terms of Use</a><br />
						<a href="#">Site Map</a>
					</div>
					<div class="grid_3 omega">
						<h4>Newsletter</h4>
						<p>
							Be the first to know about Uptake special offers, new product launches.
						</p>
						<form action="#" method="post">
							<input type="text" name="email" class="large newsletter-text float-l" placeholder="Your e-mail" />
							<a href="#" class="button has-icon newsletter-button border overlay float-l"><span>&nbsp;</span></a>
						</form>
					</div>
				</div>
				<div class="line overlay clearfix">&nbsp;</div>
			</div>
			<div class="clearfix">
				<div class="float-l">
					<div class="logo-small">
						<img src="../img/logo-small.png" alt="" />
					</div>
					<div class="copyright">
						&copy; 2013 <br />
						<!-- <a href="http://themeforest.net/user/entiri/?ref=entiri" target="_blank">http://themeforest.net/user/entiri</a> -->
					</div>
				</div>
				<div class="float-r">
					<ul class="social-icon clearfix">
						<li class="rss"><a href="#">&nbsp;</a></li>
						<li class="facebook"><a href="#">&nbsp;</a></li>
						<li class="twitter"><a href="#">&nbsp;</a></li>
						<li class="dribbble"><a href="#">&nbsp;</a></li>
						<li class="forrst"><a href="#">&nbsp;</a></li>
						<li class="linkedin"><a href="#">&nbsp;</a></li>
					</ul>
				</div>
			</div>
		</footer> <!-- #footer -->
	</div>
	
	<div class="content-border-bottom container_12">&nbsp;</div>
	<script type="text/javascript">
		function similar_initCallback(carousel)
		{
			// Disable autoscrolling if the user clicks the prev or next button.
			carousel.buttonNext.bind('click', function() {
			    carousel.startAuto(0);
			});
			
			carousel.buttonPrev.bind('click', function() {
			    carousel.startAuto(0);
			});
			
			// Pause autoscrolling if the user moves with the cursor over the clip.
			carousel.clip.hover(function() {
			    carousel.stopAuto();
			}, function() {
			    carousel.startAuto();
			});
		};
		// initialise plugins
		jQuery(document).ready(function($) {
			$("ul.sf-menu").supersubs({
				minWidth:    10,   // minimum width of sub-menus in em units
				maxWidth:    15,   // maximum width of sub-menus in em units
				extraWidth:  1     // extra width can ensure lines don't sometimes turn over
			}).superfish({autoArrows: false,
				disableHI: false,
				dropShadows: false,
				onShow: function(){
					$('ul.sf-menu ul ul').show().css({'visibility':'visible', width: '100%'});
				},
				onHide: function(){
					$('ul.sf-menu ul ul').show().css({'visibility':'visible', width: '100%'});
				}
			});
			
			var basketTimeout;
			
			$('.basket .basket-button, .basket .basket-text').click(function(){
				var b = $('.basket-dropdown');
				
				if(basketTimeout) 
					window.clearTimeout(basketTimeout);
					
				if(b.is(":visible")) {
					b.fadeOut();
					return;
				}
				
				b.fadeIn().show();
				basketTimeout = window.setTimeout(function(){
					b.fadeOut();
				}, 2000);
			});
			
			$('.basket-dropdown').mouseenter(function(){
				if(basketTimeout) 
					window.clearTimeout(basketTimeout);
			}).mouseleave(function(){
				var $this = $(this);
				basketTimeout = window.setTimeout(function(){
					$this.fadeOut();
				}, 1000);
			});
			
			$('[placeholder]').focus(function() {
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
					input.val('');
					input.removeClass('placeholder');
				}
			}).blur(function() {
				var input = $(this);
				if (input.val() == '' || input.val() == input.attr('placeholder')) {
					input.addClass('placeholder');
					input.val(input.attr('placeholder'));
				}
			}).blur();
			
			$('.home-slide .flexslider').flexslider({
				directionNav: false,
				start: function(o){
					$('body').removeClass('loading');
				}
			});
			
			$('.news-slide .slides').jcarousel({
				scroll: 1,
				initCallback: similar_initCallback,
				wrap: 'last',
				auto: 2,
			});
			
		});
	</script>
</body>
</html>