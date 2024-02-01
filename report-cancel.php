<?php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {

    $rawData = file_get_contents("php://input");
    parse_str($rawData, $resultArray);

    if(isset($resultArray['word_id']) && isset($resultArray['meaning_id'])){

        $wordId = $resultArray['word_id'];
        $meaningId = $resultArray['meaning_id'];

        $deleteReportQuery = "DELETE FROM report WHERE meaning_id IN (SELECT id FROM meaning WHERE word_id = $wordId);";
        $db->query($deleteReportQuery);

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
