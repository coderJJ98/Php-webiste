<?php
include_once("adminheader3.php");
?>
<h3 class="header smaller lighter blue"> Attendance </h3>
  <?php 
	
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
         
          $id=$_GET['id'];
          $qry="Select * from member where batchid = $id";
	      $result=$cnn->query($qry);
$str="<table class='table  table-bordered table-hover'><th>Member fname</th><th>Member lname </th><th>present</th><th>absent</th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>" .$row["fname"]."</td><td>" .$row["lname"]."</td><td><a href='memberattendance2.php?id=".$row["mid"]."&status=present'>Present</a><td><a href='memberattendance2.php?id=".$row["mid"]."&status=absent'>Absent</a></tr>";

			}

		$str.="</table>";

		echo $str;



?>
<?php
include_once("footer.php");
?>
