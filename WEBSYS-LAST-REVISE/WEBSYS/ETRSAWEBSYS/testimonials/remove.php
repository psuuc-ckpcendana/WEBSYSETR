<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['removed'])) {
    $id = $_POST['id'];

    // Use prepared statement to prevent SQL injection
    $sql = "DELETE FROM testimonials WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'i', $id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "<p class = 'form-error'>Testimonial removed successfully.</p>";
        } else {
            echo "<p>Error removing testimonial.</p>";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "<p>Error preparing statement.</p>";
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Handle invalid request
    echo "<p>Invalid request to remove testimonial.</p>";
}
?>
