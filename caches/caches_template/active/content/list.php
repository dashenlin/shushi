<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>shoushi/news.css">
<?php include template("content","currentbanner"); ?>
<?php include template("content","hisnav"); ?>
<?php include template("content","current"); ?>

	<div class="baby-cont">
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=96605625ffa90ed53666cf63743b248c&action=lists&catid=%24catid&num=9&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$wx_pages = wx_pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
		<ul>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li>
					<?php
						if($catid=='10'){
					?>
					<div class="time"><p><?php echo date('d',$r[inputtime]);?></p><p><?php echo date('Y-m',$r[inputtime]);?></p></div>
					<?php	
						}
					?>
					<a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"><p><span <?php echo title_style($r[style]);?>><?php echo $r['title'];?></span><span><?php echo strCut($r[description],135);?></span></p></a>
				</li>
			<?php $n++;}unset($n); ?>
		</ul>
		<div class="clear"></div>
		<div class="container baby-page">
			<nav aria-label="...">
		      <?php echo $wx_pages;?>
		    </nav>
		</div>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</div>
</div>
<?php include template("content","footer"); ?>