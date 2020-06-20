<?php 
include_once("adminheader3.php");
?>
<h3 class="header smaller lighter blue">Delete Order Info</h3>
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Orderitem Id: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Id" name="oid" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Product Id: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Enter Productid" name="pid" class="col-xs-10 col-sm-5" />
										</div>
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
								</div>
								</form>

<?php 
	
	if(isset($_POST['submit'])){
		$id=$_POST['oid'];
		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="DELETE FROM  orderdetailmst WHERE oid ='$id'";
		
		$resul=$cnn->query($qry);
	}
?>								


<?php 
include_once("footer.php");
?>