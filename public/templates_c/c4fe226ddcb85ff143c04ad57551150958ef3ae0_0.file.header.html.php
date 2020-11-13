<?php /* Smarty version 3.1.27, created on 2020-11-12 01:50:14
         compiled from "E:\wamp\www\BONLI\ci3\application\views\public\header.html" */ ?>
<?php
/*%%SmartyHeaderCode:307695fac94d6aa6db8_37882801%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4fe226ddcb85ff143c04ad57551150958ef3ae0' => 
    array (
      0 => 'E:\\wamp\\www\\BONLI\\ci3\\application\\views\\public\\header.html',
      1 => 1605145813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307695fac94d6aa6db8_37882801',
  'variables' => 
  array (
    'title' => 0,
    'public' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fac94d6b10556_51949421',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fac94d6b10556_51949421')) {
function content_5fac94d6b10556_51949421 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '307695fac94d6aa6db8_37882801';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<!--[if lt IE 9]>
<meta http-equiv="refresh" content="0;ie.html" />
<![endif]-->
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/material.css">
<link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/animate.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/style.min.css?v=4.1.0" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/common.css">
<link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/plugins/toastr/toastr.min.css" rel="stylesheet">

<?php echo '<script'; ?>
 type="text/javascript">
	var public = "<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
";
	var module = "<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
";
<?php echo '</script'; ?>
>
<?php }
}
?>