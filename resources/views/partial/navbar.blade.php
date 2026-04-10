

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
     <style>
     /* Gradient background */
.custom-navbar {
    background: linear-gradient(90deg, #89ad9b, #486454);
    backdrop-filter: blur(10px);
}

/* Brand styling */
.brand-text {
    font-size: 1.4rem;
    letter-spacing: 1px;
}

/* Links */
.custom-link {
    position: relative;
    transition: all 0.3s ease;
}

/* Underline animation */
.custom-link::after {
    content: "";
    position: absolute;
    width: 0%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #ffc107;
    transition: 0.3s;
}

.custom-link:hover::after {
    width: 100%;
}

/* Hover color */
.custom-link:hover {
    color: #ffc107 !important;
}

/* Active link stronger */
.nav-link.active {
    font-weight: 600;
}
       </style>

</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark shadow-sm custom-navbar">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand fw-bold brand-text" href="#">C.J</a>

        <!-- Toggle -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center gap-2">

                <li class="nav-item">
                    <a class="nav-link active custom-link" href="#">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link custom-link" href="#">Features</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link custom-link" href="#">Pricing</a>
                </li>

                <!-- Button style item -->
                <li class="nav-item">
                    <a class="btn btn-warning btn-sm ms-2 fw-semibold px-3">Explore</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>