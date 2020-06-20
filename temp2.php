<h3 class="header smaller lighter blue"> Member details</h3>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from admin";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th>Admin username</th><th>Admin password</th></tr>";

		while($row=$result->fetch_assoc())
		{
            
            $username=$row["username"];
            $psw=md5($row["psw"]);
            $qry1="update trainer set psw='$psw' where username='$username'";
            
            $result1=$cnn->query($qry1);

            
            
			}

		$str.="</table>";

		echo $str;



?>
    
