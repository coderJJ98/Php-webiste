<?php
include_once("adminheader3.php");
?>

<h3 class="header smaller lighter blue"> Product details</h3>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from product";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th>Product Name</th><th>Product Price</th><th>Product Image</th><th>Edit</th><th>Delete</th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>".$row["pname"]."</td><td>" .$row["price"]."</td> <td><img src='images\\" .$row["pimg"]."' height='100px' width='100px'></td><td><a href='updateproduct.php?id=".$row["pid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><td><a href='deleteproduct.php?id=".$row["pid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";

			}

		$str.="</table>";

		echo $str;



?>


<?php
include_once("footer.php");
?>