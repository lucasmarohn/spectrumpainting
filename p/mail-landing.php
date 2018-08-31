<?php

$name = '';
$email = '';
$phone = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $privatekey = "6LcrAh4UAAAAAEVFletoRkq-Tno3fXhUYiPxmiH7";

    $response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
    $data = json_decode($response);

    if(isset($data->success) AND $data->success==true){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $source= $_POST['source'];
         
        $body = "From: $name\nE-mail: $email\nPhone: $phone\nPromotion:\n$source";
        mail('spectrumpaintingff@yahoo.com,bcc:noreply@lucasmarohn.com','Spectrum Painting Consultation Inquiry', $body ,'From: ' . $email);

        header('Location: ?FormSubmit=True');
        exit();
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        header('Location: ?FormFail=True');
    }
}

?>