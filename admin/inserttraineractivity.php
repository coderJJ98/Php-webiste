<?php 
include_once("adminheader3.php");
?>
<h3 class="header smaller lighter blue">Insert Trainer Activity </h3>
									
                                    <form class="form-horizontal" role="form" method="post">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Activity Name: </label>	
										<div class="col-sm-9">
											         <select name="opt1">
     <?php
                                                         
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select actid,actname FROM activity";
         echo $qry;
		$result=$cnn->query($qry);

        while($row=$result->fetch_assoc())
		{
             echo "<option value='".$row["actid"]."'>".$row["actname"]."</option>";
            

			}
                               ?>
                                                         
                    
                </select>
           </div>
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trainer Name: </label>
										<div class="col-sm-9">
    						         <select name="opt2">
     <?php
                                                         
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select tid,fname FROM trainer";
         echo $qry;
		$result=$cnn->query($qry);

        while($row=$result->fetch_assoc())
		{
             echo "<option value='".$row["tid"]."'>".$row["fname"]."</option>";
            

			}
                               ?>
                                                         
                    
                </select>       </div>
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Timing: </label>
										<div class="col-sm-9">
											         						         <select name="opt3">
                                                                                         
                    <option value="5:00 to 6:00 am">5:00 to 6:00 am</option>
                    <option value="5:00 to 6:00 pm" >5:00 to 6:00 pm</option>
                    <option value="7:00 to 8:00 am" >7:00 to 8:00 am</option>
                    <option value="7:00 to 8:00 pm" >7:00 to 8:00 pm</option>
                
                               ?>
                                                         
                    
                </select>
           	</div>
                                       
           							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Days: </label>
										<div class="col-sm-9">
        						         <select name="opt4">
                                                         
                <option value="Monday">Monday</option>
                    <option value="Tuesday" >Tuesday</option>
                    <option value="Wednesday" >wednesday</option>
                    <option value="Thursday" >Thursday</option>
                <option value="Friday">Friday</option>
                    <option value="Saturday" >Saturday</option>
                    <option value="Sunday" >Sunday</option>
                    
                </select>
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
        
        //print_r($_POST);
        
		$actid=$_POST['opt1'];
		$tid=$_POST['opt2'];
        $timing=$_POST['opt3'];
        $day=$_POST['opt4'];
		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="INSERT INTO activitytrainer(actid,tid,timings,day) VALUES ('$actid','$tid','$timing','$day')";
		echo $qry;
		$result=$cnn->query($qry);
	}
?>								

<?php 
include_once("footer.php");
?>