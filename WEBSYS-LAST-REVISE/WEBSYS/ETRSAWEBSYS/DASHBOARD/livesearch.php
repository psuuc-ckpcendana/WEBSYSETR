<?php
require 'conn.php';

if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $sql = "SELECT * FROM thumbnails WHERE status = 'Approved' AND thumbname LIKE '{$input}%'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
?>
        <table style='text-align: center;' class='table table-bordered table-striped mt-4'>
            <thead>
                <tr>
                    <th>Event</th>
                    <th>Description</th>
                    <th>Campus</th>
                    <th>Expiration</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $event = $row['thumbname'];
                    $desc = $row['description'];
                    $campus = $row['campus'];
                    $expiration = $row['expiration'];
                ?>

                    <tr>
                        <td><?php echo $event; ?></td>
                        <td><?php echo $desc; ?></td>
                        <td><?php echo $campus; ?></td>
                        <td><?php echo $expiration; ?></td>
                    </tr>
                <?php

                }
                ?>
            </tbody>
        </table>
<?php
    } else {
        echo "<h5 class = 'text-danger text-center mt-3'> No Event Found</h5>";
    }
}
?>