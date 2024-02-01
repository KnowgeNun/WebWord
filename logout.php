<?php 
session_start();

unset($_SESSION['access_token']);
unset($_SESSION['email']) ;
unset($_SESSION['name'] );
unset($_SESSION['picture'] );
unset($_SESSION['given_name'] );
unset($_SESSION['family_name'] );



$redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/Project-a/index.php';
header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));



















?>