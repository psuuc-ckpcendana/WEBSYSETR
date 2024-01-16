<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hi {
            padding: 2%;
            color: rgb(78, 78, 78);
        }

        table {
            border: 2px solid;
            align-items: center;
            width: 100%;
        }

        table th {
            padding: 1%;
            color: black;
            border: 2px solid;
            background-color: antiquewhite;
        }

        table td {
            padding: 2%;
            color: black;
            border: 2px solid;
        }
    </style>
</head>

<body>
    <?php
    require 'conn.php';
    $showsql = "SELECT * FROM thumbnails WHERE status = 'Approved' LIMIT 1";
    $resultshow = mysqli_query($conn, $showsql);

    if (mysqli_num_rows($resultshow) > 0) {

        echo "<table style='text-align: center;'>";
        echo "<tr><th>Event</th><th>Description</th><th>Campus</th><th>Expiration</th></tr>";

        while ($row = mysqli_fetch_assoc($resultshow)) {

            echo "<tr>";
            echo "<td>" . $row['thumbname'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['campus'] . "</td>";
            echo "<td>" . $row['expiration'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "There are no Approved Events!";
    }
    ?>
</body>

</html>