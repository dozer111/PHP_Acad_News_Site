<?php
/* Smarty version 3.1.30, created on 2017-11-20 16:36:32
  from "C:\xampp\htdocs\Views\Admin\Main\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a12f6809aef62_85415096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a59549458e353014d8c7141bf616db0e21437b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Admin\\Main\\index.tpl',
      1 => 1511192192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../layout.tpl' => 1,
  ),
),false)) {
function content_5a12f6809aef62_85415096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19466308865a12f6809ae471_78501051', 'body');
?>





















<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'inside'} */
class Block_10887832415a12f6809ad619_95980754 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'inside'} */
/* {block 'body'} */
class Block_19466308865a12f6809ae471_78501051 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


 <!-- Главная страничка админки
  В списке можно перейти к :
  1) Добавлению/редактированию категорий
  2) Добавлению, редактированию новостей


  -->













<!--  --------------------------      -->
<!--  --------------------------      -->
<!--  --------------------------      -->
<!--  --------------------------      -->
<!--  --------------------------      -->
<!--  --------------------------      -->
<!--  --------------------------      -->
<!--         Admin Menu                 -->
<!--            Start               -->
<!--  --------------------------      -->
<!--  --------------------------      -->
<!--  --------------------------      -->
<!--  --------------------------      -->
<div id="userContainer">

    <div id="userSidebar">
        <div class="list-group">

            <a href="/admin/category/index" class="list-group-item">Categories</a>
            <a href="/admin/post/index" class="list-group-item">News</a>
            <a href="/admin/user/index" class="list-group-item">Users</a>
            <a href="/admin/tag/index" class="list-group-item">Tags</a>
            <a href="#" class="list-group-item">tex inside 10</a>
            <a href="#" class="list-group-item">text inside 11</a>
            <a href="#" class="list-group-item">text inside 12</a>
        </div>
    </div>


    <div id="userArticles" class="articleMain">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10887832415a12f6809ad619_95980754', 'inside', $this->tplIndex);
?>

    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
