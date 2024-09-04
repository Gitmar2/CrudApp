<?php
include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize input
    $firstName = htmlspecialchars($_POST['name']);
    $lastName = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $gender = htmlspecialchars($_POST['gender']);

    // Validate inputs
    if (empty($firstName) || empty($lastName) || empty($email) || empty($gender)) {
        echo "All fields are required.";
    } else {
        // Prepare the SQL statement
        $sql = "INSERT INTO crud (firstname, lastname, email, gender) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $firstName, $lastName, $email, $gender);

        if ($stmt->execute()) {
            echo "New record created successfully";
            header("Location: index.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
}
?>
