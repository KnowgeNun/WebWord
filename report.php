<?php
session_start();
require_once 'db.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['meaning_id'])) {
    $meaning_id = $_POST['meaning_id'];
    $info = $_POST['report_detail'];
    $user_id = $_SESSION['user_id'];

    $check_query = "SELECT * FROM report WHERE user_id = $user_id AND meaning_id = $meaning_id";
    $check_result = $db->query($check_query);

    if ($check_result) {
        $row = $check_result->fetch_assoc();

        if ($check_result->num_rows > 0) {
            $current_id = $row['id'];
            $update_query = "UPDATE report SET info = '$info' WHERE id = $current_id";
            $db->query($update_query);

            echo json_encode(['status' => 'update']);
        } else {
            $insert_query = "INSERT INTO report (user_id, meaning_id, info) VALUES ($user_id, $meaning_id, '$info')";
            $db->query($insert_query);
            echo json_encode(['status' => 'insert']);
        }
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Database error']);
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE') {

    $rawData = file_get_contents("php://input");
    parse_str($rawData, $resultArray);

    if(isset($resultArray['word_id']) && isset($resultArray['meaning_id'])){

        $wordId = $resultArray['word_id'];
        $meaningId = $resultArray['meaning_id'];

        $deleteReportQuery = "DELETE FROM report WHERE meaning_id IN (SELECT id FROM meaning WHERE word_id = $wordId);";
        $db->query($deleteReportQuery);

        $deleteReactionQuery = "DELETE FROM reaction WHERE meaning_id = $meaningId";
        $db->query($deleteReactionQuery);

        $deleteMeaningQuery = "DELETE FROM meaning WHERE id = $meaningId";
        $db->query($deleteMeaningQuery);

        $deleteWordQuery = "DELETE FROM word WHERE id = $wordId";
        $db->query($deleteWordQuery);

        echo json_encode(['status' => 'deleted']);
    }else {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid request']);
    }
}else {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid request']);
}
?>
