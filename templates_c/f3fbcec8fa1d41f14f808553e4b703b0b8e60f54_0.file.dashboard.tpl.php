<?php
/* Smarty version 4.5.4, created on 2024-08-28 18:43:22
  from 'C:\xampp\htdocs\Yip-task\templates\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_66cf53aa29f1a8_51890371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3fbcec8fa1d41f14f808553e4b703b0b8e60f54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Yip-task\\templates\\dashboard.tpl',
      1 => 1724863265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cf53aa29f1a8_51890371 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center mb-4">Dashboard</h2>
                <div class="alert alert-success">
                    Welcome, <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['username']->value, ENT_QUOTES, 'UTF-8', true);?>
!
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php }
}
