<?php
// Simple PHP form handler
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $message = $_POST["message"] ?? "";

    echo "<h2>Thank you, $name!</h2>";
    echo "<p>Your message has been received.</p>";
    echo "<a href='../index.html'>Go Back</a>";
}
?>
