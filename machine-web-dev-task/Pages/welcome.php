<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['login'])) {
    header('Location: login_page.php');
    exit();
}

// Handle logout
if (isset($_POST['logout'])) {
    session_destroy(); 
    header('Location: login_page.php'); // Redirect to the login page
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'nav_bar.php'; ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h1>Welcome to HEXAN, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
                <form method="POST" action="">
                    <button type="submit" name="logout" class="btn btn-danger mt-4">Logout</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
