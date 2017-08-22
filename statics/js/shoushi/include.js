var smTitleRightColor, smTitleRightIndex;
$(document).ready(function(){
	var color = new Array('#f36500','#00a6f3','#f39500','#b66b22','#0ebc05');
	var i = 0;
	$('.sm-title-right li').each(function(){
		$(this).css('border','1px solid '+ color[i])
		$(this).css('color', color[i])
		if (i == smTitleRightIndex) {
			$('.sm-title-right li').eq(i).css({
				'background-color': color[i],
				'color':'#fff'
			}).addClass('active');
		}
		i++;
		
	}).hover(function(){
		var thisColor = $(this).css('border-color');
		$(this).css('background-color', thisColor)
		$(this).css('color', '#fff')
	},function(){
		var thisColor = $(this).css('border-color');
		if ( !$(this).hasClass('active') ) {
			$(this).css( 'background-color', '#fff' );
			$(this).css( 'color', thisColor);
		}
	})

})

function current(index){
	smTitleRightIndex = index;
}
