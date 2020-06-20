<?php 
include_once("adminheader3.php");
?>

<?php 
	
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
        
        $id=$_GET['id'];

	if(isset($_POST['submit'])){
		
		$name=$_POST['txttuname'];
		$password=$_POST['txttpwd'];
        $firstname=$_POST['txtfname'];
        $lastname=$_POST['txtlname'];
		$image=$_FILES['file']['name'];

if($_FILES['file']['name'] != "" )
{
move_uploaded_file($_FILES["file"]["tmp_name"],
      "images/" . $_FILES["file"]["name"]);
}
        $mail=$_POST['txtemail'];
		$contactnum=$_POST['txtcontactno'];
		$dateofjoin=$_POST['txtdoj'];
        $dateofbirth=$_POST['txtdob'];
		
		$qry="UPDATE trainer SET  tuname= '$name',tpwd= '$password',fname= '$firstname',lname= '$lastname',img= '$image',email= '$mail',contactno= '$contactnum',doj= '$dateofjoin',dob= '$dateofbirth' WHERE tid= '$id'";
		echo $qry;
		$result=$cnn->query($qry);
	}
$qry="Select * from trainer where tid = $id";

        echo $qry;

        $result=$cnn->query($qry);
        $row=$result->fetch_assoc();
    
       
        $name=$row['tuname'];
		$password=$row['tpwd'];
        $firstname=$row['fname'];
        $lastname=$row['lname'];
		$image=$row['img'];
        $mail=$row['email'];
		$contactnum=$row['contactno'];
		$dateofjoin=$row['doj'];
        $dateofbirth=$row['dob'];
		
echo $dateofjoin;
?>




<h3 class="header smaller lighter blue">Update Trainer Details</h3>

								<form class="form-horizontal" role="form" method="post">
									
		
										
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trainer Name: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Trainer Name" name="txttuname" value="<?php echo $name; ?>"class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trainer Password: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Trainer Password" name="txttpwd" value="<?php echo $password; ?>"class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trainer Firstname: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Trainer First Name" name="txtfname" value="<?php echo $firstname; ?>"class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trainer Last Name: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Trainer Last Name" name="txtlname" value="<?php echo $lastname; ?>"class="col-xs-10 col-sm-5" />
										</div>
										
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trainer Mail Id: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Trainer Mail" name="txtemail" value="<?php echo $mail; ?>"class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trainer Conatct No: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Trainer No" name="txtcontactno" value="<?php echo $contactnum; ?>"class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trainer Joining Date: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Joining Date" name="txtdoj" value="<?php echo $dateofjoin; ?>" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trainer Birthdate: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Birthdate" name="txtdob" value="<?php echo $dateofbirth; ?>" class="col-xs-10 col-sm-5" />
										</div>
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trainer Image: </label>
                                        <div class="col-sm-9">
											 <input type="file" name="file">
										</div>


					

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" class="btn btn-info" name="submit" value="Update">
								
										

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Cancel
											</button>
										</div>
									</div>
								</form>

							

<?php 
include_once("footer.php");
?>