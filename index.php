<html lang = "en">   
   <head>
      <title>CRM Login</title>
        <link rel="stylesheet" href="css/style.css">
   </head>
	
   <body>
      
  
<div class="login-page">
  <div class="form">
      
      <center> <h2 class="head2"> CRM </h2></center>
    
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
      
      
    <form class="login-form" action="login.php" method="post">
      <input type = "text" class = "form-control" 
               name = "username" placeholder = "Username" 
               required autofocus>
      <input type = "password" class = "form-control"
               name = "password" placeholder = "Password" required>
      <button type = "submit" 
               name = "login">Login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
        <p class="message"><a href="guest.php"><b>I'm a Guest</b></a></p>
    </form>
      
  </div>
</div>
       
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
	   
      
   </body>
</html>
