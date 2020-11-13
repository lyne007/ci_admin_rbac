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
            // firstname: "required",
            // lastname: "required",
            RealName: {
                required: !0,
                minlength: 2
            },
            PassWord: {
                required: !0,
                minlength: 5
            },
            ConfirmPassword: {
                required: !0,
                minlength: 5,
                equalTo: "#password-add"
            },
            Account: {
                required: !0,
                email: !0
            },
            agree: "required"
        },
        messages: {
            // firstname: e + "请输入你的姓",
            // lastname: e + "请输入您的名字",
            RealName: {
                required: e + "请输入您的用户名",
                minlength: e + "用户名必须两个字符以上"
            },
            PassWord: {
                required: e + "请输入您的密码",
                minlength: e + "密码必须5个字符以上"
            },
            ConfirmPassword: {
                required: e + "请再次输入密码",
                minlength: e + "密码必须5个字符以上",
                equalTo: e + "两次输入的密码不一致"
            },
            Account: e + "请输入您的E-mail",
            agree: {
                required: e + "必须同意协议后才能注册",
                element: "#agree-error"
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
            // firstname: "required",
            // lastname: "required",
            RealName: {
                required: !0,
                minlength: 2
            },
            PassWord: {
                required: !0,
                minlength: 5
            },
            ConfirmPassword: {
                required: !0,
                minlength: 5,
                equalTo: "#password-edit"
            },
            Account: {
                required: !0,
                email: !0
            },
            agree: "required"
        },
        messages: {
            // firstname: e + "请输入你的姓",
            // lastname: e + "请输入您的名字",
            RealName: {
                required: e + "请输入您的用户名",
                minlength: e + "用户名必须两个字符以上"
            },
            PassWord: {
                required: e + "请输入您的密码",
                minlength: e + "密码必须5个字符以上"
            },
            ConfirmPassword: {
                required: e + "请再次输入密码",
                minlength: e + "密码必须5个字符以上",
                equalTo: e + "两次输入的密码不一致"
            },
            Account: e + "请输入您的E-mail",
            agree: {
                required: e + "必须同意协议后才能注册",
                element: "#agree-error"
            }
        }
    })
    
});