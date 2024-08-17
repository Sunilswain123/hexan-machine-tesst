<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php 
 $rand=rand(9999, 1000);
?>
<body>
    <?php include 'nav_bar.php'; ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center">Login</h2>
                <form id="loginForm" action="login_process.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <div class="g-recaptcha" data-sitekey="6Lc3cigqAAAAAPlvQs1FMhMJXYTLVsJqBIDawRrk"></div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                    </div>
                    <div class="text-center">
                        <a href="./registration.php">Don't have an account? Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
