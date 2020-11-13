// 创建
$.validator.setDefaults({
    highlight: function(e) {
        $(e).closest(".form-group").removeClass("has-success").addClass("has-error")
    },
    success: function(e) {
        e.closest(".form-group").removeClass("has-error").addClass("has-success")
    },
    errorElement: "span",
    errorPlacement: function(e, r) {
        e.appendTo(r.is(":radio") || r.is(":checkbox") ? r.parent().parent().parent() : r.parent())
    },
    errorClass: "help-block m-b-none",
    validClass: "help-block m-b-none"
}),
$().ready(function() {
    $("#commentForm").validate();
    var e = "<i class='fa fa-times-circle'></i> ";
    $("#signupForm-add").validate({
        rules: {
            Name: {
                required: !0,
                minlength: 3
            },
            Action: {
                required: !0,
                minlength: 4
            },
            Order: {
                required: !0,
                minlength: 1
            }
        },
        messages: {
            Name: {
                required: e + "请输入菜单名称",
                minlength: e + "用户名必须三个字符以上"
            },
            Action: {
                required: e + "请输入链接URL",
                minlength: e + "链接URL必须4个字符以上"
            },
            Order: {
                required: e + "请输入排序",
                minlength: e + "排序必须1位数字及以上"
            }
        }
    })
    
});
// 编辑
$.validator.setDefaults({
    highlight: function(e) {
        $(e).closest(".form-group").removeClass("has-success").addClass("has-error")
    },
    success: function(e) {
        e.closest(".form-group").removeClass("has-error").addClass("has-success")
    },
    errorElement: "span",
    errorPlacement: function(e, r) {
        e.appendTo(r.is(":radio") || r.is(":checkbox") ? r.parent().parent().parent() : r.parent())
    },
    errorClass: "help-block m-b-none",
    validClass: "help-block m-b-none"
}),
$().ready(function() {
    $("#commentForm").validate();
    var e = "<i class='fa fa-times-circle'></i> ";
    $("#signupForm-edit").validate({
        rules: {
            Name: {
                required: !0,
                minlength: 3
            },
            Action: {
                required: !0,
                minlength: 4
            },
            Order: {
                required: !0,
                minlength: 1
            }
        },
        messages: {
            Name: {
                required: e + "请输入菜单名称",
                minlength: e + "用户名必须三个字符以上"
            },
            Action: {
                required: e + "请输入链接URL",
                minlength: e + "链接URL必须4个字符以上"
            },
            Order: {
                required: e + "请输入排序",
                minlength: e + "排序必须1位数字及以上"
            }
        }
    })
    
});