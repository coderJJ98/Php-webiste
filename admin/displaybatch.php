<?php
include_once("adminheader3.php");
?>

<h3 class="header smaller lighter blue"> Batch details</h3>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from batch";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th>Batch Name</th><th>Batch Timings</th><th>Edit</th><th>Delete</th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>".$row["batchname"]."</td><td>" .$row["batchtiming"]."</td><td><a href='updatebatch.php?id=".$row["batchid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><td><a href='deletebatch.php?id=".$row["batchid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";

			}

		$str.="</table>";

		echo $str;



?>


<?php
include_once("footer.php");
?>