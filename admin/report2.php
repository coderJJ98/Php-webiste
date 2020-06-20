<script language="javascript">

    function hi()
    {
        alert('hi');
        window.print();
    
    }
    
</script>


<?php 

        		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from trainer";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><th>trainer fname</th><th>Trainer lname </th><th>Image</th><th>Email</th><th>contact no</th><th>DOJ</th><th>DOB</th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>" .$row["fname"]."</td><td>" .$row["lname"]."</td><td>" .$row["img"]."</td><td>" .$row["email"]."</td><td>" .$row["contactno"]."</td><td>" .$row["doj"]."</td><td>" .$row["dob"]."</td></tr>";

			}

		$str.="</table>";




?>
    
    

  
<h1>Trainer List</h1>
  <hr color="Red">
    <form name="frm1" method="post">
     <input type="button" value="print" onclick="hi();">
    </form>

    <?php
    
		echo $str;

    ?>
<hr color="Red">