<?php
include"connection.php";

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit']))
{

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST["email"];
$city =$_POST["city"];
$gender =$_POST["gender"];
$major =$_POST["major"];
$z_code =$_POST["z_code"];


                    include './connection.php';
                    $sql ="INSERT INTO doctor (f_name, l_name, email, city, gender, major, z_code) VALUES ('$f_name', '$l_name', '$email' , '$city' , '$gender', '$major', '$z_code')";
                    if (mysqli_query($con, $sql)) {
                        ?>
                        <script type="text/javascript">
                                alert('Added successfully..!');
                                window.location="jobs.php";
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
<title>JOBS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- title icon -->
<link rel="icon" href="images/avatar.svg" type="image/x-icon">
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
    /* DETAILS */
    
    * {
        box-sizing: border-box;
    }
    
    input[type=text],
    select,
    textarea {
        width: 50%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 14px;
        resize: vertical;
    }
    
    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }
    
    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }
    
    input[type=submit]:hover {
        background-color: #45a049;
    }
    
    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
    
    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }
    
    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }
    /* Clear floats after the columns */
    
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    
    @media screen and (max-width: 600px) {
        .col-25,
        .col-75,
        input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }
</style>
<!-- FONT LINKS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
<!-- font-family: 'Nunito Sans', sans-serif; -->
<body class="w3-light-grey">

    <!-- Top container -->
    <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onClick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
        <span class="w3-bar-item w3-right"></span>
    </div>

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br><br>
        <div class="w3-container w3-row">
            <div class="w3-col s4">
                <img src="images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
            </div>
            <div class="w3-col s8 w3-bar">
                <span>Welcome, <strong>ADMIN</strong></span><br>

            </div>
        </div>
        <hr>
        <div class="w3-container">
            <h5>Dashboard</h5>
        </div>
     
    </nav>


    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onClick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

       

      <div class="w3-container">
            
        <h1 > Doctor's Information </h1>
        <form method="post" action="" enctype="multipart/form-data">
        <table style="text-align:center;width:700px"  border="0">
        <tr>
            <td width="213">First Name: </td>
            <td width="477"><input type="text" name="f_name" required ></td>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td><input type="text" name="l_name" required></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><input type="text" name="email"> <required></td>
          </tr>
          <tr>
            <td>City:</td>
            <td><input type="text" name="city" required></td>
          </tr>
          <tr>
            <td>Gender:</td>
            <td><input type="text" name="gender" required></td>
          </tr>
          <tr>
            <td>Specialization:</td>
            <td><input type="text" name="major" required></td>
          </tr>
          <tr>
            <td>Zip Code:</td>
            <td><input type="text" name="z_code" required></td>
          </tr>
          <tr>
            <td><span style=" border-radius: 10px;">
              <input type="submit" name="submit" value="Submit"/>
            </span></td>
			
          </tr>
        </table>
        </form>
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