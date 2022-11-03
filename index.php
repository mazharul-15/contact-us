<?php
    // Including front-api
    include_once("front-api/function.php");

    // Creating an Object
    $user = new userContactUs();

    if(isset($_POST['submit'])) {
        // prx($_POST);
        $message = $user->userInfo($_POST);
        if(isset($message) && $message == "YES") {

            // Sending Email to Admin.
            ?>
            <script>
                alert("Successfully Sent Your Info");
            </script>
            <?php
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact Us</title>
</head>
<body>
    <div class="main">
        <div class="col-3">
            <div class="container">
                <i class="fa-solid fa-envelope icons-evlop"></i>
                <h2>Contact Us</h2>
                <h4>We would love to hear frome you !</h4>
            </div>            
        </div>
        <div class="col-7">
            <div class="container">
                <form action="" method = "POST">

                        <!-- Name Field -->
                        <div class="input-field">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class = "input-all" id="name" placeholder="enter your name" required>
                        </div>
        
                        <!-- Email Field -->
                        <div class="input-field">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class = "input-all" id="email" placeholder = "enter your email" required>
                        </div>
        
                        <!-- Mobile Field -->
                        <div class="input-field">
                            <label for="mobile">Mobile:</label>
                            <input type="text" name="mobile" class = "input-all" id="mobile" placeholde = "enter your mobile" required>
                        </div>
        
                        <!-- Comment Field -->
                        <div class="input-field">
                            <label for="comment">Comment:</label>
                            <textarea name="comment" class = "input-all" id="comment" cols="30" rows="10" placeholder = "write your comment"  required></textarea>
                        </div>
        
                        <!-- Submit Field -->
                        <div class="input-field">
                            <input type="submit" name = "submit" value="Submit">
                        </div>
                    </div>
                </form>
        </div>
    </div>

    <script src="javascript/script.js"></script>
</body>
</html>