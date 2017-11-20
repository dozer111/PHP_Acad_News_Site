<?php
/* Smarty version 3.1.30, created on 2017-11-20 16:03:30
  from "C:\xampp\htdocs\Views\News\show.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a12eec286b960_55315319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd5c8523014b02ef1948e94f6fae441b70d672ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\News\\show.tpl',
      1 => 1511190207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a12eec286b960_55315319 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17163955085a12eec286abe0_20281639', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_17163955085a12eec286abe0_20281639 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--       Data about article          -->
    <!--                Start             -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <div class="articleMain">
        <h1><?php echo $_smarty_tpl->tpl_vars['getArticle']->value['title'];?>
</h1>
        <img src="../../web/img/<?php echo $_smarty_tpl->tpl_vars['getArticle']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['getArticle']->value['title'];?>
">
        <p><?php echo $_smarty_tpl->tpl_vars['getArticle']->value['text_short'];?>
</p>
        <a href="#"><button>More text</button></a>
        <p>Author ==> <?php echo $_smarty_tpl->tpl_vars['getArticle']->value['author_id'];?>
</p>
        <p>Created at <?php echo $_smarty_tpl->tpl_vars['getArticle']->value['time_create'];?>
</p>
        <p>Article was read <?php echo $_smarty_tpl->tpl_vars['visitedAllTimeData']->value['count'];?>
  times </p>
    </div>
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--         Data about article        -->
    <!--             END                    -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->


<div id="display"></div>

    <?php echo '<script'; ?>
 type="text/javascript">
        function mode() {
            $.ajax({
                url: '/test/index',
                success: function(data) {
                    $('#display').html(data);
                }
            });
        }

        var timeInterval = 1000;
        setInterval(mode, timeInterval);
    <?php echo '</script'; ?>
>







    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--       Data about popular articles        -->
    <!--       with same category            -->
    <!--                Start             -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->

    <div id="popularArticles">
        <p>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tagsToArticle']->value, 'soloTag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['soloTag']->value) {
?>
            <span class="tag">#<?php echo $_smarty_tpl->tpl_vars['soloTag']->value['tag_name'];?>
&nbsp; &nbsp;</span>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </p>
    </div>
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--       Data about popular articles     -->
    <!--       with same category            -->
    <!--             END                    -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
    <!--  --------------------------      -->
<?php
}
}
/* {/block 'body'} */
}
