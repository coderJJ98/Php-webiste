<?php
include_once("header.php");
?>
<h4 class="pink">
									<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
									<a href="#modal-table" role="button" class="green" data-toggle="modal"> Table Inside a Modal Box </a>
								</h4>
<?php
$cnn=mysqli_connect("localhost","root","","dbdemo");
$qry="select * from emp";
$result=$cnn->query($qry);
    $str="<Table class='table  table-bordered table-hover'><tr><th>Emp no</th><th>Emp Name</th><th>Salary </th><th>Gender</th><th>Department</th></tr>";
while($row=$result->fetch_assoc())
{
    $str.="<tr><td>".$row["eno"]."</td><td>".$row["ename"]."</td><td>".$row["salary"]."</td><td>" .$row["gender"]."</td><td>".$row["dname"]."</td></tr>";
}
$str.="</table>";
    echo $str;

?>
<form method="post">
</form>
<?php
include_once("footer.php");
?>