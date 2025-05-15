<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Travel Tribe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f5f5f0; /* Soft sand-like background */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .main-content {
    margin-left: 220px; /* equal to sidebar width */
    padding: 20px;
    min-height: 100vh;
    background-color: #fdfcdc; /* optional: a light background */
}

    .navbar {
        background-color: #4a3f35 !important; /* earthy brown */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .navbar-brand {
        font-weight: bold;
        color: #ffdd57 !important; /* golden yellow like sun */
    }

    .nav-link {
        color: #f1f1f1 !important;
        margin-right: 15px;
    }

    .nav-link.active {
        color: #ffdd57 !important;
        font-weight: bold;
        border-bottom: 2px solid #ffdd57;
    }

    .dropdown-menu {
        background-color: #f8f5f0;
    }

    .dropdown-item:hover {
        background-color: #e4dccc;
        color: #4a3f35;
    }


    .sidebar {
        height: 100vh;
        background-color: #4a3f35;
        padding-top: 1rem;
        color: #fff;
        position: fixed;
        width: 220px;
    }

    .sidebar a {
        color: #f1f1f1;
        display: block;
        padding: 10px 20px;
        text-decoration: none;
    }

    .sidebar a:hover,
    .sidebar a.active {
        background-color: #3b3028;
        color: #ffdd57;
        font-weight: bold;
    }

    .main-content {
        margin-left: 220px;
        padding: 20px;
    }

    .navbar {
        background-color: #4a3f35 !important;
    }

    .navbar-brand {
        color: #ffdd57 !important;
    }


</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
    @include('layouts.partials.navbar')
    @include('layouts.partials.sidebar')
<main class="main-content">
    <div class="py-4">
        @yield('content')
    </div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
