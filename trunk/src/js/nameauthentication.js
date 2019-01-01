// 发送请求请求数据
$.get("../../API/getBorrowByUserid.php",function(borrowData){
    // console.log(borrowData);
    // // 模板和数据结合
    let $htmlStr=$("#borrowTmpl").tmpl(borrowData);
    // 更新渲染后的数据到html中
    $("#showBorrow").html($htmlStr);

},'json')