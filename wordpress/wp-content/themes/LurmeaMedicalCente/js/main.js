var content_height = $("#content").height();
var sidebar_height = $("#main-left").height();
var result = sidebar_height - content_height ;
console.log(result);
if(result > 0)
{
	$("#content").css("height", result+content_height+20);
}