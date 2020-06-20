<?php
session_start();
include_once("trainerheader.php")
?>
<h3 class="header smaller lighter blue">Event Registration Details</h3>

								<form class="form-horizontal" role="form" method="post">
									
									    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Contact No: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="contact no" name="txtcontactno" class="col-xs-10 col-sm-5" />
										</div>
                                          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> DOR: </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="DOR" name="txtdor" class="col-xs-10 col-sm-5" />
										</div>

                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Notes:</label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Notes" name="txtnotes" class="col-xs-10 col-sm-5" />
										</div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Notes1: </label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Notes1" name="txtnotes1" class="col-xs-10 col-sm-5" />
										</div>
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trainer Id:</label>	
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Trainer Id" name="txttrainerid" class="col-xs-10 col-sm-5" />
										</div>
                                    
                                     
                                    	<div class="clearfix f  orm-actions">
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
                                    <?php 
	
	if(isset($_POST['Submit'])){
        

		$dor=$_POST['txtdor'];
        $data1=$_POST['txtnotes'];
		$data2=$_POST['txtnotes1'];
        $phone=$_POST['txtcontactno'];
        $tid=$_POST['txttrainerid'];
        $evid=$_SESSION['evid'];

        
        
        
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
         
		
        $qry1="Select * from member where contactno ='$phone' ";
        echo $qry1;
        $result=$cnn->query($qry1);
        
        $row=$result->fetch_assoc();
        $mid=$row["mid"];
        
        $qry="INSERT INTO eventdetail(dor,data1,data2,mid,tid,evid) VALUES ('$dor','$data1','$data2','$mid','$tid','$evid')";
		echo $qry;
		$result=$cnn->query($qry);
	}
?>								

<?php
include_once("footer.php")
?>