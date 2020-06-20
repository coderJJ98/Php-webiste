<?php 
include_once("header.php");
?>
<h3 class="header smaller lighter blue">Delete Activity Info</h3>
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Admin id: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Id" name="aid" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Admin Firstname: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Firstname" name="fname" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Admin Lastname: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Lastname" name="lname" class="col-xs-10 col-sm-5" />
										</div>
										
										<br>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" class="bt btn-info" type="button" name="submit" value="Delete">
												
												
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btnreset" type="reset">
												
												Cancel
											</button>
										</div>
									</div>
								</div>
								</form>

<?php 
	
	if(isset($_POST['submit'])){
		$id=$_POST['aid'];
		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="DELETE FROM  admin WHERE aid ='$id'";
		
		$resul=$cnn->query($qry);
	}
?>								


<?php 
include_once("footer.php");
?>