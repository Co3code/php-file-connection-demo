<?php
    require_once __DIR__ . "/includes/db.php";
    require_once __DIR__ . "/includes/function.php";
    include __DIR__ . "/includes/header.php";

    session_start();
    if (isset($_SESSION['email'])) {
        echo "Welcome, " . $_SESSION['email'];
    }
?>

<p>Welcome to the home page</p>

<a href="login.php">Go to login</a>


<?php include __DIR__ . "/includes/footer.php"; ?>