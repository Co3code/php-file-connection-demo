<?php

    require_once __DIR__ . "/includes/db.php";
    require_once __DIR__ . "/includes/function.php";
    include __DIR__ . "/includes/header.php";

    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email             = cleanInput($_POST["email"]);
        $_SESSION['email'] = $email;

        $stmt = $conn->prepare("INSERT INTO users (email) VALUES (?)");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->close();

        header("location: index.php");
        exit();
    }
?>

<form method="POST">
    <input type="email" name="email" required>
    <button type="submit">Save</button>
</form>

<?php include __DIR__ . "/includes/footer.php"; ?>
