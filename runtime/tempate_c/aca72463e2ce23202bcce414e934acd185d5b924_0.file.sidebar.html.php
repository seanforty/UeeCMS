<?php
/* Smarty version 3.1.30, created on 2017-11-12 17:06:10
  from "E:\www\meswebsite\app\index\view\pc\sidebar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a080f02e95444_66519269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aca72463e2ce23202bcce414e934acd185d5b924' => 
    array (
      0 => 'E:\\www\\meswebsite\\app\\index\\view\\pc\\sidebar.html',
      1 => 1510477538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a080f02e95444_66519269 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="lift_zuo cl">
    <div class="lift_zuo cl">
        <div class="n_pro_list">
            <div class="list_prop">
                <p><?php echo $_smarty_tpl->tpl_vars['sidetitle']->value;?>
</p>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['side']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <li class="l1" id="class49"><a href="<?php echo url(array('path'=>'index/pcategory/index','params'=>array('id'=>$_smarty_tpl->tpl_vars['v']->value['id'])),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" class="a1"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>

            <div class="list1" id="fontred">
                <p>产品推荐</p>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recopro']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <li>
                        <div class="proimg_bk">
                            <a href="<?php echo url(array('path'=>'index/product/index','params'=>array('id'=>$_smarty_tpl->tpl_vars['v']->value['id'])),$_smarty_tpl);?>
" class="proimg">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image']['thumbnail'];?>
" width=""></a>
                        </div>
                        <a href="/productshow_56.html"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</span></a>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>

        </div>
    </div>
</div><?php }
}
