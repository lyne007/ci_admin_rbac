<?php /* Smarty version 3.1.27, created on 2020-11-12 01:49:03
         compiled from "E:\wamp\www\BONLI\ci3\application\views\power\admin-list.html" */ ?>
<?php
/*%%SmartyHeaderCode:80975fac948f217162_35714740%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05fc578bedc2482c1ba458331e39c4303a1be87b' => 
    array (
      0 => 'E:\\wamp\\www\\BONLI\\ci3\\application\\views\\power\\admin-list.html',
      1 => 1605145732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80975fac948f217162_35714740',
  'variables' => 
  array (
    'public' => 0,
    'module' => 0,
    'rolelist' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fac948f3111a6_83755942',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fac948f3111a6_83755942')) {
function content_5fac948f3111a6_83755942 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '80975fac948f217162_35714740';
?>
<!DOCTYPE html>
<html>
<head>
<?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/plugins/iCheck/custom.css" rel="stylesheet">
</head>
<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <?php echo $_smarty_tpl->getSubTemplate ("public/navbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <?php echo $_smarty_tpl->getSubTemplate ("public/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <br>
            <div class="row" id="content-main">
                <div class="col-sm-12">
                    <div class="ibox float-e-margins">
                        <div id="adminList" class="ibox-title" style="min-height:94px">
                            <h5>管理员列表</h5>
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="input-group m-b">
                                        <div class="input-group-btn">
                                            <button class="btn btn-white" type="button" aria-expanded="false">管理员账号</button>
                                        </div>
                                        <input class="form-control" type="text" name="account" value="<?php if (isset($_SESSION['option']['account'])) {
echo $_SESSION['option']['account'];
}?>">
                                        <span class="input-group-btn search">
                                            <button class="btn btn-primary" type="submit">搜索 </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="input-group m-b">
                                        <span class="input-group-btn">
                                            <a data-toggle="modal" class="btn btn-success addAdmin-btn" href="#modal-form-add">创建管理员</a>
                                        </span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div id="ajaxAdminList" class="ibox-content">
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div id="modal-form-add" class="modal fade" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-11">
                                    <div class="m-b-md">
                                        <h2>完善管理员信息</h2>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <button class="close" type="button" data-dismiss="modal">
                                    <span aria-hidden="true">×</span>
                                    <span class="sr-only">Close</span>
                                    </button>
                                </div>
                                <div class="col-sm-12">

                                    <div class="ibox float-e-margins">
                                        <div class="ibox-content">
                                            <form class="form-horizontal m-t" id="signupForm-add" action="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/power/ajaxAddAdmin" method="post">
                                                
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">昵称：</label>
                                                    <div class="col-sm-8">
                                                        <input id="username" name="real_name" class="form-control" type="text" aria-required="true" aria-invalid="true" class="error">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">账号：</label>
                                                    <div class="col-sm-8">
                                                        <input id="email" name="account" class="form-control" type="email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">密码：</label>
                                                    <div class="col-sm-8">
                                                        <input id="password-add" name="password" class="form-control" type="password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">确认密码：</label>
                                                    <div class="col-sm-8">
                                                        <input id="confirm_password" name="confirm_password" class="form-control" type="password">
                                                        <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 请再次输入您的密码</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">管理员类型：</label>
                                                    <div class="col-sm-8">
                                                        <div class="radio i-checks">
                                                            <label class=""><input type="radio" name="admin_type" value="1" checked>系统管理员</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="js-html"></div>
                                                <div class="form-group <?php if (empty($_smarty_tpl->tpl_vars['rolelist']->value)) {?>has-error<?php }?>">
                                                    <label class="col-sm-3 control-label">分配角色：</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control m-b roleList" name="role_id">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['rolelist']->value)) {?>
                                                        <?php
$_from = $_smarty_tpl->tpl_vars['rolelist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                                                        <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                                                        <?php } else { ?>
                                                        <option value="">请去添加角色</option>
                                                        <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="js-vendor-html"></div>
                                                <div class="form-group">
                                                    <div class="col-sm-8 col-sm-offset-3">
                                                        <?php if ($_smarty_tpl->tpl_vars['rolelist']->value) {?>
                                                        <button class="btn btn-primary" type="submit">提交</button>
                                                        <button class="hidden reset-btn" type="reset"></button>
                                                        <?php } else { ?>
                                                        <button class="btn btn-default" disabled type="submit">提交</button>
                                                        <?php }?>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            
            
            <div id="modal-form-edit" class="modal fade" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-11">
                                    <div class="m-b-md">
                                        <h2>更新管理员信息</h2>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <button class="close" type="button" data-dismiss="modal">
                                    <span aria-hidden="true">×</span>
                                    <span class="sr-only">Close</span>
                                    </button>
                                </div>
                                <div class="col-sm-12">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-content">
                                            <form class="form-horizontal m-t" id="signupForm-edit" action="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/power/ajaxEditAdmin">
                                                <input type="hidden" name="id" value=""/>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">昵称：</label>
                                                    <div class="col-sm-8">
                                                        <input name="real_name" class="form-control" type="text" aria-required="true" aria-invalid="true" class="error">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">账号：</label>
                                                    <div class="col-sm-8">
                                                        <input name="account" class="form-control" type="email"  disabled="" placeholder="已被禁用">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">密码：</label>
                                                    <div class="col-sm-8">
                                                        <input id="password-edit" name="password" class="form-control" type="password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">确认密码：</label>
                                                    <div class="col-sm-8">
                                                        <input id="confirm_password2" name="confirm_password" class="form-control" type="password">
                                                        <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 请再次输入您的密码</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">管理员类型：</label>
                                                    <div class="col-sm-8">
                                                        <div class="radio i-checks">
                                                            <label class=""><input type="radio" name="admin_type" value="1" checked>系统管理员</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="js-html"></div>
                                                <div class="form-group <?php if (empty($_smarty_tpl->tpl_vars['rolelist']->value)) {?>has-error<?php }?>">
                                                    <label class="col-sm-3 control-label">分配角色：</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control m-b roleList" name="role_id">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['rolelist']->value)) {?>
                                                        <?php
$_from = $_smarty_tpl->tpl_vars['rolelist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                                                        <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                                                        <?php } else { ?>
                                                        <option value="">请去添加角色</option>
                                                        <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="js-vendor-html"></div>
                                                <div class="form-group">
                                                    <div class="col-sm-8 col-sm-offset-3">
                                                        <?php if ($_smarty_tpl->tpl_vars['rolelist']->value) {?>
                                                        <button class="btn btn-primary" type="submit">提交</button>
                                                        <?php } else { ?>
                                                        <button class="btn btn-default" disabled type="submit">提交</button>
                                                        <?php }?>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            
            <?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/plugins/chosen/chosen.jquery.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/plugins/datapicker/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/plugins/validate/jquery.validate.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/plugins/validate/messages_zh.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/form-validate.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>
            
            <?php echo '<script'; ?>
 type="text/javascript">
            
            $(function(){
                $('.radio').iCheck({ 
                  labelHover : true, 
                  cursor : true, 
                  checkboxClass : 'icheckbox_square-green', 
                  radioClass : 'iradio_square-green', 
                  increaseArea : '20%' 
                });
                $(".addAdmin-btn").click(function(){
                    $("#modal-form-add").find(".reset-btn").trigger('click');
                })
                
                // 获取管理员列表
                getAdminList();

                $("#adminList button[type='submit']").click(function(){
                    var url = module + '/power/ajaxAdminList';
                    var account = $("#adminList").find("input[name='account']").val();
                    if(account==''){
                        layer.msg('请输入账号'); 
                        return false;
                    }
                    posth(url,{account:account},function(res){
                        $("#ajaxAdminList").html(res);
                    });
                });
                
                // 点击添加
                $("#modal-form-add form").submit(function(e){
                    submitAjax($(this),function(res){
                        if(res.success){
                            $('.close').trigger('click');
                            layer.msg(res.msg);
                            getAdminList();
                        }
                    });
                    return false;
                });
                
                
        

            })
            // 获取管理员列表
            function getAdminList(){

                var url = module + '/power/ajaxAdminList';
                posth(url,null,function(res){
                    $("#ajaxAdminList").html(res);
                });
            }

            <?php echo '</script'; ?>
>
            
        </div>
    </div>

</body>
</html>
<?php }
}
?>