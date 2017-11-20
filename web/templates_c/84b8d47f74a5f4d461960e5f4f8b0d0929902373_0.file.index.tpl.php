<?php
/* Smarty version 3.1.30, created on 2017-11-16 10:49:21
  from "C:\xampp\htdocs\Views\Main\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0d5f21a722d4_37985251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84b8d47f74a5f4d461960e5f4f8b0d0929902373' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Main\\index.tpl',
      1 => 1510825761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a0d5f21a722d4_37985251 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14529861575a0d5f21a716a9_46041127', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "leftMenu"} */
class Block_20714430035a0d5f21a68438_39836934 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="btn-group" id="btn-group1">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allCategories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
            <a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><button><?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
</button></a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <?php
}
}
/* {/block "leftMenu"} */
/* {block 'body'} */
class Block_14529861575a0d5f21a716a9_46041127 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20714430035a0d5f21a68438_39836934', "leftMenu", $this->tplIndex);
?>

    <div id="right">
        <div id="inside">
        


            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--               SLIDER                     -->
            <!--                Start                      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <!--  --------------------------      -->
            <div class="container" id="test1">
                <div class="row">
                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="../../web/img/1200500.jpg" alt="First slide">
                                    <div class="carousel-caption">
                                        <h3>
                                        </h3>
                                        <p>
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="../../web/img/1200500.jpg" alt="Second slide">
                                    <div class="carousel-caption">
                                        <h3>
                                        </h3>
                                        <p>
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="../../web/img/1200500.jpg" alt="Third slide">
                                    <div class="carousel-caption">
                                        <h3>
                                        </h3>
                                        <p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                                                                                             href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
                        </div>
                        <div class="main-text hidden-xs">
                            <div class="col-md-12 text-center">
                                <h1>
                                </h1>
                                <h3>

                                </h3>
                                <div class="">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="push">
                </div>
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--               SLIDER                     -->
                <!--                Finish                     -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->







                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--              Start categories show       -->
                <!--                               -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->


                <div id="showCats">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allCategories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                    <div class="showCat">
                        <h1 align="center"><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
</a> </h1>
                        <img src="../../web/img/<?php echo $_smarty_tpl->tpl_vars['category']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
">'

                        <ul>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsArray']->value[$_smarty_tpl->tpl_vars['category']->value['id']], 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                            <li class="left_20"><a href="/news/show/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a></li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </li>
                        </ul>

                    </div>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                </div>

                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--      Finish categories show      -->
                <!--                                  -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->
                <!--  --------------------------      -->





            </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
