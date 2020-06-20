<?php 
include_once("adminheader.php");
?>

<?php 
	
		$cnn=mysqli_connect("localhost","root","","dbglobalguru");

        $id=$_GET["Id"];
        $qry="Select * from  teachingtype where ttid=$id";

        $result=$cnn->query($qry);
        $row=$result->fetch_assoc();
        
        $ttname=$row["ttname"];
        $ttimg=$row["ttimg"];



	if(isset($_POST['submit'])){
	
		$ttname=$_POST['tname'];
		$ttimg=$_POST['timg'];
		$qry="UPDATE teachingtype SET ttname= '$ttname',ttimg= '$ttimg' WHERE ttid= '$id'";
		echo $qry;
		$result=$cnn->query($qry);
	}
?>						

<h3 class="header smaller lighter blue">Update details</h3>
								<form class="form-horizontal" role="form" method="post">
									
									<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Teacher type name: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="ttname" name="tname" class="col-xs-10 col-sm-5" value="<?php echo $ttname; ?>" />
										</div>
										
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Teacher type image: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="ttimg" name="timg" class="col-xs-10 col-sm-5" value="<?php echo $ttimg; ?>" />
										</div>
									</div>
                            <img src="img//<?php echo $ttimg;?>"  height="100px" width="100px" style="float:right;margin-top:-100px;margin-right:300px;"/>    

					
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