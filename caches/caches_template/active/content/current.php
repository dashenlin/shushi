<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<div class="sm-title">
	<div class="container">
		<div class="sm-title-left"><span> <?php echo $CATEGORYS[$parentid]['catname'];?> </span><span> <?php echo $CATEGORYS[$parentid]['catname_en'];?> </span></div>
		<div class="sm-title-right">
			<ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=20610d1974a931dac9e75b2263171842&action=category&catid=%24parentid&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
					<?php $i=0;?>
					 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					    <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
					<?php if($r[catid]==$catid) echo "<script> $( function(){ current($i) } ) </script>"; ?>
					<?php $i++;?>
					 <?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>
	</div>
</div>
<div class="container">
	<div class="sm-title-title">
		<span><?php echo $CATEGORYS[$catid]['catname'];?></span>
		<span><?php echo $CATEGORYS[$catid]['catname_en'];?></span>
	</div>
