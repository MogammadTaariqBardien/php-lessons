<?php

include_once("connect.php");

$sql = "SELECT * FROM film";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    $display = mysqli_fetch_assoc($result);
    echo "<br> Title: " .$display["title"] ."<br> Director: " .$display["director"] ."<br> Year: " .$display["year"];
} else {
    echo "0 results";
}

mysqli_close($conn);
?>