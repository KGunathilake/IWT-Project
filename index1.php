<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="./index1.css">
  <link rel="stylesheet" href="./home.css">
  <title>User</title>
  

</head>

<body>
  <header>
  <img src="images/logo.png" alt="logo" class="center">
  <h1 align="center">Sri Lankan Safari.Lk
    <a href="login.html">
    <img src="images/login.png" alt="login" align="right" width="8%"></a>
  </h1>
  <hr>
  <ul>
    <li><a href="Home.html">Home</a></li>
    <li><a href="Activities.html">Activities
      <select>
      <option>A1</option>
      <option>A2</option>
      <option>A3</option>
      </select></a></li>
    <li><a href="Hotel Booking.html">Hotel Booking</a></li>
    <li><a href= "Offers.html">Offers & Packages</a></li>
    <li><a href="Contact.html">Contact Us</a></li>
    <li><a href="About.html">About Us</a></li>
  </ul>
  <br>
  </header>
  <center>
    <img class="avatar" src="images/avatar.jpg" alt="Profilephoto" >
    <h2 id="col"> Customer details</h2>
  
    <div class="container" id="searchItem">
    <form action="" method="POST" >
      <div class="form-group">
        <center><label>Customer ID:</label></center>
        <input type="text" class="form-control" name="id" placeholder="Enter Id to search">
      </div>
      <input type="submit" id="btn"   name="search" value="search" />
      
    </form>
  </div>
  </center>

  <?php
  $connection = mysqli_connect("localhost", "root", "");
  $db = mysqli_select_db($connection, 'safari');


  if (isset($_POST['search'])) {
    $id = $_POST['id'];

    $query = "SELECT * FROM user where cusID = '$id' ";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {
  ?>
      <div class="container" id="formBody">
        <form action="" method="POST">
          <div class="form-group">
            <label>Customer ID</label>
            <input type="text" class="form-control" name="cusID" value="<?php echo $row['cusID'] ?>">
          </div>
          <div class="form-group">
            <label>User Name</label>
            <input type="text" class="form-control" name="userName" value="<?php echo $row['userName'] ?>">
          </div>
          <div class="form-group">
            <label>Tour Location</label>
            <input type="text" class="form-control" name="tourLocation" value="<?php echo $row['tourLocation'] ?>">
          </div>
          <div class="form-group">
            <label>Package</label>
            <input type="text" class="form-control" name="package" value="<?php echo $row['package'] ?>">
          </div>
          <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" name="date" value="<?php echo $row['date'] ?>">
          </div>
          <div class="form-group">
            <label>Payment</label>
            <input type="Number" class="form-control" name="payment" value="<?php echo $row['payment'] ?>">
          </div>
          <div class="form-group">
            <label>Hotel</label>
            <input type="text" class="form-control" name="Hotel" value="<?php echo $row['Hotel'] ?>">
          </div>
          <br><br>
          <center>
          <div class="form-group">            
          <input style="width: 100%" type="submit"  id="btn" name="update" value="Update data">
          </div>
          </center>

        </form>
      </div>

  <?php
    }
  }
  ?>
 
 <?php

 $connection=mysqli_connect("localhost","root","");
 $db= mysqli_select_db($connection, 'safari'); 

if(isset($_POST['update']))
{
	$cusID = $_POST['cusID'];

	$query = " UPDATE `user` SET userName='$_POST[userName]',tourLocation='$_POST[tourLocation]',package='$_POST[package]',date='$_POST[date]',payment='$_POST[payment]' where cusID='$_POST[cusID]' ";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
		echo '<script> alert("Data Updated successfully") </script>';
	}
	else
	{
		echo '<script> alert("Data not Updated") </script>';
	}
		
		
}
?>



<br><br>
<center>
  <img class="p1" src="images/img4.jpg" alt="picture" width="25%" height="25%">
  <img class="p1" src="images/img2.jpg" alt="picture" width="25%" height="25%">
  <img class="p1" src="images/img1.jpg" alt="picture" width="25%" height="25%">
</center>
<br>
<b><hr><b>
<br><br>
<footer>
    <center>
    <h3>Follow Us On</h3>
      <table>
      <td  align="center"><a href="https://www.facebook.com"><img src="images/facebook.png" width="35%"></a></img></td>
      <td  align="center"><a href="https://www.instagram.com"><img src="images/insta.png" width="35%"></a></td>
      <td  align="center"><a href="https://www.youtube.com"><img src="images/youtube.png" width="35%"></a></td>
      <td  align="center"><a href="https://twitter.com/?lang=en"><img src="images/twit.png" width="35%"></a></td>
      </table>
      </center>
      <p><b>Address:- Kandy Road,Malabe<br/>Hotline :- 077xxxxxxx<br/>e-mail:- xxxxxx@gmail.com</b></p>
      <hr>
      <p>Designed and Maintained by :- SLIIT Malabe</p>
    </center>
</footer>
</body>
</html>
