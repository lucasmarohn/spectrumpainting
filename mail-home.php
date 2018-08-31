<?php

$name = '';
$email = '';
$phone = '';
$message = '';
$errname = $_POST['name'];
$erremail = $_POST['email'];
$errphone = $_POST['phone'];
$errmessage = $_POST['message'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $privatekey = "6LcrAh4UAAAAAEVFletoRkq-Tno3fXhUYiPxmiH7";

    $response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
    $data = json_decode($response);

    if(isset($data->success) AND $data->success==true){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];  

        $body = "From: $name\nE-Mail: $email\nPhone: $phone\nMessage:\n$message";
        mail('spectrumpaintingff@yahoo.com,noreply@lucasmarohn.com','Spectrum Painting Inquiry (Home)', $body ,'From: ' . $email);
        header('Location: https://spectrumpainting.biz?FormSubmit=True#homeQuote');
        exit();
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        header('Location: https://spectrumpainting.biz?FormFail=True#homeQuote');
    }
}

?>