<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo $_SESSION["user_name"]; ?></h1>

        <!-- Button to redirect to CRUD.php -->
        <a href="CRUD.php" class="btn btn-primary">Go to CRUD</a>

        <br><br>

        <!-- Logout button -->
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
