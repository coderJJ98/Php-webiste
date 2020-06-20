<?php
include_once("trainerheader.php")
?>
<h3 class="header smaller lighter blue">Test Details</h3>
								<form class="form-horizontal" role="form" method="post">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Contact no:</label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Contact no" name="txtcontactno" class="col-xs-10 col-sm-5" />
										</div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> DOT: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="DOT" name="txtdot" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Height: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Height" name="txtheight" class="col-xs-10 col-sm-5" />
										</div>
                                       <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Weight: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Weight" name="txtweight" class="col-xs-10 col-sm-5" />
										</div>
                                       <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> BMI: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="BMI" name="txtbmi" class="col-xs-10 col-sm-5" />
										</div>
                                       <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Muscle: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Muscle" name="txtmuscle" class="col-xs-10 col-sm-5" />
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
        

		$dot=$_POST['txtdot'];
        $height=$_POST['txtheight'];
		$weight=$_POST['txtweight'];
        $bmi=$_POST['txtbmi'];
        $muscle=$_POST['txtmuscle'];
         $phone=$_POST['txtcontactno'];
        

        
        
        
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
         
		
        $qry="Select * from member where contactno ='$phone' ";
        echo $qry;
        $result=$cnn->query($qry);
        
        $row=$result->fetch_assoc();
        $mid=$row["mid"];
        
        $qry="INSERT INTO membertest(mid,dot,height,weight,bmi,muscle) VALUES ('$mid','$dot','$height','$weight','$bmi','$muscle')";
		echo $qry;
		$result=$cnn->query($qry);
	}
?>								









<?php
include_once("footer.php")
?>