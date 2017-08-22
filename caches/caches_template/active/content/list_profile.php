<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>shoushi/profile.css">
<?php include template("content","currentbanner"); ?>
<?php include template("content","hisnav"); ?>
<?php include template("content","current"); ?>
	<div class="profile" style="width: 1200px;">
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=85a138f6513df82bcd48d64785a54c0b&action=lists&catid=%24catid&num=1&order=listorder+DESC%2Cid+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC,id DESC','moreinfo'=>'1','limit'=>'1',));}?>
	
	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<div class="pro-top">
			<?php $imgs=images_json($r[pictureurls]);$i=0;?>
			<?php $n=1;if(is_array($imgs)) foreach($imgs AS $img) { ?>
			<?php
				if($i==3){
					break;
				}
				$i++;
			?>
			<img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>"  class="img-rounded">
			<?php $n++;}unset($n); ?>
		</div>
		<div class="pro-text">
			<p><?php echo $r['title'];?></p>
			<p><?php echo $r['description'];?></p>
		</div>
		<div class="pro-img">
			<img src="<?php echo IMG_PATH;?>shoushi/profile-num-6.png" alt="">
		</div>
		<div class="pro-bot">
			<?php $imgs=images_json($r[pictureurls]);$i=0;?>
			<?php $n=1;if(is_array($imgs)) foreach($imgs AS $img) { ?>
			<?php
				if($i>=3){
			?>
			<img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>"  class="img-rounded">
			<?php
				if($i>=4)break;}
				$i++;
			?>
			<?php $n++;}unset($n); ?>
		</div>
	<?php $n++;}unset($n); ?>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</div>
</div>
<div class="list-fot"><img src="<?php echo IMG_PATH;?>shoushi/list-fot.png" class="img-responsive" alt="Responsive image"></div>
<?php include template("content","footer"); ?>