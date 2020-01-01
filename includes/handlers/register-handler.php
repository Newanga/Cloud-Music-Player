<?php

function sanitizeFormUsername($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}

function sanitizeFormString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}

function sanitizeFormPassword($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
}


if(isset($_POST['singupButton'])) {
    //register button was pressed
    $username = sanitizeFormUsername($_POST['username']);
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastName = sanitizeFormString($_POST['lastName']);
    $email = sanitizeFormString($_POST['email']);
    $email0 = sanitizeFormString($_POST['email0']);
    $password = sanitizeFormString($_POST['password']);
    $password0 = sanitizeFormString($_POST['password0']);

    $wasSuccessful = $account->Register($username, $firstName, $lastName, $email, $email0, $password, $password0);

    if($wasSuccessful == true) {
        header("Location: Index.php");
    }
}

?>