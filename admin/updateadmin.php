<?php 
include_once("header.php");
?>

<?php 
	
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
        
        $id=$_GET['id'];

	if(isset($_POST['submit'])){
		
		$name=$_POST['txtname'];
		$password=$_POST['txtpsw'];
        $firstname=$_POST['txtfname'];
        $lastname=$_POST['txtlname'];
        $num=$_POST['txtcontactno'];
        $emailid=$_POST['txtemail'];
        $image=$_POST['txtimg'];
		$qry="UPDATE admin SET  username= '$name',psw= '$password',fname= '$firstname',lname= '$lastname',contactno= '$num',email= '$emailid',img= '$image' WHERE aid= '$id'";
		echo $qry;
		$result=$cnn->query($qry);
	}
$qry="Select * from admin where aid = $id";

        echo $qry;

        $result=$cnn->query($qry);
        $row=$result->fetch_assoc();
    
        $name=$row["username"];
        $password=$row["psw"];
        $firstname=$row["fname"];
        $lastname=$row["lname"];
        $num=$row["contactno"];
        $emailid=$row["email"];
        $image=$row["img"];

        

?>




<h3 class="header smaller lighter blue">Update Admin details</h3>

								<form class="form-horizontal" role="form" method="post">
									
									<div class="form-group">

										
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Admin Username: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Name" name="txtname" value="<?php echo $name; ?>"class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Admin Password: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Password" name="txtpsw" value="<?php echo $password; ?>" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Admin Firstname: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Firstname" name="txtfname" value="<?php echo $firstname; ?>" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Admin Lastname: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Lastname" name="txtlname" value="<?php echo $lastname; ?>" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Admin Contact: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Contactno" name="txtcontactno" value="<?php echo $num; ?>" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Admin Email: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Emailid" name="txtemail" value="<?php echo $emailid; ?>" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Admin Image: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Image" name="txtimg" value="<?php echo $image; ?>" class="col-xs-10 col-sm-5" />
										</div>
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