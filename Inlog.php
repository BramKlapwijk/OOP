
    <?php
     if ($_POST){
         if (isset($_POST['login'])){
             if ($_POST['user']=="admin" && $_POST['pass']=="test123"){
          	     session_start();
                 $_SESSION['user'] = $_POST['user'];
             }
         }
         elseif (isset($_SESSION['logout'])){
	         unset($_SESSION["user"]);
         }
     }
     if (isset($_SESSION['user'])){
        $form = 'u bent ingelogd, welkom <b>'.$_SESSION['user'].'</b>.<br/><br/> <form action="" method="post">
            <input type="submit" value="logout" name="logout"/>
            </form>';
     }
     else{
         $form = '<form method="post">
             Gebruikersnaam: <input type="text" name="user">
             <br>
             Wachtwoord:     <input type="password" name="pass">
             <br>
             <input type="submit" name="login">   	
         </form>';
     }

     ?>
