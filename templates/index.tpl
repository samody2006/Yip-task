<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title|escape}</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
</head>
<body>
    <header>
        <h1>{$title|escape}</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=register">Register</a></li>
            <li><a href="index.php?page=login">Login</a></li>
        </ul>
    </nav>

    <main>
        {$content}  
    </main>

    <footer>
        <p>&copy; 2024 Yiponline</p>
    </footer>
</body>
</html>
