<?php /* Smarty version 3.1.27, created on 2020-11-12 01:54:53
         compiled from "E:\wamp\www\BONLI\ci3\application\views\power\menu-table.html" */ ?>
<?php
/*%%SmartyHeaderCode:203695fac95edbbc0d8_09248887%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e78c8e51a4d9b3e4e72e0706ba42e03d05acc6a' => 
    array (
      0 => 'E:\\wamp\\www\\BONLI\\ci3\\application\\views\\power\\menu-table.html',
      1 => 1605146091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203695fac95edbbc0d8_09248887',
  'variables' => 
  array (
    'menulist' => 0,
    'v' => 0,
    'k' => 0,
    'total' => 0,
    'showpage' => 0,
    'module' => 0,
    'last_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fac95edc87306_72237713',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fac95edc87306_72237713')) {
function content_5fac95edc87306_72237713 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '203695fac95edbbc0d8_09248887';
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>菜单名</th>
            <th>父级ID</th>
            <th>Action</th>
            <th>层级</th>
            <th>是否显示导航栏</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
    <?php if (!empty($_smarty_tpl->tpl_vars['menulist']->value)) {?>
    <?php
$_from = $_smarty_tpl->tpl_vars['menulist']->value;
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
        <td class="key_id" tmp-previd="<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
" tmp-level="<?php echo $_smarty_tpl->tpl_vars['v']->value['level'];?>
" tmp-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo ($_smarty_tpl->tpl_vars['k']->value+1);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['action'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['level_des'];?>
</td>
        <td>
            <div class="switch">
                <div class="onoffswitch">
                    <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['v']->value['is_navbar']) {?>checked<?php }?> class="onoffswitch-checkbox" id="example<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
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
            <?php if ($_smarty_tpl->tpl_vars['v']->value['level'] == 1) {?>
            <a data-toggle="modal" class="btn btn-xs btn-outline btn-success menu-select" href="#">查看</a>
            <a data-toggle="modal" class="btn btn-xs btn-outline btn-info menu-add" href="#modal-form-add">创建子级</a>
            <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['level'] == 2) {?>
            <a data-toggle="modal" class="btn btn-xs btn-outline btn-success menu-select" href="#">查看</a>
            <a data-toggle="modal" class="btn btn-xs btn-outline btn-success menu-back" href="#">上一级</a>
            <a data-toggle="modal" class="btn btn-xs btn-outline btn-info menu-add" href="#modal-form-add">创建子级</a>
            <?php } else { ?>
            <a data-toggle="modal" class="btn btn-xs btn-outline btn-success menu-back" href="#">上一级</a>
            <?php }?>
            <a data-toggle="modal" class="btn btn-xs btn-outline btn-warning menu-edit" href="#modal-form-edit">编辑</a>
            <a class="btn btn-xs btn-outline btn-danger menu-delete" href="javascript:;">删除</a>
        </td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
    <?php } else { ?>
    <tr class="no-records-found t-align">
        <td colspan="7">没有找到匹配的记录</td>
    </tr>
    </tbody>
    <?php }?>
</table>

<div id="page-div" class="row">
    <div class="col-sm-6">
        <div id="editable_info" class="dataTables_info" role="alert" aria-live="polite" aria-relevant="all">显示 <span class="start">1</span> 到 <span class="end">10</span> 项，共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 项</div>
    </div>
    <div class="col-sm-6">
        <div id="editable_paginate" class="dataTables_paginate paging_simple_numbers">
            <ul class="pagination">
                <?php if (!empty($_smarty_tpl->tpl_vars['showpage']->value)) {?>
                <li id="page-first" class="paginate_button previous" aria-controls="editable" tabindex="0">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/log/ajaxMenuList/1">首页</a>
                </li>
                <?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>

                <li id="page-last" class="paginate_button next" aria-controls="editable" tabindex="0">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/log/ajaxMenuList/<?php echo $_smarty_tpl->tpl_vars['last_page']->value;?>
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
    var start = $("#ajaxMenuList table tbody tr:first").find('.key_id').html();
    var end = $("#ajaxMenuList table tbody tr:last").find('.key_id').html();
    $("#page-div .start").html(start);
    $("#page-div .end").html(end);

    // 首页、尾页 url
    // var first_url = $("#page-first").next('li').children('a').attr('href');
    // var last_url = $("#page-last").prev('li').children('a').attr('href');
    // $("#page-first a").attr('href',first_url);
    // $("#page-last a").attr('href',last_url);

    var name = $("#menuList").find("input[name='name']").val();
    // 上一页下一页改为post
    $("#page-div .paginate_button").click(function (event) {
        var url = $(this).children('a').attr('href');
        posth(url,null,function (r) {
            $('#ajaxMenuList').html(r);
        });
        event.preventDefault();
    });

    
    // 删除菜单
    $("#ajaxMenuList .menu-delete").click(function(){

        var $this = $(this);
        layer.prompt({title: '输入管理员密码口令，并确认', formType: 1}, function(pass, index){
            layer.close(index);
            post(module+'/power/verifyPass',{pass:pass},function(checkres){
                if(checkres.success==true){
                    var url = module + '/power/ajaxDelMenu';
                    var menu_id = $this.parent('td').parent('tr').find('td:first').attr('tmp-id');
                    ajaxStatus = true;
                    post(url,{id:menu_id},function(res){
                        res.success && $('.close').trigger('click');
                        layer.msg(res.msg);
                        getMenuList();
                    })
                }else{
                    layer.msg(checkres.msg);
                }
            });
        });
    });

    // 获取编辑菜单
    $("#ajaxMenuList .menu-edit").click(function(){
        var url = module + '/power/getMenuInfo';
        var menu_id = $(this).parent('td').parent('tr').find('td:first').attr('tmp-id');
        post(url,{id:menu_id},function(r){
            $.cookie('input_obj_str',null);
            $("#modal-form-edit").find("input[name='name']").val(r.name);
            $("#modal-form-edit").find("textarea[name='action']").val(r.action);
            $("#modal-form-edit").find("input[name='order']").val(r.order);
            if(r.is_navbar==1){
                $("#modal-form-edit").find("input[name='is_navbar']:first").attr('checked',true).parent('div').addClass('checked');
                $("#modal-form-edit .js-html").html('').html('<div class="form-group"><label class="col-sm-3 control-label">跳转URL：</label><div class="col-sm-8"><input class="form-control" type="text" name="navbar_url" aria-required="true" aria-invalid="true" placeholder="例：/user/getList" value="'+r.navbar_url+'"/></div></div><div class="form-group"><label class="col-sm-3 control-label">icon：</label><div class="col-sm-8"><input class="form-control" name="icon" aria-required="true" placeholder="例：fa-home" value="'+r.icon+'"/><span class="help-block m-b-none"><i class="fa fa-info-circle"></i><a href="http://www.zi-han.net/theme/hplus/fontawesome.html" target="_blank"> 更多icon</a></span></div></div>');
                var input_obj = {"navbar_url":r.navbar_url,"icon":r.icon};
                $.cookie('input_obj_str',JSON.stringify(input_obj));
            }else{
                $("#modal-form-edit .js-html").html('');
                $("#modal-form-edit").find("input[name='is_navbar']:first").removeAttr('checked').parent('div').removeClass('checked');
                $("#modal-form-edit").find("input[name='is_navbar']:last").attr('checked',true).parent('div').addClass('checked');
            }
            
            
            $("#modal-form-edit").find("input[name='order']").val(r.order);
            $("#modal-form-edit").find("input[name='id']").val(r.id);
        });
    });

    // 编辑菜单
    $("#modal-form-edit form").submit(function(){
        submitAjax($(this),function(res){
            res.success && $('.close').trigger('click');
            layer.msg(res.msg);
            getMenuList();
        });
        return false;
    });

    // 查看子级
    $("#ajaxMenuList .menu-select").click(function(){
        var m_id = $(this).parent().parent().children('td:first').attr('tmp-id');
        var level = $(this).parent().parent().children('td:first').attr('tmp-level');
        var url = module + '/power/ajaxMenuList';
        $.post(url,{id:m_id,level:parseInt(level)+1},function(res){
            if(res=='null'){
                toastr.error('Sorry！无子级，可创建子级。');
                return false;
            }
            $("#ajaxMenuList").html(res);
        });
    });

    // 返回上一级
    $("#ajaxMenuList .menu-back").click(function(){
        var p_id = $(this).parent().parent().children('td:first').attr('tmp-previd');
        var level = $(this).parent().parent().children('td:first').attr('tmp-level');
        var url_prev = module + '/power/ajaxMenuPid';
        var url = module + '/power/ajaxMenuList';
        $.post(url_prev,{id:p_id},function(r){
            if(r=='ERROR') { toastr.warning('异常！请联系开发人员寻求帮助。'); return false; }

            $.post(url,{id:r,level:parseInt(level)-1},function(res){
                $("#ajaxMenuList").html(res);
            });
        });
    });

    // 创建子菜单1
    $(".menu-add").click(function(){
        $("#modal-form-add").find(".reset-btn").trigger('click');
        var p_id = $(this).parents('tr').children('td:first').attr('tmp-id');
        var level = $(this).parents('tr').children('td:first').attr('tmp-level');
        $("#modal-form-add form .add-child-tmp").html("<input type='type' name='pid' value='"+p_id+"'/><input type='type' name='level' value='"+(parseInt(level)+1)+"'/>");
    });
        
})

<?php echo '</script'; ?>
>



<?php }
}
?>