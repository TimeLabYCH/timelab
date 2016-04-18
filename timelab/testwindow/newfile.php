

function openNew(){
//获取页面的高度和宽度
var sWidth=document.body.scrollWidth;
var sHeight=document.body.scrollHeight;
 
//获取页面的可视区域高度和宽度
var wHeight=document.documentElement.clientHeight;
 
var oLogin=document.createElement("div");
oLogin.id="login";
oLogin.innerHTML="<div class='loginCon'><div id='close'>点击关闭</div></div>";
document.body.appendChild(oLogin);
 
//获取登陆框的宽和高
var dHeight=oLogin.offsetHeight;
var dWidth=oLogin.offsetWidth;
//设置登陆框的left和top
oLogin.style.left=sWidth/2-dWidth/2+"px";
oLogin.style.top=wHeight/2-dHeight/2+"px";
//点击关闭按钮
var oClose=document.getElementById("close");
 
//点击可以关闭登陆框
oClose.onclick=function(){
document.body.removeChild(oLogin);
};
};
 
window.onload=function(){
var oBtn=document.getElementById("btnLogin");
//点击登录按钮
oBtn.onclick=function(){
openNew();
return false;
}
 
}
本文永久地址