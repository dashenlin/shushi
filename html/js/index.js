// JavaScript Document
$(document).ready(function(e) {
	/***不需要自动滚动，去掉即可***/
	time = window.setInterval(function(){
		$('.og_next').click();
	},5000);
	/***不需要自动滚动，去掉即可***/
	linum = $('.mainlist li').length;//图片数量
	w = linum * 132;//ul宽度
	$('.piclist').css('width', w + 'px');//ul宽度
	$('.og_next').click(function(){
		if($('.mainlist').is(':animated')){
			$('.mainlist').stop(true,true);
		}
		if($('.mainlist li').length>7){//多于7张图片
			ml = parseInt($('.mainlist').css('left'));//默认图片ul位置
				
			if(ml<=0 && ml>w*-1+924){//默认图片显示时
				$('.mainlist').animate({left: ml - 924 + 'px'},'slow');//默认图片滚动
			}else{
				$('.mainlist').animate({left: '0px'},'slow');//回到第一页
			}
		}
	})

	$('.og_prev').click(function(){
		if($('.mainlist').is(':animated')){
			$('.mainlist').stop(true,true);
		}
		if($('.mainlist li').length>7){//多于7张图片
			ml = parseInt($('.mainlist').css('left'));//默认图片ul位置
			if(ml<0 && ml>w*-1-924){//默认图片显示时
				$('.mainlist').animate({left: ml + 924 + 'px'},'slow');//上一页
			}else{
				$('.mainlist').animate({left: -parseInt(w/(7*132))*(7*132) + 'px'},'slow');//最后一页
			}
		}
	})

});

$(document).ready(function(){
	$('.og_prev,.og_next').hover(function(){
			$(this).fadeTo('fast',1);
		},function(){
			$(this).fadeTo('fast',0.7);
	})

})

$(document).ready(function(){
	$('.edu-st1').hover(function(){
		$('.edu-cont').css('background-image', 'url(../img/edu-2.png)');
		$(this).css({'padding-top':'40px','padding-left':'5px'})
		scmall($('.edu-st1'),1)
	}, function(){
		$('.edu-cont').css('background-image', 'url(../img/edu-1.png)');
		$(this).css({'padding-top':'46px','padding-left':'34px'})
		scmall($('.edu-st1'),0)
	})
	$('.edu-st2').hover(function(){
		$('.edu-cont').css('background-image', 'url(../img/edu-3.png)');
		$(this).css({'padding-top':'62px','padding-left':'5px'})
		scmall($('.edu-st2'),1)
	}, function(){
		$('.edu-cont').css('background-image', 'url(../img/edu-1.png)');
		$(this).css({'padding-top':'62px','padding-left':'34px'})
		scmall($('.edu-st2'),0)
	})
	$('.edu-st3').hover(function(){
		$('.edu-cont').css('background-image', 'url(../img/edu-4.png)')
		scmall($('.edu-st3'),1)
	}, function(){
		$('.edu-cont').css('background-image', 'url(../img/edu-1.png)')
		scmall($('.edu-st3'),0)
	})
	$('.edu-st4').hover(function(){
		$('.edu-cont').css('background-image', 'url(../img/edu-5.png)')
		scmall($('.edu-st4'),1)
	}, function(){
		$('.edu-cont').css('background-image', 'url(../img/edu-1.png)')
		scmall($('.edu-st4'),0)
	})
})

function scmall(obj, cook){
	if(cook == 1){
		obj.find('p').eq(0).css('font-size','40px');
		obj.find('p').eq(1).css('font-size','24px');
	}else{
		obj.find('p').eq(0).css('font-size','32px');
		obj.find('p').eq(1).css('font-size','20px');
	}		
}