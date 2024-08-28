<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title}</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Registration</h1>

    <form method="POST" action="register.php">
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="{$username|default:''|escape}" class="form-control">
        {if isset($errors.username)}
            <div class="alert alert-danger">{$errors.username}</div>
        {/if}
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{$email|default:''|escape}" class="form-control">
        {if isset($errors.email)}
            <div class="alert alert-danger">{$errors.email}</div>
        {/if}
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="form-control">
        {if isset($errors.password)}
            <div class="alert alert-danger">{$errors.password}</div>
        {/if}
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
</form>

{if isset($success)}
    <div class="alert alert-success">
        Registration successful! Welcome, {$success.username|escape}!
    </div>
{/if}

</body>
</html>
