$(function(){

    // // 给按钮监听事件
    // $("#btnBorrow").on("click",function(){
    //     // 前端发送请求给后端 后端api接收数据 存储到数据库
    //     let $formdata=$("#myform").serialize();
    //     // console.log($formdata);
    //     $.post("../../API/borrowadd.php",$formdata,function(data){
    //         // console.log(data)
    //         if(data.isok){
    //             alert(data.msg)
    //             location.href="nameauthentication.php"
    //         }else{
    //             alert(data.msg)
    //         }
    //     },"json")
    // })

    //验证的表单id
$('#myform')
.bootstrapValidator({
    message: '当前字段验证失败', //全局出错消息
    fields: {
        //验证的借款金额
        bidRequestAmount: {
            validators: {
                //非空验证
                notEmpty: {
                    message: '借款金额必须填写'
                },
                //正则表达式验证手机号码
                regexp: {
                    regexp:/(^[1-9]([0-9]+)?(\.[0-9]{1,2})?$)|(^(0){1}$)|(^[0-9]\.[0-9]([0-9])?$)/,
                    message: '金额输入格式错误，必须是数字'
                }
            }
        },
        //验证的借款利息
        currentRate: {
        validators: {
                    //非空验证
                    notEmpty: {
                        message: '借款利息必须填写'
                    },
                    //正则表达式验证手机号码
                    regexp: {
                        regexp:/(^[1-9]([0-9]+)?(\.[0-9]{1,2})?$)|(^(0){1}$)|(^[0-9]\.[0-9]([0-9])?$)/,
                        message: '金额输入格式错误，必须是数字'
                    }
                }
                },
    //验证最小投标
    minBidAmount: {
        validators: {
        //非空验证
                    notEmpty: {
                        message: '最小投标必须填写'
                    },
                    //正则表达式验证手机号码
                    regexp: {
                        regexp:/(^[1-9]([0-9]+)?(\.[0-9]{1,2})?$)|(^(0){1}$)|(^[0-9]\.[0-9]([0-9])?$)/,
                        message: '金额输入格式错误，必须是数字'
                    }
                }
                },
        // 验证借款标题
        borrowTitle: {
            validators: {
                notEmpty: {
                    message: '借款标题必须填写'
                },
                stringLength: {
                    min: 2,
                    message: '标题内容必须在2个字数以上'
                },
            }
        },
    // 验证借款描述验证
    borrowDescription: {
        validators: {
            notEmpty: {
                message: '借款描述必须填写'
            },
            stringLength: {
                min: 10,
                message: '描述内容必须在10个字数以上'
            },
        }
    },
    }
}) //调用bootstrapValidator方法验证，参数是配置对象
.on('success.form.bv', function(e) {
    //表单验证成功后的事件处理函数
    // 阻止提交的默认行为
    e.preventDefault();

    // 前端发送请求给后端 后端api接收数据 存储到数据库
    let $formdata=$("#myform").serialize();
    // console.log($formdata);
    $.post("../../API/borrowadd.php",$formdata,function(data){
        // console.log(data)
        if(data.isok){
            alert(data.msg)
            location.href="nameauthentication.php"
        }else{
            alert(data.msg)
        }
    },"json")


});

                // // 启动模态框
                // $('#myModal').modal('show');
                // // 获取模态框标题
                // $("#myModalLabel").text('data.msg')
                // $(".modal-body").html("<span class='glyphicon glyphicon-ok text-success'></span>"+'data.msg')
})