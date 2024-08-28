<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title}</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Login</h1>

    {if isset($success) && $success}
        <div class="alert alert-success">{$success}</div>
    {/if}

    {if isset($errors['general'])}
        <div class="alert alert-danger">{$errors['general']}</div>
    {/if}

    <form action="login.php" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="{$username|default:''}" class="form-control">
            {if isset($errors['username'])}
                <div class="alert alert-danger">{$errors['username']}</div>
            {/if}
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control">
            {if isset($errors['password'])}
                <div class="alert alert-danger">{$errors['password']}</div>
            {/if}
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</body>
</html>
