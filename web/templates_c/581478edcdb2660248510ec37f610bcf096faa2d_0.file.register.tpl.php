<?php
/* Smarty version 3.1.30, created on 2017-11-16 21:52:50
  from "C:\xampp\htdocs\Views\Auth\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0dfaa2610470_76987611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '581478edcdb2660248510ec37f610bcf096faa2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Auth\\register.tpl',
      1 => 1510865568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a0dfaa2610470_76987611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20623969535a0dfaa260fa58_51289505', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_20623969535a0dfaa260fa58_51289505 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form action="/auth/register/" method="post" >
        <div class="form-group" style="padding-top: 52px">
            <label for="exampleInputEmail1">Login</label><br>
            <input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter login">
            <br>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label><br>
            <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <br>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label><br>
            <input name="pass1" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Repeat Password</label><br>
            <input name="pass2" type="text" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div id="textError"></div>
        <input type="submit" id="addLoginForm">
    </form>

<?php
}
}
/* {/block 'body'} */
}
