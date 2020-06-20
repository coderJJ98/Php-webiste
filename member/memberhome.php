<?php
include_once("memberheader.php");
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
    margin: 2px;
    width: 50%;
    padding: 10px;
}

.image {
  display:circle;
  width: 220px;
  height: 200px;
    
}

.overlay {
  position: absolute;
  top: 20px;
  bottom: 0;
  left: 0;
  right: 0;
  height: 240px;
  width: 250px;
  opacity: 0;
  transition: .4s ease;
  background-color: #008CBA;
    border-radius: 20px;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
</head>
 <body>
<table>
<tr>
<td>
    <a href="displayproduct.php">
  <div class="container">
  <img src="images/order1.png"  class="image" hspace="10" vspace="30">
  <div class="overlay">
    <div class="text">Products</div>
  </div>
</div>
    </a>
</td>
<td>
    <a href="displayevent.php">
      <div class="container">
  <img src="images/event.jfif"  class="image" hspace="20" vspace="30">
  <div class="overlay">
    <div class="text">Events</div>
  </div>
</div>
    </a>
</td>
<td>
    <a href="displaygympackage.php">
      <div class="container">
  <img src="images/package.png"  class="image" hspace="20" vspace="30">
  <div class="overlay">
    <div class="text">Package</div>
  </div>
</div>
    </a>
</td>
</tr>
<tr>
<td>
    <a href="displaytest.php">
      <div class="container">
  <img src="images/progress.png"  class="image" hspace="10" vspace="20">
  <div class="overlay">
    <div class="text">Progress</div>
  </div>
</div>
    </a>
</td>
<td>
    <a href="displayorder.php">
      <div class="container">
  <img src="images/order.png"  class="image" hspace="20" vspace="20">
  <div class="overlay">
    <div class="text">Orders</div>
  </div>
</div>
    </a>
</td>
<td>
    <a href="displaytips.php">
      <div class="container">
          
  <img src="images/tips.png"  class="image" hspace="20" vspace="20">
  <div class="overlay">
    <div class="text">Tips</div>
  </div>
          
</div>
        </a>
</td>
</tr>
    
</table>

</body>
</html>
<?php
include_once("footer.php");
?>