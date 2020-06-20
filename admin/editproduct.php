<?php 
include_once("adminheader3.php");
?>
<h3 class="header smaller lighter blue">Edit Product Details</h3>
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Product Name: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Product Name" name="txtproductname" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Product Price: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Product Price" name="txtproductprice" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Product Image: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Product Image" name="txtproductimg" class="col-xs-10 col-sm-5" />
										</div>
                                       
                                        
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
		$pname=$_POST['txtproductname'];
		$price=$_POST['txtproductprice'];
		$pimg=$_POST['txtproductimg'];
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="UPDATE INTO product(pname,price,pimg) VALUES ($pname','$price','$pimg')";
		echo $qry;
		$result=$cnn->query($qry);
	}
?>								

<?php 
include_once("footer.php");
?>