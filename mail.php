<?php

$name = '';
$email = '';
$phone = '';
$message = '';
$errname = $_POST['name'];
$erremail = $_POST['email'];
$errphone = $_POST['phone'];
$errmessage = $_POST['message'];

function repopulate ( $field ) {
  if ( isset( $_POST[$field] ) ) {
      echo ' value="' . htmlspecialchars( $_POST[$field] ) . '"';
    }
}

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
        $from = 'From: SpectrumPainting.biz'; 
        $to = 'lukemarohn@gmail.com'; 
        $subject = 'New Website Form Submission';            

        $body = "From: $name\nE-Mail: $email\nPhone: $phone\nMessage:\n$message";
        mail('spectrumpaintingff@yahoo.com','Spectrum Painting Contact Form', $body ,'From: ' . $email);
        header('Location: services.php?FormSubmit=True');
        exit();
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        header('Location: services.php?FormFail=True');
    }
}

?>