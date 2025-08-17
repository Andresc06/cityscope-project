<?php

namespace App\Controllers;

class Ajax extends BaseController
{
    public function contactProcess()
    {
        // make sure caller is an ajax request
        if ($this->request->isAJAX()) {
        
            // validate your data
            $name = substr(trim(strip_tags($this->request->getPost('name'))), 0, 64);
            $subject = substr(trim(strip_tags($this->request->getPost('subject'))), 0, 64);
            $message = substr(trim(strip_tags($this->request->getPost('message'))), 0, 1000);
            $from = filter_var(trim($this->request->getPost('email')), FILTER_VALIDATE_EMAIL);
    
            // use and/or process your data
            if (!empty($name) && !empty($from) && !empty($subject) && !empty($message)) {

            /* this forms the correct email headers to send an email */
            $headers = "From: $from\r\n";
            $headers .= "Reply-To: $from\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

                // Here we return a simple echo if it was processed or sent successfully or not
                if (mail("andrescontreras370@gmail.com", $subject, $message, $headers)) {
                    echo "okay";
                } else {
                    echo "error";
                }
            } else {
            echo "";
            }
        }
    }

    /*
     * This is a default method.
     */
    public function index()
    {
        echo "";
    }
}