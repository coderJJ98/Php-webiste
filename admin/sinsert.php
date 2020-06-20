	<?php 
include_once("adminheader.php");
?>


<?php 
	if(isset($_POST['submit'])){


		$subname=$_POST["txtsname"];
		$cid=$_POST["txtcatid"];
		$subimg=$_POST["txtsimg"];

		$cnn=mysqli_connect("localhost","root","","dbglobalguru");
		$qry="INSERT INTO subcategory(subcatname,catid,subcateimg) VALUES ('$subname','$cid','$subimg')";
		echo $qry;
		$result=$cnn->query($qry);

	}

?>								
<h3 class="header smaller lighter blue">Insert details</h3>
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Subcategory name: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="subcatname" name="txtsname" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> category id: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="catid" name="txtcatid" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> subcateory image: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="subcatimage" name="txtsimg" class="col-xs-10 col-sm-5" />
										</div>
									</div>
					

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
