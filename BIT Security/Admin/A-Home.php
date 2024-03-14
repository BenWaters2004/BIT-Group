<?php
session_start();
if (!isset($_SESSION["User"])) {
    header("Location: ../Admin.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN Home</title>
</head>
<body>
    <a href="logout.php">LOG OUT</a>
</body>
</html>