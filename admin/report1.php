<script language="javascript">

    function hi()
    {
        alert('hi');
        window.print();
    
    }
    
</script>

<?php 

        $str="";
        if(isset($_POST["btnsubmit"]))
        {
            $dt1=$_POST['txtdt1'];
            $dt2=$_POST['txtdt2'];
		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from member WHERE doj>='$dt1' and doj<='$dt2'";
        echo $qry;
		$result=$cnn->query($qry);

            $cnt=mysqli_num_rows($result);
            
        if($cnt==0)
        {
            $str="Not found";   
        }
        else
        {
		$str="<table class='table  table-bordered table-hover'><tr><th>Name </th><th>Image</th><th>Email</th><th>contact no</th><th>DOJ</th></tr>";

		while($row=$result->fetch_assoc())
		{
            
             $str.="<tr><td>" .$row["fname"]." " .$row["lname"]."</td><td>" .$row["img"]."</td><td>" .$row["email"]."</td><td>" .$row["contactno"]."</td><td>" .$row["doj"]."</td></tr>";

			}

		$str.="</table>";
        }
            
        }
?>
    <h1>Member list</h1>
    <hr color="Red">
    <form name="frm1" method="post">
    <input type="date" name="txtdt1">
        <input type="date" name="txtdt2">
    <input type="submit" name="btnsubmit"> <input type="button" value="print" onclick="hi();">
    </form>
    <hr color="Red">

    <?php
    
		echo $str;

    ?>