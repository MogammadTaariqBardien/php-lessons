<?php
// Looping

// Path
require_once 'connect.php'

// build resource
$todo_res = $db_server->query("SELECT * FROM list_items ORDER BY  ListItemID DESC");

// loop through fields
while ($row = $todo_res->fetch_assoc()) {
    echo "<br>" . $row["ListText"]. "<br>";
};


?>