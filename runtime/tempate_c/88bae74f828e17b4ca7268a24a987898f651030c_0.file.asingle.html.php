<?php
/* Smarty version 3.1.30, created on 2017-11-13 00:54:12
  from "E:\www\meswebsite\app\index\view\pc\asingle.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a087cb421e7c6_30292815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88bae74f828e17b4ca7268a24a987898f651030c' => 
    array (
      0 => 'E:\\www\\meswebsite\\app\\index\\view\\pc\\asingle.html',
      1 => 1510446555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pc/public/_meta.html' => 1,
    'file:pc/public/_header.html' => 1,
    'file:pc/sidebar.html' => 1,
    'file:pc/public/_footer.html' => 1,
  ),
),false)) {
function content_5a087cb421e7c6_30292815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:pc/public/_meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:pc/public/_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="contant">
    <div class="list_box">
        <?php $_smarty_tpl->_subTemplateRender("file:pc/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="list_right">
            <div class="box_bt">
                <div class="box_right_title">企业新闻</div>
                <div class="bt_text_y"><span>您现在所在位置：<a href="/">首页</a> > <a href="/news.html">鹤川资讯</a> > <a
                        href="/newsList_T6.html">企业新闻</a> > 详细内容</span></div>
            </div>
            <div class="pro_photo">
                <div><h3><?php echo $_smarty_tpl->tpl_vars['res']->value['title'];?>
</h3></div>
                <div class="pro_details_tongji">
                    　发布时间：<?php echo $_smarty_tpl->tpl_vars['res']->value['create_time'];?>
　点击量：<span id="Click"><?php echo $_smarty_tpl->tpl_vars['res']->value['read'];?>
</span>
                </div>
                <div class="n_con"><?php echo $_smarty_tpl->tpl_vars['res']->value['content'];?>
</div>
            </div>

            <div class="cl"></div>
            <div class="page">
                上一条： <a href="/newsShow_51.html" target="_blank">污水提升设备挑选技巧及它的优点</a> &nbsp;| &nbsp;下一条： <a
                    href="/newsShow_53.html" target="_blank">鹤川泵业为您分析潜水排污泵在工程使用中如何应用</a>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:pc/public/_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
