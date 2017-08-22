$(document).ready(function(){
	var color = new Array('#f36500','#00a6f3','#f39500','#b66b22','#0ebc05');
	var i = 0
	$('.sm-title-right li').each(function(){
		$(this).css('background-color',color[i])
		i++
	})

})