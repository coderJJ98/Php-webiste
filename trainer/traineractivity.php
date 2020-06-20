<?php
include_once("trainerheader.php");
?>
<h3 class="header smaller lighter blue"> My Activity </h3>
    
<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from activitytrainer";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th>Activity name </th><th>Timings</th><th>Days</th></tr>";

		while($row=$result->fetch_assoc())
		{
           $str.="<tr><td>".$row["actid"]."</td><td>".$row["timings"]."</td><td>" .$row["day"]."</td></tr>";
           
			}

		$str.="</table>";

		echo $str;



?>

<?php
include_once("footer.php");
?>
