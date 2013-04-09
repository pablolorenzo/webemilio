<?php
include 'connectDB.php';
include 'LoginFunctions.php';
sec_session_start(); // Our custom secure way of starting a php session. 
 
if(isset($_GET['email'], $_GET['p'])) { 
   $email = $_GET['email'];
   $password = $_GET['p']; // The hashed password.
   $comprove= hash('sha512', $password."f9aab579fc1b41ed0c44fe4ecdbfcdb4cb99b9023abb241a6db833288f4eea3c02f76e0d35204a8695077dcf81932aa59006423976224be0390395bae152d4ef");
   if(login($email, $password, $mysqli) == true) {
      echo "HOLAAA";
      echo 'Success: You have been logged in!';
   } else {
      // Login failed
      echo "FALOOOO";
      header('Location: ./login.php?error=1');
   }
} else { 
   // The correct GET variables were not sent to this page.
   echo 'Invalid Request';
   echo "INVALIDOOOO";
}
?>
















































