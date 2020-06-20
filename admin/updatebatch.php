<?php 
include_once("adminheader3.php");
?>

<?php 
	
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
        
        $id=$_GET['id'];
        $qry="Select * from batch where batchid = $id";

        echo $qry;

        $result=$cnn->query($qry);
        $row=$result->fetch_assoc();
    
        $name=$row["batchname"];
        $timing=$row["batchtiming"];
        

        


	if(isset($_POST['submit'])){
		$id=$_POST['txtid'];
		$name=$_POST['txtname'];
		$timing=$_POST['txttiming'];
		$qry="UPDATE batch SET  batchname= '$name',batchtiming= '$timing' WHERE batchid= '$id'";
		echo $qry;
		$result=$cnn->query($qry);
	}
?>	



<h3 class="header smaller lighter blue">Update Batch details</h3>

								<form class="form-horizontal" role="form" method="post">
									
							
										
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Batch name: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Name" name="txtname" value="<?php echo $name; ?>"class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Batch Timing: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Timing" name="txttiming" value="<?php echo $timing; ?>" class="col-xs-10 col-sm-5" />
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
include_once("footer.php");
?>