<?php
$db = new SQLite3('events.db');

$result = $db->query("SELECT * FROM registrations");

echo "<h2>All Registrations</h2>";

while ($row = $result->fetchArray()) {
    echo $row['name'] . " - " . $row['event'] . "<br>";
}
?>
