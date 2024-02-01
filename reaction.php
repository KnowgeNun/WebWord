<?php
    session_start();
    require_once 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && isset($_POST['meaning_id'])) {
        // Your code for handling the POST request
        $meaning_id = $_POST['meaning_id'];
        $action = $_POST['action']; 
        $user_id = $_SESSION['user_id']; 

        $check_query = "SELECT * FROM reaction WHERE user_id = $user_id AND meaning_id = $meaning_id";
        $check_result = $db->query($check_query);
        
      
        $row = $check_result->fetch_assoc();
        if ($action === 'like') {
            if ($check_result->num_rows > 0) {

                $likeValue = $row['like'];

                if($likeValue === '1'){
                    $delete_query = "DELETE FROM reaction WHERE user_id = $user_id AND meaning_id = $meaning_id";
                    $db->query($delete_query);
                    echo json_encode(['status' => 'unliked']);
                }else{
                    $delete_query = "UPDATE reaction SET `like` = 1 WHERE user_id = $user_id AND meaning_id = $meaning_id";
                    $db->query($delete_query);
                    echo json_encode(['status' => 'dislike -> liked']);
                }
            } else {
                $insert_query = "INSERT INTO reaction (user_id, meaning_id, `like`) VALUES ($user_id, $meaning_id, 1)";
                $db->query($insert_query);
                echo json_encode(['status' => 'liked']);
            }

        } elseif ($action === 'dislike') {
            if ($check_result->num_rows > 0) {

                $likeValue = $row['like'];

                if($likeValue === '0'){
                    $delete_query = "DELETE FROM reaction WHERE user_id = $user_id AND meaning_id = $meaning_id";
                    $db->query($delete_query);
                    echo json_encode(['status' => 'unDisliked']);
                }else{
                    $delete_query = "UPDATE reaction SET `like` = 0 WHERE user_id = $user_id AND meaning_id = $meaning_id";
                    $db->query($delete_query);
                    echo json_encode(['status' => 'liked -> disliked']);
                }
            } else {
                $insert_query = "INSERT INTO reaction (user_id, meaning_id, `like`) VALUES ($user_id, $meaning_id, 0)";
                $db->query($insert_query);
                echo json_encode(['status' => 'disliked']);
            }
        }
        
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid request']);
    }
?>
