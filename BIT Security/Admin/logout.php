<?php
//removes the session to log the user out
session_start();
session_unset();
session_destroy();
//sends them back to the front page
header("Location: ../Admin.php");
exit();