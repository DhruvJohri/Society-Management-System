<?php
session_start();


if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.html");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome dashboard</title>
    <link rel="stylesheet" href="dashstyle.css">
    <script src="https://kit.fontawesome.com/2edfbc5391.js"crossorigin="anonymous"></script>
    <style>
      .far{
        color:#a7abde;
        padding-left: 15px;
        
      }
      .col-div-3 .box p{
        font-size: 25px;

      }
      .box .fas{
        color:#a7abde;
        position:absolute;
        padding-top: 50px;
        

      }
      .box .fas .fa-home{
        color:#a7abde;
        padding-left: 20px;
      }
      
    </style>

</head>
<body>
<input type="checkbox" id="check">
    
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      
      <div class='left_area'>
    <img src="Images/shlogo.jpg" class="logo" style="width: 60px; height: 40px; display: inline-block;vertical-align:middle; ">
    <h2 style="display: inline-block; margin-left: 10px; margin-bottom:auto; vertical-align: middle;">
        Society<span style="font-family: 'Merienda', cursive; color: rgb(20, 80, 32);">HUB</span>
    </h2>
</div>

      <div class="right_area">
        <a href="logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    
    <div class="sidebar">
      <center>
        <img src="Images/download.png" class="profile_image" alt="">
        <h4> <?php echo $_SESSION['username']?> </h4>
      </center>
      <a href="Welcome.php" class="active"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="noticebrd.php"><i class="fas fa-bullhorn"></i><span>Notice Board</span></a>
      <a href="complaint.php"><i class="fas fa-envelope-open-text"></i><span>Register Complaint</span></a>
      <a href="payment.php"><i class="fas fa-file-invoice-dollar"></i><span>Payments</span></a>
      <a href="userphoto.php"><i class="fas fa-camera-retro"></i><span>Photo Gallery</span></a>
     
    </div>


    <div class="content"> 
      <h1>Welcome to Dashboard</h1>
      <?php 
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "project";
      
      // creating connection
      
      $conn = mysqli_connect($servername, $username, $password, $database);

      $user_name = $_SESSION['username'];
      $sql = "SELECT Username,Flatno FROM registration where Username='$user_name'";
      $result = $conn->query($sql);
      if($result->num_rows >0){
          while($row = $result->fetch_assoc()){
      
      echo '<div class="col-div-3">
        <div class="box">
          <p>'.$row['Username'].'<br><span>Your Username</span></p>
          <i class="far fa-user fa-2x"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>'.$row['Flatno'].'
      
     <br><span>Your Flat No.</span></p>
          <i class="fas fa-home fa-2x"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>Dhruv Johri<br><span>Society Secretary</span></p>
          <i class="fas fa-user-tie fa-2x" ></i>
        </div>
      </div>';
          }}else {
            echo "O records found !";
          }
          ?>
    </div>
    
</body>
</html>