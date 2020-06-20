<?php
 session_start();
include_once("memberheader.php");
?>
 
<div class="page-header">
<?php
                                   
                                    $mid=$_SESSION["mid"];
                                $uname=$_SESSION["uname"];                                
    
                                    //$fname=$_SESSION["fullname"];
                                  
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="select * from member where mid=$mid";
		$result=$cnn->query($qry);

		while($row=$result->fetch_assoc())
		{
            
            $uname=$row["uname"];
            $fullname=$row["fname"]." ".$row["lname"];
            $height=$row["height"];
            $weight=$row["weight"];
            $doj=$row["doj"];
            $dob=$row["dob"];
            $email=$row["email"];
            $contactno=$row["contactno"];
            $img=$row["img"];
            
        }
          
                               
?>
    <h1>
								My Profile 
								<small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
									</small>
							</h1>
						</div>
                                <div class="">
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" class="editable img-responsive editable-click editable-empty" img src='images\\" .$row["img"]."'>
												</span>

												<div class="space-4"></div>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
														<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
															<i class="ace-icon fa fa-circle light-green"></i>
															&nbsp;
															<span class="white">
                                                            <?php
                                                                
                                                                echo $fullname;
                                                            ?>
                                                            </span>
														</a>

														<ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
															<li class="dropdown-header"> Change Status </li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-circle green"></i>
&nbsp;
																	<span class="green">Available</span>
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-circle red"></i>
&nbsp;
																	<span class="red">Busy</span>
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-circle grey"></i>
&nbsp;
																	<span class="grey">Invisible</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>


											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Username </div>

													<div class="profile-info-value">
														<span class="editable editable-click" 
                                                        id="uname">
                                                            <?php
                                                            echo $uname;           ?>                                            </span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Full Name </div>

													<div class="profile-info-value">
														
														<span class="editable editable-click" id="fullname">
                                                        <?php
                                                            
                                                            
                                                            echo $fullname;
                                                            ?>
                                                        
                                                        
                                                        </span>
														
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Height </div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="height">
                                                        <?php
                                                            
                                                            
                                                            echo $height;
                                                            ?>
                                                        
                                                        
                                                        
                                                        </span>
													</div>
												</div>
                                                <div class="profile-info-row">
													<div class="profile-info-name"> Weight </div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="weight">
                                                        <?php
                                                            
                                                            
                                                            echo $weight;
                                                            ?>
                                                        
                                                        
                                                        
                                                        </span>
													</div>
												</div>


												<div class="profile-info-row">
													<div class="profile-info-name"> Joined </div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="doj">
                                                        <?php
                                                            
                                                            
                                                            echo $doj;
                                                            ?>
                                                        
                                                        
                                                        
                                                        </span>
													</div>
												</div>
                                                <div class="profile-info-row">
													<div class="profile-info-name"> Birth Date </div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="dob">
                                                        <?php
                                                            
                                                            
                                                            echo $dob;
                                                            ?>
                                                        
                                                        
                                                        
                                                        </span>
													</div>
												</div>



                                                <div class="profile-info-row">
													<div class="profile-info-name"> Email </div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="email">
                                                        <?php
                                                            
                                                            
                                                            echo $email;
                                                            ?>
                                                        
                                                        
                                                        
                                                        </span>
													</div>
												</div>
                              					<div class="profile-info-row">
													<div class="profile-info-name"> Contact no </div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="contactno">
                                                        <?php
                                                            
                                                            
                                                            echo $contactno;
                                                            ?>
                                                        
                                                        
                                                        
                                                        </span>
													</div>
												</div>
                                                
										<br>
                                        <div class="clearfix form-actions">
										<div class="col-md-offset-2 col-md-20" align="center" >
                                         <a href='editprofile.php'>Edit</a>		

											&nbsp; &nbsp; &nbsp;
											
										</div>
									</div>
                                                

<?php
include_once("footer.php");
?>
