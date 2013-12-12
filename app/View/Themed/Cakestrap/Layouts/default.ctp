<?php echo $this->Html->docType('html5'); ?> 
<html>
	<head>
		<?php //echo $this->Html->charset('utf-8'); ?>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<title>
			
			<?php echo $title_for_layout." admin"; ?>
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
			echo $this->Html->css('fancybox');
			echo $this->Html->css('uniform');
			echo $this->Html->css('css-bootstrap-fullcalendar');
			echo $this->Html->css('css-jqvmap');
			echo $this->Html->css('jquery.appendGrid-1.2.0');
			echo $this->Html->css('theme.bootstrap');
			echo $this->Html->css('jquery.tablesorter.pager');
			echo $this->Html->script('jquery.tablesorter.pager');
			


			echo $this->Html->css('main_web');


			// echo $this->fetch('css');
			
			echo $this->Html->script('jquery.min');
			echo $this->Html->script('libs/bootstrap.min');
			echo $this->Html->script('jquery.tablesorter');
			echo $this->Html->script('jquery.tablesorter.widgets');
			echo  $this->Html->script('jquery.form');
			echo  $this->Html->script('message');

			// echo $this->fetch('script');
		?>
		<link rel="stylesheet" id="style_color"/>


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
						<!--	<li class="dropdown">
								<a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Settings">
									<i class="icon-cog"></i>
								</a>
							</li>   -->
							<li class="dropdown" id="header_inbox_bar">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-envelope-alt"></i>
                                    <span class="badge badge-important messageNumber"></span>
                                </a>
                                <ul class="dropdown-menu extended inbox" id='newmessage'>
                                    
                                </ul>
                            </li>
                            
						<!--	<li class="dropdown" id="header_notification_bar">
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
							</li> -->
						</ul>
					</div>
					<div class="top-nav ">
						<ul class="nav pull-right top-menu">
							<!--<li class="dropdown mtop5">
								<a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
									<i class="icon-comments-alt"></i>
								</a>
							</li>
							<li class="dropdown mtop5">
								<a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
									<i class="icon-headphones"></i>
								</a>
							</li>-->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="<?php echo $this->webroot; ?>img/avatar-mini.png" alt="">
									<span class="username"><?php echo $this->Session->read('userSS') ?>
									</span>
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<li>
									<?php echo $this->Html->link('<i class="icon-user"></i> My Profile',array('controller'=>'users','action'=>'profile'),array('escape'=>false));?>
								</li>
								<!--<li>
									<a href="#">
										<i class="icon-tasks"></i> My Tasks
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-calendar"></i> Calendar
									</a>
								</li>-->
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
                            <?php echo $this->Html->link('Tính lương',array('controller'=>'employees','action'=>'salaries')) ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('Bậc lương',array('controller'=>'salaries','action'=>'index')) ?>
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
						
					</ul>
				</li>

				<li class="has-sub">
					<a href="javascript:;" class="">
						<span class="icon-box">
							<i class="icon-home"></i>
						</span> Quản Lý Kho 
						<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li>
							<?php echo $this->Html->link('Kho',array('controller'=>'stocks','action'=>'index')) ?>
						</li>
						<li>
							<?php echo $this->Html->link('Loại Kho',array('controller'=>'typestocks','action'=>'index')) ?>
						</li>

						<li>
							<?php echo $this->Html->link('Nhập Hàng',array('controller'=>'detailstocks','action'=>'import')) ?>
						</li>

						<li>
							<?php echo $this->Html->link('Xuất Hàng',array('controller'=>'detailstocks','action'=>'export')) ?>
						</li>
					</ul>
				</li>
                
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box">
                            <i class="icon-file-alt"></i>
                        </span> Quản Lý Hóa Đơn 
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li>
                            <?php echo $this->Html->link('Hóa đơn',array('controller'=>'bills','action'=>'index')) ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('Loại Hóa Đơn',array('controller'=>'typebills','action'=>'index')) ?>
                        </li>

                        <li>
                            <?php echo $this->Html->link('Chi tiết hóa đơn',array('controller'=>'detailbills','action'=>'index')) ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('Công nợ',array('controller'=>'bills','action'=>'congno')) ?>
                        </li>
                    </ul>
                </li>
                
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box">
                            <i class="icon-file-alt"></i>
                        </span> Quản Lý Tin Tức
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li>
                            <?php echo $this->Html->link('Project',array('controller'=>'News','action'=>'project')) ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('Review',array('controller'=>'News','action'=>'review')) ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('Guide',array('controller'=>'News','action'=>'guide')) ?>
                        </li>
                        
                    </ul>
                </li>
                
               <li><?php echo $this->Html->link('<span class="icon-box"><i class="icon-signal"></i></span> Thống Kê',
                array('controller'=>'reports','action'=>'index'),
                array('escape'=>false)) ;?>
                </li>
				
			</ul>
		</div>
	</div>
		
		<div id="main-content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
			<!--<div id="theme-change" class="hidden-phone" style="overflow: hidden; width: 20px; height: 22px; padding-top: 3px;"><i class="icon-cogs"></i><span class="settings" style="display: none;"><span class="text">Theme:</span><span class="colors"><span class="color-default" data-style="default"></span><span class="color-gray" data-style="gray"></span><span class="color-purple" data-style="purple"></span><span class="color-navy-blue" data-style="navy-blue"></span></span></span></div>-->
		</div>



<div id="footer"> 2013 © Padyn. <div class="span pull-right"><span class="go-top"><i class="icon-arrow-up"></i></span></div></div>
		<?php echo $this->Html->script('jquery-ui-1.9.2.custom.min'); ?>
		<?php echo $this->Html->script('jquery.slimscroll.min'); ?> 
		<?php echo $this->Html->script('fullcalendar.min'); ?> 
		<?php echo $this->Html->script('bootstrap-modal'); ?> 
		<?php echo $this->Html->script('jquery.blockui'); ?> 
		<?php echo $this->Html->script('jquery.cookie'); ?> 
		<?php echo $this->Html->script('jquery.vmap'); ?> 
		<?php echo $this->Html->script('jquery.vmap.russia'); ?> 
		<?php echo $this->Html->script('jquery.vmap.world'); ?>
		<?php echo $this->Html->script('jquery.vmap.europe'); ?>
		<?php echo $this->Html->script('jquery.vmap.germany'); ?>
		<?php echo $this->Html->script('jquery.vmap.usa'); ?>
		<?php echo $this->Html->script('jquery.vmap.sampledata'); ?>
		<?php echo $this->Html->script('knob'); ?> 
		<?php echo $this->Html->script('flot'); ?> 
		<?php echo $this->Html->script('flot.resize'); ?> 
		<?php echo $this->Html->script('jquery.flot.pie'); ?> 
		<?php echo $this->Html->script('jquery.flot.stack'); ?> 
		<?php echo $this->Html->script('jquery.flot.crosshair'); ?> 
		<?php echo $this->Html->script('peity.min'); ?> 
		<?php echo $this->Html->script('jquery.uniform.min'); ?> 
		<?php echo $this->Html->script('dataTables'); ?> 
		<?php echo $this->Html->script('DT_bootstrap'); ?> 
		<?php echo $this->Html->script('jquery.scripts'); ?>
		

		
		
		<?php
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
            
            loadnewmessage('<?php echo $this->webroot; ?>');
		});
	
		</script>

		<script type="text/javascript">
$(function() {

  $.extend($.tablesorter.themes.bootstrap, {
    // these classes are added to the table. To see other table classes available,
    // look here: http://twitter.github.com/bootstrap/base-css.html#tables
    table      : 'table table-bordered',
    caption    : 'caption',
    header     : 'bootstrap-header', // give the header a gradient background
    footerRow  : '',
    footerCells: '',
    icons      : '', // add "icon-white" to make them white; this icon class is added to the <i> in the header
    sortNone   : 'bootstrap-icon-unsorted',
    sortAsc    : 'icon-chevron-up glyphicon glyphicon-chevron-up',     // includes classes for Bootstrap v2 & v3
    sortDesc   : 'icon-chevron-down glyphicon glyphicon-chevron-down', // includes classes for Bootstrap v2 & v3
    active     : '', // applied when column is sorted
    hover      : 'opacity:0.7', // use custom css here - bootstrap class may not override it
    filterRow  : '', // filter row class
    even       : '', // odd row zebra striping
    odd        : ''  // even row zebra striping
  });

  // call the tablesorter plugin and apply the uitheme widget
  $("table").tablesorter({
    // this will apply the bootstrap theme if "uitheme" widget is included
    // the widgetOptions.uitheme is no longer required to be set
    theme : "bootstrap",

    widthFixed: true,

    headerTemplate : '{content} {icon}', // new in v2.7. Needed to add the bootstrap icon!

    // widget code contained in the jquery.tablesorter.widgets.js file
    // use the zebra stripe widget if you plan on hiding any rows (filter widget)
    widgets : [ "uitheme", "filter", "zebra" ],

    widgetOptions : {
      // using the default zebra striping class name, so it actually isn't included in the theme variable above
      // this is ONLY needed for bootstrap theming if you are using the filter widget, because rows are hidden
      zebra : ["even", "odd"],

      // reset filters button
      filter_reset : ".reset"

      // set the uitheme widget to use the bootstrap theme class names
      // this is no longer required, if theme is set
      // ,uitheme : "bootstrap"

    }
  })
  .tablesorterPager({

    // target the pager markup - see the HTML block below
    container: $(".ts-pager"),

    // target the pager page select dropdown - choose a page
    cssGoto  : ".pagenum",

    // remove rows from the table to speed up the sort of large tables.
    // setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
    removeRows: false,

    // output string - default is '{page}/{totalPages}';
    // possible variables: {page}, {totalPages}, {filteredPages}, {startRow}, {endRow}, {filteredRows} and {totalRows}
    output: '{startRow} - {endRow} / {filteredRows} ({totalRows})'

  });

});
		</script>
	</body>
</html>