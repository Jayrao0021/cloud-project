<?php
$db = new SQLite3('events.db');

$db->exec("CREATE TABLE IF NOT EXISTS registrations (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT,
    email TEXT,
    phone TEXT,
    event TEXT,
    department TEXT,
    year TEXT,
    gender TEXT,
    comments TEXT
)");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$event = $_POST['event'];
$department = $_POST['department'];
$year = $_POST['year'];
$gender = $_POST['gender'];
$comments = $_POST['comments'];

$stmt = $db->prepare("INSERT INTO registrations 
(name, email, phone, event, department, year, gender, comments) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bindValue(1, $name);
$stmt->bindValue(2, $email);
$stmt->bindValue(3, $phone);
$stmt->bindValue(4, $event);
$stmt->bindValue(5, $department);
$stmt->bindValue(6, $year);
$stmt->bindValue(7, $gender);
$stmt->bindValue(8, $comments);

$stmt->execute();

echo "<h2>✅ Registration Successful!</h2>";
?>

