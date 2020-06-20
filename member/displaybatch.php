<?php
session_start();

include_once("memberheader.php");
?>

<h3 class="header smaller lighter blue"> Batch details</h3>

<?php
                                   
                                    $mid=$_SESSION["mid"];
                                $uname=$_SESSION["uname"];                                
    
                                    //$fname=$_SESSION["fullname"];
                                  
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="select * from member where mid=$mid";
		$result=$cnn->query($qry);

		while($row=$result->fetch_assoc())
		{
            
            $uname=$row["uname"];
            $fullname=$row["fname"]." ".$row["lname"];
            
        }
          
                               
?>
<?php 

        		 
		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select batch.batchid as batchid,batchname,batchtiming FROM member,batch WHERE batch.batchid=member.batchid and member.mid=$mid ";
		$result=$cnn->query($qry);
//echo $qry;
		while($row=$result->fetch_assoc())
		{
        $batchname=$row["batchname"];  
            $batchtiming=$row["batchtiming"];
            
            
        }

		

?>

<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Batch Name </div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="batchname"><?php
                                                            echo $batchname;
                                                                
                                                            ?></span>
													</div>
												</div>

												
												<div class="profile-info-row">
													<div class="profile-info-name"> Batch Timings </div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="gpname"><?php
                                                            echo $batchtiming;
                                                              
                                                            ?></span>
													</div>
												</div>

												


<?php
include_once("footer.php");
?>