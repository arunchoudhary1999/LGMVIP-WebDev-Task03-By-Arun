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
    <title>Admin Dashboard</title>
<link rel="stylesheet" href="../csss/admindash.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
          
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li class="logout"><a href="logout.php">Logout</a></li>
                
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <h1>Admin Dashboard</h1>
       <h3><i class="fas fa-folder-plus"></i><a class="ancher" href="addmark.php"> Add Marks of Student </a></h3>
       <h3><i class="fas fa-pen-square"></i><a class="ancher" href="updatemark.php"> Update Student Marks </a></h3>
       <h3><i class="fas fa-trash"></i><a class="ancher" href="deleteform.php"> Delete the Marks of Student </a></h3>
       <h3><i class="fas fa-database"></i><a class="ancher" href="allstudentdata.php"> Data of all Students </a></h3>
       <h3><i class="fas fa-envelope"></i><a class="ancher" href="usermassage.php"> Messages by Student</a></h3>
      </div>
    </header>
    
</body>
</html>