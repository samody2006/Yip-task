<!DOCTYPE html>
<html lang="en">
<head>
<title>{$title|escape}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style/styles.css">
</head>
    <body class="d-flex flex-column min-vh-100">

    {include file='header.tpl'}

    <main class="main-content">
        {$content}
    </main>

    {include file='footer.tpl'}

    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/register.js"></script>
<script src="js/login.js"></script>
</body>
</html>
