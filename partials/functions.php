<?php

function mail_check() {
    if(isset($_POST['email']) && str_contains(($_POST['email']), "@") && str_contains(($_POST['email']), ".")) {
        echo "la tua mail è corretta";
        header("Location: ./thankyou.php");
        $_SESSION["auth"] = $_POST['email'];
    } elseif (!isset($_POST['email'])) {
        echo "";
    } 
    else { echo "la tua mail non contiene un '.' e la '@'"; }

}

function class_change() {
    if (isset($_POST['email']) && str_contains(($_POST['email']), "@") && str_contains(($_POST['email']), ".")) {
        echo "alert alert-success";
    } elseif (!isset($_POST['email'])) {
        echo "";
    }
    else {
        echo "alert alert-danger";
    }
}