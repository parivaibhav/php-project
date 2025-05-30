<?php
session_start(); // Start the session

include_once "db.php";

if ($conn->connect_error) {
    $_SESSION['status'] = 'error';
    $_SESSION['msg'] = 'Database connection failed';
    header("Location: feedback-form.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $rating = intval($_POST['rating'] ?? 0);
    $message = trim($_POST['comments'] ?? '');

    if (
        $name === '' ||
        !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        $rating < 1 || $rating > 5 ||
        $message === ''
    ) {
        $_SESSION['status'] = 'error';
        $_SESSION['msg'] = 'Please fill all fields correctly';
        header("Location: ../contactus.php");
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO feedback (feedback_name, feedback_email, feedback_rating, feedback_message) VALUES (?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("ssis", $name, $email, $rating, $message);
        if ($stmt->execute()) {
            $_SESSION['status'] = 'success';
            $_SESSION['msg'] = 'Thank you for your feedback!';
        } else {
            $_SESSION['status'] = 'error';
            $_SESSION['msg'] = 'Failed to save feedback';
        }
        $stmt->close();
    } else {
        $_SESSION['status'] = 'error';
        $_SESSION['msg'] = 'SQL prepare failed';
    }

    $conn->close();
    header("Location: ../contactus.php");
    exit;
} else {
    $_SESSION['status'] = 'error';
    $_SESSION['msg'] = 'Invalid request';
    header("Location: ../contactus.php");
    exit;
}
