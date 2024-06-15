<?php


        // define variables and set to empty values
          $name = $email = $message = $subject = "";


          $name = test_input($_POST["name"]);
          $email = test_input($_POST["email"]);
          $message = test_input($_POST["message"]);
          $subject = test_input($_POST["subject"]);

            $to = "mpyles2013@gmail.com";
            if (!$subject) {
                $subject = "Contact from portfolio";
            }
            if(!$message){
                $message = "No message was saved";
            }
            $headers = "From: $email" . "\r\n";
            mail($to, $subject, $message, $headers);
            $thankyou = "Thanks for the message! I'll be in contact soon.";

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

        header("Location:thankyou.html");
        exit;
?>