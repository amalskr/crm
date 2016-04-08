<html lang = "en">   
   <head>
      <title>CRM Login</title>
        <link rel="stylesheet" href="css/style.css">
   </head>
	
   <body>
      
       
<?php

if(isset($_POST['username']) || isset($_POST['password']))
{
    
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crm";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    $userName = $_POST['username'];
    $passWord = $_POST['password'];
        
    $sql = "SELECT * FROM login WHERE username='$userName' and  password='$passWord'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
    
    $userAction = $row["action"];
    $_SESSION['ACTION'] = $userAction;
    
    if($userAction == "ADMINISTRATOR")
    {
        header("Location: dashboard.php");
    }
    else if($userAction == "Course Leader" || $userAction == "Course Moderator")
    {
        header("Location: dashboard_cl.php");
    }
    else if($userAction == "Pro Vice Chancellor" || $userAction == "Director of Learning and Quality")
    {
        header("Location: dashboard_pvc.php");
    }
    else
    {
       ?>
       
       <div class="login-page">
           <div class="form">
               <center> <h2> Invalid Login </h2></center>   
           </div>
       </div>
       
        <?php 
        header('Refresh: 1; URL = index.php');
    }
    
    
    
} else {
    ?>
       <div class="login-page">
           <div class="form">
               <center> <h2> Invalid Login </h2></center>   
           </div>
       </div>
       
    <?php
    
    header('Refresh: 1; URL = index.php');
}

$conn->close();
    
}
else
{
    header("Location: index.php");
}

?>
    </body>
</html>