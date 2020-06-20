<?php
include_once("trainerheader.php");
?>

<h3 class="header smaller lighter blue">Trainer Activity details</h3>


<?php 

        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select activity.actid as actid,trainer.tid as tid,actname,timings,day,fname,lname FROM activity,activitytrainer,trainer WHERE activity.actid=activitytrainer.actid  and trainer.tid=activitytrainer.tid";
        echo $qry;
		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr></tr><th>Activity Name</th><th>Activity Timings</th><th>Day</th><th>First Name</th><th>Last Name</th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>".$row["actname"]."</td><a href='displayactivity.php?id=".$row["actid"]."'></a><td>".$row["timings"]."</td><td>".$row["day"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td></tr>";

        }

		$str.="</table>";

		echo $str;



?>


<?php
include_once("footer.php");
?>