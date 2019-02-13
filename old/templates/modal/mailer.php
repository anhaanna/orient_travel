<?php
    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        //countries
        $countries = '';

        foreach (array("Armenia", "Georgia", "Iran", "Kyrgyzstan", "Mongolia", "Tajikistan", "Turkmenistan", "Kazakhstan", "Uzbekistan") as $country) { 
            $countries .=  isset($_POST[ $country ]) ? (string)$country.',  ' : '' ; 
        }

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "anna.hakobyan@aratours.travel";

        // Set the email subject.
        $subject = "New request from Orient.travel";

        // Build the email content.

        $email_content = '<div align="center" style="width:500px; max-width:500px; border: 0;margin-left: auto; margin-right: auto;">
        <img style="width: 120px;" src="http://orient.travel/assets/images/ornament.png">
        <h1 align="center" style="text-align: center; color: #535045; font-weight: 100;">NEW BOOKING</h1><br/>
        <p align="center" style="color: #535045; font-size: 18px; padding-bottom:15px; border-bottom: 1px solid;"><b>Name: </b>'. $name .'</p> <br/>
        <p align="center" style="color: #535045; font-size: 18px; padding-bottom:15px; border-bottom: 1px solid; text-decoration:none;"><b>Email: </b>'. $email .'</p> <br/>
        <p align="center" style="color: #535045; font-size: 18px; padding-bottom:15px; border-bottom: 1px solid;"><b>Countries: </b>'. $countries .'</p> <br/>
        <p align="center" style="color: #535045; font-size: 18px; padding-bottom:15px; border-bottom: 1px solid;"><b>Message: </b> '. $message .'</p> </div>';


        // Client_content
        $client_content = '<div align="center" style="width:500px; max-width:500px; border: 0;margin-left: auto; margin-right: auto;">
        <img src="http://orient.travel/assets/images/orient.png" alt="Orient Travel">
        <h1 align="center" style="text-align: center; color: #535045; font-weight: 100;">Dear '. $name .' </h1><br/>
        <p align="center" style="color: #535045; font-size: 18px; padding-bottom:15px; border-bottom: 1px solid; line-height:2;">Thank you for your e-mail. <br/>
        We strive to contact you back within 24 Hours.<br/><br/>
        Best Regards, <br/>Orient Travel</p> </div>';


        // Build the email headers.

        $headers  = "From: $name <$email> \r\n";
        $headers .= "Reply-To: $name <$email> \r\n";
        $headers .= 'Cc: hakobyananna0105@gmail.com' . "\r\n";
        $headers .= "MIME-Version: 1.0  \r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $headers)) {
            //send message to client
            mail($email, $subject, $client_content, $headers);
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
