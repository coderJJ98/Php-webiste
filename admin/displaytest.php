<?php
include_once("adminheader3.php")
?>
<h3 class="header smaller lighter blue"> Test Result</h3>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from membertest";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th>Date of test</th><th>Height</th><th>Weight </th><th>BMI</th><th>Muscle</th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>".$row["dot"]."</td><td>" .$row["height"]."</td><td>" .$row["weight"]."</td><td>" .$row["bmi"]."</td><td>" .$row["muscle"]."</td></tr>";

			}

		$str.="</table>";

		echo $str;



?>
    
    






<?php
include_once("footer.php")
?>