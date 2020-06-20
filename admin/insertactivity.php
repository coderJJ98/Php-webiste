<?php 
include_once("adminheader3.php");
?>
<h3 class="header smaller lighter blue">Activity Details</h3>
								<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Activity Name: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder=" Activity Name" name="txtactname" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Activity Image: </label>
										<div class="col-sm-9">
											<input type="file" name="file" >
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
		$actname=$_POST['txtactname'];
		$actimg=$_FILES['file']['name'];

if($_FILES['file']['name'] != "" )
{
move_uploaded_file($_FILES["file"]["tmp_name"],
      "images/" . $_FILES["file"]["name"]);
}
    
		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="INSERT INTO activity(actname,actimg) VALUES ('$actname','$actimg')";
		echo $qry;
		$result=$cnn->query($qry);
	}
?>								

<?php 
include_once("footer.php");
?>