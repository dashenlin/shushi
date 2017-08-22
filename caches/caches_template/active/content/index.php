<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link href="<?php echo CSS_PATH;?>shoushi/index.css" rel="stylesheet">
<link href="<?php echo CSS_PATH;?>shoushi/bin-style.css" rel="stylesheet">
<!-- banner开始 -->

<div class="banner">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1dbcce4829f26889d60a998fd206c070&action=lists&catid=48&num=5&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'48','order'=>'id DESC','limit'=>'5',));}?>
      <?php $i=0;?>
      <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i;?>" <?php if($i==0) echo 'class="active"'?>></li>
      <?php $i++;?>
      <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2429a097b3ad77c1af3f5996dfc04ab1&action=lists&catid=48&num=5&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'48','order'=>'id DESC','moreinfo'=>'1','limit'=>'5',));}?>
      <?php $i=0;?>
      <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="item <?php if($i==0) echo active?>">
          <img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
        </div>
      <?php $i++;?>
      <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- banner结束 -->

<!-- 新闻 -->

<div class="newActivity container">
  <div class="mode-title">
    <div class="Headline"><?php echo $CATEGORYS['10']['catname'];?></div>
    <div class="Subtitle">NEW & EVENTS <i class="line"></i></div>
  </div>
  <div class="newActivity-content">
    <ul>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=206d1f2bc82dbcd6a706add16a364baf&action=lists&catid=10&num=3&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'10','order'=>'id DESC','moreinfo'=>'1','limit'=>'3',));}?>
    <?php $i=0?>
	  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
      <li>
        <a class="<?php if($i==0)echo 'active';?>" href="<?php echo $r['url'];?>">
          <div class="fl align-right list-content-time">
            <div class="list-img fl"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></div>
            <div class="fr align-left list-time">
              <p><?php echo date('Y',$r[inputtime]);?></p>
              <p><?php echo date('m-d',$r[inputtime]);?></p>
            </div>
          </div>
          <div class="fr align-left list-content-detail">
            <h3><?php echo $r['title'];?></h3>
            <p><?php echo $r['description'];?></p>
          </div>
        </a>
        <div class="spot-line"><img src="<?php echo IMG_PATH;?>shoushi/spot.png" alt=""></div>
      </li>
    <?php $i++;?>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
  </div>
  <div class="newMore"><a href="<?php echo $CATEGORYS['10']['url'];?>">+MORE</a></div>
</div>
<!-- 新闻 end -->

<div class="container-fluid edu" style="background-image: url(/statics/images/shoushi/edu.jpg);">
  <div class="container" style="padding: 0; height: 710px;">
    <div class="items"><span><img src="<?php echo IMG_PATH;?>shoushi/item.png" alt=""></span></div>
    <div class="item-title">
      <p><?php echo $CATEGORYS['28']['catname'];?> <span>| EDUCATIONAL IDEA</span></p>
    </div>
    <div class="edu-cont" style="background: url(<?php echo IMG_PATH;?>shoushi/education_center.png) center no-repeat; padding-left: 10px;">
      <div class="edu-cont-list">
        <div class="edu-st edu-st1" style=" background-size: cover;">
          <p class="pull-left">A</p>
          <div class="pull-left edu-set-style">
            <p style="">体验在快乐中学习</p>
            <p>Make learning fun</p>
          </div>
        </div>
      </div>
      <div class="edu-cont-list" style="margin-left: -1px;">
        <div class="edu-st edu-st3" style="background-size: cover;">
          <p class="pull-left">C</p>
          <div class="pull-left edu-set-style">
            <p>遵循孩子的发展步伐</p>
            <p>Follow the child's development</p>
          </div>
        </div>
      </div>
      <div class="edu-cont-list" style="margin-left: -2px;">
        <div class="edu-st edu-st2" style="background-size: cover;">
          <p class="pull-left">B</p>
          <div class="pull-left edu-set-style">
            <p>相信每一个孩子都有无限的潜能</p>
            <p>Believe that every child has unlimited potential</p>
          </div>
        </div>
      </div>
      <div class="edu-cont-list">
        <div class="edu-st edu-st4" style="background-size: cover;">
          <p class="pull-left">D</p>
          <div class="pull-left edu-set-style">
            <p>每个孩子都是一个独特的个体 </p>
            <p>Every child is an unique individual</p>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>

<div class="container-fluid pre">
  <div class="items"><span><img src="<?php echo IMG_PATH;?>shoushi/item.png" alt=""></span></div>
  <div class="item-title">
    <p><?php echo $CATEGORYS['29']['catname'];?> <span>| PRESCHOOL EDUCATION</span></p>
  </div>
  <div class="pre-cont">
  	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c5e325112ae838dc69b7c1e4b03d7879&action=lists&catid=29&num=1&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'29','order'=>'id DESC','moreinfo'=>'1','limit'=>'1',));}?>
	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
	    <div class="pre-img"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></div>
	    <div class="pre-right">
	      <p><?php echo $r['description'];?></p>
	      <div class="more"><a href="<?php echo $r['url'];?>" class="more">+MORE</a></div>
	    </div>
   	<?php $n++;}unset($n); ?>
   	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  </div>
</div>

<div class="container-fluid char" style="background-image: url(<?php echo IMG_PATH;?>shoushi/char1.jpg);">
  <div class="items"><span><img src="<?php echo IMG_PATH;?>shoushi/item.png" alt=""></span></div>
  <div class="item-title">
    <p><?php echo $CATEGORYS['30']['catname'];?> <span>| CHARACTERISTIC TRAINING</span></p>
  </div>
  <div class="pre-cont">
  	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cfcb893c83fadd3c0b0560b27e767d0e&action=lists&catid=30&num=1&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'30','order'=>'id DESC','moreinfo'=>'1','limit'=>'1',));}?>
	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <div class="pre-right" style="padding-left: 0;">
      <p><?php echo $r['description'];?></p>
      <div class="more"><a href="<?php echo $r['url'];?>" class="more">+MORE</a></div>
    </div>
    <div class="pre-img" style="margin-left: 80px;"><img src="<?php echo IMG_PATH;?>shoushi/char.jpg" alt="<?php echo $r['title'];?>"></div>
  <?php $n++;}unset($n); ?>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  </div>
</div>

<div class="container-fluid">
  <div class="items"><span><img src="<?php echo IMG_PATH;?>shoushi/item.png" alt=""></span></div>
  <div class="item-title">
    <p><?php echo $CATEGORYS['41']['catname'];?> <span>| <?php echo $CATEGORYS['41']['catname_en'];?></span></p>
  </div>
  <div class="devel-cont" style="background-image: url(<?php echo IMG_PATH;?>shoushi/devel.png);">
    <div class="devel-cont-top">
      <div class="odd">
        <p><span>红色钢铁</span><br><span>孕育首钢幼教</span></p>
        <p class="color-5b667c fontSize26">1953-1979</p>
      </div>
      <div class="even">
        <p class="color-78bcc0 fontSize26">1953-1979</p>
        <p><span>红色钢铁</span><br><span>孕育首钢幼教</span></p>
      </div>
      <div class="odd">
        <p><span>红色钢铁</span><br><span>孕育首钢幼教</span></p>
        <p class="color-efb62d fontSize26">1953-1979</p>
      </div>
      <div class="even">
        <p class="color-e65749 fontSize26">1953-1979</p>
        <p><span>红色钢铁</span><br><span>孕育首钢幼教</span></p>
      </div>
      <div class="odd">
        <p><span>红色钢铁</span><br><span>孕育首钢幼教</span></p>
        <p class="color-8cb88f fontSize26">1953-1979</p>
      </div>
    </div>
  </div>
  <div class="box">

    <div class="picbox">
      <ul class="piclist mainlist">
  		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=701ba1a796429778aff5a845a9b689cb&action=type_list&siteid=1&linktype=1&order=listorder+DESC&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>'1','linktype'=>'1','order'=>'listorder DESC','limit'=>'20',));}?>
  		<?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
  			<li><a href="<?php echo $v['url'];?>" target="_blank"><p><img src="<?php echo $v['logo'];?>"/></p><span><?php echo $v['name'];?></span></a></li>
  		<?php $n++;}unset($n); ?>
  		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </ul>
    </div>
    <div class="og_prev"><img src="<?php echo IMG_PATH;?>shoushi/og_prev.png" alt=""></div>
    <div class="og_next"><img src="<?php echo IMG_PATH;?>shoushi/og_next.png" alt=""></div>
  </div>
</div>
<script>
$('.newActivity-content li').last().find('.spot-line').height('80%');
</script>
<?php include template("content","footer"); ?>
