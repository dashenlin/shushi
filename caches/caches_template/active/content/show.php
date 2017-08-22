<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>shoushi/news.css">
<?php include template("content","currentbanner"); ?>
<?php include template("content","hisnav"); ?>
<div class="container news-cont">
	<h3><?php echo $title;?></h3>
	<?php
		if($catid=='10'){
	?>
	<div class="news-cont-dec">
		<span>来源：<?php echo $copyfrom;?></span>
		<span>日期：<?php echo $inputtime;?></span>
	</div>
	<?php	
		}
	?>
	<div class="news-cont-c">
		<?php echo $content;?>
	</div>
</div>
<?php include template("content","footer"); ?>