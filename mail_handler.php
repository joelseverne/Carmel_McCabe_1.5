
<?php
if(isset($_POST['submit'])){
    $to = "carmelteresamccabe@mail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['firstName'];
    $last_name = $_POST['secondName'];
    $date = $_POST['date'];
    $subject = "Interest";
    $message = $name . " " . $last_name . " wrote the following about the following date: " . $date . "\n\n" . $_POST['message'];

    $headers = "From: " . $from;
    // mail($to,$subject,$message,$headers,'-f'.$from);
    // header('Location: contactTest.html');

    if (mail($to,$subject,$message,$headers,'-f'.$from))
    {
      header('Location: contactTest.html');
    }
    else
    {
        echo "Error: Message not accepted";
    }
    // You cannot use header and echo together. It's one or the other.
    // echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
