<?php
include_once("memberheader.php");
?>

<h3 class="header smaller lighter blue"> Tip details</h3>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from tips";

		$result=$cnn->query($qry);

			$str="<table class='table  table-bordered table-hover'><tr></tr><th>Tip Title</th><th>Tip Description</th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>".$row["ttitle"]."</td><td>" .$row["tdescription"]."</td></tr>";

			}

		$str.="</table>";

		echo $str;



?>


<?php
include_once("footer.php");
?>