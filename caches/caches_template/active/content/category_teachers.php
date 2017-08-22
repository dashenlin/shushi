<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>shoushi/teacher.css">
<?php include template("content","currentbanner"); ?>
<?php include template("content","hisnav"); ?>
<?php include template("content","current"); ?>
<div class="container">
<div class="tab tabs" role="tabpanel">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=11439eb74e812d93f8c26c72bd1777ad&action=category&catid=%24catid&num=2&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'2',));}?>
		<li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><?php echo $data['32']['catname'];?></a></li><li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><?php echo $data['33']['catname'];?></a></li>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</ul>
	<!-- Tab panes -->
	<div class="tab-content tabs">
		<div role="tabpanel" class="tab-pane fade in active" id="Section1">
			<div class="row tea-cont">
				
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b6ec48b1ae3cee07b1d94accc1a85934&action=lists&catid=32&num=3&siteid=%24siteid&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'32','siteid'=>$siteid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'3',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<div class="col-md-4">
						<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" class="img-rounded">
						<p><span><?php echo $r['title'];?></span>  <?php echo $r['professor'];?></p>
						<p><?php echo $r['job'];?></p>
						<p><?php echo $r['description'];?></p>
					</div>
				<?php $n++;}unset($n); ?> 
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="Section2">
			<div class="tea-title"><span><?php echo $data['33']['catname'];?></span></div>
			<div class="row tea-right">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=93724280faa6e2337c80f4c0bd73e9b2&action=lists&catid=33&num=3&siteid=%24siteid&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'33','siteid'=>$siteid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'3',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<div class="col-md-4">
				  	<img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>" class="img-circle">
				  	<p><?php echo $v['title'];?></p>
				  	<p><?php echo $v['description'];?></p>
				</div>
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