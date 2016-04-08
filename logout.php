<html lang = "en">   
   <head>
      <title>CRM Login</title>
        <link rel="stylesheet" href="css/style.css">
   </head>
	
   <body>
       
<?php
   session_start();
   unset($_SESSION["ACTION"]);
   
    ?>
       <div class="login-page">
           <div class="form">
               <center> <h2> Logout! </h2></center>   
           </div>
       </div>
    
       <?php
   header('Refresh: 1; URL = index.php');
?>
       
    </body>
</html>