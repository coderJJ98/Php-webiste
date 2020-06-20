<?php
session_start();
include_once("adminheader3.php");
?>

<h3 class="header smaller lighter blue"> Event details</h3>

<form class="form-horizontal" role="form" method="post">

<?php 

        $id=$_GET["id"];
        $_SESSION["evid"]=$id;

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from event WHERE evid=$id";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'>";

       
		while($row=$result->fetch_assoc())
		{
            
            $str.="<tr><td>".$row["evname"]."<Br>"."<img src='images\\" .$row["evimg"]."'height='300px' width='350px'><br>".$row["evdesc"] ."</td></tr>";

        }
		$str.="</table>";

		echo $str;


?>
    	<input type="submit" class="btn btn-info" name="Register">
        <input type="submit" class="btn btn-info" name="Submit1">

    <?php
if(isset($_POST['Submit']))
{
       
    
    $id=$_GET["id"];
echo "<script>window.location.href ='registermember.php';</script>";
}
if(isset($_POST['Submit1']))
{
    $id=$GET["id"];
    echo "<script>window.location.href ='eventlist.php';</script>";
    
}
        
?>




<?php
include_once("footer.php");
?>