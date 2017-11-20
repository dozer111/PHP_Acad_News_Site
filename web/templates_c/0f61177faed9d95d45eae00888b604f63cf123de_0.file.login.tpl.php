<?php
/* Smarty version 3.1.30, created on 2017-11-17 10:33:24
  from "C:\xampp\htdocs\Views\Auth\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0eace47253c3_02663326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f61177faed9d95d45eae00888b604f63cf123de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Auth\\login.tpl',
      1 => 1510911201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a0eace47253c3_02663326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1792569285a0eace47243c6_74037792', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_1792569285a0eace47243c6_74037792 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form action="/auth/login/" method="post" >
        <div class="form-group" style="padding-top: 52px">
            <label for="exampleInputEmail1">Login</label><br>
            <input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter login">
            <br>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label><br>
            <input name="pass1" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <div id="textError"></div>
        <input type="submit" >
    </form>
<div id="wrong_pass">
    <h1></h1>
</div>


<?php
}
}
/* {/block 'body'} */
}
