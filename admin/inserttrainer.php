<?php 
include_once("adminheader3.php");
?>
<h3 class="header smaller lighter blue">Trainer Details</h3>
								<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trainer Name: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Trainer Name" name="txtusername" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trainer Password: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Password" name="txtpassword" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> First Name: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="First Name" name="txtfname" class="col-xs-10 col-sm-5" />
										</div>
                                       <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Last Name: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Last Name" name="txtlname" class="col-xs-10 col-sm-5" />
										</div>
                                    
                                       <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Email" name="txtemail" class="col-xs-10 col-sm-5" />
										</div>
                                       <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Contactno: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Contactno" name="txtcontactno" class="col-xs-10 col-sm-5" />
										</div>
                                       <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date of Joined: </label>
										<div class="col-sm-9"> 
											<input type="text" id="form-field-1" placeholder="DOJ" name="txtdoj" class="col-xs-10 col-sm-5" />
										</div>
                                       <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of Birth: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Birthdate" name="txtdob" class="col-xs-10 col-sm-5" />
										</div>
                                       <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trainer Image: </label>
										<div class="col-sm-9">
											<input type="file" name="file">
                                    </div>
                                    
                                       
                                        
					

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" class="btn btn-info"
                                                   name="Submit">
								
											

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>
								</form>

<?php 
	
	if(isset($_POST['Submit'])){
        echo "hi";

		$tname=$_POST['txttuname'];
		$tpwd=$_POST['txtpassword'];
		$fname=$_POST['txtfirstname'];
        		$lname=$_POST['txtlastname'];
        		  $img=$_FILES['file']['name'];

        if($_FILES['file']['name'] != "" )
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "images/" . $_FILES["file"]["name"]);
        }
      
        		$email=$_POST['txtemail'];
        		$contactno=$_POST['txtcontactno'];
        $doj=$_POST['txtdoj'];
        		$dob=$_POST['txtdob'];
        		
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="INSERT INTO trainer(tid,tuname,tpwd,fname,lname,img,email,contactno,doj,dob) VALUES ('$tuname','$tpwd','$fname','$lname','$img','$email','$contactno','$doj','$dob')";
		echo $qry;
		$result=$cnn->query($qry);
	}
?>								

<?php 
include_once("footer.php");
?>