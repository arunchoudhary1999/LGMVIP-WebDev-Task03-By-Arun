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
    <title>Add Marks</title>
<link rel="stylesheet" href="../csss/addmark.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li class="logout"><a href="admindash.php">Dashboard</a></li>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contactus.php">Contact</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          <h2>Step 1/2 : Enter the Details of Student</h2>
        <form method="post" enctype="multipart/form-data" action="secondstep.php">
            <table class="table1">
             <tr>
                <th>Name </th>   <th> Class</th> <th>Roll No</th>
             </tr>
             <tr>
                 <td><input type='text' name='name' placeholder='Enter Full Name' required class="box"/></td>
                 <td><input type='text' name='class' placeholder='Class' required class="box"/></td>
                 <td><input type='text' name='rollno' placeholder='Roll no' required class="box"/></td>
                
             </tr>
             </table>
             <table class="table2">
             <tr>
                <th>Father Name </th>   <th> Mother Name</th> <th>Mobile No</th>
             </tr>
                 <tr>
                 <td><input type='text' name='father' placeholder="Father's Name" required class="box"/></td>
                 <td><input type='text' name='mother' placeholder="Mother's Name" required class="box"/></td>
                 <td><input type='text' name='mobile' placeholder='Mobile No' required class="box"/></td>
             </tr>
         </table>
         <table class="table2">
             <tr>
             <th>Your City</th>  <th>Choose Image -</th>  
             </tr>
                 <tr>
                 <td><input type='text' name='father' placeholder="Enter City" required class="box"/></td>
               <td><input type="file" name="img" required/></td>
                
                </tr>
         </table>
           
         <table class="table4">
            <tr>
           <td align="center" colspan="2"><input type="submit" name="submit1" value="Next" class="next_Step"/></td>  
           </tr>
        </table>
       </form>
      </div>
    </header>
    
</body>
</html> 