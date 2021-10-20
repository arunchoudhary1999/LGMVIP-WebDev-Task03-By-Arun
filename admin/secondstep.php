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

<html>
<head>
    <title>Homepage</title>
<link rel="stylesheet" href="../csss/secondstep.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          
          <form method="post" action="thirdstep.php">
              <h2>Step 2/2 : Add Exam mark</h2>
         
          <td><input class="box" type="hidden" name="class" class="class" value="<?php  echo $_POST['class']; ?>" required/></td>
          
          <td><input class="box" type="hidden" name="rollno" class="rollno" value="<?php  echo $_POST['rollno']; ?>" required/></td>
          
              
              
          <table class="table1">
              <span> <h3 class="h_3">First Exam (A)</h3></span>
             <tr>
                <th>Hindi</th>   <th> English </th> <th>Math</th>
             </tr>
             <tr>
                 <td><input class="box" type='text' name='hindi1' placeholder='Hindi' required/></td>
                 <td><input class="box" type='text' name='english1' placeholder='English' required/></td>
                 <td><input class="box" type='text' name='math1' placeholder='Math' required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Physics</th>   <th>Chemestry</th> 
             </tr>
                 <tr>
                 
                 <td><input class="box" type='text' name='physics1' placeholder='Physics' required/></td>
                 <td><input class="box" type='text' name='chemestry1' placeholder='Chemestry' required/></td>
                 
             </tr>
             
         </table><br/>
          <span> <h3 class="h3">Second Exam (B)</h3> </span>
         <table class="table1">
             <tr>
                <th>Hindi</th>   <th> English </th> <th>Math</th>
             </tr>
             <tr>
                 <td><input class="box" type='text' name='hindi2' placeholder='Hindi' required/></td>
                 <td><input class="box" type='text' name='english2' placeholder='English' required/></td>
                 <td><input class="box" type='text' name='math2' placeholder='Math' required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Physics</th>   <th>Chemestry</th> 
             </tr>
                 <tr>
                 
                 <td><input class="box" type='text' name='physics2' placeholder='Physics' required/></td>
                 <td><input class="box" type='text' name='chemestry2' placeholder='Chemestry' required/></td>
                 
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
<?php
if(isset($_POST['submit1']))
{ 
    include('../dbcon.php');
    $username=$_POST['name'];
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $father=$_POST['father'];
    $mother=$_POST['mother'];
    $mobile=$_POST['mobile'];
    $village=$_POST['village'];
    
    $imagename=$_FILES['img']['name'];
    $tempname=$_FILES['img']['tmp_name'];
    move_uploaded_file($tempname,"../dataimg/$imagename");
    
    $sql="INSERT INTO `Student_data`(`u_name`, `u_class`, `u_rollno`, `u_father`, `u_mother`, `u_mobile`, `u_village`, `u_image`) VALUES ('$username','$class','$rollno','$father','$mother','$mobile','$village','$imagename')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('1step Complete and this is second  Step');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('Failed');
        </script>
        <?php 
    }
}

?>