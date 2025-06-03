<?php
header('Content-Type: application/json');
require 'connect.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

function sendResponse($success, $data = null, $error = null) {
    echo json_encode(['success' => $success, 'data' => $data, 'error' => $error]);
    exit;
}

if ($action === 'search') {
    $query = isset($_GET['query']) ? $_GET['query'] : '';
    $gender = isset($_GET['gender']) ? $_GET['gender'] : '';
    $sql = "SELECT * FROM patients WHERE 1=1";
    $params = [];
    if ($query) {
        $sql .= " AND (name LIKE ? OR id LIKE ? OR contact LIKE ?)";
        $params[] = "%$query%";
        $params[] = "%$query%";
        $params[] = "%$query%";
    }
    if ($gender) {
        $sql .= " AND gender = ?";
        $params[] = $gender;
    }
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    sendResponse(true, $stmt->fetchAll(PDO::FETCH_ASSOC));
}

if ($action === 'get') {
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    if (!$id) sendResponse(false, null, 'ID is required');
    $stmt = $pdo->prepare("SELECT * FROM patients WHERE id = ?");
    $stmt->execute([$id]);
    $patient = $stmt->fetch(PDO::FETCH_ASSOC);
    sendResponse(true, $patient);
}

if ($action === 'create' || $action === 'update') {
    $data = json_decode(file_get_contents('php://input'), true);
    $fields = [
        'name', 'dob', 'gender', 'contact', 'email', 'address', 'nationalId',
        'emergencyContactName', 'emergencyContactPhone', 'emergencyContactRelation', 'emergencyContactAddress',
        'allergies', 'chronicConditions', 'pastSurgeries', 'familyHistory', 'currentMedications',
        'insuranceProvider', 'policyNumber', 'insuranceType', 'insuranceExpiry',
        'bloodType', 'organDonor', 'notes'
    ];
    $params = [];
    $updates = [];
    foreach ($fields as $field) {
        $params[$field] = isset($data[$field]) ? $data[$field] : null;
        if ($action === 'update') {
            $updates[] = "$field = ?";
        }
    }
    if ($action === 'create') {
        $columns = implode(', ', $fields);
        $placeholders = implode(', ', array_fill(0, count($fields), '?'));
        $sql = "INSERT INTO patients ($columns) VALUES ($placeholders)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array_values($params));
    } else {
        $id = $data['id'];
        $sql = "UPDATE patients SET " . implode(', ', $updates) . " WHERE id = ?";
        $params['id'] = $id;
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array_values($params));
    }
    sendResponse(true);
}

if ($action === 'delete') {
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    if (!$id) sendResponse(false, null, 'ID is required');
    $stmt = $pdo->prepare("DELETE FROM patients WHERE id = ?");
    $stmt->execute([$id]);
    sendResponse(true);
}

if ($action === 'save_followup') {
    $data = json_decode(file_get_contents('php://input'), true);
    $stmt = $pdo->prepare("INSERT INTO follow_ups (patient_id, date, subjective, objective, assessment, plan) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $data['patient_id'],
        $data['followup-date'],
        $data['subjective'],
        $data['objective'],
        $data['assessment'],
        $data['plan']
    ]);
    sendResponse(true);
}

if ($action === 'get_followup') {
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    if (!$id) sendResponse(false, null, 'ID is required');
    $stmt = $pdo->prepare("SELECT * FROM follow_ups WHERE id = ?");
    $stmt->execute([$id]);
    $followUp = $stmt->fetch(PDO::FETCH_ASSOC);
    sendResponse(true, $followUp);
}

sendResponse(false, null, 'Invalid action');
?>