<?php
$host = '10.0.1.5'; // Database Server Private IP
$db   = 'StudentDB';
$user = 'studentuser';
$pass = 'MySecurePassword123!';

echo "<h1>Secure DevOps Student Application</h1>";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT * FROM Students");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<p><strong>Student ID:</strong> " . htmlspecialchars($row['StudentID']) . 
             " | <strong>Student Name:</strong> " . htmlspecialchars($row['StudentName']) . 
             " | <strong>Course:</strong> " . htmlspecialchars($row['CourseName']) . 
             " | <strong>Deployment Date:</strong> " . htmlspecialchars($row['DeploymentDate']) . "</p>";
    }
} catch (PDOException $e) {
    echo "<p>Database Connection Failed: " . $e->getMessage() . "</p>";
}
?>