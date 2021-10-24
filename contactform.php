<?php

if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $subject = $_POST["subject"];
    $mailFrom = $_POST["mail"];
    $message = $_POST["message"];

    $mailTo = "tonyacodes@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Your have received an e-mail from ".$fname $lname.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("Locations: index.php?mailsend");

}