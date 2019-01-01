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
            username: {
                message: '用户名验证失败', //局部出错消息
                //验证器里面配置验证的规则
                validators: {
                    //非空验证
                    notEmpty: {
                        message: '用户名必须填写' //优先级最高的出错信息
                    },
                    //用户名长度验证
                    stringLength: {
                        min: 2,
                        max: 18,
                        message: '用户名长度必须在2~18位之间'
                    }
                }
            },
            // 验证码验证
            checkCode: {
                message: '验证码验证失败', //局部出错消息
                //验证器里面配置验证的规则
                validators: {
                    //非空验证
                    notEmpty: {
                        message: '验证码必须填写' //优先级最高的出错信息
                    },
                    //用户名长度验证
                    stringLength: {
                        min: 1,
                        max: 4,
                        message: '用户名长度必须在1-4位之间'
                    }
                }
            },
            inputPassword1: {
                validators: {
                    notEmpty: {
                        message: '密码必须填写'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: '密码长度必须在6~30位之间'
                    }
                }
            },
            inputPassword2: {
                validators: {
                    notEmpty: {
                        message: '确认密码必须填写'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: '确认密码长度必须在6~30位之间'
                    },
                    //验证两次密码是否一致
                    identical: {
                        field: 'inputPassword1', //与那个字段比较
                        message: '两次密码必须保持一致'
                    }
                }
            },
            mobile: {
                validators: {
                    //非空验证
                    notEmpty: {
                        message: '手机号码必须填写'
                    },
                    //正则表达式验证手机号码
                    regexp: {
                        regexp: /^1(3|4|5|6|7|8)\d{9}$/,
                        message: '手机号码格式错误，必须是11位数字'
                    }
                }
            },
            email: {
                validators: {
                    //非空验证
                    notEmpty: {
                        message: '电子邮件必须填写'
                    },
                    emailAddress: {
                        message: '电子邮件地址格式不正确，正确格式：abc@126.com'
                    }
                }
            }
        }
    }) //调用bootstrapValidator方法验证，参数是配置对象
    .on('success.form.bv', function(e) {
        //表单验证成功后的事件处理函数
        // 阻止提交的默认行为
        e.preventDefault();
        // 获取输入的数据
        let userdata=$("#myform").serialize()
        $.post("../../API/user.php",userdata,function(data){
            if(data.isok){
                // 启动模态框
                $('#myModal').modal('show');
                // 获取模态框标题
                $("#myModalLabel").text(data.msg)
                $(".modal-body").html("<span class='glyphicon glyphicon-ok text-success'></span>"+data.msg+"<span id='num'>3</span>秒后跳转登录页面");
                let num=3;
                let time=setInterval(function(){
                    num--;
                    // 修改数字到页面中
                    $("#num").text(num);
                    if(num<=0){
                        clearInterval(time);
                        location.href="/login.php";
                    }
                },1000)
            }else{
                $("#myModalLabel").text(data.msg)
                $(".modal-body").html("<span class='glyphicon glyphicon-ok text-danger'></span>"+data.msg);
            }
        }, 'json')


        /* // Get the form instance
        var $form = $(e.target);

        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');

        // Use Ajax to submit form data
        $.post($form.attr('action'), $form.serialize(), function(result) {
            console.log(result);
        }, 'json'); */
    });

                    // // 启动模态框
                    // $('#myModal').modal('show');
                    // // 获取模态框标题
                    // $("#myModalLabel").text('data.msg')
                    // $(".modal-body").html("<span class='glyphicon glyphicon-ok text-success'></span>"+'data.msg')