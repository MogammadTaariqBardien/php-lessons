<?php
require_once 'connect.php';

    if (isset($_POST{'add'}))
    {
        $listText = $_POST['add'];
        $sql = "INSERT INTO list_items (ListText) VALUES ('$listText')";

        //excute query and valiedate success
        if ($db_server->query($sql))
        {
        
        } else {
            echo "Error: " . $sql . "<br>" . $db_server->error;
        }
    }


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>posts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <main class="container">
        <br>
            <form action="post.php" method="post">
                <input type="text" name="add" id="addID">
                <button type="submit">Add</button> 
            </form>
    </main>
</body>

<?php
    require_once 'connect.php';
        //build resource
        $todo_res = $db_server->query("SELECT * FROM list_items ORDER BY ListItemID DESC");
        //loops though fields
        while ($row = $todo_res->fetch_assoc())
        {
            echo "<br>" . $row["ListText"]. "<br>";
        }

?>
</html>