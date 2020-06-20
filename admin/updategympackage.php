<?php 
include_once("adminheader3.php");
?>

<?php 
	
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
        
        $id=$_GET['id'];

	if(isset($_POST['submit'])){
		
		$name=$_POST['txtGpname'];
		$price=$_POST['txtGpprice'];
        $image=$_FILES['file']['name'];

if($_FILES['file']['name'] != "" )
{
move_uploaded_file($_FILES["file"]["tmp_name"],
      "images/" . $_FILES["file"]["name"]);
}

		$qry="UPDATE gympackage SET  Gpname= '$name',Gpprice= '$price',Gpimg= '$image' WHERE Gpid= '$id'";
		echo $qry;
		$result=$cnn->query($qry);
	}
$qry="Select * from gympackage where Gpid = $id";

        

        $result=$cnn->query($qry);
        $row=$result->fetch_assoc();
    
        $name=$row["Gpname"];
        $price=$row["Gpprice"];
        $image=$row["Gpimg"];

        

?>




<h3 class="header smaller lighter blue">Update Gympackage Details</h3>

								<form class="form-horizontal" role="form" method="post">
										
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Gympackage Name: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Packagename" name="txtGpname" value="<?php echo $name; ?>"class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Gympackage Price: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Price" name="txtGpprice" value="<?php echo $price; ?>" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Gympackage Image: </label>
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