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
            Name: {
                required: !0,
                minlength: 2
            },
            Desc: {
                required: !0,
                minlength: 5
            }
        },
        messages: {
            Name: {
                required: e + "请输入角色名称",
                minlength: e + "用户名必须两个字符以上"
            },
            Desc: {
                required: e + "请输入描述信息",
                minlength: e + "描述必须5个字符以上"
            }
        }
    });

    $("#signupForm-edit").validate({
        rules: {
            Name: {
                required: !0,
                minlength: 2
            },
            Desc: {
                required: !0,
                minlength: 5
            }
        },
        messages: {
            Name: {
                required: e + "请输入角色名称",
                minlength: e + "用户名必须两个字符以上"
            },
            Desc: {
                required: e + "请输入描述信息",
                minlength: e + "描述必须5个字符以上"
            }
        }
    })
    
});
// 编辑

