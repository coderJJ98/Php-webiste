
<?php
include_once("trainerheader.php");
?>

<h3 class="header smaller lighter blue"> trainer details</h3>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from trainer";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><th>trainer fname</th><th>Trainer lname </th><th>Image</th><th>Email</th><th>contact no</th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>" .$row["fname"]."</td><td>" .$row["lname"]."</td><td><img src='images\\" .$row["img"]."' height='100px' width='100px'></td><td>" .$row["email"]."</td><td>" .$row["contactno"]."</td></tr>";

			}

		$str.="</table>";

		echo $str;



?>
    
    


<?php
include_once("footer.php");
?>