<?php
/* Smarty version 4.5.4, created on 2024-08-28 18:43:11
  from 'C:\xampp\htdocs\Yip-task\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_66cf539f2e0b47_08224944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c5341b478158bcf2ca8f6c61d453c13b3e20c81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Yip-task\\templates\\index.tpl',
      1 => 1724862616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66cf539f2e0b47_08224944 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style/styles.css">
</head>
    <body class="d-flex flex-column min-vh-100">

    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <main class="main-content">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </main>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/register.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
