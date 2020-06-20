<?php
session_start();

include_once("memberheader.php");
?>

<h3 class="header smaller lighter blue"> Cart Details</h3>


<?php 

    $total=0;

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from tempcart";
        //echo $qry;

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'><tr></tr><th>Product Name</th><th>Price</th><th>Image</th><th>qty</th><th>pq</th><th>Delete</th></tr>";

		while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>".$row["pname"]."</td><td>" .$row["price"]."</td><td>"."<img src='images\\".$row["img"]."'height='100px' width='100px'></td><td>" .$row["qty"]." </td><td>" .$row["pq"]."</td><td><a href='deleteproduct.php?id=".$row["pid"]."'><i class='ace-icon fa fa-trash-o bigger-120'></i></a></td></tr>";
            $total=$total+$row["pq"];
        }

		$str.="</table>";

		echo $str;
echo "Total :",$total;
    

?>
<form class="form-horizontal" role="form" method="post">
								
<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" class="btn btn-info"
                                                   name="Order">
								
    </div>
</div>
</form>
 <?php

    if(isset($_POST["Order"]))
    {

        $x=$_SESSION["mid"];
        $y=date("Y/m/d");

    $conn = mysqli_connect("localhost" , "root" , "" , "dbproject.sql");

        $qry = "insert into ordersmst (mid,odate) values('$x','$y')";
    echo $qry;
    $result = $conn -> query($qry) ;

        $qry1 = "select max(Oid) as oid from ordersmst ";
        $result1 = $conn -> query($qry1);
        $column1 = $result1 -> fetch_assoc();
        $oid = $column1["oid"];
        echo $oid;
            $qry2 = "select * from tempcart ";
            $result2 = $conn -> query($qry2);
            echo $qry2;
            while($column2 = $result2 -> fetch_assoc())
            {
                    $pid=$column2["pid"];
                    $pname=$column2["pname"];
                    $img=$column2["img"];
                    $price=$column2["price"];
                    $qty=$column2["qty"];
                    $pq=$column2["pq"];
                $qry3="insert into orderdetailmst (oid,pid,pname,qty,pq,image) values ('$oid','$pid','$pname','$qty','$pq','$img')";
                echo $qry3;
                $result3 = $conn -> query($qry3);
            }
        $qry4="delete from tempcart";
        $result4=$conn -> query($qry4);
    

echo "<script>
        window.location.replace('ThankYou.php');
    </script>";
    } 
?>
<?php
include_once("footer.php");
?>