<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center mb-4">Login</h2>
                <div id="formErrors">
                    {if isset($errors['login'])}
                        <div class="alert alert-danger">
                            {$errors['login']}
                        </div>
                    {/if}
                </div>

                <form id="loginForm" method="POST" action="login.php">
                    <div class="mb-3">
                        <label for="usernameOrEmail" class="form-label">Username or Email</label>
                        <input type="text" class="form-control" id="usernameOrEmail" name="usernameOrEmail" placeholder="Enter username or email" value="{$usernameOrEmail|default:''|escape}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
