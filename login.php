<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');	
}
?>
<html>
<head>
    <title>Login  here</title>

    <link rel="stylesheet" href="csss/login.css" type="text/css">
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
            </ul>
        </div>
      </nav>
      <div class="login-content-header">
          <form action="login.php" method="post">
           <h1 class="login_heading">Admin Login</h1>
           <table class="form1">
            <tr>
            <th>User Name </th>
            <td class="table"><input type="text" name="username" placeholder="Enter Username" class="field1"/></td>  
            </tr> 
            <tr >
            <th>Pass Word </th>
            <td class="table"><input type="password" name="password" placeholder="Enter Password" class="field1"/></td>
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
<?php
if(isset($_POST['submit']))
{
    include('dbcon.php');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $run=mysqli_query($con,$qry);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
        ?>
        <script>
        alert('Username or Password Not Match');
        window.open('login.php','_self');
        </script>
       <?php
    }
    else
    {
        $data=mysqli_fetch_assoc($run);
        $id=$data['id'];
        $_SESSION['uid']=$id;
        header('location:admin/admindash.php');
    }
}
?>