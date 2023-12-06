<?php
//To Delete Order
include 'connection.php';
$d_id = $_GET['d_id'];

$q = " DELETE FROM doctor WHERE d_id = $d_id ";

mysqli_query($con,$q);

    ?>
    <script type="text/javascript">
            alert('Doctor deleted successfully..!');
            window.location="jobs.php";
    </script>
    <?php

?>
