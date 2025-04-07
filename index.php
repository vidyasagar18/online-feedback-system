<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Feedback System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Submit Your Feedback</h2>
    <form action="submit_feedback.php" method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Rating (1 to 5):</label><br>
        <input type="number" name="rating" min="1" max="5" required><br><br>

        <label>Comments:</label><br>
        <textarea name="comments" rows="5" cols="30" required></textarea><br><br>

        <input type="submit" value="Submit Feedback">
    </form>
</body>
</html>
