<?php
// variable setting
$name = $_REQUEST['name'];
$Email = $_REQUEST['Email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

//check input field
if(empty($name)|| empty($Email) || empty($subject) || empty($message))
{
    echo "Please fill all the field";
}
else{
    mail("sanjnagurjar9@gmail.com","codewithharshit message",$message,"From:$name
    <$Email>");
    echo"<script type='text/javascript'>alert('your message sent successfully')
    window.history.log(-1);
    </script>";
}
?>