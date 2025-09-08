<?php

if(!empty($_POST['login']) && !empty($_POST['password'])){
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    echo "Ola $login";
}
