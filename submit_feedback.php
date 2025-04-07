<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $rating = intval($_POST['rating']);
    $comments = htmlspecialchars($_POST['comments']);

    $sql = "INSERT INTO feedback (name, email, rating, comments)
            VALUES ('$name', '$email', '$rating', '$comments')";

    if ($conn->query($sql) === TRUE) {
        echo "<h3>Thank you! Your feedback has been submitted.</h3>";
        echo "<a href='index.php'>Go Back</a>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
} else {
    header("Location: index.php");
    exit();
}
?>
