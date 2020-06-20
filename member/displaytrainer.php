
<?php
include_once("memberheader.php");
?>

<h3 class="header smaller lighter blue"> Trainer details</h3>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from trainer";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><th>Trainer Fullname </th><th>Image</th></tr>";

		while($row=$result->fetch_assoc())
		{
            $fullname=$row["fname"]." ".$row["lname"];
             $str.="<tr><td>" .$row["fname"]." ".$row["lname"]."</td><td><img src='images\\" .$row["img"]."' height='100px' width='100px'></td></tr>";

			}

		$str.="</table>";

		echo $str;



?>
    
    


<?php
include_once("footer.php");
?>