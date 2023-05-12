<?php
header('Content-Type: application/json');
include "../flutter_api/db.php";

$id = (int) $_POST['id'];
$stmt = $db->prepare("DELETE FROM jkt48 WHERE id = ?");
$result = $stmt->execute([$id]);

echo json_encode([
'id' => $id,
'success' => $result
]);