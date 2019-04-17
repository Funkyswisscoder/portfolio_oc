<?php 

    if(isset($action) AND $action == 'postMail'){
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        echo "Mail Sent. Thank you " . $first_name . ", I will contact you shortly.";
    }


    require('./view/contactform.php');
