<?php
include_once("adminheader3.php");
?>

<h3 class="header smaller lighter blue"> Activity details</h3>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from activity";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr></tr><th>Activity Name</th><th>Image</th><th>Edit</th><th>Delete</th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>".$row["actname"]."</td><td><img src='images\\" .$row["actimg"]."' height='100px' width='100px'></td><td><a href='updateactivity.php?id=".$row["actid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><td><a href='deleteactivity.php?id=".$row["actid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";

			}

		$str.="</table>";

		echo $str;



?>


<?php
include_once("footer.php");
?>