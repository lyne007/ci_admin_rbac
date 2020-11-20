<?php /* Smarty version 3.1.27, created on 2020-11-13 08:35:52
         compiled from "E:\wamp\www\BONLI\ci3\application\views\main\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:57165fae4568c77db6_96311855%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9532ebfcebf8505648010770da0d0495119f89ef' => 
    array (
      0 => 'E:\\wamp\\www\\BONLI\\ci3\\application\\views\\main\\index.html',
      1 => 1605256549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57165fae4568c77db6_96311855',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fae4568cd59c8_93100676',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fae4568cd59c8_93100676')) {
function content_5fae4568cd59c8_93100676 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '57165fae4568c77db6_96311855';
?>
<!DOCTYPE html>
<html>
<head>
<?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

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
                <div class="col-sm-11">
                    <div class="col-sm-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title" style="border-color:#1ab394">
                                <span class="label label-primary pull-right">今天</span>
                                <h5>今日订单量</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">0 单</h1>
                                <div class="stat-percent font-bold text-navy"></div>
                                <small><?php echo date('d');?>
日</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">至今</span>
                                <h5>待发货量</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">0 单</h1>
                                <div class="stat-percent font-bold text-success"></div>
                                <small>至今</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">至今</span>
                                <h5>待发货量</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">0 单</h1>
                                <div class="stat-percent font-bold text-success"></div>
                                <small>至今</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">至今</span>
                                <h5>待发货量</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">0 单</h1>
                                <div class="stat-percent font-bold text-success"></div>
                                <small>至今</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-11">
                    <div class="col-sm-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>最近10笔订单</h5>
                                <div class="ibox-tools">
                                    <small class="text-navy font-bold">总订单数量：0 笔</small>
                                </div>
                            </div>
                            <div class="ibox-content" style="min-height: 283px">
                                <table class="table table-hover no-margins">
                                    <thead>
                                        <tr>
                                            <th>订单号</th>
                                            <th>收件人</th>
                                            <th>手机号</th>
                                            <th>地址</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="no-records-found t-align">
                                            <td colspan="4">没有找到匹配的记录</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>最近上架产品</h5>
                                <div class="ibox-tools">
                                    <small class="text-navy font-bold">总数量：0 件</small>
                                </div>
                            </div>
                            <div class="ibox-content" style="min-height: 283px">
                                <table class="table table-hover no-margins">
                                    <thead>
                                        <tr>
                                            <th>编号</th>
                                            <th>名称</th>
                                            <th>库存</th>
                                            <th>状态</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['pres_order_list'])) {?>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['info']->value['pres_order_list'];
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
                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cf_code'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cf_status_v'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mask'];?>
</td>
                                        </tr>
                                        <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                                        <?php } else { ?>
                                        <tr class="no-records-found t-align">
                                            <td colspan="4">没有找到匹配的记录</td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
        <!--右侧部分结束-->
    </div>
</body>
</html>
<?php }
}
?>