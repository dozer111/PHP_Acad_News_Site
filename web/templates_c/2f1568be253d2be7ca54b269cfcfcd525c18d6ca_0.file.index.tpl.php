<?php
/* Smarty version 3.1.30, created on 2017-11-20 16:51:32
  from "C:\xampp\htdocs\Views\Admin\Tag\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a12fa0427f620_58884914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f1568be253d2be7ca54b269cfcfcd525c18d6ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Admin\\Tag\\index.tpl',
      1 => 1511193091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Main/index.tpl' => 1,
  ),
),false)) {
function content_5a12fa0427f620_58884914 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13860682015a12fa0427e856_64395675', 'inside');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Main/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'inside'} */
class Block_13860682015a12fa0427e856_64395675 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Tags control</h1>
  
        <table width="100%" border="3">
            <tr>
                <th style="width: 10%">ID</th>
                <th>Title</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'oneTag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneTag']->value) {
?>
        <form action="/admin/tag/create/" method="post">
        <tr>

            <td style="width: 10%"><input type="number" name="tag_id" value="<?php echo $_smarty_tpl->tpl_vars['oneTag']->value['tag_id'];?>
"></td>
            <td style="width: 60%"><input type="text" name="tag_name" value="<?php echo $_smarty_tpl->tpl_vars['oneTag']->value['tag_name'];?>
" style="width: 100%"></td>
                <td><input type="submit" value="Update"></td>
                <td>Delete</td>

        </tr>
        </form>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
   
<?php
}
}
/* {/block 'inside'} */
}
