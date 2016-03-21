var height = $("#content").height();
var container_width= $(".container").width();
console.log(container_width);
var resultHeight = height + 50;
if (container_width >= 940) {
	$("#main-left").css("height", resultHeight);
}