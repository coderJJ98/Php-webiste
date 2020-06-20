<?php 
include_once("adminheader3.php");
?>
<h3 class="header smaller lighter blue">Attendence Details</h3>
								<form class="form-horizontal" role="form" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Attendence Id: </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Attendence Id" name="txtatid" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Member Id: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder=" Member Id" name="txtmid" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tip Title Id: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Tip Title Id" name="txtttid" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Attendence Status: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Attendence Status" name="txtispresent" class="col-xs-10 col-sm-5" />
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
		$atid=$_POST['txtaid'];
		$mid=$_POST['txtmid'];
		$ttid=$_POST['txtttid'];
        $ispresent=$_POST['txtispresent'];
		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="INSERT INTO attendence(actid,actname,actimg) VALUES ('$actid','$actname','$actimg')";
		echo $qry;
		$result=$cnn->query($qry);
	}
?>								

<?php 
include_once("footer.php");
?>