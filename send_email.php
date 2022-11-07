<?php
    // Send Email
    //Collecting Data for Email
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];
    // return "Hello!!";
    // Making Table Format Data
    function prx($data) {

        echo "<pre>";
        print_r($data);
        die();

    }
    //prx($_POST);
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
    //$mail->send();
    if($mail->send()) {
        return "mail sent";
    }else {
        return "Not Sent";
    }
?>