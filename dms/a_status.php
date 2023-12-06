<?php
session_start();
include"connection.php";

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$p_name = $_GET['p_name'];
$d_id = $_GET['d_id'];
$p_id = $_GET['p_id'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$major = $_GET['major'];
$f_name = $_GET['f_name'];
$l_name = $_GET['l_name'];

if(isset($_POST['Submit']))

{

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email =$_POST["email"];
    $phone =$_POST["phone"];
    $p_name =$_POST["p_name"];
    $date =$_POST["a_date"];

                    $sql ="INSERT INTO appointment (p_id, d_id, p_name, phone, email, f_name, l_name, major, date, time, a_date, status)	
                     VALUES ('$p_id', '$d_id', '$p_name', '$phone', '$email' , '$f_name' , '$l_name', '$major', now(), now(), '$date', 'Pending')";
                    if (mysqli_query($con, $sql)) {
                        ?>
                        <script type="text/javascript">
                                alert('Appintment Requested successfully..!');
                                window.location="p_dashboard.php";
                        </script>
                        <?php
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($con);
                    }
                    mysqli_close($con);
                 
                }

?>
<!DOCTYPE html>
<html>
<title>Appointments</title>
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
                <span>Welcome, <strong><?php echo $_GET['p_name']; ?></strong></span><br>

            </div>
        </div>
        <hr>
        <div class="w3-container">
            <h5>Dashboard</h5>
        </div>
        
        <div class="w3-bar-block">
           
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
            
        <h1 > Doctor's Information </h1>
        <form method="post" action="" enctype="multipart/form-data" >
        <table style="text-align:center;width:700px" border="0">
          <tr>
            <td width="213">First Name: </td>
            <td width="477"><input type="text" name="f_name" value="<?php echo "$f_name" ?>" required ></td>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td><input type="text" name="l_name" value="<?php echo "$l_name" ?>" required></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><input type="text" name="email" value="<?php echo "$email" ?>" required></td>
          </tr>
          <tr>
            <td>Patient Name:</td>
            <td><input type="text" name="p_name" value="<?php echo "$p_name" ?>" required></td>
          </tr>
          <tr>
            <td>Phone:</td>
            <td><input type="text" name="phone" value="<?php echo "$phone" ?>" required></td>
          </tr>
          <tr>
            <td>Specialization:</td>
            <td><input type="text" name="major" value="<?php echo "$major" ?>" required></td>
          </tr>
          <tr>
            <td>Appointment date:</td>
            <td><input type="date" name="a_date"  required></td>
          </tr>
          <tr>
            <td><span style=" border-radius: 10px;">
              <input type="submit" name="Submit" value="Submit"/>
            </span></td>
			
          </tr>
        </table>
      </div>
        <br>

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