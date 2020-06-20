<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Form Elements - Smart Gym</title>

		<meta name="description" content="Common form elements and layouts" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Smart Gym
						</small>
					</a>
				</div>

							
										
						
						<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						
							
							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
							
							

								
							</ul>
						


						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="login.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="adminhome.php"> 
							<i class="menu-icon fa fa-tachometer"></i>
							
							<span class="menu-text"> Home </span>

							
						</a>

						<b class="arrow"></b>

					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							
							<span class="menu-text">
								Admin
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="displayadmin.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>

									View
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
					</li>
                    <ul class="nav nav-list">

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							
							<span class="menu-text">
								Package
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="displaygympackage.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>

									View
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
						<ul class="submenu">
							<li class="">
								<a href="insertgympackage.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>
									Insert
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
					</li>
				<ul class="nav nav-list">

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
	
							<span class="menu-text">
								Trainer
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="displaytrainer.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>

									View
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
						<ul class="submenu">
							<li class="">
								<a href="inserttrainer.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>
									Insert
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
					</li>
				<ul class="nav nav-list">

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">
								Member
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="displaymember.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>

									View
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
						<ul class="submenu">
							<li class="">
								<a href="insertmember.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>
									Insert
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
					</li>
				<ul class="nav nav-list">

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>

							<span class="menu-text">
								Product
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="displayproduct.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>

									View
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
						<ul class="submenu">
							<li class="">
								<a href="insertproduct.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>
									Insert
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
					</li>
				<ul class="nav nav-list">

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">
								Batch
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="displaybatch.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>

									View
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
						<ul class="submenu">
							<li class="">
								<a href="insertbatch.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>
									Insert
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
					</li>
				<ul class="nav nav-list">

					<li class="">
						<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">
								 Activity
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="displayactivity.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>

									View
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
						<ul class="submenu">
							<li class="">
								<a href="insertactivity.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>
									Insert
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
					</li>
				<ul class="nav nav-list">

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">
								Tips
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="displaytips.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>

									View
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
						<ul class="submenu">
							<li class="">
								<a href="inserttips.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>
									Insert
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
					</li>
                    	<ul class="nav nav-list">

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>

							<span class="menu-text">
								Trainer Activity
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="displaytraineractivity.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>

									View
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
						<ul class="submenu">
							<li class="">
								<a href="inserttraineractivity.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>
									Insert
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
					</li>
			
				<ul class="nav nav-list">

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>

							<span class="menu-text">
								Order
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="displayorder.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>

									View
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
						<ul class="submenu">
							<li class="">
								<a href="insertorder.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>
									Insert
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
					</li>
				<ul class="nav nav-list">

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">
								Member Attendence
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="" class="">
									<i class="menu-icon fa fa-caret-right"></i>

									View
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
						<ul class="submenu">
							<li class="">
								<a href="memberattendance.php" class="">
									<i class="menu-icon fa fa-caret-right"></i>
									Insert
									
								</a>

								<b class="arrow"></b>

								
							
						</ul>
					</li>
					<li class="">
						<a href="registerUser.php" class="">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Report </span>

							
						</a>

						<b class="arrow"></b>

					</li>

					
					


						

					
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				