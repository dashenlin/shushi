// JavaScript Document
$(function(e) {
    /***不需要自动滚动，去掉即可***/
    time = window.setInterval(function(){
        $('.og_next').click();
    },5000);
    /***不需要自动滚动，去掉即可***/
    linum = $('.mainlist li').length;//图片数量
    w = linum * 154;//ul宽度
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
    });

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



$(function () {
    // 首页教育理念 效果
    var MgTop='auto', MgLeft='auto';
    $('.edu-cont .edu-st').hover(function () {
        if ($(this).hasClass('edu-st1')) {
            MgTop = '-6px';
            MgLeft = '-21px';
        }else if ($(this).hasClass('edu-st2')) {
            MgTop = 0;
            MgLeft = '-21px';
        }else if ($(this).hasClass('edu-st3')) {
            MgTop = '-6px';
            MgLeft = '6px';
        } else if ($(this).hasClass('edu-st4')) {
            MgTop = 0;
            MgLeft = '6px';
        }
        var _this = $(this);
        _this.stop();
        $(this).animate(
            {

                'margin-top': MgTop,
                'margin-left': MgLeft,
                'height': '204px',
                'width': '614px'
            },180
        );

    },function () {
        $(this).animate(
            {
                'margin': 0,
                'height': '198px',
                'width': '100%'
            },30
        );
    });



    $(function () {
        $('.newActivity-content ul li > a').mouseover(function () {
            $(this).addClass('active').parent().siblings().find('a').removeClass('active');
        });
    });
})