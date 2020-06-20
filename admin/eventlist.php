<?php
session_start();
include_once("adminheader3.php")
?>
<h3 class="header smaller lighter blue"> Event List</h3>


<?php 

        		 
        $evid=$_SESSION['evid'];
		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from eventdetail where evid='$evid'";
        $qry1="Select eventdetail.mid as mid,fname,lname,contactno,dor,data1,data2,tid From eventdetail,member WHERE eventdetail.mid=member.mid and evid='$evid'";
		$result=$cnn->query($qry);
        $result=$cnn->query($qry1);

		$str="<table class='table  table-bordered table-hover'><tr><th>Member ID</th><th>First Name </th><th>Last Name </th><th>contact no </th><th>Date of Registration</th><th>Note1 </th><th>Note2</th><th>Trainer Id</th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>".$row["mid"]."</td><td>" .$row["fname"]."</td><td>" .$row["lname"]."</td><td>" .$row["contactno"]."</td><td>" .$row["dor"]."</td><td>" .$row["data1"]."</td><td>" .$row["data2"]."</td><td>" .$row["tid"]."</td></tr>";

			}

		$str.="</table>";

		echo $str;



?>






<?php
include_once("footer.php")
?>