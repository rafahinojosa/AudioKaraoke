<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "es">
   
   <head>
      <title >Inicio de Sesion</title>
      
      
      <style>
         body { /* Page Body */
			background-color: #f2f2f2;
			text-align      : center;
			overflow        : auto;
		}
         
         .cc4 {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         cc5{
            margin-bottom: 10px;
         }
         
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h2{
            text-align: center;
            color: #017572;
         }
      </style>
      
   </head>
	
   <body>
      
      <h2 id="e1" >Enter Username and Password</h2> 
      <div id="e2" class = "cc1">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'rafa13' && 
                  $_POST['password'] == 'password') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  echo 'sesion iniciada correctamente';
				  header('Refresh: 2; URL = ../index.html');
				  header('Location: ');
               }else {
                  $msg = 'Usuario o password incorrecto';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div id="e3" class = "cc2">
      
         <form class = "cc3" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 id="e4" class = "cc4"><?php echo $msg; ?></h4>
            <input id="e5" type = "text" class = "cc5" 
               name = "username" placeholder = "username" 
               required autofocus></br>
            <input id="e6" type = "password" class = "cc6"
               name = "password" placeholder = "password" required><br>
            <button id="e7" class = "cc7" type = "submit" 
               name = "login">Iniciar Sesion</button>
         </form>
			
          <a href = "logout.php" tite = "Logout">Cerrar Sesion
         
      </div> 
      
   </body>
</html>