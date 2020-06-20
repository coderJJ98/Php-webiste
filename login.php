<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Smart Gym</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout">
        <form method="post">
        <?php
            if(isset($_POST['Submit']))
               {
                print_r($_POST);
                $x=$_POST["Username"];
                $y=(trim($_POST["Password"]));
                $cnn=mysqli_connect("localhost","root","","dbproject.sql");
                $qry="select * from member WHERE uname='$x' AND pwd like '$y%'";
                echo $qry;
                
                $result=$cnn->query($qry);
                $cnt=mysqli_num_rows($result);
        
                if($cnt==1)
                {
                    $row=$result->fetch_assoc();
                    session_start();
                    $_SESSION["mid"]=$row["mid"];
                    $_SEESION["fullname"] =$row["fname"]." ".$row["lname"];
                    $_SESSION["uname"] =$row["uname"];

                     echo "gomember home";
                    header("Location:Member\\memberhome.php"); //member header/footer assets , home.php
                }
                else
                {
                $qry="select * from trainer where tuname='$x' AND tpwd='$y'";
                echo $qry;
                $result=$cnn->query($qry);
                $cnt=mysqli_num_rows($result);
        
                       if($cnt==1)
                       {
                           
                            $row=$result->fetch_assoc();
                            session_start();
                    $_SESSION["tid"]=$row["tid"];
                    $_SEESION["fullname"] =$row["fname"]." ".$row["lname"];
                    $_SESSION["tuname"] =$row["tuname"];
                           
                           

                                    echo "gotrainer home";
                                    header("Location:Trainer\\trainerhome.php"); 
                           
                       }
                    
                        else
                        {
                        $qry= "select * from admin where username='$x' AND psw='$y'";
                        echo $qry;    
                        
                        $result=$cnn->query($qry);
                        $cnt=mysqli_num_rows($result);
        
                    if($cnt==1)
                    {
                        session_start();
                        $_SESSION["aid"]=$row["aid"];
                        $_SEESION["fullname"] =$row["fname"]." ".$row["lname"];
                        $_SESSION["uname"] =$row["username"];
                                    echo "goadmin home";
                                    header("Location:admin\\adminhome.php"); 
                           
                                }
                                else
                                {
                                    echo "record not found";
                                }
                        }
                    
                 }
                
                }
            
            
            ?>
            
        
        
        </form>
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">Smart</span>
									<span class="white" id="id-text2">Gym</span>
								</h1>
								</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information
											</h4>

											<div class="space-6"></div>

											<form method="post">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username" name="Username"/>
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" name="Password"/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													
														<input type="submit" name="Submit" value="Submit" class="width-35 pull-right btn btn-sm btn-primary">
														</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											
										<div class="toolbar clearfix">
											<div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link">
													<i class="ace-icon fa fa-arrow-left"></i>
													I forgot my password
												</a>
											</div>

											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Retrieve Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your email and to receive instructions
											</p>

											
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Send Me!</span>
														</button>
													</div>
												</fieldset>
											
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

								
													
										</div>

										
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->

							
					</div><!-- /.col -->
				
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>
