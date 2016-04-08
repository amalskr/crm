<?php
session_start();

if($_SESSION["ACTION"] == null)
{
    header("Location: index.php");
}

?>

<html lang = "en">   
   <head>
      <title>CRM CL - Dashboard</title>
        <link rel="stylesheet" href="css/style.css">
   </head>
    <body>
       
        <div class="login-page">
           <div class="form">
               <p> Welcome,</p>
               <h2> <?php echo $_SESSION["ACTION"]; ?> </h2>
               <p class="info"> Course Monitoring Reports </p>
               
               <button> <a href = "logout.php" tite = "Logout">Logout</a> </button>
       
           </div>
       </div>
       
    </body>
</html>
       