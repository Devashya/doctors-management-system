<?php
include"connection.php";

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$a_id = $_GET['a_id'];

$sql =  "UPDATE appointment set status='Approved' where a_id = $a_id ";
                    if (mysqli_query($con, $sql)) {
                        ?>
                        <script type="text/javascript">
                                alert('Status Updated Successfully..!');
                                window.location="d_dashboard.php";
                        </script>
                        <?php
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($con);
                    }
                              
                
    
?>