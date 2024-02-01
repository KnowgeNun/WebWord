<?php
// delete.php

// เช็คว่ามีค่า 'word_id' ที่ถูกส่งมาหรือไม่
if(isset($_POST['word_id']) && !empty($_POST['word_id'])) {
    // รับค่า 'word_id'
    $word_id = $_POST['word_id'];

    // เชื่อมต่อฐานข้อมูล
    require_once 'db.php'; // ต้องแน่ใจว่าไฟล์ 'db.php' ถูกเรียกใช้ในที่นี้

    // ลบข้อมูลจากตาราง 'meaning' โดยใช้ค่า 'word_id'
    $deleteMeaningQuery = "DELETE FROM meaning WHERE word_id = ?";
    $stmt = $db->prepare($deleteMeaningQuery);
    $stmt->bind_param("i", $word_id);
    $stmt->execute();

    // ลบข้อมูลจากตาราง 'word' โดยใช้ค่า 'word_id'
    $deleteWordQuery = "DELETE FROM word WHERE id = ?";
    $stmt = $db->prepare($deleteWordQuery);
    $stmt->bind_param("i", $word_id);
    $stmt->execute();

    // เมื่อลบข้อมูลเสร็จสิ้น ให้เปลี่ยนเส้นทางไปยังหน้าที่คุณต้องการ
    $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/Project-a/index.php';
    header('Location: ' . $redirect_uri);
    exit;
} else {
    // ถ้าไม่มีค่า 'word_id' ที่ถูกส่งมา ให้แสดงข้อความว่า 'Word ID not found or empty.'
    echo "Word ID not found or empty.";
}
?>
