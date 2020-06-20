<?php
include_once("trainerheader.php");
?>
<?php 
	
	{
        $mid=$_GET['id'];
		$ttid=13;
        $ispresent=$_GET['status'];
        
        
		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="INSERT INTO attendance(mid,ttid,ispresent)VALUES('$mid','$ttid','$ispresent')";
		echo $qry;
		$result=$cnn->query($qry);
        }
?>
      

<?php
include_once("footer.php");
?>  
