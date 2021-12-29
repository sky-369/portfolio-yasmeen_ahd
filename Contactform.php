<?php

if  (isset($_Post['submit'])) {

    $name = $_Post['name'];
    $Subject = $_Post['Subject'];
    $mailfrom = $_Post['mail'];
    $message = $_Post['message'];

    $mailTo = "arch.369.sky@gmail.com";

    $headers = "From : ".$mailfrom;
    $txt = "You have recivd an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $Subject, $txt, $headers );
    header("Location: index.php?mailsend");

}
?>
