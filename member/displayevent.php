<?php
include_once("memberheader.php");
?>

<h3 class="header smaller lighter blue"> Event details</h3>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from Event";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'>";

        $x=1;

		while($row=$result->fetch_assoc())
		{
            if($x==1)
            {
                $str.="<tr>";
            }
            $str.="<td>".$row["evname"]."</a>"."<Br>". "<img src='images//" .$row["evimg"]."' height='150px' width='150px'><br>".$row["istrainer"] ."</td>";

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