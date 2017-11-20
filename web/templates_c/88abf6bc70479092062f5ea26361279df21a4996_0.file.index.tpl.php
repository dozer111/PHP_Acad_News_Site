<?php
/* Smarty version 3.1.30, created on 2017-11-17 13:06:35
  from "C:\xampp\htdocs\Views\User\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0ed0cb006739_15549167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88abf6bc70479092062f5ea26361279df21a4996' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\User\\index.tpl',
      1 => 1510920394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a0ed0cb006739_15549167 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16625696085a0ed0cb005db4_73201902', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_16625696085a0ed0cb005db4_73201902 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="userContainer">

    <div id="userSidebar">
        <div class="list-group">

            <a href="#" class="list-group-item">text inside 6</a>
            <a href="#" class="list-group-item">text inside 7</a>
            <a href="#" class="list-group-item">text inside 8</a>
            <a href="#" class="list-group-item">text inside 9</a>
            <a href="#" class="list-group-item">tex inside 10</a>
            <a href="#" class="list-group-item">text inside 11</a>
            <a href="#" class="list-group-item">text inside 12</a>
        </div>
    </div>








    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--       -->
    <!--   Right articles Part    -->
    <!--      If user is unregistered, he    -->
    <!--      can see only short text        -->
    <!--       |||||||||||||||||||||||||||           -->
    <!--   Every registered user can see his articles      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <div id="userArticles" class="articleMain">

    <?php if (!empty($_smarty_tpl->tpl_vars['userNews']->value)) {?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userNews']->value, 'soloPost');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['soloPost']->value) {
?>
            <div class="soloArticle">
            <h2><?php echo $_smarty_tpl->tpl_vars['soloPost']->value['title'];?>
</h2>
            <img src="/../../web/img/<?php echo $_smarty_tpl->tpl_vars['soloPost']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['soloPost']->value['title'];?>
">
                <p><?php echo $_smarty_tpl->tpl_vars['soloPost']->value['text_short'];?>
</p>
            <?php if (isset($_SESSION['user']) && $_SESSION['user']['id'] == $_smarty_tpl->tpl_vars['soloPost']->value['author_id']) {?>
                <button class="testB" class="showArticle">Show all article</button>
                <button class="testB1">Hide this article </button>
                <div class="articleText " id="article<?php echo $_smarty_tpl->tpl_vars['soloPost']->value['id'];?>
">

                    <p><?php echo $_smarty_tpl->tpl_vars['soloPost']->value['text_all'];?>
</p>
                </div>
            <?php }?>
                <p>Category ==> <?php echo $_smarty_tpl->tpl_vars['soloPost']->value['category_id'];?>
</p>
                <p>Created: <?php echo $_smarty_tpl->tpl_vars['soloPost']->value['time_create'];?>
</p>
                <hr>
            </div>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        <?php } else { ?>
        <h1>This user has no Articles</h1>
    <?php }?>
    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
