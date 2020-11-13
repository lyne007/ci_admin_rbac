<?php /* Smarty version 3.1.27, created on 2020-11-12 01:50:14
         compiled from "E:\wamp\www\BONLI\ci3\application\views\public\footer.html" */ ?>
<?php
/*%%SmartyHeaderCode:192225fac94d6b4ed64_24341131%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '334771d17f1c2dfbd1af4007de0425a5dd5874ae' => 
    array (
      0 => 'E:\\wamp\\www\\BONLI\\ci3\\application\\views\\public\\footer.html',
      1 => 1605145788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192225fac94d6b4ed64_24341131',
  'variables' => 
  array (
    'public' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fac94d6b79ce4_17125813',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fac94d6b79ce4_17125813')) {
function content_5fac94d6b79ce4_17125813 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '192225fac94d6b4ed64_24341131';
?>
<div class="footer">
    <div class="pull-right">&copy; 2016-2017 <a href="" target="_blank">ci3-admin</a>
    </div>
</div>
<div  id="loading" class="hidden"><div class=" mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active" style="margin-left: 40%"></div></div>
<div id="bg" class="hidden" >
    <div class="masking"></div>
    <div class="bg-loading" >
        <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"><br>正在处理中...  请耐心等待。</div>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/bootstrap.min.js?v=3.3.6"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/material.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/contabs.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/plugins/pace/pace.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/plugins/toastr/toastr.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/plugins/slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery.cookie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/plugins/metisMenu/jquery.metisMenu.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/layer/layer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/hplus.min.js?v=4.1.0"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/server/ajax.common.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
// 
$(function(){
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "7000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    };
    // $("#showtoast").click(function(){
    //     toastr.success('祝贺你成功了');
    //     toastr.info('这是一个提示信息');
    //     toastr.warning('警告你别来烦我了');
    //     toastr.error('出现错误，请更改');
    // });
})
<?php echo '</script'; ?>
><?php }
}
?>