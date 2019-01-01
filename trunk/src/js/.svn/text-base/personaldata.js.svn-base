//验证的表单id


$("#myform")
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
            mobile:{
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
        }
    }) //调用bootstrapValidator方法验证，参数是配置对象
    .on('success.form.bv', function(e) {
        //表单验证成功后的事件处理函数
        // 阻止提交的默认行为
        e.preventDefault();
        // // 把修改后的数据发送给后台
        // let $postdata=$("#myform").serialize();
        // console.log($postdata);
        // $.post("API/userEdit.php",$postdata,function(reslut){
        //     console.log();
        // })
        
        /* // Get the form instance
        var $form = $(e.target);
        
        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');
        
        // Use Ajax to submit form data
        $.post($form.attr('action'), $form.serialize(), function(result) {
            console.log(result);
        }, 'json'); */
    });
     //3.修改信息并保存，重新发起ajax请求修改后的数据传到后端
     $("#submitBtn").on("click",function () {
        // 收集表单数据
        let postData=$("#myform").serialize();
            // console.log(postData);
        // ajax发送修改后的数据到后端api
        $.post("API/userEdit.php",postData,function (result) {
            alert(result.msg);
            if(result.isOk){
                location.href="personal.php?menuid=1";
            }
        },"json");
    });
      // 发送ajax获取用户数据资料 把数据回填到表单
  $.get("../../API/getUserInfo.php",function(userdatas){
    // console.log(userdatas);
    // 用户名回显
    $('span[name=user_name]').text(userdatas.userdata.user_name);
    $('input[name=user_realname]').text(userdatas.userdata.user_realname);
    $('input[name=user_mobile]').val(userdatas.userdata.user_mobile);
    $('input[name=user_tel]').val(userdatas.userdata.user_tel);
    $('select[name=user_education]').val(userdatas.userdata.user_education);
    $('select[name=user_money]').val(userdatas.userdata.user_money);
    $('input[name=user_address]').val(userdatas.userdata.user_address);
},'json')
  