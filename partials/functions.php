<?php

function mail_check() {
    if(isset($_POST['email']) && str_contains(($_POST['email']), "@") && str_contains(($_POST['email']), ".")) {
        // $user_email = $_POST['email'];
        echo "la tua mail è corretta";
    } else {
        echo "la tua mail non contiene un '.' e la '@'";
    }

}