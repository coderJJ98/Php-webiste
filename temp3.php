<h3 class="header smaller lighter blue"> Member details</h3>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from trainer";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th>Trainer username</th><th>Trainer password</th></tr>";

		while($row=$result->fetch_assoc())
		{
            
            $tuname=$row["tuname"];
            $tpwd=("abcd1234");
            $qry1="update trainer set tpwd='$tpwd' where tuname='$tuname'";
            
            $result1=$cnn->query($qry1);

            
            
			}

		$str.="</table>";

		echo $str;



?>
    
+++