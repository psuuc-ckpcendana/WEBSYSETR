<?php
require 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id'])) {
        $testimonialId = $_POST['id'];

        if (isset($_POST['approved'])) {
            // Approve the testimonial
            $updateSql = "UPDATE testimonials SET status = 'approved' WHERE id = '$testimonialId'";
            $conn->query($updateSql);
            echo "<span class='form-success'>Testimonial approved successfully.</span>";
        } else {
            echo "Invalid action.";
        }
    } else {
        echo "Testimonial ID not provided.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>