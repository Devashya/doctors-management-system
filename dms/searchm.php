<?php

include "connection.php";
if(count($_POST)>0) {
$z_code=$_POST["z_code"];
$res = mysqli_query($con,"SELECT * FROM doctor where z_code LIKE '$z_code%' ");
}
?>

<!DOCTYPE html>
<html>
<title>JOBS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- title icon -->
<link rel="icon" href="images/avatar.svg" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "Raleway", sans-serif;
        /* color: darkgreen; */
    }
    
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    
    #customers td,
    #customers th {
        /* border: 1px solid #ddd; */
        padding: 8px;
    }
    
    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    
    #customers tr:hover {
        background-color: #ddd;
    }
    
    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
</style>

<body class="w3-light-grey">

    <!-- Top container -->
    <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
        <span class="w3-bar-item w3-right"><p style="font-family: poppins;"></p></span>
    </div>

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br><br>
        <div class="w3-container w3-row">
            <div class="w3-col s4">
                <img src="images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
            </div>
            <div class="w3-col s8 w3-bar">
                <span>Welcome, User</strong></span><br>

            </div>
        </div>
        <hr>
       
        
        <div class="w3-bar-block">


            <a href="p_dashboard.php" class="w3-bar-item w3-button w3-padding">  Dashboard</a>   
            <a href="app_list.php" class="w3-bar-item w3-button w3-padding">  Appointments</a>
            <a href="patient_logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out"></i>  Logout</a>
            <br><br>
        </div>
        
       
    </nav>


    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

        <!-- Header -->
        <header class="w3-container" style="padding-top:22px;color: rgb(14, 48, 14);">
            <h5><br><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
        </header>

<div class="w3-row">
                <table id="customers" align="center">
        <th colspan="7"><h2 align="center">Doctors Details</h2>
       
         </th>
      <tr>
      <th>First Name</th>
                        <th><div align="center">Last Name </th>
                        <th><div align="center">Email</th>
                        <th><div align="center">Location</th>
                        <th><div align="center">Gender</th>
                        <th><div align="center">Specialization</th>
                        <th><div align="center">Zip Code</th>
                     
      	
  	  </tr>
        

            </div>


  <?php 
   $i=0;
   while($rows=mysqli_fetch_assoc($res)) 
		{ 
		?>
  <tr>
   
    <td height="95"><div align="center"><?php echo $rows['f_name']; ?></div></td>
	<td><div align="center"><?php echo $rows['l_name']; ?></div></td>
    <td><div align="center"><?php echo $rows['email']; ?></div></td>
    <td><div align="center"><?php echo $rows['city']; ?></div></td>
    <td><div align="center"><?php echo $rows['gender']; ?></div></td>
    <td><div align="center"><?php echo $rows['major']; ?></div></td>
    <td><div align="center"><?php echo $rows['z_code']; ?></div></td>
     
  </tr>
  <?php 
        $i++;
     } 
          ?>
    </table>
