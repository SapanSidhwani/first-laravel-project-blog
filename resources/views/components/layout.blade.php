<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A personal blog where I share my thoughts, ideas, and stories.">
    <title>My Blog</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header Section */
        header {
            background-color: #333;
            color: #fff;
            padding: 40px 0;
            text-align: center;
        }

        header h1 {
            font-size: 3em;
            margin: 0;
        }

        header p {
            font-size: 1.2em;
        }

        /* Navigation Section */
        nav {
            background-color: #444;
            color: #fff;
        }

        nav ul {
            list-style: none;
            padding: 0;
            text-align: center;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.1em;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Main Content */
        main {
            background-color: #fff;
            padding: 40px 0;
        }

        main h2 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 40px;
        }

        .post {
            background-color: #fafafa;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 20px;
        }

        .post h3 {
            font-size: 1.8em;
            margin: 0;
        }

        .post-meta {
            font-size: 0.9em;
            color: #777;
            margin-bottom: 15px;
        }

        .read-more {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        .read-more:hover {
            text-decoration: underline;
        }

        /* Footer Section */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }

        footer p {
            margin: 0;
            font-size: 1em;
        }
    </style>
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