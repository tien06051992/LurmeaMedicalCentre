var content_height = $("#content").height();
var sidebar_height = $("#main-left").height();
var container_width= $(".container").width();

var result = sidebar_height - content_height ;
if(result > 0)
{
	$("#content").css("height", result+content_height+20);
}else
{
	if(container_width >= 940)
	{
		var resultHeight = content_height + 34;
		$("#main-left").css("height", resultHeight);
	}
}