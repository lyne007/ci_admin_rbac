<?php /* Smarty version 3.1.27, created on 2020-11-12 02:03:17
         compiled from "E:\wamp\www\BONLI\ci3\application\views\power\role-tree.html" */ ?>
<?php
/*%%SmartyHeaderCode:53415fac97e54ae966_66274058%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f42307ad04f49fb9829b391de930b625062f850' => 
    array (
      0 => 'E:\\wamp\\www\\BONLI\\ci3\\application\\views\\power\\role-tree.html',
      1 => 1605146593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53415fac97e54ae966_66274058',
  'variables' => 
  array (
    'public' => 0,
    'roleinfo' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fac97e5546f07_48736643',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fac97e5546f07_48736643')) {
function content_5fac97e5546f07_48736643 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '53415fac97e54ae966_66274058';
?>
<!DOCTYPE html>
<html>
<head>
<?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/ztree/zTreeStyle.css" type="text/css">
</head>
<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <?php echo $_smarty_tpl->getSubTemplate ("public/navbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <?php echo $_smarty_tpl->getSubTemplate ("public/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <div class="row" id="content-main" style="height:calc(100% - 100px);">
                <br>
                
                <div class="col-sm-6 animated fadeInRight">
                    <div class="mail-box-header">

                        <form method="get" action="#" class="pull-right mail-search">
                            <div class="input-group">
                                <a class="btn btn-white btn-xs pull-right" href="javascript:;" onclick="javascript:history.back(-1)">返回上一页</a>
                            </div>
                        </form>
                        <h2>权限分配情况</h2>
                    </div>
                    <div class="mail-box">
                        <div id="assign-power" class="xxListData name5">
                            <input type="hidden" name="mask-rid" value="<?php echo $_smarty_tpl->tpl_vars['roleinfo']->value['id'];?>
">
                            <div class="ztree-div pl50 pb20 pt10">
                                <ul id="treeDemo" class="ztree"></ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content mailbox-content">
                            <div class="file-manager">
                                <div class="space-25"></div>
                                <h5>角色信息</h5>
                                <ul class="folder-list m-b-md category-list" style="padding: 0">
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-circle text-navy"></i>名称：<?php echo $_smarty_tpl->tpl_vars['roleinfo']->value['name'];?>
 
                                            <!-- <span class="label label-warning pull-right">16</span> -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-circle text-danger"></i>描述：<?php echo $_smarty_tpl->tpl_vars['roleinfo']->value['desc'];?>
 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-circle text-warning"></i>状态：<?php if ($_smarty_tpl->tpl_vars['roleinfo']->value['status']) {?>正常<?php } else { ?>禁用<?php }?> </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> <i class="fa fa-circle text-primary"></i>创建时间：<?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['roleinfo']->value['add_time']);?>
 </a>
                                    </li>
                                </ul>
                                <div class="col-sm-12">
                                    <div class="col-sm-6 p0">
                                        <input class="btn btn-w-m btn-white" type="submit" onclick="changeNodeStatas(true)" value="全部展开" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="btn btn-w-m btn-white" type="submit" onclick="changeNodeStatas(false)" value="全部折叠" />
                                    </div>
                                </div>
                                <div class="col-sm-12 mt20">
                                    <a id="savePower" class="btn btn-block btn-primary compose-mail" href="javascript:;">提交更新</a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/ztree/jquery.ztree.core.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/ztree/jquery.ztree.excheck.js"><?php echo '</script'; ?>
>
        </div>
        <!--右侧部分结束-->
    </div>

    <?php echo '<script'; ?>
 type="text/javascript">
    /* 权限分配、ztree配置 js */
    var setting = {
        view: {
            showIcon: false
        },
        check: {
            enable: true,
            chkStyle: "checkbox",
            chkboxType: { "Y": "ps", "N": "s" }
        },
        data: {
            simpleData: {                         
                enable: true,  
                idKey: "id",  //id和pid，这里不用多说了吧，树的目录级别  
                pIdKey: "pid",  
                rootPId: 0   //根节点  
            },
            key: {
                name: "name"
            }   
        },
        callback:{
            onCheck:onCheck
        }
    };

    /* 数据 可设置默认勾选状态 */
    var zNodes;
    
    $(document).ready(function(){
        var rid = $("#assign-power input[name='mask-rid']").val();
        post(module+'/power/getPower',{id:rid},function(data){
            if(data.length==0){
                $(".ztree-div").html("<h1 class='logo-name f40'>找不到哦.</h1><a class='btn btn-success' href='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/power/menu'>马上去添加</a>");
            }else{
                zNodes=data;    //将请求返回的数据存起来      
                /* 初始化ztree */
                var treeObj = $.fn.zTree.init($("#treeDemo"), setting, zNodes);
                treeObj.expandAll(true);  // 全部展开
            }
        });
    });
    
    /* 点击事件 获取所有被选中节点的值 */
    function onCheck(e,treeId,treeNode){
        var treeObj=$.fn.zTree.getZTreeObj("treeDemo"),
        nodes=treeObj.getCheckedNodes(true),
        v="";
        for(var i=0;i<nodes.length;i++){
            v+=nodes[i].id + ",";
            // alert(nodes[i].id); //获取选中节点的id
            // alert(nodes[i].pId); //获取选中节点的pid
            // alert(nodes[i].name); //获取选中节点的name
        }
        return v;
    }
    
    // 点击保存
    $("#savePower").click(function(){
        var v = onCheck();
        var rid = $("#assign-power input[name='mask-rid']").val();
        var url = module+'/power/roleAddPower';
        var data = {menu_id:v,id:rid};
        post(url,data,function(res){
            res.success && $('.close').trigger('click');
            layer.msg(res.msg,{icon:1});
        });
    }) 

    // 展开/折叠 所有节点
    function changeNodeStatas(Boolean){
         var treeObj=$.fn.zTree.getZTreeObj("treeDemo");
         treeObj.expandAll(Boolean);
    }

<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
?>