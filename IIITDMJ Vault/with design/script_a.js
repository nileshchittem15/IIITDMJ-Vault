var menu1 = document.getElementById("menu1");
var image1=document.getElementById("image1");
var menu2 = document.getElementById("menu2");
var image2=document.getElementById("image2");
//var image3=document.getElementById("image3");
var image4=document.getElementById("image4");
var image5=document.getElementById("image5");
//var menu3 = document.getElementById("menu3");
var menu4 = document.getElementById("menu4");
var menu5 = document.getElementById("menu5");
menu1.onmouseover=function(){
image1.setAttribute("src","images/menu1_active.gif");
}
menu1.onmouseout=function(){
image1.setAttribute("src","images/menu1.gif");
}


menu2.onmouseover=function(){
image2.setAttribute("src","images/menu2_active.gif");
}
menu2.onmouseout=function(){
image2.setAttribute("src","images/menu2.gif");
}

/*menu3.onmouseover=function(){
image3.setAttribute("src","images/menu3_active.gif");
}
menu3.onmouseout=function(){
image3.setAttribute("src","images/menu3.gif");
}*/


menu4.onmouseover=function(){
image4.setAttribute("src","images/menu4_active.gif");
}
menu4.onmouseout=function(){
image4.setAttribute("src","images/menu4.gif");
}


menu5.onmouseover=function(){
image5.setAttribute("src","images/menu5_active.gif");
}
menu5.onmouseout=function(){
image5.setAttribute("src","images/menu5.gif");
}