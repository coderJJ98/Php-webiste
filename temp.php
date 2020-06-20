<h3 class="header smaller lighter blue"> Member details</h3>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from member";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th>Memeber username</th><th>Member password</th></tr>";

		while($row=$result->fetch_assoc())
		{
            
            $uname=$row["uname"];
            $pwd=md5($row["pwd"]);
            $qry1="update member set pwd='$pwd' where uname='$uname'";
            
            $result1=$cnn->query($qry1);

            
            
			}

		$str.="</table>";

		echo $str;



?>
    
