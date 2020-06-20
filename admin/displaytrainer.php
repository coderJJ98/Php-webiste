
<?php
include_once("adminheader3.php");
?>

<h3 class="header smaller lighter blue"> trainer details</h3>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from trainer";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><th>Trainer username</th><th>trainer fname</th><th>Trainer lname </th><th>Image</th><th>Email</th><th>contact no</th><th>DOJ</th><th>DOB</th><th>Edit</th><th>Delete</th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>".$row["tuname"]."</td><td>" .$row["fname"]."</td><td>" .$row["lname"]."</td><td><img src='images\\" .$row["img"]."' height='100px' width='100px'></td><td>" .$row["email"]."</td><td>" .$row["contactno"]."</td><td>" .$row["doj"]."</td><td>" .$row["dob"]."</td><td><a href='updatetrainer.php?id=".$row["tid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><td><a href='deletetrainer.php?id=".$row["tid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";

			}

		$str.="</table>";

		echo $str;



?>
    
    


<?php
include_once("footer.php");
?>