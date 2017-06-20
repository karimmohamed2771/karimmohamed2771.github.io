<?php 
if(isset($_POST['submit'])){
    $to = "karimmohamed2771@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "New Mail Added To Mail List";
    $subject2 = "New Mail Added To Mail List";
    $message = $first_name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = $first_name . " " . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header ('location: https://jvz9.com/c/792589/236336');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>