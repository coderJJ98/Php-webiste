<?php
include_once("memberheader.php");
?>

<h3 class="header smaller lighter blue"> Product details</h3>

<form class="form-horizontal" role="form" method="post">

<?php 

        $id=$_GET["id"];		 

		$cnn=mysqli_connect("localhost","root","","dbproject.sql");
		$qry="Select * from product WHERE pid=$id";

		$result=$cnn->query($qry);

		$str="<table class='table  table-bordered table-hover'>";

       
		while($row=$result->fetch_assoc())
		{
            
            $str.="<tr><td>".$row["pname"]."<Br>"."<img src='images\\" .$row["pimg"]."'height='300px' width='350px'><br>".$row["price"] ."</td></tr>";

        }
		$str.="</table>";

		echo $str;


?>


            <tr>
            <th> Product Quantity :</th>
            
        </tr>

          <tr>
            <td>
                   <select name="opt">
                    <option value="1">1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                    <option value="5" >5</option>
                </select>
                </td>
            </tr>
            
								

<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" class="btn btn-info"
                                                   name="Submit">
								
											

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>
</form>
<?php
if(isset($_POST['Submit']))
{
       
    
    $id=$_GET["id"];
    $qry="Select * from product WHERE pid=$id";
    echo $qry;
    $result=$cnn->query($qry);
	    
    $row=$result->fetch_assoc();
    $pid=$row["pid"];
    $pname=$row["pname"];
    $price=$row["price"];
    $img=$row["pimg"];
    $producttype=$row["producttype"];
    $qty=$_POST["opt"];
    $pq=$qty*$price;
     $cnn=mysqli_connect("localhost","root","","dbproject.sql");
     $qry="INSERT INTO tempcart(pid,pname,price,img,qty,pq) VALUES ('$pid','$pname','$price','$img','$qty','$pq')";
     echo $qry;
     $result=$cnn->query($qry);
	//header("Location:displaytempcart.php");
   echo "<script>window.location.href ='displaytempcart.php';</script>";
}
?>

<?php
include_once("footer.php");
?>