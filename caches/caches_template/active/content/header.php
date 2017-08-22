<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>

    <!-- Bootstrap -->
    <link href="<?php echo CSS_PATH;?>shoushi/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>shoushi/include.css" rel="stylesheet">
    <script src="<?php echo JS_PATH;?>shoushi/jquery.min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?10ccaf98e8593b553d225e6b155d1564";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
  </head>
  <body>
    <div class="container-fluid cont">
      <div class="container">
        <div class="top-left left">欢迎进入北京首实教育科技有限公司！</div>
        <div class="top-right right"><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;&nbsp;<span><a href=""><?php echo WEB_PHONE;?></a>&nbsp;|&nbsp;<a href="">English</a></span></div>
      </div>
    </div>
<div class="head-all">
  <div class="head-log-nav">
    <div class="container">
        <div class="head-log-nav-bg">
        <div class="left"><span class="logo"><img src="<?php echo IMG_PATH;?>shoushi/logo.png" alt=""></span></div>
        <div class="right">
          <div id="top-nav" style="overflow:hidden;">
              <div class="navi_body">
                      <div class="navi_head">
                          <div style="margin-left:auto; margin-right:auto;">
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=48b93aa2c9c7e77eb93757c1a777cbbf&action=category&catid=0&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
                              <span>
                                <p class="navi_title">
					<a href="<?php echo siteurl($siteid);?>">
						<span class="navi-cont">
						<i>首页</i>
						<i>home</i>
						</span>
					</a>
				</p>
                              </span>
                              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                              <span>
                                <p class="navi_title">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=07af97ad6f9611ab37f167fb816f983b&action=category&catid=%24r%5Bcatid%5D&num=1&siteid=%24siteid&order=listorder+ASC&return=tmp\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$tmp = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($tmp)) foreach($tmp AS $s) { ?>
				<a href="<?php echo $s['url'];?>">
						<span class="navi-cont">
						<i><?php echo $r['catname'];?></i>
						<i><?php echo $r['catname_en'];?></i>
						</span>
				</a>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</p>
                                <?php if($r[arrchildid]) { ?>
                                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=562eba0525a72e8a95a03bd7c7d4da01&action=category&catid=%24r%5Bcatid%5D&num=15&siteid=%24siteid&order=listorder+ASC&return=data2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data2 = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
                                  <?php $n=1;if(is_array($data2)) foreach($data2 AS $v) { ?>
                                    <p><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></p>
                                  <?php $n++;}unset($n); ?>
                                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                <?php } ?>
                              </span>
                              <?php $n++;}unset($n); ?>
                          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                          </div>
                      </div>
                  </div>
          </div>
      </div>
      </div>
    </div>
  </div>
</div>

<script>
	$(function () {
		for (var i=0; i<$('.navi_title').length; i++) {	
			$(".navi_title").eq(i).find('a').addClass('n'+ i);
		}
		
		$('.navi_title a').hover (function () {
			nav_title_move (this,'-36px');
		}, function () {
			nav_title_move(this, 0)
		})
		
		function nav_title_move (ele, marginNum) {
			$(ele).find('i').first().stop().animate({
				marginTop: marginNum
			}, 300);
		}

	});
</script>

