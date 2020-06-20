<?php

if(isset($_POST['submit']))
{
$fname=$_FILES['file']['name'];

if($_FILES['file']['name'] != "" )
{
move_uploaded_file($_FILES["file"]["tmp_name"],
      "images/" . $_FILES["file"]["name"]);
	echo "File is uploaded";	
}
else
{
	echo "File is not selected";
}
}
?>
<form name="frm1" method="post" enctype="multipart/form-data">
<table width="200" border="1">
  <tr>
    <td>File</td>
    <td>:</td>
    <td><input name="file" type="file" /></td>
  </tr>
  <tr>
    <td>
<input type="submit" name="submit" /></td>
  </tr>
</table>
</form>

