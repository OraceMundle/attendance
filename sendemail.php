<?php

       require 'vendor\autoload.php';
    

    class SendEmail{

        public static function SendMail($to, $subject, $content){

                    //variable key stores API
                    $key = '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';

                    //email object calling a new object of SendGrid
                    $email = new \SendGrid\Mail\Mail();
                    $email->setFrom("mundlepoo@hotmail.com","Orace Mundle" );
                    $email->setSubject($subject);
                    $email->addTo($to);
                    $email->addContent("text/plain", $content);
                    // $email->addContent("text/html", $content);

                    //instantiating sendgrid object
                    $sendgrid = new \SendGrid($key);

                    try {
                        //call function send stored in respomse
                        $response = $sendgrid->send($email);
                        return $response;



                    } catch (Exception $e) {
                        //throw $th;
                        echo 'Email Exception Caught : ', $e->getMessage() . "\n";
                        return false;

                    }



        }

    }


?>