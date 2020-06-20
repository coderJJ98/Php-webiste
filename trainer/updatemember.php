<?php 
include_once("trainerheader.php");
?>
<h3 class="header smaller lighter blue">Member Details</h3>
								<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Member Username: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="User Name" name="txtusername" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Member Password: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Member Password" name="txtpassword" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> First Name: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="First Name" name="txtfirstname" class="col-xs-10 col-sm-5" />
										</div>
                                       <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Last Name: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Last Name" name="txtlastname" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Member Email: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Member Email" name="txtemail" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Member Contactno: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Member Contactno" name="txtcontactno" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Member Height: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Member Height" name="txtheight" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Member weight: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Member weight" name="txtweight" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Member Joined: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Date of Joining" name="txtdoj" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Member birthdate: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Date of Birth" name="txtdob" class="col-xs-10 col-sm-5" />
										</div>
                                     <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Member Image: </label>
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
		$uname=$_POST['txtusername'];
		$pwd=$_POST['txtpassword'];
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
        $height=$_POST['txtheight'];
        $weight=$_POST['txtweight'];
		$doj=$_POST['txtdoj'];
        $dob=$_POST['txtdob'];
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="UPDATE INTO member(uname,pwd,fname,lname,img,email,,contactno,height,weight,doj,dob) VALUES ('$uname','$pwd','$fname','$lname''$img','$email','$contactno','$height','$weight','$doj','$dob',)";
		echo $qry;
		$result=$cnn->query($qry);
	}
?>								

<?php 
include_once("footer.php");
?>