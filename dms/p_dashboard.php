<?php 
session_start();
include "connection.php";
if(!isset($_SESSION['phone']))
	header('location:patient_login.php');
$phone = $_SESSION['phone'];
			
			$qry = mysqli_query($con,"SELECT p_name, email, p_id FROM patient WHERE phone = '$phone'");
			$row = mysqli_fetch_array($qry);
			
			$p_name = $row['p_name'];
            $email = $row['email'];
            $p_id = $row['p_id'];

$query = "select * from doctor";
$result = mysqli_query($con,$query);

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
                <span>Welcome, <strong><?php echo $row['p_name']; ?></strong></span><br>

            </div>
        </div>
        <hr>
        <div class="w3-container">
            <h5>Dashboard</h5>
        </div>
        
        <div class="w3-bar-block">
           
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

        

        <div class="w3-container">
            <h2 style="color: darkgreen;font-weight: bold;">Doctor's List</h2>
            <hr style="height:30px; background-color: darkgreen;height: 3px;width: 340px;" noshade="0">

            <form class="form-inline" method="post" action="search.php">
    <input type="text" name="major" class="form-control" width="400px"placeholder="Search Doctor">
    <button class="w3-button w3-large w3-teal" style="font-size: 10px;" type="submit" name="save" class="btn btn-primary">Search by Major</button>
  </form>
  <br>
  <form class="form-inline" method="post" action="searchm.php">
    <input type="text" name="z_code" class="form-control" width="400px"placeholder="Search Doctor">
    <button class="w3-button w3-large w3-teal" style="font-size: 10px;" type="submit" name="save" class="btn btn-primary">Search by Zipcode </button>
  </form>
            <br>
            <div class="w3-row">
                <table id="customers">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name </th>
                        <th>Email</th>
                        <th>Location</th>
                        <th>Gender</th>
                        <th>Specialization</th>
                        <th>Zip Code</th>
                        <th>Book Appointment</th>
                      

                    </tr>
                    <?php 
                    while($rows=mysqli_fetch_assoc($result)) 
		            { 
		            ?>
                    <tr>
                        <td><?php echo $rows['f_name']; ?></td>
                        <td><?php echo $rows['l_name']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['city']; ?></td>
                        <td><?php echo $rows['gender']; ?></td>
                        <td><?php echo $rows['major']; ?></td>
                        <td><?php echo $rows['z_code']; ?></td>

    

                        <td ><a href="a_status.php?p_name=<?php echo $row['p_name'];?>&phone=<?php echo $_SESSION['phone'];?>&d_id=<?php echo $rows['d_id'];?>&p_id=<?php echo $row['p_id'];?>&email=<?php echo $row['email'];?>&major=<?php echo $rows['major'];?>&f_name=<?php echo $rows['f_name'];?>&l_name=<?php echo $rows['l_name'];?>"
                        <button class="w3-button w3-large w3-teal" style="font-size: 10px;"><strong>Book Appointment</a>
                        </button></td>
                        
                        </tr>
                        
            <?php 
            } 
            ?>
                </table>
                <br>
                <hr style="height:30px; background-color: darkgreen;height: 3px;width: 340px;" noshade="0">
             
               

            </div>
           
            <br>

        

        <!-- End page content -->
    </div>

    <script>
        // Get the Sidebar
        var mySidebar = document.getElementById("mySidebar");

        // Get the DIV with overlay effect
        var overlayBg = document.getElementById("myOverlay");

        // Toggle between showing and hiding the sidebar, and add overlay effect
        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
                overlayBg.style.display = "none";
            } else {
                mySidebar.style.display = 'block';
                overlayBg.style.display = "block";
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
            overlayBg.style.display = "none";
        }
    </script>

</body>

</html>