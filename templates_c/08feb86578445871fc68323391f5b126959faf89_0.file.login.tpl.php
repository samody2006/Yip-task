<?php
/* Smarty version 4.5.4, created on 2024-08-28 18:43:19
  from 'C:\xampp\htdocs\Yip-task\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_66cf53a724ea16_14747398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08feb86578445871fc68323391f5b126959faf89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Yip-task\\templates\\login.tpl',
      1 => 1724862435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cf53a724ea16_14747398 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center mb-4">Login</h2>
                <div id="formErrors">
                    <?php if ((isset($_smarty_tpl->tpl_vars['errors']->value['login']))) {?>
                        <div class="alert alert-danger">
                            <?php echo $_smarty_tpl->tpl_vars['errors']->value['login'];?>

                        </div>
                    <?php }?>
                </div>

                <form id="loginForm" method="POST" action="login.php">
                    <div class="mb-3">
                        <label for="usernameOrEmail" class="form-label">Username or Email</label>
                        <input type="text" class="form-control" id="usernameOrEmail" name="usernameOrEmail" placeholder="Enter username or email" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['usernameOrEmail']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">
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
<?php }
}
