<?php
/* Smarty version 3.1.30, created on 2017-11-20 12:35:17
  from "C:\xampp\htdocs\Views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a12bdf53a9574_07201341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '527aef30117dcd6b982a77b1a6d3f5249e6c26d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\layout.tpl',
      1 => 1511177715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a12bdf53a9574_07201341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <!--  --------------------------      -->
    <!--Bootstrap Include -->
    <!--  --------------------------      -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/../../web/js/main.js"><?php echo '</script'; ?>
>
    <!--  --------------------------      -->
    <!--  --------------------------      -->



    <link rel="stylesheet" type="text/css" href="/../web/css/style.css" >
    <?php echo '<script'; ?>
 src="/../web/js/main.js"><?php echo '</script'; ?>
>
</head>
<body>
<div id="wrapper">

<div id="nav">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10708164555a12bdf53a6994_84613128', 'nav');
?>

</div>
<div id="content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8989611385a12bdf53a7d86_15638722', 'body');
?>

</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13361996565a12bdf53a8da0_70171120', 'footer');
?>


</div>


</body>
</html><?php }
/* {block 'nav'} */
class Block_10708164555a12bdf53a6994_84613128 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/category/">Category</a></li>

            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--     Login && Register            -->
            <!--               OR                 -->
            <!--        UserName + Logout         -->
            <!--  --------------------------      -->
            <?php if (!isset($_SESSION['user'])) {?>
            <ul class="nav navbar-nav navbar-right">

                <li><a href="/auth/login/">Login</a></li>
                <li><a href="/auth/register/">Register</a></li>
            </ul>
                <?php } else { ?>

                <ul class="nav navbar-nav navbar-right">
                    <?php if ($_SESSION['user']['role'] == 1) {?>
                        <li><a href="/admin/main/index">Admin Page</a></li>
                    <?php }?>
                    <li><a href="/user//<?php echo $_SESSION['user']['id'];?>
"><?php echo $_SESSION['user']['login'];?>
</a></li>
                    <li><a href="/auth/logout/">Logout</a></li>
                </ul>
            <?php }?>
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
        </div>
    </nav>
<?php
}
}
/* {/block 'nav'} */
/* {block 'body'} */
class Block_8989611385a12bdf53a7d86_15638722 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_13361996565a12bdf53a8da0_70171120 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
