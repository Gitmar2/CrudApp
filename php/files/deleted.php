<?php
include "db_conn.php";

// Check if 'id' parameter is set
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];

    // Use prepared statements to prevent SQL injection
    $sql = "DELETE FROM crud WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirect to index.php after successful deletion
        header("Location: index.php");
        exit();
    } else {
        // Display an error message if deletion fails
        echo "Error deleting record: " . $stmt->error;
    }
    $stmt->close();
} else {
    // Redirect to index.php if 'ID' parameter is not set
    header("Location: index.php");
    exit();
}

$conn->close();
?>



