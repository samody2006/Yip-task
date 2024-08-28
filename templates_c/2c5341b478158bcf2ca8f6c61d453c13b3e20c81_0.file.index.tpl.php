<?php
/* Smarty version 4.5.4, created on 2024-08-28 15:37:44
  from 'C:\xampp\htdocs\Yip-task\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_66cf282803b9b8_06824458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c5341b478158bcf2ca8f6c61d453c13b3e20c81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Yip-task\\templates\\index.tpl',
      1 => 1724847579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66cf282803b9b8_06824458 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=register">Register</a></li>
            <li><a href="index.php?page=login">Login</a></li>
        </ul>
    </nav>

    <main>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
  
    </main>

    <footer>
        <p>&copy; 2024 Yiponline</p>
    </footer>
</body>
</html>
<?php }
}
