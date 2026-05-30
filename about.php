<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark app-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">SMS Project</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="students.php">Students</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="container">
    <section class="page-header text-center">
        <h1 class="section-title">About Us</h1>
        <p class="lead">This Student Management System is developed using HTML, CSS, Bootstrap, Core PHP, and MySQL.</p>
    </section>

    <section class="row g-4 pb-5">
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon">A</div>
                <h4>Simple</h4>
                <p class="section-copy mb-0">The project keeps student operations easy for beginners and administrators.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon">B</div>
                <h4>Database Driven</h4>
                <p class="section-copy mb-0">Student and contact data is stored in MySQL tables for easy retrieval.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon">C</div>
                <h4>Practical</h4>
                <p class="section-copy mb-0">It demonstrates useful CRUD operations with PHP forms and validation.</p>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container">Copyright 2026 Student Management System</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
