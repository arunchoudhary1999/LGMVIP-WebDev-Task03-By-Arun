<?php

include('../dbcon.php');
    $rollno=$_REQUEST['sid']; 
    
    $sql1="DELETE FROM `user_mark` WHERE `u_rollno`='$rollno';";

    $sql2="DELETE FROM `student_data` WHERE `u_rollno`='$rollno';";
    $run=mysqli_query($con,$sql1);

    $run=mysqli_query($con,$sql2);
    if($run==true)
    {
        ?>
        <script>
        alert('Data mark Succesfully');
        window.open('deleteform.php?sid=<?php echo $rollno; ?>', '_self');
        </script>
        <?php
    }

?>