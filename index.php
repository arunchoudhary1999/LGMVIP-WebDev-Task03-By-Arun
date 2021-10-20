<html>
<head>
    <title>Student Result Management System</title>
<link rel="stylesheet" href="csss/style.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php">Home</a></li>
                <li><a href="admin/aboutus.php">About</a></li>
                <li><a href="admin/contactus.php">Contact</a></li>
                <li><a href="login.php">Admin Login</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method="post" action="result.php">
          <table class="table">
              <br>
              <h2 class="search">GET YOUR RESULT HERE!</h2>
              <br><br>
            <tr>
                <th class="name1">Roll no</th>
                <td class="name2"><input type="text" name="rollno" placeholder="Enter Your Roll Number" required class="box1"/></td>
            </tr>
            <tr>
                <th class="standered1">Standard</th>
                <td class="standered2"><input type="text" name="std" placeholder="Enter Your Standard" required class="box2"/></td>
            </tr> 
            <tr>
            <td align="center" colspan="2"><input type="submit" name="submit" value="SUBMIT" class="submit"/></td>
            </tr>
          </table>
       </form>
      </div>
    </header>
    
</body>
</html>