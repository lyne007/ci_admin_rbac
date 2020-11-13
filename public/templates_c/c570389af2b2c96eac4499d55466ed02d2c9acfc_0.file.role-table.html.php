<?php /* Smarty version 3.1.27, created on 2020-11-12 02:01:32
         compiled from "E:\wamp\www\BONLI\ci3\application\views\power\role-table.html" */ ?>
<?php
/*%%SmartyHeaderCode:127365fac977c6b2389_07510133%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c570389af2b2c96eac4499d55466ed02d2c9acfc' => 
    array (
      0 => 'E:\\wamp\\www\\BONLI\\ci3\\application\\views\\power\\role-table.html',
      1 => 1605146431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127365fac977c6b2389_07510133',
  'variables' => 
  array (
    'rolelist' => 0,
    'v' => 0,
    'k' => 0,
    'module' => 0,
    'total' => 0,
    'showpage' => 0,
    'last_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fac977c75a325_76649863',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fac977c75a325_76649863')) {
function content_5fac977c75a325_76649863 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '127365fac977c6b2389_07510133';
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>角色名称</th>
            <th>描述</th>
            <th>创建时间</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
    </thead>
    <?php if (!empty($_smarty_tpl->tpl_vars['rolelist']->value)) {?>
    <tbody>
    <?php
$_from = $_smarty_tpl->tpl_vars['rolelist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
        <tr>
            <td class="key_id" tmp-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo ($_smarty_tpl->tpl_vars['k']->value+1);?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['desc'];?>
</td>
            <td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['v']->value['add_time']);?>
</td>
            <td>
                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['v']->value['status']) {?>checked<?php }?> class="onoffswitch-checkbox" id="example<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                        <label class="onoffswitch-label" for="example<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </td>
            <td>
                <a class="btn btn-xs btn-outline btn-success" href="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/power/roleTree/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">设置权限</a>
                <a data-toggle="modal" class="btn btn-xs btn-outline btn-warning role-edit" href="#modal-form-editrole">编辑</a>
                <a class="btn btn-xs btn-outline btn-danger role-delete" href="JavaScript:;">删除</a>
            </td>
        </tr>
    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
    <?php } else { ?>
        <tr class="no-records-found t-align">
            <td colspan="6">没有找到匹配的记录</td>
        </tr>
    <?php }?>
    </tbody>
</table>

<div id="page-div" class="row">
    <div class="col-sm-6">
        <div id="editable_info" class="dataTables_info" role="alert" aria-live="polite" aria-relevant="all">显示 <span class="start">0</span> 到 <span class="end">0</span> 项，共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 项</div>
    </div>
    <div class="col-sm-6">
        <div id="editable_paginate" class="dataTables_paginate paging_simple_numbers">
            <ul class="pagination">
                <?php if (!empty($_smarty_tpl->tpl_vars['showpage']->value)) {?>
                <li id="page-first" class="paginate_button previous" aria-controls="editable" tabindex="0">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/power/ajaxRoleList/1">首页</a>
                </li>
                <?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>

                <li id="page-last" class="paginate_button next" aria-controls="editable" tabindex="0">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/power/ajaxRoleList/<?php echo $_smarty_tpl->tpl_vars['last_page']->value;?>
">尾页</a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
    // 显示从1到10项，共xx项
    var start = $("#ajaxRoleList table tbody tr:first").find('.key_id').html();
    var end = $("#ajaxRoleList table tbody tr:last").find('.key_id').html();
    $("#page-div .start").html(start);
    $("#page-div .end").html(end);

    // 上一页下一页改为post
    $("#page-div .paginate_button").click(function (event) {
        if($(this).hasClass('active')) return false;
        var url = $(this).children('a').attr('href');
        posth(url,null,function (r) {
            $('#ajaxRoleList').html(r);
        });
        // return false;
        event.preventDefault();
    });

    // 删除
    $("#ajaxRoleList .role-delete").click(function(){
        var $this = $(this);
        layer.prompt({title: '输入管理员密码口令，并确认', formType: 1}, function(pass, index){
            layer.close(index);
            post(module+'/power/verifyPass',{pass:pass},function(checkres){
                if(checkres.success){
                    var url = module + '/power/ajaxDelRole';
                    var role_id = $this.parent('td').parent('tr').find('td:first').attr('tmp-id');
                    ajaxStatus = true;
                    post(url,{id:role_id},function(res){
                        res.success && $('.close').trigger('click');
                        layer.msg(res.msg,{icon:1,time:1200},function(){
                            getRoleList();
                        });
                    })
                }else{
                    layer.msg(checkres.msg,{icon:2});
                }

            });
        });
        
    });

    // 获取编辑管理员
    $("#ajaxRoleList .role-edit").click(function(){
        var url = module + '/power/getRoleInfo';
        var role_id = $(this).parents('tr').find('td:first').attr('tmp-id');
        post(url,{id:role_id},function(r){
            $("#modal-form-editrole").find("input[name='id']").val(r.id);
            $("#modal-form-editrole").find("input[name='name']").val(r.name);
            $("#modal-form-editrole").find("textarea[name='desc']").val(r.desc);
        });
    });
    
})
<?php echo '</script'; ?>
>



<?php }
}
?>