<?php
include_once("adminheader3.php");
?>

<h3 class="header smaller lighter blue"> Order Details</h3>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from orderdetailmst";

		$result=$cnn->query($qry);

			$str="<table class='table  table-bordered table-hover'><tr></tr><th>Order Id</th><th>Orderitem Id</th><th>Product Id</th><th>Product Name</th><th>Product Quality</th><th>Product Quantity</th><th>Image</th><th>Edit</th><th>Delete</th></th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>".$row["odid"]."</td><td>".$row["oid"]."</td><td>" .$row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["pq"]."</td><td>".$row["qty"]."</td><td><img src='images\\" .$row["image"]."' height='100px' width='100px'></td><td><a href='updateorder.php?id=".$row["oid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><td><a href='deleteorder.php?id=".$row["oid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";

			}

		$str.="</table>";

		echo $str;



?>


<?php
include_once("footer.php");
?>