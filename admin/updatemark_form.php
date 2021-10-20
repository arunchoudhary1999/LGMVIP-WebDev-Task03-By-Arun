<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
				
?>
<?php
include('../dbcon.php');
$rollno=$_GET['sid'];


$sql="SELECT * FROM `student_data` WHERE `u_rollno`='$rollno'";
$run=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($run);

$class=$row['u_class'];

$sql2="SELECT * FROM `user_mark` WHERE `u_class`='$class'";
$run2=mysqli_query($con,$sql2);
$data=mysqli_fetch_assoc($run2);

//combine Table///


?>
<html>
<head>
    <title>Update Mark Detail</title>
<link rel="stylesheet" href="../csss/updatemark_form.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="admindash.php"><b>Dashboard</b></a></li>
                <li><a href="../index.php"><b>Home</b></a></li>
                <li><a href="aboutus.php"><b>About</b></a></li>
                <li><a href="contactus.php"><b>Contact</b></a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          
          <form method="post" action="update_mark_data.php">
              <table class="tr">
             <h4> 
                <tr>
                  <th>Student Name: </th>
                  <td><span class="span"><?php echo $row['u_name']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Student Class: </th>
                  <td><span class="span"><?php echo $row['u_class']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Student Rollno: </th>
                  <td><span class="span"><?php echo $row['u_rollno']; ?></span></td>
                </tr>
              </h4>
                  </table>
          <table class="table1">
              <span> <h4 class="h_3">First Exam (A)</h4></span>
             <tr>
                <th>Hindi</th>   <th> English </th> <th>Math</th>
             </tr>
             <tr>
                 <td>
                <input type='text' name='hindi1' value="<?php echo $data['u_hindi1']; ?>" class="th" required/></td>
                 <td><input type='text' name='english1' value="<?php echo $data['u_english1']; ?>" class="th"/></td>
                 <td><input type='text' name='math1' value="<?php echo $data['u_math1']; ?> " class="th" required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Physics</th>   <th>Chemestry</th> 
             </tr>
                 <tr>
                 
                 <td><input type='text' name='physics1' value="<?php echo $data['u_physics1']; ?> " class="th" required/></td>
                 <td><input type='text' name='chemestry1' value="<?php echo $data['u_chemestry1']; ?> " class="th" required/></td>
                 
             </tr>
             
         </table>
          <span> <h4 class="h3">Second Exam(B)</h4> </span>
         <table class="table4">
             <tr>
                <th>Hindi</th>   <th> English </th> <th>Math</th>
             </tr>
             <tr>
                 <td><input type='text' name='hindi2' value="<?php echo $data['u_hindi2']; ?> " class="th" required/></td>
                 <td><input type='text' name='english2' value="<?php echo $data['u_english2']; ?> " class="th" required/></td>
                 <td><input type='text' name='math2' value="<?php echo $data['u_math2']; ?> " class="th" required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Physics</th>   <th>Chemestry</th> 
             </tr>
                 <tr>
                 
                 <td><input type='text' name='physics2' value="<?php echo $data['u_physics2']; ?> " class="th" required/></td>
                 <td><input type='text' name='chemestry2' value="<?php echo $data['u_chemestry']; ?> " class="th" required/></td>
                 </tr>
             <tr>
             <td><input type="hidden" name="rollno" value="<?php echo $row['u_rollno']; ?>"/></td>
            </tr>
             <tr>
             <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="submit"/></td>   
             </tr>
             
         </table>
         
       
       </form>
      </div>
    </header>
    
</body>
</html>