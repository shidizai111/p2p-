//验证的表单id
$('#myform')
    .bootstrapValidator({
        message: '当前字段验证失败', //全局出错消息
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok', //验证成功的图标
            invalid: 'glyphicon glyphicon-remove', //验证失败的图标
            validating: 'glyphicon glyphicon-refresh' //ajax验证进行中的图标  
        },
        fields: {
            //验证的字段名称，使用name属性 name="username"
            number: {
                message: '交易号验证失败', //局部出错消息
                //验证器里面配置验证的规则
                validators: {
                    //非空验证
                    notEmpty: {
                        message: '交易号必须填写' //优先级最高的出错信息
                    },
                    //用户名长度验证
                    //正则表达式验证手机号码
                    regexp: {
                    regexp:/(^[1-9]([0-9]+)?(\.[0-9]{1,2})?$)|(^(0){1}$)|(^[0-9]\.[0-9]([0-9])?$)/,
                    message: '输入交易号格式错误'
                }
                }
            },
            ctime:{
                validators: {
                    notEmpty: {
                        message: '充值时间必须填写'
                    },
                     //正则表达式验证
                     regexp: {
                        regexp:/((?!0000)[0-9]{4}-((0[1-9]|1[0-2])-(0[1-9]|1[0-9]|2[0-8])|(0[13-9]|1[0-2])-(29|30)|(0[13578]|1[02])-31)|([0-9]{2}(0[48]|[2468][048]|[13579][26])|(0[48]|[2468][048]|[13579][26])00)-02-29)/,
                        message: '日期格式错误'
                    }
                }
            },
            money:{
                validators: {
                    notEmpty: {
                        message: '充值金额必须填写'
                    },
                     //正则表达式验证手机号码
                     regexp: {
                        regexp:/(^[1-9]([0-9]+)?(\.[0-9]{1,2})?$)|(^(0){1}$)|(^[0-9]\.[0-9]([0-9])?$)/,
                        message: '输入金额格式错误'
                    }
                }
            },
        }
    }) //调用bootstrapValidator方法验证，参数是配置对象
    .on('success.form.bv', function(e) {
        //表单验证成功后的事件处理函数
        // 阻止提交的默认行为
        e.preventDefault();
        alert("表单验证成功！！！！");

        /* // Get the form instance
        var $form = $(e.target);

        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');

        // Use Ajax to submit form data
        $.post($form.attr('action'), $form.serialize(), function(result) {
            console.log(result);
        }, 'json'); */
    });