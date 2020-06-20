<?php

session_start();
include_once("memberheader.php");
?>

<h3 class="header smaller lighter blue"> Order Details</h3>


<?php 

        		  $oid=$_GET["oid"];
                              
		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from orderdetailmst WHERE oid=$oid";
        

		$result=$cnn->query($qry);

			$str="<table class='table  table-bordered table-hover'><tr></tr><th>Product Name</th><th>Product Quality</th><th>Product Quantity</th><th>Image</th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>".$row["pname"]."</td><td>".$row["pq"]."</td><td>".$row["qty"]."</td><td>".$row["pimg"]."<Br>"."<img src='images\\" .$row["pimg"]."'height='100px' width='100px'>"."</td></tr>";

			}

		$str.="</table>";

		echo $str;



?>


<?php
include_once("footer.php");
?>