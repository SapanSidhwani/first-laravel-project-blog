<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A personal blog where I share my thoughts, ideas, and stories.">
    <title>My Blog</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <h1>My Blog</h1>
            <p>Welcome to my personal space on the internet.</p>
        </div>
    </header>

    <!-- Navigation Section -->
    <nav>
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content Section -->
    <main>
        {{ $main }}
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2025 My Blog | All rights reserved</p>
        </div>
    </footer>
</body>

</html>