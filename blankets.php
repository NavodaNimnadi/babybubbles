<?php
    require_once 'connection/connection.php';
?>

<?php

// Fetch items from the database
    $sql = "SELECT * FROM items where itemcategory='babyblanket'";
    $result = $connection->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Bubbles - Baby Items</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .item {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 16px;
            margin: 16px;
            width: 200px;
            text-align: center;
            float: left;
        }
        .item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .item h3 {
            font-size: 18px;
            margin: 10px 0;
        }
        .item p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Baby Bubbles - Baby Items</h1>
    <div>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='item'>";
                echo "<img src='images/" . htmlspecialchars($row['itemimage']) . "' alt='" . "'>";
                echo "<h3>" . htmlspecialchars($row['itemname']) . "</h3>";
                echo "<p>Price: $" . $row['itemprice'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No baby items available right now!</p>";
        }
        ?>
    </div>
</body>
</html>
