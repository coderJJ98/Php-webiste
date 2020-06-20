<?php 
include_once("adminheader3.php");
?>
<h3 class="header smaller lighter blue">Member Details</h3>
								<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Member UserName: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Member UserName" name="txtuname" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Member Password: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Password" name="txtpwd" class="col-xs-10 col-sm-5" />
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
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Height: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Height" name="txtheight" class="col-xs-10 col-sm-5" />
										</div>
                                       <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Weight: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Weight" name="txtweight" class="col-xs-10 col-sm-5" />
										</div>
                                       
                                       <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date of Joined: </label>
										<div class="col-sm-9"> 
											<input type="text" id="form-field-1" placeholder="DOJ" name="txtdoj" class="col-xs-10 col-sm-5" />
										</div>
                                       <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Of Birth: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Birthdate" name="txtdob" class="col-xs-10 col-sm-5" />
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

		$uname=$_POST['txtuname'];
		$pwd=$_POST['txtpwd'];
		$fname=$_POST['txtfname'];
        $lname=$_POST['txtlname'];

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
        $y=md5($pwd); 
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="INSERT INTO member(uname,pwd,fname,lname,img,email,contactno,height,weight,doj,dob) VALUES ('$uname','$y','$fname','$lname','$img','$email','$contactno','$height','$weight','$doj','$dob')";
		echo $qry;
		$result=$cnn->query($qry);
	}
?>								

<?php 
include_once("footer.php");
?>