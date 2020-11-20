<?php /* Smarty version 3.1.27, created on 2020-11-20 05:42:08
         compiled from "E:\wamp\www\BONLI\ci3\application\views\public\navbar.html" */ ?>
<?php
/*%%SmartyHeaderCode:87065fb757304cf854_09292633%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b1d086de7775da9cb8f38ff3ca4a853f0647e59' => 
    array (
      0 => 'E:\\wamp\\www\\BONLI\\ci3\\application\\views\\public\\navbar.html',
      1 => 1605850904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87065fb757304cf854_09292633',
  'variables' => 
  array (
    'public' => 0,
    'module' => 0,
    'navbar_list' => 0,
    'title' => 0,
    'n' => 0,
    'cn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fb757307c1781_03030572',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fb757307c1781_03030572')) {
function content_5fb757307c1781_03030572 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '87065fb757304cf854_09292633';
?>
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="nav-close"><i class="fa fa-times-circle"></i></div>
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span><img class="img-circle mb10 " style="border-radius:0%" width="60" alt="image-logo" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/logo-nav.png" /></span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold"><?php echo $_SESSION['login']['account'];?>
</strong>
                            </span>
                            <span class="text-muted text-xs block"><?php echo $_SESSION['login']['real_name'];?>

                                <b class="caret"></b>
                            </span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a data-toggle="modal" class="edit_pass" href="#modal-form-password">修改密码</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/login/loginOut">安全退出</a></li>
                    </ul>
                </div>
                <div class="logo-element">L</div>
            </li>
            <?php if (!empty($_smarty_tpl->tpl_vars['navbar_list']->value)) {?>
            <?php
$_from = $_smarty_tpl->tpl_vars['navbar_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['n']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
$foreach_n_Sav = $_smarty_tpl->tpl_vars['n'];
?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['title']->value != '管理员') {?> <?php if (in_array($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl->tpl_vars['n']->value['active']) !== false) {?>active<?php }
} else {
if (in_array($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl->tpl_vars['n']->value['active']) !== false) {?>active<?php }
}?>">
                <a class="J_menuItem" href="<?php echo $_smarty_tpl->tpl_vars['module']->value;
echo $_smarty_tpl->tpl_vars['n']->value['navbar_url'];?>
">
                    <i class="fa <?php echo $_smarty_tpl->tpl_vars['n']->value['icon'];?>
"></i>
                    <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['n']->value['name'];?>
</span>
                </a>
                <?php if (!empty($_smarty_tpl->tpl_vars['n']->value['child'])) {?>
                <ul class="nav nav-second-level">
                <?php
$_from = $_smarty_tpl->tpl_vars['n']->value['child'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cn'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cn']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cn']->value) {
$_smarty_tpl->tpl_vars['cn']->_loop = true;
$foreach_cn_Sav = $_smarty_tpl->tpl_vars['cn'];
?>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['title']->value == $_smarty_tpl->tpl_vars['cn']->value['name']) {?>active<?php }?>"><a class="J_menuItem" href="<?php echo $_smarty_tpl->tpl_vars['module']->value;
echo $_smarty_tpl->tpl_vars['cn']->value['navbar_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['cn']->value['name'];?>
</a></li>
                <?php
$_smarty_tpl->tpl_vars['cn'] = $foreach_cn_Sav;
}
?>
                </ul>
                <?php }?>
            </li>
            <?php
$_smarty_tpl->tpl_vars['n'] = $foreach_n_Sav;
}
?>
            <?php } else { ?>
            <li class="active">
                <a class="J_menuItem" href="javascript:;">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">主页</span>
                </a>
            </li>
            <?php }?>
            <br>
            <br>
            <br>
        </ul>
    </div>
</nav>
<?php echo $_smarty_tpl->getSubTemplate ("./password-edit.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>