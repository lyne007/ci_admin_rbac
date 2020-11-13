<?php /* Smarty version 3.1.27, created on 2020-11-12 01:44:35
         compiled from "E:\wamp\www\BONLI\ci3\application\views\public\jump_notice.html" */ ?>
<?php
/*%%SmartyHeaderCode:32885fac9383d78083_26581505%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2386273090f52a01707083f2652d1801520eb99' => 
    array (
      0 => 'E:\\wamp\\www\\BONLI\\ci3\\application\\views\\public\\jump_notice.html',
      1 => 1605145474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32885fac9383d78083_26581505',
  'variables' => 
  array (
    'public' => 0,
    'message' => 0,
    'url' => 0,
    'waitSecond' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fac9383dca118_61152431',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fac9383dca118_61152431')) {
function content_5fac9383dca118_61152431 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32885fac9383d78083_26581505';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台 - 跳转提示 </title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/style.min.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="middle-box text-center animated fadeInDown">
        <h2 class="font-bold"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>
        <!-- <h3 class="font-bold"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h3> -->

        <div class="error-desc">
            <p class="jump">
            页面自动 <a id="href" class="text-primary" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">跳转</a> 等待时间： <b id="wait"><?php echo $_smarty_tpl->tpl_vars['waitSecond']->value;?>
</b>
            </p>
            <br/>？如果无法跳转,您可以点击返回看看
            <br/><a href="javascript:;" onclick="javascript:history.back(-1)" class="btn btn-primary m-t">返回</a>
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
</body>
<?php echo '<script'; ?>
 type="text/javascript">
var href = document.getElementById('href').href
document.onkeydown=function(event){
    location.href = href;
    /*var e = event || window.event || arguments.callee.caller.arguments[0];
    if(e) location.href = href;
    if(e && e.keyCode==27){ // 按 Esc
        location.href = href;
    }
    if(e && e.keyCode==13){ // enter 键
        location.href = href;
    }*/
};
(function(){
var wait = document.getElementById('wait');
var interval = setInterval(function(){
    var time = --wait.innerHTML;
    if(time <= 0) {
        location.href = href;
        clearInterval(interval);
    };
}, 1000);
})();
<?php echo '</script'; ?>
>

</html>
<?php }
}
?>