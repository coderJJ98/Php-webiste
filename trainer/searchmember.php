
<?php
include_once("trainerheader.php");
?>

<h3 class="header smaller lighter blue"> Member details</h3>

<table>
<tr><td><A href="searchmember.php?id=A">A</A></td><td><A href="searchmember.php?id=B">B</A></td><td><A href="searchmember.php?id=C">C</A></td><td><A href="searchmember.php?id=D">D</A></td><td><A href="searchmember.php?id=E">E</A></td><td><A href="searchmember.php?id=F">F</A></td><td><A href="searchmember.php?id=G">G</A></td><td><A href="searchmember.php?id=H">H</A></td><td><A href="searchmember.php?id=I">I</A></td><td><A href="searchmember.php?id=J">J</A></td><td><A href="searchmember.php?id=K">K</A></td><td><A href="searchmember.php?id=L">L</A></td><td><A href="searchmember.php?id=M">M</A></td><td><A href="searchmember.php?id=N">N</A></td><td><A href="searchmember.php?id=O">O</A></td><td><A href="searchmember.php?id=P">P</A></td><td><A href="searchmember.php?id=Q">Q</A></td><td><A href="searchmember.php?id=R">R</A></td><td><A href="searchmember.php?id=S">S</A></td><td><A href="searchmember.php?id=T">T</A></td><td><A href="searchmember.php?id=U">U</A></td><td><A href="searchmember.php?id=V">V</A></td><td><A href="searchmember.php?id=W">W</A></td><td><A href="searchmember.php?id=X">X</A></td><td><A href="searchmember.php?id=Y">Y</A></td><td><A href="searchmember.php?id=Z">Z</A></td>
</table>

<?php 

        if(isset($_GET["id"]))
        {
        $id=$_GET["id"];

            
		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from member where fname like '$id%'";
        
		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th>Memeber username</th><th>Member fname</th><th>Member lname </th><th>Image</th><th>Email</th><th>contact no</th><th>Height</th><th>weight</th><th>DOJ</th><th>DOB</th><th>Batch id</th><th>Edit</th><th>Delete</th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>".$row["uname"]."</td><td>" .$row["fname"]."</td><td>" .$row["lname"]."</td><td><img src='memberimage\\" .$row["img"]."' height='100px' width='100px'></td><td>" .$row["email"]."</td><td>" .$row["contactno"]."</td><td>" .$row["height"]."</td><td>" .$row["weight"]."</td><td>" .$row["doj"]."</td><td>" .$row["dob"]."</td><td>" .$row["batchid"]."</td><td><a href='updatemember.php?id=".$row["mid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><td><a href='deletemember.php?id=".$row["mid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";

			}

		$str.="</table>";

		echo $str;
        }
        else
        {
        $cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from member";
        
		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr><th>Memeber username</th><th>Member fname</th><th>Member lname </th><th>Image</th><th>Email</th><th>contact no</th><th>Height</th><th>weight</th><th>DOJ</th><th>DOB</th><th>Batch id</th><th>Edit</th><th>Delete</th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>".$row["uname"]."</td><td>" .$row["fname"]."</td><td>" .$row["lname"]."</td><td><img src='memberimage\\" .$row["img"]."' height='100px' width='100px'></td><td>" .$row["email"]."</td><td>" .$row["contactno"]."</td><td>" .$row["height"]."</td><td>" .$row["weight"]."</td><td>" .$row["doj"]."</td><td>" .$row["dob"]."</td><td>" .$row["batchid"]."</td><td><a href='updatemember.php?id=".$row["mid"]."'><i class='ace-icon fa fa-pencil bigger-120'></i></a></td><td><a href='deletemember.php?id=".$row["mid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";

			}

		$str.="</table>";

		echo $str;
            
        }   
?>
    
    


<?php
include_once("footer.php");
?>