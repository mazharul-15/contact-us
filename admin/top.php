<?php
    // including backend
    include_once("backend/function.php");

    // CREATING AN OBJECT
    $admin = new adminContactUs();

    // checking admin login or not
    session_start();
    if(!isset($_SESSION['ADMIN_ID'])) {
        ?>
        <script>
            console.log("HELLO!!!");
        </script>
        <?php
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact Us Admin</title>
</head>
<body>
    <!-- Header Area Start -->
    <header class="header">
        <!-- Logo Area -->
        <div class="logo-area">
            <h1>
                <a href="admin-panel.php">Contact Us Admin</a>
            </h1>
        </div>

        <!-- Account Area -->
        <div class="account-area">
            <ul class = "admin-name">
                <li>
                    <a href="#" class = "admin-name-a">
                        <?php
                            if(isset($_SESSION['ADMIN_ID'])) {
                                echo $_SESSION['ADMIN_NAME'];
                            }
                        ?>
                    </a>
                    <ul class = "admin-logout">
                        <li ><a href="logout.php">Log Out</a></li>
                        <li>
                            <a href="account-setting.php?admin_id=<?php echo $_SESSION['ADMIN_ID'];?>">
                                Account setting
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

    <section class="content">
        <div class="menu m-2 p-2">

            <!-- admin -->
            <div class="admin m-2 p-2">
                <a href="admin-panel.php">Admin</a>
            </div>

            <!-- users -->
            <div class="users m-2 p-2">
                <a href="users.php">Users</a>
            </div>

            <!-- Contact us -->
            <div class="contact-us m-2 p-2">
                <a href="contact-us.php">Contact Us</a>
            </div>
        </div>

    <!-- Header Area End -->
