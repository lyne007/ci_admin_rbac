<?php /* Smarty version 3.1.27, created on 2020-11-12 01:51:52
         compiled from "E:\wamp\www\BONLI\ci3\application\views\public\password-edit.html" */ ?>
<?php
/*%%SmartyHeaderCode:312265fac9538ee3506_97728171%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98549dbe8e9f87235113d06c5d4428dde90d9ad3' => 
    array (
      0 => 'E:\\wamp\\www\\BONLI\\ci3\\application\\views\\public\\password-edit.html',
      1 => 1605145870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312265fac9538ee3506_97728171',
  'variables' => 
  array (
    'public' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5fac9538f3d2a6_22359944',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5fac9538f3d2a6_22359944')) {
function content_5fac9538f3d2a6_22359944 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '312265fac9538ee3506_97728171';
?>

<div id="modal-form-password" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-11">
                        <div class="m-b-md">
                            <h5>修改密码</h5>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <button class="close" type="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="col-sm-12">

                        <div class="ibox float-e-margins mb0">
                            <div class="ibox-content">
                                <div class="form-horizontal m-t">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">账号：</label>
                                        <div class="col-sm-8">
                                            <input name="account" class="form-control" type="email" value="<?php echo $_SESSION['login']['account'];?>
" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">原始密码：</label>
                                        <div class="col-sm-8">
                                            <input name="password" class="form-control" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">新密码：</label>
                                        <div class="col-sm-8">
                                            <input name="newpassword" class="form-control" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">确认新密码：</label>
                                        <div class="col-sm-8">
                                            <input name="confirm_newpassword" class="form-control" type="password">
                                            <br>
                                            <span id="password-error-msg" class="hidden help-block m-b-none" style="color:#a94442"><i class="fa fa-info-circle"></i> <span>请再次输入您的新密码</span></span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <div class="col-sm-8 col-sm-offset-3">
                                            <button class="btn btn-w-m btn-primary edit_pass_btn" type="submit">提交</button>
                                            <button class="btn btn-w-m btn-default pass-cancel-btn" type="reset">取消</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
    $('.edit_pass').click(function(){
        $('input[name="password"]').val('');
        $('input[name="newpassword"]').val('');
        $('input[name="confirm_newpassword"]').val('');
        $('.edit_pass_btn').removeAttr('disabled');
    })
	$(".pass-cancel-btn").click(function(){
		$("#modal-form-password .close").trigger('click');
	});

	$("#modal-form-password input[name='newpassword'],#modal-form-password input[name='confirm_newpassword']").keyup(function(){
		var n_pwd = $("input[name='newpassword']").val();
		var c_n_pwd = $("input[name='confirm_newpassword']").val();
		if(n_pwd !== c_n_pwd){
			$("#password-error-msg").removeClass('hidden').children('span').html('与新的密码不一致！');
		}else{
			$("#password-error-msg").addClass('hidden');
		}
	});

	$("#modal-form-password button[type='submit']").click(function(){
        var n_pwd = $("input[name='newpassword']").val();
        var c_n_pwd = $("input[name='confirm_newpassword']").val();
        if(n_pwd !== c_n_pwd){
            $("#password-error-msg").removeClass('hidden').children('span').html('与新的密码不一致！');
            return false;
        }else{
            $("#password-error-msg").addClass('hidden');
        }
		$(this).attr('disabled','disabled');
		var url = module + '/power/ajaxPasswordEdit';
		var jsonData={};
	    $(this).parents('#modal-form-password').find('input').each(function(){
	    	jsonData[this.name]=this.value;
	    });
	    $this = $(this);
        post(url,{jsonData},function(r){
            if(r.success==true){
                $("#password-error-msg").addClass('hidden');
                $(".pass-cancel-btn").trigger('click');
                toastr.success(r.msg);
            }else{
                $this.removeAttr('disabled');
                toastr.error(r.msg);
            }
        })
	});
})
<?php echo '</script'; ?>
>




<?php }
}
?>