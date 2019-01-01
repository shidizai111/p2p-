var mycanvas=document.getElementById("mycanvas"); //获取canvas的dom
var ct=mycanvas.getContext("2d"); //设置绘图方式2D

//指定范围随机数
function rndNum(min,max) {
    return Math.floor(Math.random()*(max-min+1)+min);
}

//随机生成颜色
function rndColor(min,max,alphaNum) {
    //颜色的取值是0~255,值越小颜色越深,值越大颜色越浅
    var alpha=1;
    //如果alphaNum大于1就表示要使用alpha,等于1表示不使用alpha
    if(alphaNum>1)
    {
        alpha=Math.random();
    }

    var color="rgba("+rndNum(min,max)+","+rndNum(min,max)+","+rndNum(min,max)+","+alpha+")";
    return color;
}
var num="";
//创建验证码的函数
function creatCode() {
    //1. 绘制背景色,绘制矩形
    ct.fillStyle=rndColor(200,255,1);
    ct.fillRect(0,0,100,60);
    num="";
    //2. 构造一个包含数字/大小写字母的数组:元素个数26+10=36  索引0~35
    var strArray=[0,1,2,3,4,5,6,7,8,9,"a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y",'z'];
    for (var i = 0; i < 4; i++) {
        //console.log(strArray[rndNum(0,strArray.length-1)]);
        var textStr=strArray[rndNum(0,strArray.length-1)];
            num+=textStr
            //3. 随机得到任意的字母或者数字,使用canvas的文本绘制方法,颜色是随机的颜色
            ct.font="30px Palatino";
            ct.fillStyle=rndColor(0,180,1);
            ct.fillText(textStr,i*25+5, 30);
        }
        // console.log(num);

    //5. 随机绘制一些线条作为干扰,长度/颜色/位置都是随机的
    for (var i = 0; i < 20; i++) {
        //3-1. 线条颜色
        ct.strokeStyle=rndColor(150,255,2);
        ct.beginPath();
        //3-2. 线条宽度
        ct.lineWidth=1;
        //3-3. 提笔的起点
        ct.moveTo(rndNum(0,100),rndNum(0,40));
        //3-4. 提笔的终点
        ct.lineTo(rndNum(0,100),rndNum(0,40));
        //3-5. 执行绘画
        ct.stroke();
    }

    //6. 随机绘制一些小圆作为干扰,大小/颜色/位置都是随机的
    for (var i = 0; i < 15; i++) {
        ct.fillStyle=rndColor(50,255,2);
        ct.beginPath();
        ct.arc(rndNum(0,100),rndNum(0,60),rndNum(1,3),0,Math.PI*2,true);
        ct.fill();
        ct.stroke();
    }
}

// 默认第一次加载验证码
creatCode();

// 单击canvas就更换验证码
mycanvas.onclick=creatCode;



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
                    callback:{
                        callback(value){
                            // {'valid':true/false, 'message':''}
                            if(value==num){
                                return {
                                    'valid':true
                                }
                            }else{
                                return{
                                    "valid":false,
                                    "message":'验证码输入错误'
                                }
                            }
                        }
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
        }
    }) //调用bootstrapValidator方法验证，参数是配置对象
    .on('success.form.bv', function(e) {
        //表单验证成功后的事件处理函数
        // 阻止提交的默认行为
        e.preventDefault();
        // 获取输入的数据
        let userdata=$("#myform").serialize()
        $.post("../../API/userlogin.php",userdata,function(data){

            // console.log(data)
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
                        location.href="/personal.php";
                    }
                },1000)
            }else{
                $('#myModal').modal('show');
                $("#myModalLabel").text(data.msg)
                $(".modal-body").html("<span class='glyphicon glyphicon-remove text-danger'></span>"+data.msg);
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