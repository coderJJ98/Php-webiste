<?php 
include_once("adminheader3.php");
?>
<h3 class="header smaller lighter blue">Insert details</h3>
								<form class="form-horizontal" role="form" method="post">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Batch name: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="batch name" name="txtbatchname" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Batch timing: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="batch timing" name="txtbatchtiming" class="col-xs-10 col-sm-5" />
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

		$batchname=$_POST['txtbatchname'];
		$batchtiming=$_POST['txtbatchtiming'];
		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="INSERT INTO batch(batchid,batchname,batchtiming) VALUES ('$batchid','$batchname','$batchtiming')";
		echo $qry;
		$result=$cnn->query($qry);
	}
?>								

<?php 
include_once("footer.php");
?>