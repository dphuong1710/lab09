<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Available Cars</title>
</head>
<body>
    <h1>Used cars for sale</h1>
    <table>
        <tr>
            <th>Make</th>
            <th>Model</th>
            <th>Price</th>
            <th>Year of Manufacture</th>
        </tr>
        <?php
        require_once "settings.php";
        $dbconn = @mysqli_connect($host,$user,$pwd,$sql_db);
        if ($dbconn){
            $query = "SELECT * FROM cars";
            $result = mysqli_query($dbconn,$query);
            if ($result) {
                echo "<tr>";
                    echo "<td>" . $row["make"] . "</td>";
                    echo "<td>" . $row["model"] . "</td>";
                    echo "<td>" . $row["price"] . "</td>";
                    echo "<td>" . $row["yom"] . "</td>";
                    echo "</tr>";
            }
        } else {
            echo "<tr>There are no cars to display.</td>";            
        }
        mysqli_close($dbconn);
        ?>
</table>
</body>
</html>