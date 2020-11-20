<?php /* Smarty version 3.1.27, created on 2020-11-20 05:38:37
         compiled from "E:\wamp\www\BONLI\ci3\application\views\login\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:155965fb7565d3b2142_67437107%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afc1a9bbf1866605a2a7cd7a1a540606db763f97' => 
    array (
      0 => 'E:\\wamp\\www\\BONLI\\ci3\\application\\views\\login\\index.html',
      1 => 1605850715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155965fb7565d3b2142_67437107',
  'variables' => 
  array (
    'public' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fb7565d3fc4d4_27236531',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fb7565d3fc4d4_27236531')) {
function content_5fb7565d3fc4d4_27236531 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '155965fb7565d3b2142_67437107';
?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>ci3 admin—后台管理系统 - 登录</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="-">
<meta name="description" content="-">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/login.min.css">
<style type="text/css">
.disabled-btn{background:#eee;}
.disabled-btn:hover{background-color:#eee;}
</style>
</head>
<body>
<div class="bg-wrap">
    <div id="form" class="main-cont-wrap login-model">
        <div class="form-title g-mb40">
            <span class="s-txt-c s-fs20">登录</span>
        </div>
        <div class="ui-form-item g-mb30">
            <span class="ui-form-txt">账号</span>
            <input type="text" name="email" class="ui-form-input" placeholder="请输入邮箱" required="" msg="邮箱不许为空">
        </div>
        <div class="ui-form-item g-mb30">
            <span class="ui-form-txt">登录密码</span>
            <input type="password" name="password" class="ui-form-input" placeholder="请输入密码" required="" msg="密码不许为空">
        </div>
        <!--验证码-->
        <div class="ui-form-item g-mb20">
            <span class="ui-form-txt">验证码</span>
            <input type="text" name="yzm" class="ui-form-input" placeholder="验证码" required="" msg="验证码不许为空" size="4" style="position: absolute;bottom: 8px">
            <img class="yzm-reload" title="点击刷新" src="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/login/captcha" align="absbottom" onclick="this.src='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/login/captcha?'+Math.random();" style="position: relative;left: 113px;bottom: 1px"></img>
        </div>
       
        <div class="ui-form-btn">

            <button type="submit" class="ui-button login-btn" >登 录</button>
        </div>

    </div>
</div>
<div class="footer-wrap">
    <p class="s-tac s-txt-gy1">&copy; 2016-2017 ci3-admin</p>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/layer/layer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/server/ajax.common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery.cookie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

$(function(){
   
    $("body").keydown(function(event) { 
        if(event.keyCode == "13" && $("#form button").attr('disabled')==undefined){
            $("#form button").click();
        }
    });

    $("#form button").click(function(){
        $this = $(this);
        $this.html('<img width="60" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/fonts/three-dots.svg">');
        var jsonData = {};
        var mark = true;
        $("#form").find('input').each(function(){
            var msg = $("#form input[name='"+this.name+"']").attr('msg');
            if(this.value==''){
                $(".yzm-reload").trigger('click');
                $this.html('登 录').attr('disabled','disabled');
                setTimeout(function(){$this.removeAttr('disabled')},1000);
                layer.msg(msg,{icon:2,time:1200});
                mark = false;
                return mark;
            }
            jsonData[this.name] = this.value;
        });
        if(!mark){
            $this.html('登 录').attr('disabled','disabled');
            setTimeout(function(){$this.removeAttr('disabled')},1000);
            return false;
        }

        post('/login/doLogin',jsonData,function(res){
            
            if(res.retcode===1){
                layer.msg('登录成功',{icon:1,time:1000},function(){
                    $this.html('登 录');
                    window.location.href = '/welcome';
                });
                
            }else{
                $(".yzm-reload").trigger('click');
                layer.msg(res.msg,{icon:2,time:1200},function(){
                    $this.html('登 录');
                });
            }
        });
    });

})
<?php echo '</script'; ?>
>


</body></html><?php }
}
?>