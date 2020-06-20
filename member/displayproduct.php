<?php
include_once("memberheader.php");
?>

<h3 class="header smaller lighter blue"> Product details</h3>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from product";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'>";

        $x=1;

		while($row=$result->fetch_assoc())
		{
            if($x==1)
            {
                $str.="<tr>";
            }
            $str.="<td><a href='pDesc.php?id=".$row["pid"]."'>".$row["pname"]."</a>"."<Br>".$row["producttype"]."<Br>"."<img src='images\\" .$row["pimg"]."'height='100px' width='100px'><br>".$row["price"] ."</td>";

            $x++;
            
            if($x==4)
            {
                $str.="</tr>";
                $x=1;
            }
			}

		$str.="</table>";

		echo $str;



?>


<?php
include_once("footer.php");
?>