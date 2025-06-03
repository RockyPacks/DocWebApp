<?php
// Include the database connection
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Record System</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <?php
        include 'header.php';
        include 'nav.php';
        include 'search.php';
        include 'records.php';
        include 'add_patient.php';
        include 'analytics.php';
        include 'patient_modal.php';
        include 'followup_modal.php';
        ?>
    </div>
    <script src="scripts.js"></script>
</body>
</html>