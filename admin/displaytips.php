<?php
include_once("adminheader3.php");
?>

<h3 class="header smaller lighter blue"> Tip details</h3>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from tips";

		$result=$cnn->query($qry);

			$str="<table class='table  table-bordered table-hover'><tr></tr><th>Tip Title</th><th>Tip Description</th><th>Edit Tips</th><th>Delete Tips</th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>".$row["ttitle"]."</td><td>" .$row["tdescription"]."</td><td><a href='updatetips.php?id=".$row["tid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><td><a href='deletetips.php?id=".$row["tid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";

			}

		$str.="</table>";

		echo $str;



?>


<?php
include_once("footer.php");
?>