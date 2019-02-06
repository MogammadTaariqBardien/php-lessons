<?php

include_once'connect.php';

$sql = "INSERT INTO film (title, director, year) VALUES ('Space Jam', 'Unknown', '2000')";

if (mysqli_query($conn, $sql)) {
    echo '<br>Data successfully added. You can now <a href="disp.php">display</a> the added data.';
} else {
    echo "Failed to add the data:" . $sql . "<br>" . mysql_error($conn);
}

?>