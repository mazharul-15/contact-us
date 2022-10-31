<?php
    // including backend
    include_once("backend/function.php");

    // Checking if logged in or not
    session_start();
    if(isset($_SESSION['ADMIN_NAME'])) {
        header("location: admin-panel.php");
    }

    // Login Requests
    if(isset($_POST['login'])) {
        
        //creating object
        $admin = new adminContactUs();
        $message = $admin->adminLogIn($_POST);
        // prx($message);
        if($message == "YES") {
            header("location: admin-panel.php");
            die();
            // prx($message);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin-login.css">
    <title>Contact Us Admin</title>
</head>
<body>
    <div class="main">
        <form action="" method = "POST">

            <!-- Email -->
            <div class="input-field">
                <label for="email">Email:</label>
                <input type="email" name="email" class = "input-all" id="email" placeholder = "enter your email">
            </div>

            <!-- Password -->
            <div class="input-field">
                <label for="password">Password:</label>
                <input type="password" name="password" class = "input-all" id="password" placeholder = "enter your password">
            </div>

            <!-- Submit -->
            <div class="input-field">
                <input type="submit" name = "login" class = "input-all" value="Log In">
            </div>

            <!-- Error Message -->
            <div class="input-field error-message">
                <?php
                    if(isset($message)) {
                        echo "<p>$message</p>";
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>