<?php
    // Including front-api
    include_once("front-api/function.php");

    // Creating an Object
    $user = new userContactUs();

    if(isset($_POST['submit'])) {
        // prx($_POST);
        $message = $user->userInfo($_POST);
        /*if(isset($message) && $message == "YES") {

            //Collecting Data for Email
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $comment = $_POST['comment'];

            // Making Table Format Data
            $html = 
            "<table>
                <tr>
                    <td>Name: </td><td>$name</td>
                </tr>
                <tr>
                    <td>Email: </td><td>$email</td>
                </tr>
                <tr>
                    <td>Mobile: </td><td>$mobile</td>
                </tr>
                <tr>
                    <td>Message: </td><td>$comment</td>
                </tr>
            </table>";
            // prx($html);
            // Sending Email to Admin.
            include_once("smtp/PHPMailerAutoload.php");
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->post = 587; // 465;
            $mail->SMTPSecure = "tls";
            $mail->SMTPAuth = true;
            $mail->Username = "pilifedeveloping@gmail.com";
            $mail->Password = "jafhdhrgawgsegfw"; // App Pasword: jafhdhrgawgsegfw
            $mail->SetFrom("pilifedeveloping@gmail.com");
            $mail->addAddress($email);
            $mail->IsHTML(true);
            $mail->Subject = "Jammer's IT";
            $mail->Body = $html;
            $mail->SMTPOptions = array('ssl'=>array(
                'verify_peer'=>false,
                'verify_peer_name'=>false,
                'allow_self_signed'=>false
            ));
            $mail->send();
            if($mail->send()) {
                echo "mail sent";
            }else {
                echo "Not Sent";
            }
        }*/

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
                            <input type="submit" name = "submit" value="Submit" onclick = "sendEmail()">
                        </div>

                        <!-- Message -->
                        <div class="input-field">
                            <?php
                                if(isset($message) && $message == "YES") {
                                    echo "<p style = 'color: red;'>Message Sent Successfullt!!";
                                }
                            ?>
                        </div>
                        <div class="input-field">
                            <h5 id = "email-message"></h5>
                        </div>
                    </div>
                </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="javascript/script.js"></script>
</body>
</html>