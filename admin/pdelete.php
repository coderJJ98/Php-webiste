<?php 
include_once("header.php");
?>
<h3 class="header smaller lighter blue">delete Package Info</h3>
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Package id: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="enter id" name="pid" class="col-xs-10 col-sm-5" />
										</div>
										<br>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" class="bt btn-info" type="button" name="submit">
												
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btnreset" type="reset">
												
												Reset
											</button>
										</div>
									</div>
								</div>
								</form>

<?php 
	
	if(isset($_POST['submit'])){
		$id=$_POST['pid'];
		$cnn=mysqli_connect("localhost","root","","dbglobalguru");
		$qry="DELETE FROM  package WHERE pid ='$id'";
		
		$resul=$cnn->query($qry);
	}
?>								


<?php 
include_once("footer.php");
?>