<?php
    // Setting a cookie
    setcookie("username", "Vardaan", time()+30*24*60*60);
    // Verifying whether a cookie is set or not
    if(isset($_COOKIE["username"])){
        echo "Hi " . $_COOKIE["username"] . "<br>";
    } else{
        echo "Welcome Guest!<br>";
    
    }
    print_r($_COOKIE);
   echo("<br>This program is written by Tanya Aggarwal 0221BCA084");
?>
