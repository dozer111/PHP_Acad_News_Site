<?php
/* Smarty version 3.1.30, created on 2017-11-17 15:35:22
  from "C:\xampp\htdocs\Views\Admin\Main\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0ef3aae50de7_88791928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a59549458e353014d8c7141bf616db0e21437b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Admin\\Main\\index.tpl',
      1 => 1510929322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../layout.tpl' => 1,
  ),
),false)) {
function content_5a0ef3aae50de7_88791928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12678079825a0ef3aae50663_78271513', 'body');
?>





















<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'category'} */
class Block_10091910565a0ef3aae4fb17_95351799 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'category'} */
/* {block 'body'} */
class Block_12678079825a0ef3aae50663_78271513 extends Smarty_Internal_Block
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
            <a href="#" class="list-group-item">test text</a>
            <a href="#" class="list-group-item">tex inside 10</a>
            <a href="#" class="list-group-item">text inside 11</a>
            <a href="#" class="list-group-item">text inside 12</a>
        </div>
    </div>


    <div id="userArticles" class="articleMain">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10091910565a0ef3aae4fb17_95351799', 'category', $this->tplIndex);
?>

    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
