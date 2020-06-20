<?php
 session_start();
include_once("memberheader.php");
?>
 
<div class="page-header">
<?php
                                       
                                    $mid=$_SESSION["mid"];
                     
    
                                    //$fname=$_SESSION["fullname"];
                                  
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="select * from memberpackage where mid=$mid";
		$result=$cnn->query($qry);
        
		while($row=$result->fetch_assoc())
		{
            $gpid=$row["gpid"];  
            $mid=$row["mid"];
            $dop=$row["dop"];
            $tid=$row["tid"];
        
            
        }
          
                           
?>
    
    <h1>
								Gym Package Details 
								<small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
									</small>
							</h1>
						</div>


<?php 

        		 
print_r(" ");
		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select gympackage.gpid as gpid,gpname,gpprice,gpimg,fname,lname FROM gympackage,memberpackage,trainer WHERE gympackage.gpid=memberpackage.gpid and trainer.tid=memberpackage.tid ";

		$result=$cnn->query($qry);
        $str="<table class='table  table-bordered table-hover'><th>First Name</th><th>Last Name </th><th>Package Name</th><th>Package Price</th></tr>";


		while($row=$result->fetch_assoc())
		{
             $str="<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["gpname"]."</td><td>".$row["gpprice"]."</td></tr>";

        }
$str.="</table>";
echo $str;

?>


<?php
include_once("footer.php");
?>