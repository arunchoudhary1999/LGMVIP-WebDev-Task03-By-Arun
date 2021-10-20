<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');
    $rollno=$_POST['rollno'];
    $hindi1=$_POST['hindi1'];
    $english1=$_POST['english1'];
    $math1=$_POST['math1'];
    $physics1=$_POST['physics1'];
    $chemestry1=$_POST['chemestry1'];
    $hindi2=$_POST['hindi2'];
    $english2=$_POST['english2'];
    $math2=$_POST['math2'];
    $physics2=$_POST['physics2'];
    $chemestry2=$_POST['chemestry2'];
    
    $sql="UPDATE `user_mark` SET  `u_hindi1` = '$hindi1', `u_english1` = '$english1', `u_math1` = '$math1', `u_physics1` = '$physics1', `u_chemestry1` = '$chemestry1', `u_hindi2` = '$hindi2', `u_english2` = '$english2', `u_math2` = '$math2', `u_physics2` = '$physics2', `u_chemestry` = '$chemestry2' WHERE `u_rollno` = '$rollno'";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Updated  Succesfully');
        window.open('updatemark_form.php?sid=<?php echo $rollno; ?>', '_self');
             </script>
       
       
        <?php
    }
    else
    {
        echo "Error";
    }
}
?>