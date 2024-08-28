<?php
/* Smarty version 4.5.4, created on 2024-08-28 18:43:16
  from 'C:\xampp\htdocs\Yip-task\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_66cf53a4c40827_99787965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4dd425a7fccc6c02547e46f3ba63e4ec2a1b11d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Yip-task\\templates\\register.tpl',
      1 => 1724861583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cf53a4c40827_99787965 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center mb-4">Register</h2>
                <div id="formErrors"></div>
                <form id="registerForm" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['username']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['email']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }
}
