<?php
include_once("trainerheader.php");
?>

<h3 class="header smaller lighter blue"> Admin details</h3>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from admin";

		$result=$cnn->query($qry);

				$str="<table class='table  table-bordered table-hover'><tr><th>Admin Username</th><th>First name</th><th>Last name</th><th>Contact no</th><th>Email</th><th>Image</th></tr>";

		while($row=$result->fetch_assoc())
		{
                $str.="<tr><td>".$row["username"]."</td><td>" .$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["contactno"]."</td><td>".$row["email"]."</td><td>".$row["img"]."</td></tr>";

			}

		$str.="</table>";

		echo $str;



?>


<?php
include_once("footer.php");
?>