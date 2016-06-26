<div id="content" class="grid_9">
    <div id="contentArticle">
        <div id="headerLeft">Contact</div>
            <?php
                /* Set e-mail recipient */
                $myemail = "pondguys@metrowestwatergardens.com";

                $shouldEmail = TRUE;
                
                /* Check all form inputs using check_input function */
                $name = $_POST['name'];
                $name = trim($name);
                $name = stripslashes($name);
                $name = htmlspecialchars($name);
                if (strlen($name) == 0)
                {
                    $shouldEmail = FALSE;
                    echo "Please enter your name";
                }
                
                $email = $_POST['email'];
                $email = trim($email);
                $email = stripslashes($email);
                $email = htmlspecialchars($email);
                if (strlen($email) == 0)
                {
                    $shouldEmail = FALSE;
                    echo "Please enter your email";
                }
                elseif (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
                {
                    $shouldEmail = FALSE;
                    echo "E-mail address is not valid";
                }
                
                $message = $_POST['message'];
                $message = trim($message);
                $message = stripslashes($message);
                $message = htmlspecialchars($message);
                if (strlen($message) == 0)
                {
                    $shouldEmail = FALSE;
                    echo "Please enter a message";
                }
                
                $subject = "Contact Request from MetroWestWaterGardens.com";
                
                if ($shouldEmail)
                {
                    /* Let's prepare the message for the e-mail */
                    $message = "

                    Name: $name
                    E-mail: $email
                    Subject: $subject

                    Message:
                    $message

                    ";

                    /* Send the message using mail() function */
                    mail($myemail, $subject, $message);
                    echo $myemail;
                    echo $subject;
                    echo $message;
                    echo 'Your message has been sent!';
                }
            ?>
        </div>
    </div>
</div>