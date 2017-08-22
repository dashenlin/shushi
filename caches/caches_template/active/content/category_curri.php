<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>shoushi/teacher.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>shoushi/classall.css">
<?php include template("content","currentbanner"); ?>
<?php include template("content","hisnav"); ?>
<?php include template("content","current"); ?>

<div class="container" style="width: 1200px;">
<div class="tab tabs" role="tabpanel">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=11439eb74e812d93f8c26c72bd1777ad&action=category&catid=%24catid&num=2&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'2',));}?>
		<li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><?php echo $data['39']['catname'];?></a></li><li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><?php echo $data['40']['catname'];?></a></li>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</ul>
	<!-- Tab panes -->
	<div class="tab-content tabs">
		<div role="tabpanel" class="tab-pane fade in active" id="Section1">
			<ul class="classall">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dd5fe72473069e30ce101331de6b57da&action=lists&catid=39&num=3&siteid=%24siteid&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'39','siteid'=>$siteid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'3',));}?>
			<?php $i=0;?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li>
					<?php
						if($i%2==0){
					?>
						<p><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></p>
						<p style="padding-left: 66px;"><?php echo $r['content'];?></p>
					<?php	
						}else{
					?>
						<p style="padding-right: 66px;"><?php echo $r['content'];?></p>
						<p style="text-align: right;"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></p>
					<?php	
						}
					?>
					
				</li>
			<?php $i++;?>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>

		<div role="tabpanel" class="tab-pane fade" id="Section2">
			<div class="fivefield">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d662fb8bc23ed904d95d352fe232281b&action=lists&catid=40&num=1&siteid=%24siteid&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'40','siteid'=>$siteid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'1',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<p><?php echo $r['description'];?></p>
				<ul>
					<?php $imgs=images_json($r[pictureurls]);?>
					<?php $n=1;if(is_array($imgs)) foreach($imgs AS $v) { ?>
						<li><img src="<?php echo $v['url'];?>" alt="<?php echo $v['alt'];?>"></li>
					<?php $n++;}unset($n); ?>
				</ul>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<div class="list-fot"><img src="<?php echo IMG_PATH;?>shoushi/list-fot.png" class="img-responsive" alt="Responsive image"></div>
<?php include template("content","footer"); ?>