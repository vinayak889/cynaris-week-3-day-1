<?php
session_start();
require_once 'functions.php';

$name = "";
$email = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = sanitize($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");

    if (empty($name)) {
        $message = "Name is required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email address!";
    } else {
        $_SESSION["username"] = $name;
        $message = "Welcome, " . $name . "! Form submitted successfully.";
    }
}

$skills = ["PHP", "HTML", "CSS", "JavaScript"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Fundamentals</title>
</head>
<body>

    <h1>PHP Fundamentals</h1>

    <h2>Variables</h2>

    <?php
    $course = "PHP";
    $duration = 60;

    echo "Course: $course <br>";
    echo "Duration: $duration minutes";
    ?>

    <h2>Arrays</h2>

    <?php
    foreach ($skills as $skill) {
        echo $skill . "<br>";
    }
    ?>

    <h2>Conditional Statements</h2>

    <?php
    $marks = 85;

    if ($marks >= 80) {
        echo "Excellent performance!";
    } else {
        echo "Keep practising!";
    }
    ?>

    <h2>Loops</h2>

    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Number: $i <br>";
    }
    ?>

    <h2>Functions</h2>

    <?php
    echo greet("Student");
    ?>

    <h2>GET Method</h2>

    <a href="?topic=PHP">Click to view topic</a>

    <?php
    if (isset($_GET["topic"])) {
        echo "<p>Topic: " .
            htmlspecialchars($_GET["topic"]) . "</p>";
    }
    ?>

    <h2>POST Form Handling</h2>

    <form method="POST">

        <label>Name:</label>
        <input type="text" name="name" required>

        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required>

        <br><br>

        <button type="submit">Submit</button>

    </form>

    <p>
        <?php echo htmlspecialchars($message); ?>
    </p>

    <h2>PHP Session</h2>

    <?php
    if (isset($_SESSION["username"])) {
        echo "Logged-in User: " .
            htmlspecialchars($_SESSION["username"]);
    }
    ?>

</body>
</html>