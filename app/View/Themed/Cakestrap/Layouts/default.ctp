<?php echo $this->Html->docType('html5'); ?> 
<html>
	<head>
		<?php //echo $this->Html->charset('utf-8'); ?>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<title>
			
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->Html->meta('icon');
			
			echo $this->fetch('meta');

			echo $this->Html->css('bootstrap.min');
			echo $this->Html->css('bootstrap-responsive.min');
			echo $this->Html->css('font-awesome');
			echo $this->Html->css('style.min');
			echo $this->Html->css('style_responsive');
			echo $this->Html->css('style_default');
			echo $this->Html->css('jquery.fancybox');
			echo $this->Html->css('uniform.default');
			echo $this->Html->css('bootstrap-fullcalendar');
			echo $this->Html->css('jqvmap');
			echo $this->Html->css('bootstrap-fullcalendar');
			echo $this->Html->css('main');

			echo $this->fetch('css');
			
			echo $this->Html->script('jquery-1.8.3.min');
			echo $this->Html->script('libs/bootstrap.min');
			
			echo $this->fetch('script');
		?>
	</head>
	<body class="fixed-top">
		<div id="header" class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="brand" href="#">
						<img src="<?php echo $this->webroot; ?>img/logo.png" alt="Admin Lab">
					</a>
					<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="arrow"></span>
					</a>
					<div id="top_menu" class="nav notify-row">
						<ul class="nav top-menu">
							<li class="dropdown">
								<a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Settings">
									<i class="icon-cog"></i>
								</a>
							</li>
							<li class="dropdown" id="header_inbox_bar">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-envelope-alt"></i>
									<span class="badge badge-important">5</span>
								</a>
								<ul class="dropdown-menu extended inbox">
									<li>
										<p>You have 5 new messages</p>
									</li>
									<li>
										<a href="#">
											<span class="photo"><img src="<?php echo $this->webroot; ?>img/avatar-mini.png" alt="avatar">
											</span>
											<span class="subject">
												<span class="from">Dulal Khan
												</span>
												<span class="time">Just now</span>
											</span>
											<span class="message"> Hello, this is an example messages please check 
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="photo">
												<img src="<?php echo $this->webroot; ?>img/avatar-mini.png" alt="avatar">
											</span>
											<span class="subject">
												<span class="from">Rafiqul Islam
												</span>
												<span class="time">10 mins</span>
											</span>
											<span class="message"> Hi, Mosaddek Bhai how are you ? 
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="photo">
												<img src="<?php echo $this->webroot; ?>img/avatar-mini.png" alt="avatar">
											</span>
											<span class="subject">
												<span class="from">Sumon Ahmed
												</span>
												<span class="time">3 hrs
												</span>
											</span>
											<span class="message"> This is awesome dashboard templates </span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="photo">
												<img src="<?php echo $this->webroot; ?>img/avatar-mini.png" alt="avatar">
											</span>
											<span class="subject">
												<span class="from">Dulal Khan</span>
												<span class="time">Just now</span>
											</span>
											<span class="message"> Hello, this is an example messages please check </span>
										</a>
									</li>
									<li>
										<a href="#">See all messages</a>
									</li>
								</ul>
							</li>
							<li class="dropdown" id="header_notification_bar">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-bell-alt"></i>
									<span class="badge badge-warning">7</span>
								</a>
								<ul class="dropdown-menu extended notification">
									<li>
										<p>You have 7 new notifications</p>
									</li>
									<li>
										<a href="#">
											<span class="label label-important">
												<i class="icon-bolt"></i>
											</span> Server #3 overloaded. 
											<span class="small italic">34 mins
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="label label-warning">
												<i class="icon-bell"></i>
											</span> Server #10 not respoding. 
											<span class="small italic">1 Hours
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="label label-important">
												<i class="icon-bolt"></i>
											</span> Database overloaded 24%. 
											<span class="small italic">4 hrs
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="label label-success">
												<i class="icon-plus"></i>
											</span> New user registered. 
											<span class="small italic">Just now
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="label label-info">
												<i class="icon-bullhorn"></i>
											</span> Application error. 
											<span class="small italic">10 mins
											</span>
										</a>
									</li>
									<li>
										<a href="#">See all notifications
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="top-nav ">
						<ul class="nav pull-right top-menu">
							<li class="dropdown mtop5">
								<a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
									<i class="icon-comments-alt"></i>
								</a>
							</li>
							<li class="dropdown mtop5">
								<a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
									<i class="icon-headphones"></i>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="<?php echo $this->webroot; ?>img/avatar-mini.png" alt="">
									<span class="username">Mosaddek Hossain
									</span>
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">
										<i class="icon-user"></i> My Profile
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-tasks"></i> My Tasks
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-calendar"></i> Calendar
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<?php echo $this->Html->link('<i class="icon-key"></i> Log Out',array('controller'=>'users','action'=>'logout'),array('escape'=>false));?>
										
									
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div id="container" class="row-fluid">
		<div id="sidebar" class="nav-collapse collapse" style="margin-left: 0px;">
			<div class="sidebar-toggler hidden-phone"></div>
			<div class="navbar-inverse">
				<form class="navbar-search visible-phone">
					<input type="text" class="search-query" placeholder="Search">
				</form>
			</div>
			<ul class="sidebar-menu" style="display: block;">
				<li class="has-sub active">
					<a href="javascript:;" class="">
						<span class="icon-box">
							<i class="icon-dashboard"></i>
						</span> Dashboard 
						<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li>
							<a class="" href="./index.html">Dashboard 1</a>
						</li>
						<li class="active">
							<a class="" href="./index_2.html">Dashboard 2</a>
						</li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
						<span class="icon-box">
							<i class="icon-user"></i>
						</span> Quản Lý Nhân Sự 
						<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li>
							<?php echo $this->Html->link('Người Dùng',array('controller'=>'users','action'=>'index')) ?>
						</li>
						<li>
							<?php echo $this->Html->link('Phân Quyền',array('controller'=>'employees','action'=>'index')) ?>
						</li>
						<!-- <li>
							<a class="" href="./ui_elements_tabs_accordions.html">Tabs &amp; Accordions</a>
						</li> -->
						<!-- <li>
							<a class="" href="./ui_elements_typography.html">Typography</a>
						</li> -->
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
						<span class="icon-box">
							<i class="icon-shopping-cart"></i>
						</span> Quản Lý Hàng Hóa
						<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li>
							<?php echo $this->Html->link('Hàng Hóa',array('controller'=>'products','action'=>'index')) ?>
						</li>
						<li>
							<?php echo $this->Html->link('Loại Hàng Hóa',array('controller'=>'categoryproducts','action'=>'index')) ?>
						</li>
						<li>
							<?php echo $this->Html->link('Nhà Cung Cấp',array('controller'=>'suppliers','action'=>'index')) ?>
						</li>
						<li>
							<?php echo $this->Html->link('Đơn Vị Tính',array('controller'=>'units','action'=>'index')) ?>
						</li>
						<li>
							<?php echo $this->Html->link('Tiền Tệ',array('controller'=>'exchangerates','action'=>'index')) ?>
						</li>
						<li>
							<a class="" href="./gallery.html"> Gallery</a>
						</li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
						<span class="icon-box">
							<i class="icon-tasks"></i>
						</span> Form Stuff 
						<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li>
							<a class="" href="./form_layout.html">Form Layouts</a>
						</li>
						<li>
							<a class="" href="./form_component.html">Form Components
							</a>
						</li>
						<li>
							<a class="" href="./form_wizard.html">Form Wizard</a>
						</li>
						<li>
							<a class="" href="./form_validation.html">Form Validation
							</a>
						</li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
						<span class="icon-box">
							<i class="icon-fire"></i>
						</span> Icons 
						<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li>
							<a class="" href="./font_awesome.html">Font Awesome</a>
						</li>
						<li>
							<a class="" href="./glyphicons.html">Glyphicons</a></li></ul></li><li class="has-sub"><a href="javascript:;" class=""><span class="icon-box"><i class="icon-map-marker"></i></span> Maps <span class="arrow"></span></a><ul class="sub"><li><a class="" href="./maps_google.html"> Google Maps</a></li><li><a class="" href="./maps_vector.html"> Vector Maps</a></li></ul></li><li class="has-sub"><a href="javascript:;" class=""><span class="icon-box"><i class="icon-file-alt"></i></span> Sample Pages <span class="arrow"></span></a><ul class="sub"><li><a class="" href="./profile.html">Profile</a></li><li><a class="" href="./blank.html">Blank Page</a></li><li><a class="" href="./sidebar_closed.html">Sidebar Closed Page</a></li><li><a class="" href="./pricing_tables.html">Pricing Tables</a></li><li><a class="" href="./faq.html">FAQ</a></li><li><a class="" href="./errors.html">Errors</a></li></ul></li><li><a class="" href="./login.html"><span class="icon-box"><i class="icon-user"></i></span> Login Page</a></li></ul></div>
	</div>
		
		<div id="main-content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>



<div id="footer"> 2013 © Padyn. <div class="span pull-right"><span class="go-top"><i class="icon-arrow-up"></i></span></div></div>
		<?php echo $this->Html->script('jquery-ui-1.9.2.custom.min'); ?>
		<?php echo $this->Html->script('jquery.slimscroll.min'); ?> 
		<?php echo $this->Html->script('fullcalendar.min'); ?> 
		<?php echo $this->Html->script('blockui'); ?> 
		<?php echo $this->Html->script('cookie'); ?> 
		<?php echo $this->Html->script('jquery.vmap'); ?> 
		<?php echo $this->Html->script('jquery.vmap.russia'); ?> 
		<?php echo $this->Html->script('jquery.vmap.world'); ?>
		<?php echo $this->Html->script('jquery.vmap.europe'); ?>
		<?php echo $this->Html->script('jquery.vmap.germany'); ?>
		<?php echo $this->Html->script('jquery.vmap.usa'); ?>
		<?php echo $this->Html->script('jquery.vmap.sampledata'); ?>
		<?php echo $this->Html->script('jquery.knob'); ?> 
		<?php echo $this->Html->script('jquery.flot'); ?> 
		<?php echo $this->Html->script('jquery.flot.resize'); ?> 
		<?php echo $this->Html->script('jquery.flot.pie'); ?> 
		<?php echo $this->Html->script('jquery.flot.stack'); ?> 
		<?php echo $this->Html->script('jquery.flot.crosshair'); ?> 
		<?php echo $this->Html->script('jquery.peity.min'); ?> 
		<?php echo $this->Html->script('jquery.uniform.min'); ?> 
		<?php echo $this->Html->script('jquery.dataTables'); ?> 
		<?php echo $this->Html->script('DT_bootstrap'); ?> 
		<?php echo $this->Html->script('scripts'); 
		echo $this->Html->script('libs/bootstrap-tooltip');
 		?> 
		<script>jQuery(document).ready(
		function()
		{

			// App.setMainPage(true);
			App.init();
		});
		</script>
		<script type="text/javascript">
	
		$(document).ready(function() {
			$('.is_password').hide();
			$('.tt').tooltip();
		});
	
		</script>
		<!--<script type="text/javascript">
			jQuery('#sidebar .has-sub > a').click(function () {
            var last = jQuery('.has-sub.open', $('#sidebar'));
            last.removeClass("open");
            jQuery('.arrow', last).removeClass("open");
            jQuery('.sub', last).slideUp(200);
            var sub = jQuery(this).next();
            if (sub.is(":visible")) {
                jQuery('.arrow', jQuery(this)).removeClass("open");
                jQuery(this).parent().removeClass("open");
                sub.slideUp(200);
            } else {
                jQuery('.arrow', jQuery(this)).addClass("open");
                jQuery(this).parent().addClass("open");
                sub.slideDown(200);
            }
        });
		</script>-->
		<?php echo $this->fetch('script');?>
	</body>
</html>