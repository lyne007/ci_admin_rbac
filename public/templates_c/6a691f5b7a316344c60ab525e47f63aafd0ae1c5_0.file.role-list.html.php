<?php /* Smarty version 3.1.27, created on 2020-11-20 06:54:44
         compiled from "E:\wamp\www\BONLI\ci3\application\views\power\role-list.html" */ ?>
<?php
/*%%SmartyHeaderCode:315375fb7683482f6e7_37630283%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a691f5b7a316344c60ab525e47f63aafd0ae1c5' => 
    array (
      0 => 'E:\\wamp\\www\\BONLI\\ci3\\application\\views\\power\\role-list.html',
      1 => 1605855164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315375fb7683482f6e7_37630283',
  'variables' => 
  array (
    'public' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fb768348b8289_40078587',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fb768348b8289_40078587')) {
function content_5fb768348b8289_40078587 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '315375fb7683482f6e7_37630283';
?>
<!DOCTYPE html>
<html>
<head>
<?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/plugins/switchery/switchery.css" rel="stylesheet">
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
                        <div id="roleList" class="ibox-title" style="min-height:94px">
                            <h5>角色列表</h5>
                            <div class="col-sm-12">
                                <form action="#">
                                <div class="col-sm-4">
                                    <div class="input-group m-b">
                                        <div class="input-group-btn">
                                            <button class="btn btn-white" type="button" aria-expanded="false">角色名</button>
                                        </div>
                                        <input class="form-control" type="text" name="role_name">
                                        <span class="input-group-btn search">
                                            <button class="btn btn-primary" type="button">搜索 </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="input-group m-b">
                                        <span class="input-group-btn">
                                            <a data-toggle="modal" class="btn btn-success addRole-btn" href="#modal-form-addrole">创建角色</a>
                                        </span>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div id="ajaxRoleList" class="ibox-content">
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div id="modal-form-addrole" class="modal fade" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-11">
                                    <div class="m-b-md">
                                        <h2>完善角色信息</h2>
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
/power/ajaxAddRole">
                                                
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">角色名称：</label>
                                                    <div class="col-sm-8">
                                                        <input name="name" class="form-control" type="text" required="" aria-required="true" class="error"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">描述：</label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" name="desc" required="" aria-required="true"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-8 col-sm-offset-3">
                                                        <button class="btn btn-primary" type="submit">提交</button>
                                                        <button class="hidden reset-btn" type="reset"></button>
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
            
            
            <div id="modal-form-editrole" class="modal fade" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-11">
                                    <div class="m-b-md">
                                        <h2>完善角色信息</h2>
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
/power/ajaxEditRole">
                                                <input type="hidden" name="id"/>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">角色名称：</label>
                                                    <div class="col-sm-8">
                                                        <input name="name" class="form-control" type="text" aria-required="true" aria-invalid="true" class="error" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">描述：</label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" name="desc" required="" aria-required="true"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-8 col-sm-offset-3">
                                                        <button class="btn btn-primary" type="submit">提交</button>
                                                        <button class="hidden reset-btn" type="reset"></button>
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
 type="text/javascript">
                $(function(){
                    // 获取管理员列表
                    getRoleList();
                    $("#roleList .search button").click(function(){
                        getRoleList();
                    });

                    // 重置表单
                    $("#roleList .addRole-btn").click(function(){
                        $("#modal-form-addrole").find(".reset-btn").trigger('click');
                    });

                    // 点击添加角色
                    $("#modal-form-addrole form").submit(function(e){
                        submitAjax($(this),function(res){
                            res.success && $('.close').trigger('click');
                            layer.msg(res.msg,{icon:1,time:1200},function(){
                                getRoleList();
                            });
                        });
                        return false;
                    });

                    // 编辑管理员
                    $("#modal-form-editrole form").submit(function(e){
                        var mark = true;
                        $("#modal-form-editrole form").find('input').each(function(){
                            var msg = $("#modal-form-editrole form").find("input[name='"+this.name+"']").attr('msg');
                            if(this.value==''){
                                layer.msg(msg,{icon:2,time:1200});
                                mark = false;
                                return mark;
                            }
                        });
                        if(!mark) return false;
                        submitAjax($(this),function(res){
                            res.success && $('.close').trigger('click');
                            layer.msg(res.msg,{icon:1,time:1200},function(){
                                getRoleList();
                            });
                        });
                        return false;
                    });

                })

                // 获取管理员列表
                function getRoleList(){
                    var r_name = $("input[name='name']").val();
                    var url = module + '/power/ajaxRoleList';
                    posth(url,{name:name},function(res){
                        $("#ajaxRoleList").html(res);
                    });
                }
            <?php echo '</script'; ?>
>
        </div>
        <!--右侧部分结束-->
    </div>

</body>
</html>
<?php }
}
?>