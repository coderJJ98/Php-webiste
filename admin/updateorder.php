<?php 
include_once("adminheader3.php");
?>
<h3 class="header smaller lighter blue"> Update Order Info </h3>
								<form class="form-horizontal" role="form" method="post">
									    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Product Name: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Productname" name="pname" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Product Quality: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Quality" name="pq" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Product Quantity: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Quantity" name="qty" class="col-xs-10 col-sm-5" />
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
	
	if(isset($_POST['submit']))
    {
		$oid=$_POST['oid'];
		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		 $qry="UPDATE orderdetailmst SET  pname= '$pname',productquality= '$pq',productquantity= '$qty' WHERE oid= '$oid'";
		
		$resul=$cnn->query($qry);
	}
?>								


<?php 
include_once("footer.php");
?>