<?php
//Login details - hashed
$AdminUsername = '$2y$10$5i6eW7dve2GE10bnLbSDmuYZsGgaHOMCNM.p6uSUVTthBC4VV5ckC';
$AdminPassword = '$2y$10$o3EYuTPyaHJ5cXrHUZH6n.4BG6byQWqBDrXxtCQTjGITx2iUb4n7W';
//BITadmin
//K3tT!eMi77ORpH0n3

session_start();
if (isset($_SESSION["User"])) {
    header("Location: Admin/A-Home.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (!empty($username) and !empty($password)) {
        if (password_verify($username, $AdminUsername) and password_verify($password, $AdminPassword)) {
            $_SESSION["User"] = $username;
            header("Location: Admin/A-Home.php");
            exit;
        } else {
            ?><p class="error">Details are incorrect</p><?php
        }
    } else {
        ?><p class="error">Please fill in all information</p><?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <meta name="bmi-version" content="1.4.3" /><link rel="icon" href="https://thinkbitsecurity.co.uk/wp-content/uploads/2023/01/cropped-BIT-secrity-favicon-512-×-512-px-1-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://thinkbitsecurity.co.uk/wp-content/uploads/2023/01/cropped-BIT-secrity-favicon-512-×-512-px-1-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://thinkbitsecurity.co.uk/wp-content/uploads/2023/01/cropped-BIT-secrity-favicon-512-×-512-px-1-180x180.png" />
    <meta name="msapplication-TileImage" content="https://thinkbitsecurity.co.uk/wp-content/uploads/2023/01/cropped-BIT-secrity-favicon-512-×-512-px-1-270x270.png" />

    <title>ADMIN</title>

    <!--Styling-->
    <link rel="stylesheet" href="Admin/Admin.css">

</head>
<body class="login">
    <div class="backgroundBlur">
        <a href="http://localhost/BIT-Group/BIT%20Security" class="logoLogin"><img src="http://localhost/BIT-Group/BIT%20Security/Media/logos/BIT-Security-virtical.png" alt="BIT Security"></a>
        <div class="loginForm">
            <h1>Login as Admin</h1>
            <form method="post">
                <input type="text" name="username" placeholder="Username...">
                <input type="password" name="password" placeholder="Password..">
                <button type="submit" name="submit">Login</button>
            </form>
            <a href="http://localhost/BIT-Group/BIT%20Security" class="notHere">Not meant to be on this page? Click here to return</a>
        </div>
    </div>
</body>
</html>
