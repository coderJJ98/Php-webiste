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
         $contactno=$_POST['txtcontactno'];
        
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from member WHERE contactno='$contactno'";
        echo $qry;
		$result=$cnn->query($qry);

            
                $cnt=mysqli_num_rows($result);
            
        if($cnt==0)
        {
            $str="Not found";   
        } else
                {
		                  
                   $str="<table class='table  table-bordered table-hover'><tr><th>Name </th><th>Image</th><th>Email</th><th>contact no</th><th>DOJ</th></tr>";

		          while($row=$result->fetch_assoc())
		          {
            
                     $str.="<tr><td>" .$row["fname"]." " .$row["lname"]."</td><td>" .$row["img"]."</td><td>" .$row["email"]."</td><td>" .$row["contactno"]."</td><td>" .$row["height"]."</td><td>" .$row["weight"]."</td><td>" .$row["doj"]."</td><td>" .$row["dob"]."</td></tr>";

                  }

		          $str.="</table>";
                }
        
                    
                
        }
?>
    
<h1>Member list</h1>
    <hr color="Red">
    <form name="frm1" method="post">
    Contact no:<input type="text" name="txtcontactno">
    <input type="submit" name="btnsubmit"> <input type="button" value="print" onclick="hi();">
    </form>
    <hr color="Red">

    <?php
    
		echo $str;

    ?>