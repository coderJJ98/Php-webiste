<?php
include_once("adminheader.php");
?>
<a href='ttinsert.php' class='btn btn-info' style='float:right'>Insert</a>
<h3 class="header smaller lighter blue"> Teaching Type details</h3>

<?php 
		$cnn=mysqli_connect("localhost","root","","dbglobalguru");
		$qry="Select * from teachingtype";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th>Edit</th><th>Delete</th><th>Teaching type</th><th>Image</th></tr>";

		while($row=$result->fetch_assoc())
		{
				$str.="<tr><td><a href='ttupdate.php?Id=".$row["ttid"]."' class='btn btn-xs btn-success' ><i class='ace-icon fa fa-check bigger-120'></i></a></td><td><a href='ttdelete.php?Id=".$row["ttid"]."' class='btn btn-xs btn-danger' ><i class='ace-icon fa fa-trash-o bigger-120'></i></td><td>".$row["ttname"]."</td><td><img src='img//".$row["ttimg"]."' height='100px' width='100px'></td></tr>";
			}

		$str.="</table>";

		echo $str;

        		




?>


<?php
include_once("adminfooter.php");
?>