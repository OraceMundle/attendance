<?php

    require 'vender\autoload.php';


    class SendEmail{

        public static function SendMail($to, $subject, $content){
                    $key = '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';

                    $email = new \SendGrid\Mail\Mail();
                    $email->setFrom("oracemundle@gmail.com","Orace Mundle" );
                    $email->setSubject($subject);
                    $email->addTo($to);
                    $email->addContent("text/plain", $content);
                    // $email->addContent("text/html", $content);

                    $sendgrid = new \SendGrid($key);

                    try {
                        //code...
                        $response = $sendgrid->send($email);
                        return $response;



                    } catch (Exception $e) {
                        //throw $th;
                        echo 'Email Caught : ', $e->getMessage() . "\n";
                        return false;

                    }



        }

    }


?>