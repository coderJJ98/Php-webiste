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
            
        }
          
                               
?>
    <h1>
								Edit Profile 
								<small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
									</small>
							</h1>
						</div>
                                <div class="">
								
                               <form class="form-horizontal" role="form"  method="post">
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" class="editable img-responsive editable-click editable-empty"  src="20.jpg">
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
                                        </div>
                                   </div>
											
												<div class="profile-info-row">
													<div class="profile-info-name"> Username </div>

													<div class="profile-info-value"><input type="text" id="form-field-1" placeholder="Enter username" name="uname" class="col-xs-12 col-sm-18" />
										
														<span class="editable editable-click" 
                                                        id="uname">
                                                           </span>
													</div>
												</div>
                                            
												<div class="profile-info-row">
													<div class="profile-info-name"> First Name </div>

													<div class="profile-info-value"><input type="text" id="form-field-1" placeholder="Enter Firstname" name="fname" class="col-xs-12 col-sm-18" />
										
														<span class="editable editable-click" 
                                                        id=fname>
                                                           </span>
														
													</div>
												</div>
                                                <div class="profile-info-row">
													<div class="profile-info-name"> Last Name </div>

													<div class="profile-info-value"><input type="text" id="form-field-1" placeholder="Enter Lastname" name="lname" class="col-xs-12 col-sm-18" />
										
														<span class="editable editable-click" 
                                                        id=lname>
                                                           </span>
														
													</div>
												</div>

												
												<div class="profile-info-row">
													<div class="profile-info-name"> Height </div>

													<div class="profile-info-value"><input type="text" id="form-field-1" placeholder="Enter Height" name="height" class="col-xs-12 col-sm-18" />
										
														<span class="editable editable-click" 
                                                        id=height>
                                                           </span>
													</div>
												</div>
                                                <div class="profile-info-row">
													<div class="profile-info-name"> Weight </div>

													<div class="profile-info-value"><input type="text" id="form-field-1" placeholder="Enter fullname" name="weight" class="col-xs-12 col-sm-18" />
										
														<span class="editable editable-click" 
                                                        id=weight>
                                                           </span>
													</div>
												</div>


												<div class="profile-info-row">
													<div class="profile-info-name"> Joined </div>

													<div class="profile-info-value"><input type="text" id="form-field-1" placeholder="Enter dateofjoin" name="dateofjoin" class="col-xs-12 col-sm-18" />
										
														<span class="editable editable-click" 
                                                        id=doj>
                                                           </span>
													</div>
												</div>
                                                <div class="profile-info-row">
													<div class="profile-info-name"> Birth Date </div>

													<div class="profile-info-value"><input type="text" id="form-field-1" placeholder="Enter Birthdate" name="Birthdate" class="col-xs-12 col-sm-18" />
										
														<span class="editable editable-click" 
                                                        id=dob>
                                                           </span>
													</div>
												</div>



                                                <div class="profile-info-row">
													<div class="profile-info-name"> Email </div>

													<div class="profile-info-value"><input type="text" id="form-field-1" placeholder="Enter email" name="email" class="col-xs-12 col-sm-18" />
										
														<span class="editable editable-click" 
                                                        id=email>
                                                           </span>
													</div>
												</div>
                              					<div class="profile-info-row">
													<div class="profile-info-name"> Contact no </div>

													<div class="profile-info-value"><input type="text" id="form-field-1" placeholder="Enter Contactno" name="Contactno" class="col-xs-12 col-sm-18" />
										
														<span class="editable editable-click" 
                                                        id=contactno>
                                                           </span>
													</div>
												</div>
                                                
											<br>
									<div class="clearfix form-actions">
										<div class="row-md-offset-3 row-md-10">
											<input type="submit" class="bt btn-info" type="submit" name="submit" value="Submit">
												
												
											

											
										</div>
                                                </div>
                                                
                                            </form>
    <?php 
	
	if(isset($_POST['submit']))
    {
        print_r($_POST);
        $uname=$_POST["uname"];
        $fname= $_POST["fname"];
        $lname= $_POST["lname"];
        $height=$_POST["height"];
        $weight=$_POST["weight"];
        $doj=$_POST["dateofjoin"];
        $dob=$_POST["Birthdate"];
        $email=$_POST["email"];
        $contactno=$_POST["Contactno"];

		$mid=$_SESSION['mid'];
		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		 $qry="UPDATE member SET  uname= '$uname',fname= '$fname',lname= '$lname',height= '$height',weight= '$weight',doj= '$doj',dob= '$dob',email= '$email',contactno= '$contactno' WHERE mid= '$mid'";
		echo $qry;
        
		$resul=$cnn->query($qry);
	}
?>								
                                               

<?php
include_once("footer.php");
?>
