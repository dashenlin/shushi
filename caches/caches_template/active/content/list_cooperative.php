<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>shoushi/cooperative.css">
<?php include template("content","currentbanner"); ?>
<?php include template("content","hisnav"); ?>
<?php include template("content","current"); ?>
	<div class="container coo-cont">
	<ul>
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b841d5d056e9ea6a7c6d40291de580f5&action=lists&catid=%24catid&num=10&order=listorder+DESC%2Cid+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC,id DESC','moreinfo'=>'1','limit'=>'10',));}?>
		<?php $s=0;?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<?php
				if($s%2==0){
			?>
				<li>
					<div class="coo-left">
						<p><?php echo $r['title'];?></p>
						<p><?php echo $r['description'];?></p>
						<div class="coo-let-img">
							<?php $imgs=images_json($r[pictureurls]);?>
							<?php $i=0;?>
							<?php $n=1;if(is_array($imgs)) foreach($imgs AS $v) { ?>
							<?php $i++;?>
								<img src="<?php echo $v['url'];?>" alt="<?php echo $v['alt'];?>">
							<?php if($i==2)break;?>
							<?php $n++;}unset($n); ?>
						</div>
					</div>
					<div class="coo-sc"></div>
					<div class="coo-right" style="padding-left: 20px;">
						<?php $i=0;?>
						<?php $n=1;if(is_array($imgs)) foreach($imgs AS $s) { ?>
						<?php
							if($i==2){
						?>
							<img src="<?php echo $s['url'];?>" alt="<?php echo $s['alt'];?>">
						<?php
							}
							$i++;
						?>
						<?php $n++;}unset($n); ?>
					</div>
				</li>
			<?php
				}else{
			?>
				<li>
					<div class="coo-right">
						<?php $i=0;?>
						<?php $n=1;if(is_array($imgs)) foreach($imgs AS $s) { ?>
						<?php
							if($i==2){
						?>
							<img src="<?php echo $s['url'];?>" alt="<?php echo $s['alt'];?>">
						<?php
							}
							$i++;
						?>
						<?php $n++;}unset($n); ?>
					</div>
					<div class="coo-sc"></div>
					<div class="coo-left" style="padding-left: 20px;">
						<p style="text-align: right;"><?php echo $r['title'];?></p>
						<p><?php echo $r['description'];?></p>
						<div class="coo-let-img">
							<?php $imgs=images_json($r[pictureurls]);?>
							<?php $i=0;?>
							<?php $n=1;if(is_array($imgs)) foreach($imgs AS $v) { ?>
							<?php $i++;?>
								<img src="<?php echo $v['url'];?>" alt="<?php echo $v['alt'];?>">
							<?php if($i==2)break;?>
							<?php $n++;}unset($n); ?>
						</div>
					</div>
				</li>
			<?php
				}
			?>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		
	</ul>
</div>
</div>
<?php include template("content","footer"); ?>