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

		echo $this->Html->css('superfish');

		echo $this->Html->css('flexslider');

		echo $this->Html->css('skin');

		echo $this->Html->css('bootstrap.min');
	
		echo $this->Html->css('style');

		
	?>
	 
</head>
<body>
	<div id="wrapper" class="container">
		<header id="header" class="span12">
			<div class="header-top pull clearfix">
				<div class="span12">
					<div class="pull-left">
						<ul class="nav-info">
							<li class="hover"><a href="#"><span>VI</span></a></li>
							<li><a href="#"><span>EN</span></a></li>
							
						</ul>

					</div>
					<div class="pull-right">
						<nav>
							<div class="nav-right">
								<a href="signin.html">Đăng Nhập</a> | <a href="register.html">Đăng Ký</a>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<div class="header-center clearfix">
				<div class="logo span5">
					<a href="index-2.html"><img src="../img/logo_u.png" alt="logo" /></a>
				</div>
				<div class="top-components span7">
					
					
			</div>
			<nav id="main-menu" class="header-bottom pull overlay clearfix">
				<ul class="sf-menu span12">
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
					
				</ul>
			</nav>

			<div class="span4 pull-right" style="margin:5px">
						<form action="#" method="get">
							<input type="text" name="s" class="large search-text float-l" placeholder="Searching" />
							<a href="#" class="button has-icon search-button border float-l"><span>&nbsp;</span></a>
						</form>
			</div>
		</header> <!-- #header -->
		
		<div class="clearfix"></div>
		
		<section id="content" class="span12">
			
			


			<?php echo $this->Session->flash(); ?>
			
			<?php echo $this->fetch('content'); ?>
			
		</section> <!-- #content -->
		
		<div class="clearfix"></div>
	
		<footer id="footer" class="span12">
			<div class="row clearfix">
				<div class="line overlay clearfix">&nbsp;</div>
				<div class="widgets clearfix">
					<div class="span3">
						<h4>Customer service</h4>
						<a href="contact.html">Contact Us</a><br />
						<a href="#">Shipping Information</a><br />
						<a href="#">Returns & Exchanges</a><br />
						<a href="#">FAQ</a><br />
						<a href="#">Privacy and Security</a>
					</div>
					<div class="span3">
						<h4>Customer Information</h4>
						<a href="#">My Account</a><br />
						<a href="#">Gift Card</a><br />
						<a href="#">Uptake Credit Card</a><br />
						<a href="#">Trade & Contract Sales</a><br />
						<a href="#">Manufacturers</a>
					</div>
					<div class="span2">
						<h4>Corporate Info</h4>
						<a href="#">About Us</a><br />
						<a href="#">Press</a><br />
						<a href="#">Careers</a><br />
						<a href="#">Terms of Use</a><br />
						<a href="#">Site Map</a>
					</div>
					<div class="span3">
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
				<div class="pull-left">
					<div class="logo-small">
						<img src="../img/logo-small.png" alt="" />
					</div>
					<div class="copyright">
						&copy; 2013 <br />
						<!-- <a href="http://themeforest.net/user/entiri/?ref=entiri" target="_blank">http://themeforest.net/user/entiri</a> -->
					</div>
				</div>
				<div class="pull-right">
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
	
	<div class="content-border-bottom container">&nbsp;</div>
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