/**
 *  作者：要的就是这个文艺范
 *  链接：https://www.jianshu.com/p/26348205b871
 **/

 /**
    示例：

    post(url,{id:role_id},function(res){
        res.success && $('.close').trigger('click');
        layer.msg(res.msg);
        getRoleList();
    })
    
    posth(url,null,function (r) {
        $('#ajaxRoleList').html(r);
    });

    submitAjax($(this),function(res){
        res.success && $('.close').trigger('click');
        layer.msg(res.msg);
        getAdminList();
    });
    return false;
 */
//页面加载所要进行的操作
$(function () {
    //设置ajax当前状态(是否可以发送);
    ajaxStatus = true;
});

// ajax封装
function ajax(url, data, success, cache, alone, async, type, dataType, error) {
    var type = type || 'post';//请求类型
    var dataType = dataType || '';//接收数据类型
    var async = async || true;//异步请求
    var alone = alone || false;//独立提交（一次有效的提交）
    var cache = cache || false;//浏览器历史缓存
    var success = success || function (data) {
            /*console.log('请求成功');*/
            setTimeout(function () {
                layer.msg(data.msg);//通过layer插件来进行提示信息
            },500);
            if(data.status){//服务器处理成功
                setTimeout(function () {
                    if(data.url){
                        location.replace(data.url);
                    }else{
                        location.reload(true);
                    }
                },1500);
            }else{//服务器处理失败
                if(alone){//改变ajax提交状态
                    ajaxStatus = true;
                }
            }
        };
    var error = error || function (data) {
            /*console.error('请求成功失败');*/
            /*data.status;//错误状态吗*/
            layer.closeAll('loading');
            // console.log(data);
            setTimeout(function () {
                if(data=='POWER_LIMIT'){
                    layer.msg('权限限制 Power Limit',{icon:2});
                }else if(data.status == 404){
                    layer.msg('请求失败，请求未找到');
                }else if(data.status == 503){
                    layer.msg('请求失败，服务器内部错误');
                }else {
                    if(data.responseText.indexOf('权限限制 Power Limit')>0){
                        layer.msg('权限限制 Power Limit',{icon:2});
                    }else if(data.responseText.indexOf('登录')>0){
                        layer.msg('登录超时，请重新登录',{icon:2},function(){
                            window.location.reload();
                        });
                    }else{
                        layer.msg('请求失败,网络连接超时');
                    }
                }
                ajaxStatus = true;
            },500);
        };
    /*判断是否可以发送请求*/
    if(!ajaxStatus){
        return false;
    }
    ajaxStatus = false;//禁用ajax请求
    /*正常情况下1秒后可以再次多个异步请求，为true时只可以有一次有效请求（例如添加数据）*/
    if(!alone){
        setTimeout(function () {
            ajaxStatus = true;
        },1000);
    }
    var loading;
    $.ajax({
        url: url,
        data: data,
        type: type,
        dataType: dataType,
        async: async,
        success: success,
        error: error,
        jsonpCallback: 'jsonp' + (new Date()).valueOf().toString().substr(-4),
        beforeSend: function (xhr) {
            $.cookie('ajaxmark','ajax');
            loading = layer.msg('加载中', {  //通过layer插件来进行提示正在加载
                icon: 16,
                shade: [0.5,'#000']
            });
        },
        complete: function () {
            setTimeout(function () {
                layer.close(loading);
                $.cookie('ajaxmark',null);
            },100);
        }
    });
}

// submitAjax(post方式提交)
function submitAjax(form, success, cache, alone) {
    cache = cache || true;
    var form = form;
    if(form.find('div').hasClass('has-error')){
        return false;
    }
    var url = form.attr('action');
    var data = form.serialize();
    ajax(url, data, success, cache, alone, false, 'post','json');
}
/*//调用实例
$(function () {
    $('#form-login').submit(function () {
        submitAjax('#form-login');
        return false;
    });
});*/
// ajax提交(post方式提交),响应html
function posth(url, data, success, cache, alone) {
    ajaxStatus = true;
    ajax(url, data, success, cache, alone, false, 'post');
}
// ajax提交(post方式提交),响应json
function post(url, data, success, cache, alone) {
    ajax(url, data, success, cache, alone, false, 'post','json');
}

// ajax提交(get方式提交)
function geth(url, success, cache, alone) {
    ajax(url, {}, success, alone, false, 'get');
}

// ajax提交(get方式提交)
function get(url, success, cache, alone) {
    ajax(url, {}, success, alone, false, 'get','json');
}

// jsonp跨域请求(get方式提交)
function jsonp(url, success, cache, alone) {
    ajax(url, {}, success, cache, alone, false, 'get','jsonp');
}

// getparam form请求数据 
function getparam(form){
    var form = $(form);
    var jsonData = {};
    form.find('input,select,textarea').each(function(){
        (this.type=='radio') && $("input[name='"+this.name+"']:checked").val();
        jsonData[this.name]=this.value;
    });
    
    return jsonData;
}

