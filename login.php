<?php 
require_once "db.php";
require_once "function.php";
include "header.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = cleanInput($_POST["email"]);

    $sql = "INSERT INTO users (email) VALUE ('$email')";
    mysqli_query($conn, $sqlp);
}


?>

<form action="" method="post">

    <input type="email" name="email" required>
    <button type="submit">Save</button>
</form>

<?php  include "footer.php"?>