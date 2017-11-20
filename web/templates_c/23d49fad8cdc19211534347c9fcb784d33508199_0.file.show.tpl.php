<?php
/* Smarty version 3.1.30, created on 2017-11-16 09:10:12
  from "C:\xampp\htdocs\Views\Category\show.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0d47e4403518_35944068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23d49fad8cdc19211534347c9fcb784d33508199' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Category\\show.tpl',
      1 => 1510819812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a0d47e4403518_35944068 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6562300205a0d47e4401b88_01176407', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_6562300205a0d47e4401b88_01176407 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 

    <div class="wrapper">
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagePosts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
    <div class="container1">
       <h1><a href="/news/show/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a></h1>
        <img src="/../../web/img/<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
">
        <p><?php echo $_smarty_tpl->tpl_vars['post']->value['text_short'];?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['post']->value['author_id'];?>
</p>
        <p>Created at <?php echo $_smarty_tpl->tpl_vars['post']->value['time_create'];?>
</p>
        
   </div>
       <hr style="height: 20px" color="black">
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>






    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!--              Start NAVIGATION                   -->
    <!--                                                 -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php if ($_smarty_tpl->tpl_vars['page']->value == 1 || $_smarty_tpl->tpl_vars['page']->value == 2) {?>
                <li class="page-item "><a class="page-link" href="/category/show/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/?page=1">1</a></li>
                <li class="page-item"><a class="page-link" href="/category/show/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/?page=2">2</a></li>
                <li class="page-item"><a class="page-link" href="/category/show/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/?page=3">3</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="/category/show/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/?page=<?php echo $_smarty_tpl->tpl_vars['maxPages']->value;?>
"> >> </a></li>
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value > 2 && $_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['maxPages']->value) {?>
                <li class="page-item "><a class="page-link" href="/category/show/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/?page=1"><<< </a></li>
                <li class="page-item "><a class="page-link" href="/category/show/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><<</a></li>
                <li class="page-item "><a class="page-link" href="/category/show/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
</a></li>
                <li class="page-item"><a class="page-link" href="/category/show/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                <li class="page-item"><a class="page-link" href="/category/show/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="/category/show/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"> >> </a></li>
                <li class="page-item"><a class="page-link" href="/category/show/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/?page=<?php echo $_smarty_tpl->tpl_vars['maxPages']->value;?>
"> >>> </a></li>
                <?php } else { ?>
                <li class="page-item "><a class="page-link" href="/category/show/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/?page=1"><<< </a></li>
                <li class="page-item "><a class="page-link" href="/category/show/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><<</a></li>
                <li class="page-item "><a class="page-link" href="/category/show/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
</a></li>
                <li class="page-item"><a class="page-link" href="/category/show/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                <li class="page-item"><a class="page-link" href="/category/show/<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</a></li>
            <?php }?>


        </ul>
    </nav>
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!--             End NAVIGATION                   -->
    <!--                                                 -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->
    <!-- ---------------------------------------------- -->














<?php
}
}
/* {/block 'body'} */
}
