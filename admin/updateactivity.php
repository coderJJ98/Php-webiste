<?php 
include_once("adminheader3.php");
?>

<?php 
	
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
        
        $id=$_GET['id'];
     

        


	if(isset($_POST['submit']))
    {
		$name=$_POST['txtname'];
		$img=$_FILES['file']['name'];

if($_FILES['file']['name'] != "" )
{
move_uploaded_file($_FILES["file"]["tmp_name"],
      "images/" . $_FILES["file"]["name"]);
}
    		$qry="UPDATE activity SET  actname= '$name',actimg= '$img' WHERE actid= '$id'";
		echo $qry;
		$result=$cnn->query($qry);
	}
  $qry="Select * from activity where actid = $id";

          echo $qry;

        $result=$cnn->query($qry);
        $row=$result->fetch_assoc();
    
        $name=$row["actname"];
        $img=$row["actimg"];
       
?>	



<h3 class="header smaller lighter blue">Update Activity Details</h3>

								<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
									
							
										
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Activity Name: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Name" name="txtname" value="<?php echo $name; ?>"class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Activity Image: </label>	
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