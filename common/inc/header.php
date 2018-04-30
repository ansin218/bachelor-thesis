<!DOCTYPE html>
<html>
 <link href="assets/plugins/jquery-notifications/css/messenger.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="assets/plugins/jquery-notifications/css/messenger-theme-flat.css" rel="stylesheet" type="text/css" media="screen"/>
	<script src="assets/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>
<head>
	

	<title>INCSTRAP Dashboard</title>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta content="" name="description" />
	<meta content="" name="author" />
    
    <script src="/assets/js/jquery-1.10.1.min.js"></script>
	
    <!-- K -->
   
    <!-- END K-->

	<!-- NEED TO WORK ON -->

	<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>

	<!-- BEGIN CORE JS FRAMEWORK--> 
	<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
	<script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script> 
	<script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
	<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
	<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
    <script type="text/javascript" src="assets/js/notifications.js"></script>

	<!-- END CORE JS FRAMEWORK --> 
	<!-- BEGIN PAGE LEVEL JS --> 	
	<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script> 	
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
	<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
	<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS --> 	
	
	<!-- BEGIN CORE TEMPLATE JS --> 
	<script src="assets/js/core.js" type="text/javascript"></script> 
	<script src="assets/js/chat.js" type="text/javascript"></script> 
	<script src="assets/js/demo.js" type="text/javascript"></script> 
	<!-- END CORE TEMPLATE JS --> 

	<!-- END NEED TO WORK ON -->

</head>
<body class="hide-sidebar">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse"> 
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="navbar-inner">
		<!-- BEGIN NAVIGATION HEADER -->
		<div class="header-seperation"> 
			<!-- BEGIN MOBILE HEADER -->
			<ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">	
				<li class="dropdown">
					<a id="main-menu-toggle" href="#main-menu" class="">
						<div class="iconset top-menu-toggle-white"></div>
					</a>
				</li>		 
			</ul>
			<!-- END MOBILE HEADER -->
			<!-- BEGIN LOGO -->	
			<a href="dashboard.php">
				<img src="assets/img/logo.png" class="img-responsive center-block" alt="" data-src="assets/img/logo.png" data-src-retina="assets/img/logo2x.png" width="106" height="21"/>
			</a>
			<!-- END LOGO --> 
			<!-- BEGIN LOGO NAV BUTTONS -->
			<!--<ul class="nav pull-right notifcation-center">	
				<li class="dropdown" id="header_task_bar">
					<a href="#" class="dropdown-toggle active" data-toggle="">
						<div class="iconset top-home"></div>
					</a>
				</li>
				<li class="dropdown" id="header_inbox_bar">
					<a href="#" class="dropdown-toggle">
						<div class="iconset top-messages"></div>
						<span class="badge" id="msgs-badge">2</span>
						</a>
				</li>
				<!-- BEGIN MOBILE CHAT TOGGLER -->
			<!--	<li class="dropdown" id="portrait-chat-toggler" style="display:none">
					<a href="#sidr" class="chat-menu-toggle">
						<div class="iconset top-chat-white"></div>
					</a>
				</li>
				<!-- END MOBILE CHAT TOGGLER -->				        
			<!-- </ul> -->
			<!-- END LOGO NAV BUTTONS -->
		</div>
		<!-- END NAVIGATION HEADER -->
		<!-- BEGIN CONTENT HEADER -->
		<div class="header-quick-nav"> 
			<!-- BEGIN HEADER LEFT SIDE SECTION -->
			<div class="pull-left"> 
				<!-- BEGIN SLIM NAVIGATION TOGGLE -->
				<ul class="nav quick-section">
					<li class="quicklinks">
						
					</li>
				</ul>
				<!-- END SLIM NAVIGATION TOGGLE -->				
				<!-- BEGIN HEADER QUICK LINKS -->
				<!-- <ul class="nav quick-section">
					<li class="quicklinks"><a href="#" class=""><div class="iconset top-reload"></div></a></li>
					<li class="quicklinks"><span class="h-seperate"></span></li>
					
				
					
					<!-- END SEARCH BOX 
				</ul>-->
				<!-- BEGIN HEADER QUICK LINKS -->				
			</div>
			<!-- END HEADER LEFT SIDE SECTION -->
			<!-- BEGIN HEADER RIGHT SIDE SECTION -->
			<div class="pull-right"> 
				<!-- <div class="chat-toggler">	
					 BEGIN NOTIFICATION CENTER
						<div class="user-details">  -->
					 
						
						<!-- <div class="iconset top-down-arrow"></div> -->
						
		
					<!-- END NOTIFICATION CENTER -->
					<!-- BEGIN PROFILE PICTURE -->
					 
					<!-- END PROFILE PICTURE -->     			
				<!-- </div> -->
				<!-- BEGIN HEADER NAV BUTTONS -->
				<ul class="nav quick-section">

					<!-- BEGIN SETTINGS -->
					<li class="quicklinks"> 
						<a class="pull-right" href="logout.php" id="user-options">						
							<div class="iconset fa fa-power-off"></div> 

						</a>
					
					</li>
					<!-- END SETTINGS -->
					<li class="quicklinks"></li> 
					<!-- BEGIN CHAT SIDEBAR TOGGLE -->
			
					<!-- END CHAT SIDEBAR TOGGLE --> 
				</ul>
				<!-- END HEADER NAV BUTTONS -->
			</div>
			<!-- END HEADER RIGHT SIDE SECTION -->
		</div> 
		<!-- END CONTENT HEADER --> 
	</div>
	<!-- END TOP NAVIGATION BAR --> 
</div>
<!-- END HEADER -->
<!-- BEGIN CONTENT -->
<div class="page-container row-fluid">
	<!-- BEGIN SIDEBAR -->
	<!-- BEGIN MENU -->
	<div class="page-sidebar" id="main-menu"> 
		  <div class="page-sidebar-wrapper" id="main-menu-wrapper">
		<!-- BEGIN MINI-PROFILE -->
		<div class="user-info-wrapper">	
			<div class="profile-wrapper">
				<img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" />
			</div>
			<div class="user-info">
				<div class="greeting">Welcome</div>
				<div class="username">Admin</span></div>
				<!--<div class="status">Status<a href="#"><div class="status-icon green"></div>Online</a></div>-->
			</div>
		</div>
		<!-- END MINI-PROFILE -->
		<!-- BEGIN SIDEBAR MENU -->	
		<p class="menu-title"><span class="pull-right"></span></p>
		<ul>	
			<!-- BEGIN SELECTED LINK -->
			<li class="start active">
				<a href="index.php">
					<i class="fa fa-dashboard"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					<!--<span class="badge badge-important pull-right">5</span>-->
				</a>
			</li>
			<!-- END SELECTED LINK -->
			<!-- BEGIN BADGE LINK -->
			
			
			<!-- END BADGE LINK -->     
			<!-- BEGIN SINGLE LINK -->
			<li class="">
				<a href="#">
					<i class="fa fa-camera"></i>
					<span class="title">Camera Feed</span>
				</a>
			</li>
			<!-- END SINGLE LINK -->    
			<!-- BEGIN ONE LEVEL MENU
			<li class="">
				<a href="javascript:;">
					<i class="icon-custom-ui"></i>
					<span class="title">Logs</span>
					
				</a>
				
			</li>-->
			<!-- END ONE LEVEL MENU -->
			<!-- BEGIN TWO LEVEL MENU -->
		
			<!-- END TWO LEVEL MENU -->			
		</ul>
		<!-- END SIDEBAR MENU -->
		<!-- BEGIN SIDEBAR WIDGETS -->
		<div class="side-bar-widgets">
			<!-- BEGIN FOLDER WIDGET -->
			<p class="menu-title">SENSORS<span class="pull-right"><a href="#" class="create-folder"><i class="icon-plus"></i></a></span></p>
			<ul class="folders">
				<li><a href="#"><div class="status-icon red"></div>Motion Sensor</a></li>
                <li><a href="#"><div class="status-icon green"></div>Temperature Sensor</a></li>
				<!-- BEGIN HIDDEN INPUT BOX (FOR ADD FOLDER LINK) -->
				<li class="folder-input" style="display:none">
					<input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" id="folder-name">
				</li>
				<!-- END HIDDEN INPUT BOX (FOR ADD FOLDER LINK) -->
			</ul>
			<!-- END FOLDER WIDGET -->
			<!-- BEGIN PROJECTS WIDGET -->
		
		
			<!-- END PROJECTS WIDGET -->
		</div>
		<div class="clearfix"></div>
		<!-- END SIDEBAR WIDGETS --> 
	</div>
	</div>
	<!-- BEGIN SCROLL UP HOVER -->
	<a href="#" class="scrollup">Scroll</a>
	<!-- END SCROLL UP HOVER -->
	<!-- END MENU -->
	<!-- BEGIN SIDEBAR FOOTER WIDGET -->
	<!-- <div class="footer-widget">		
		<div class="progress transparent progress-small no-radius no-margin">
			<div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar"></div>		
		</div>
		<div class="pull-right">
			<div class="details-status">
				<span data-animation-duration="560" data-value="86" class="animate-number"></span>%
			</div>	
			<a href="#"><i class="fa fa-power-off"></i></a>
		</div>
	</div> -->
	<!-- END SIDEBAR FOOTER WIDGET -->
	<!-- END SIDEBAR --> 
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
  
			<!-- BEGIN PAGE TITLE -->
		
			<!-- END PAGE TITLE -->
			<!-- BEGIN PlACE PAGE CONTENT HERE -->