<?php
session_start();
include("config.php");

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM feedback WHERE id=$id";

    if ($conn->query($sql)) {
        header("Location: admin_dashboard.php");
    } else {
        echo "Error deleting feedback.";
    }
} else {
    header("Location: admin_dashboard.php");
}
?>
