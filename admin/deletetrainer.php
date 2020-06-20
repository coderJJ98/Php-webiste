<?php 
include_once("adminheader3.php");
?>
<h3 class="header smaller lighter blue">Delete Trainer Info</h3>
								<form class="form-horizontal" role="form" method="post">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trainer username: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter name" name="tuname" class="col-xs-10 col-sm-5" />
										</div>
										<br>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" class="bt btn-info" type="button" name="submit" value="Delete">
												
												
											

											&nbsp; &nbsp; &nbsp;
											<button class="btnreset" type="reset">
												
												Cancel
											</button>
										</div>
									</div>
								</form>

<?php 
	
	if(isset($_POST['submit'])){
		$tuname=$_POST['tuname'];
		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="DELETE FROM  trainer WHERE tuname ='$tuname'";
		
		$resul=$cnn->query($qry);
	}
?>								


<?php 
include_once("footer.php");
?>