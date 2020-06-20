<?php 
include_once("adminheader3.php");
?>

<?php 
	
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
        
        $id=$_GET['id'];

	if(isset($_POST['submit'])){
		
		$ttitle=$_POST['txtttitle'];
		$tdescription=$_POST['txttdescription'];
        $qry="UPDATE tips SET  ttitle= '$ttitle',tdescription= '$tdescription' WHERE tid= '$id'";
		echo $qry;
		$result=$cnn->query($qry);
	}
$qry="Select * from tips where tid = $id";

        echo $qry;

        $result=$cnn->query($qry);
        $row=$result->fetch_assoc();
    
        $ttitle=$row["ttitle"];
        $tdescription=$row["tdescription"];
        

        

?>




<h3 class="header smaller lighter blue">Update Tip Details</h3>

								<form class="form-horizontal" role="form" method="post">
									
		
										
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tip Title: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Tiptitle" name="txtttitle" value="<?php echo $ttitle; ?>"class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tip Description: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Description" name="txttdescription" value="<?php echo $tdescription; ?>" class="col-xs-10 col-sm-5" />
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