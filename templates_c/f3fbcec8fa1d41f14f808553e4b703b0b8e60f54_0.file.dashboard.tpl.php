<?php
/* Smarty version 4.5.4, created on 2024-08-28 15:37:43
  from 'C:\xampp\htdocs\Yip-task\templates\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_66cf2827abd118_22606429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3fbcec8fa1d41f14f808553e4b703b0b8e60f54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Yip-task\\templates\\dashboard.tpl',
      1 => 1724851253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cf2827abd118_22606429 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
</head>
<body>
    <header>
        <h1>Welcome, <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
!</h1>
        <nav>
            <a href="index.php?page=home">Home</a>
            <a href="index.php?page=logout">Logout</a>
        </nav>
    </header>
    <main>
        <h2>Your Dashboard</h2>
        <p>Here you can view and manage your account details.</p>
        
    </main>
    
</body>
</html>
<?php }
}
