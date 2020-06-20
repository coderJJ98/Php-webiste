<?php 
include_once("adminheader.php");
?>

<?php 
	
        $cnn=mysqli_connect("localhost","root","","dbglobalguru");
        
        $id=$_GET["Id"];
        $qry="Select * from package where pid = $id";

        echo $qry;

        $result=$cnn->query($qry);
        $row=$result->fetch_assoc();
    
        $name=$row["pname"];
        $img=$row["pimg"];
        $price=$row["pprice"];

        


	if(isset($_POST['submit'])){
		$id=$_POST['txtid'];
		$name=$_POST['txtname'];
		$img=$_POST['txtimg'];
		$price=$_POST['txtprice'];
		$qry="UPDATE package SET  pname= '$name',pimg= '$img', pprice='$price' WHERE pid= '$id'";
		echo $qry;
		$result=$cnn->query($qry);
	}
?>	



<h3 class="header smaller lighter blue">Update Pckage details</h3>
								<form class="form-horizontal" role="form" method="post">
									
									<div class="form-group">

										
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Package name: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Name" name="txtname" value="<?php echo $name; ?>"class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Package Image: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Image" name="txtimg" value="<?php echo $img; ?>" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> subcateory image: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Price" name="txtprice" class="col-xs-10 col-sm-5" />
										</div>
									</div>
					

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" class="btn btn-info" name="submit" value="submit now">
								
										

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>
								</form>

							

<?php 
include_once("adminfooter.php");
?>