<?php
session_start();

if($_SESSION["ACTION"] == null)
{
    header("Location: index.php");
}

?>

<html lang = "en">   
   <head>
      <title>CRM Dashboard</title>
        <link rel="stylesheet" href="css/style.css">
   </head>
    <body>
       
        <div class="login-page">
           <div class="form">
               <p> Welcome,</p>
               <h2> <?php echo $_SESSION["ACTION"]; ?> </h2>
               <p class="info"> maintain the data of courses, staff and roles </p>
               
               <button> <a href = "logout.php" tite = "Logout">Logout</a> </button>
       
           </div>
       </div>
       
    </body>
</html>
       