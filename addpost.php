<?php
session_start();
require_once 'db.php';

$query = "INSERT INTO word VALUES (NULL, '" . $_POST['word'] . "')";
$insert = $db->query($query);

if ($insert) {
    $word_id = $db->insert_id;
$meaning=addslashes($_POST['meaning'] );
    $query = "INSERT INTO meaning VALUES (NULL, '" . $word_id . "', '" . $_SESSION['user_id'] . "', '" .$meaning . "', now())";
    $insert = $db->query($query);

    if ($insert) {
        // Database insertion successful, redirect to indexlogin1.php
        $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/Project-a/index.php';
        header('Location: ' . $redirect_uri);
        exit; // Make sure to exit after redirection
    } else {
        // Handle insertion failure in the 'meaning' table
        echo "Error inserting into 'meaning' table.";
    }
} else {
    // Handle insertion failure in the 'word' table
    echo "Error inserting into 'word' table.";
}
?>
