
<?php 
if(isset($_POST['submit'])){
    $to = "hammouda.ahmedmustapha@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
   
    $subject =$_POST['subject'];
   
    $message =$_POST['message'];
    
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>