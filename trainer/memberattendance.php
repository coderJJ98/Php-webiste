<?php
include_once("trainerheader.php");
?>
<h3 class="header smaller lighter blue"> Attendance </h3>
    
<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from batch";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th>Batch name </th><th>Batchtiming</th></tr>";

		while($row=$result->fetch_assoc())
		{
           $str.="<tr><td><a href='memberattendance1.php?id=".$row["batchid"]."'>".$row["batchname"]."</a></td><td>" .$row["batchtiming"]."</td></tr>";
           
			}

		$str.="</table>";

		echo $str;



?>
    
    
    
<?php
include_once("footer.php");
?>
