<?php
   session_start();

   unset($_SESSION["userid"]);
   unset($_SESSION["password"]);
   unset($_SESSION["sid"]);

   session_destroy();

   echo '<h2>You have cleaned session</h2>';
   header('Refresh: 2; URL = loginform.html');
?>