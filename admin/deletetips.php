<?php 
include_once("adminheader3.php");
?>
<h3 class="header smaller lighter blue">Delete Tips Info</h3>
								<form class="form-horizontal" role="form" method="post">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tip Title: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter TipTitle" name="ttitle" class="col-xs-10 col-sm-5" />
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
		$tiptitle=$_POST['ttitle'];
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="DELETE FROM tips WHERE ttitle ='$tiptitle'";
		
		$resul=$cnn->query($qry);
	}
?>								


<?php 
include_once("footer.php");
?>