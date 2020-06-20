<?php 
include_once("adminheader.php");
?>

<?php 
	$cnn=mysqli_connect("localhost","root","","dbglobalguru");
	$subcatid=$_GET['id'];

	$qry1="Select * from subcategory where subcatid=$subcatid";
	$result=$cnn->query($qry1);
	$row=$result->fetch_assoc();
	$subcatname=$row['subcatname'];
	$catid=$row['catid'];
	$subcateimg=$row['subcateimg'];

	


	if(isset($_POST['submit'])){
		
		$subcatname=$_POST['sname'];
		$catid=$_POST['catid'];
		$subcatimg=$_POST['simg'];

		
		$qry="UPDATE subcategory SET subcatname= '$subcatname',catid= '$catid',subcateimg= '$subcatimg' WHERE subcatid= '$subcatid'";
		echo $qry;
		$result=$cnn->query($qry);
	}
?>						

<h3 class="header smaller lighter blue">Update details</h3>
								<form class="form-horizontal" role="form" method="post">
									
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > Subcategory id: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="subcatid" name="subcatid" value="<?php echo $subcatid;?>" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Subcategory name: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="subcatname" name="sname" value="<?php echo $subcatname;?>" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> category id: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="catid" name="catid" value="<?php echo $catid;?>" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> subcateory image: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="subcatimage" name="simg" value="<?php echo $subcateimg;?>" class="col-xs-10 col-sm-5" />
										</div>
									</div>
					                   
                                    <center> <img src="img//<?php echo $subcateimg; ?>" width="100px" height="100px"></center>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" class="btn btn-info" name="submit" value="Submit">
												
											&nbsp; &nbsp; &nbsp;
											<input type="reset" class="btn" type="reset" name="Reset">
												

										</div>
									</div>
								</form>


<?php 
include_once("adminfooter.php");
?>
	