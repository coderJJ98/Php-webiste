<?php 
include_once("adminheader.php");
?>
<h3 class="header smaller lighter blue">Insert details</h3>
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Package id: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Package Id" name="txtpid" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Package name: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Package Name" name="txtpname" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Package image: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Package Image" name="txtpimg" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Package Price: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Package Price" name="txtpprice" class="col-xs-10 col-sm-5" />
										</div>
									</div>
					

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" class="btn btn-info"   name="btnsubmit">
												
											&nbsp; &nbsp; &nbsp;
											<input type="reset" class="btn" type="reset">
																						</div>
									</div>
								</form>

<?php 
 
	if(isset($_POST['btnsubmit'])){
        
        echo "hi";
        
		$pid=$_POST['txtpid'];
		$pname=$_POST['txtpname'];
		$pimg=$_POST['txtpimg'];
        $pprice=$_POST['txtpprice'];
		$cnn=mysqli_connect("localhost","root","","dbglobalguru");
		$qry="INSERT INTO package(pid,pname,pimg,pprice) VALUES ('$pid','$pname','$pimg','$pprice')";
		echo $qry;
		$result=$cnn->query($qry);
	}
?>								

<?php 
include_once("adminfooter.php");
?>