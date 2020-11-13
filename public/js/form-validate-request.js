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
    $("#request").validate({
        rules: {
            RequestParam: {
                required: !0,
                minlength: 20
            }
        },
        messages: {
            RequestParam: {
                required: e + "请输入请求参数",
                minlength: e + "必须两十个字符以上"
            }
        }
    })
    
});
