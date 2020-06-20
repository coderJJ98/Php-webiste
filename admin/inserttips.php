<?php 
include_once("adminheader3.php");
?>
<h3 class="header smaller lighter blue">Insert Tips</h3>
								<form class="form-horizontal" role="form" method="post">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tip Title: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Tip Title" name="txttiptitle" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Title Description: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Title Description" name="txttipdescription" class="col-xs-10 col-sm-5" />
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
		$ttitle=$_POST['txttiptitle'];
		$tdescription=$_POST['txttipdescription'];
		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="INSERT INTO tips(ttitle,tdescription) VALUES ('$ttitle','$tdescription')";
		echo $qry;
		$result=$cnn->query($qry);
	}
?>								

<?php 
include_once("footer.php");
?>