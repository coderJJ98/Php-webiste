
<?php
include_once("adminheader3.php");
?>

<h3 class="header smaller lighter blue"> Member details</h3>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from member";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th>Memeber username</th><th>Member fname</th><th>Member lname </th><th>Image</th><th>Email</th><th>contact no</th><th>Height</th><th>weight</th><th>DOJ</th><th>DOB</th><th>Batch id</th><th>Edit</th><th>Delete</th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>".$row["uname"]."</td><td>" .$row["fname"]."</td><td>" .$row["lname"]."</td><td><img src='images\\" .$row["img"]."' height='100px' width='100px'></td><td>" .$row["email"]."</td><td>" .$row["contactno"]."</td><td>" .$row["height"]."</td><td>" .$row["weight"]."</td><td>" .$row["doj"]."</td><td>" .$row["dob"]."</td><td>" .$row["batchid"]."</td><td><a href='updatemember.php?id=".$row["mid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><td><a href='deletemember.php?id=".$row["mid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";

			}

		$str.="</table>";

		echo $str;



?>
    
    


<?php
include_once("footer.php");
?>