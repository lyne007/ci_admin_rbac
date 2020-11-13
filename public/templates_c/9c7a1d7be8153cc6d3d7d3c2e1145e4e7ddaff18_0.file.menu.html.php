<?php /* Smarty version 3.1.27, created on 2020-11-12 01:47:57
         compiled from "E:\wamp\www\BONLI\ci3\application\views\public\menu.html" */ ?>
<?php
/*%%SmartyHeaderCode:93005fac944d74ffb5_72621232%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c7a1d7be8153cc6d3d7d3c2e1145e4e7ddaff18' => 
    array (
      0 => 'E:\\wamp\\www\\BONLI\\ci3\\application\\views\\public\\menu.html',
      1 => 1598349468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93005fac944d74ffb5_72621232',
  'variables' => 
  array (
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fac944d753e36_51920679',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fac944d753e36_51920679')) {
function content_5fac944d753e36_51920679 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '93005fac944d74ffb5_72621232';
?>
<div class="row" style="border-bottom:2px solid #000">
<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0;background:#fff">
    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="javascript:;"><i class="fa fa-bars"></i> </a>
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <li class="hidden-xs">
            <a href="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/login/loginOut">
                <i class="fa fa-sign-out" style="font-size:18px"></i> 安全退出
            </a>
        </li>
    </ul>
</nav>
</div><?php }
}
?>