<?php
/* Smarty version 3.1.30, created on 2017-11-20 16:36:35
  from "C:\xampp\htdocs\Views\Admin\Category\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a12f68395a373_55338608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8684e10334063a7586ac1c2a103d2c5c5913b405' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Admin\\Category\\index.tpl',
      1 => 1511192192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Main/index.tpl' => 1,
  ),
),false)) {
function content_5a12f68395a373_55338608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7608439205a12f683959b96_78959519', 'inside');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../Main/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'inside'} */
class Block_7608439205a12f683959b96_78959519 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Add Category</h1>

    <!--                     ----->.
    <!--                     ----->
    <!--                     ----->
    <!--         Форма для             ----->
    <!--     Добавления категорий       ----->
    <!--                     ----->
    <!--                     ----->
    <!--                     ----->
    <form action="/admin/category/index/" method="post">
        <div class="form-group">
            <input type="text" name="catName" class="form-control"  placeholder="Category name">
            <select name="parentId" class="form-control form-control-lg">
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listToSelect']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['item']->value['category_name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
            <input type="submit">
        </div>

    </form>













    <h1>Update Categories</h1>
    <table border="3"  width="100%">
        <tr >
            <th>id</th>
            <th>Cat_Name</th>
            <th>Cat_Parent</th>
            <th>Img</th>
            <th>Update</th>
            <th>Delete</th></tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allCategoriesData']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
            <form action="/admin/category/update/" method="post" enctype="multipart/form-data" >
                <tr >
                    <td ><input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" name="category_id"></td>
                    <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
" name="category_name"></td>
                    <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_parent'];?>
" name="category_parent"></td>
                    <td>
                        <img src="../../../web/img/<?php echo $_smarty_tpl->tpl_vars['category']->value['img'];?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
"
                                                width="100px"height="70px" >
                        <input type="file" name="category_photo" accept="image/*">
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
