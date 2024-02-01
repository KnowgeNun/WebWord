<?php 
require_once 'vendor/autoload.php';
require_once 'db.php';

session_start();

$client = new Google_Client(['client_id' => "962767317975-mgjs7c6esrs437j5g6p7bigi1age0b15.apps.googleusercontent.com"]);  // Specify the CLIENT_ID of the app that accesses the backend
$client->setAuthConfigFile('client_secrets.json');
$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/Project-a/callback.php');
$client->addScope("profile");
$client->addScope("email");


// print(1);
// // if (isset($_GET['code'])) {
// } else {
//   // Invalid ID token
// }


// }
if (! isset($_GET['code'])) {
  $auth_url = $client->createAuthUrl();
  header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
} else {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();

$id_token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
// print(2);
// print_r( $_SESSION['access_token'] ['id_token']);
$payload = $client->verifyIdToken($_SESSION['access_token'] ['id_token']);
if ($payload) {
$userid = $payload['sub'];
// If request specified a G Suite domain:
//$domain = $payload['hd'];
// print_r($payload);

$_SESSION['email'] = $payload['email'];
$_SESSION['name'] = $payload['name'];
$_SESSION['picture'] = $payload['picture'];
$_SESSION['given_name'] = $payload['given_name'];
$_SESSION['family_name'] = $payload['family_name'];

$redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/Project-a/index.php';
        // Check whether the user data already exist in the database 
        $query = "SELECT * FROM user WHERE email = '".$payload['email']."'";
        $result = $db->query($query); 

        if($result->num_rows > 0){  
            // Update user data if already exists 
            
            $query = "UPDATE user SET firstname = '".$payload['given_name']."', lastname = '".$payload['family_name']."', pic= '".$payload['picture']."' WHERE email = '".$payload['email']."'"; 
            $update = $db->query($query); 
           

            $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row) {
                $_SESSION['user_id'] = $row["id"] ;   
              if ($row["admin"] == 1){
            
            $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/Project-a/indexlogin1.php';
            // header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
          }
            }

            // $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/Project-a/index.php';
            // header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));

        }else{ 
         // Insert user data 
            $query = "INSERT INTO user VALUES (NULL, '".$payload['given_name']."', '".$payload['family_name']."', '".$payload['email']."', 0, '".$payload['picture']."')"; 
            $insert = $db->query($query); 
            $_SESSION['user_id'] = $db -> insert_id; 
            
        } 

        
//  (
// $payload ['name']
// );


// $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/Project-a/index.php';
header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));

}


}
// Get $id_token via HTTPS POST.






?>
