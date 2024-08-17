<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/home-page.css">
</head>
<body>
    <?php include 'nav_bar.php'; ?>

    <!-- Hero Section -->
    <div class="hero-image">
        <div class="hero-text">
            <h1>Welcome to Our Amazing Site</h1>
            <p>Discover the best content and services tailored just for you.</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="./images/image3.jpg" class="card-img-top" alt="Image 1"> 
                    <div class="card-body">
                        <h5 class="card-title">Feature 1</h5>
                        <p class="card-text">Explore the unique features we offer and how they can benefit you.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="./images/image3.jpg" class="card-img-top" alt="Image 2">
                    <div class="card-body">
                        <h5 class="card-title">Feature 2</h5>
                        <p class="card-text">Learn about our latest innovations and how they stand out from the rest.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="./images/image3.jpg" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h5 class="card-title">Feature 3</h5>
                        <p class="card-text">See how our solutions make a difference and improve your experience.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="./registration.php" class="btn btn-primary">Register</a>
            <a href="./login_page.php" class="btn btn-secondary">Login</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
