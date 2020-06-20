<?php 
include_once("adminheader.php");
?>
<?php 

    $cnn=mysqli_connect("localhost","root","","dbglobalguru");
    $id=$_GET['id'];
    $qry1="Select * from category where catid=$id";
	$result=$cnn->query($qry1);
	$row=$result->fetch_assoc();
	$catname=$row['catname'];
	$catimg=$row['catimg'];

	
	if(isset($_POST['Submit'])){

		$qry="DELETE FROM category WHERE catid = '$id'";
		echo $qry;
		$result=$cnn->query($qry);
	}
?>			

<h3 class="header smaller lighter blue">delete details</h3>
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Category name: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="catname" class="col-xs-10 col-sm-5" value="<?php echo $catname;?>" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> category image: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="catimg" name="catimg" class="col-xs-10 col-sm-5" value="<?php echo $catimg?>" />
										</div>
									</div>
				                    <img src="img//<?php echo $catimg;?>"  height="100px" width="100px" style="float:right;margin-top:-100px;margin-right:300px;"/>    


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