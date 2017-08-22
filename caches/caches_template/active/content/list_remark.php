<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>shoushi/remakers.css">
<?php include template("content","currentbanner"); ?>
<?php include template("content","hisnav"); ?>
<?php include template("content","current"); ?>
</div>
<div class="container re-cont">
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=85a138f6513df82bcd48d64785a54c0b&action=lists&catid=%24catid&num=1&order=listorder+DESC%2Cid+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC,id DESC','moreinfo'=>'1','limit'=>'1',));}?>
	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
	<div class="re-cont-top">
		<?php $imgs=images_json($r[pictureurls]);?>
		<?php $i=0;?>
		<?php $n=1;if(is_array($imgs)) foreach($imgs AS $v) { ?>
			<?php
				if($i==3){
					break;
				}
			?>
			<img src="<?php echo $v['url'];?>" alt="<?php echo $v['alt'];?>" class="img-rounded">
		<?php $i++;?>
		<?php $n++;}unset($n); ?>
	</div>
	<div class="re-cont-fot">
		<p><?php echo $r['title'];?></p>
		<p><?php echo $r['description'];?></p>
	</div>
	<?php $n++;}unset($n); ?>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<div class="list-fot"><img src="<?php echo IMG_PATH;?>shoushi/list-fot.png" class="img-responsive" alt="Responsive image"></div>
<?php include template("content","footer"); ?>