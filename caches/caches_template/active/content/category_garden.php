<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>shoushi/contact.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>shoushi/bin-style.css">
<?php include template("content","currentbanner"); ?>
<?php include template("content","hisnav"); ?>
<?php include template("content","current"); ?>
</div>
<!-- 首实教育 园所分布主题内容 -->
<div class="park-main container">
	<div class="park-left pull-left" id="address-title">
		<a class="beijing active" href="javascript:;"><span><?php echo $CATEGORYS['44']['catname'];?></span></a>
		<a class="hebei" href="javascript:;"><span><?php echo $CATEGORYS['45']['catname'];?></span></a>
		<a class="shanxi" href="javascript:;"><span><?php echo $CATEGORYS['46']['catname'];?></span></a>
		<a class="guizhou" href="javascript:;"><span><?php echo $CATEGORYS['47']['catname'];?></span></a>
		<div class="address-erji">
			<img style="width: 100%; height: 100%;" src="/statics/images/shoushi/address-img1-11.jpg" />
			<div class="address-off"><a href="javascript:;"></a></div>
		</div>
	</div>
	<div class="park-right pull-right" id="address-list">
		<!--循环地址列表-->
		<div class="address-list-cont active">
			<div class="title">
				<span><?php echo $CATEGORYS['44']['catname'];?></span>
			</div>
			<div class="content">
				<ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c5035d5d5025487e5d39e2a0f98643b5&action=lists&catid=44&num=20&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'44','order'=>'id DESC','moreinfo'=>'1','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li>
						<p><?php echo $r['title'];?></p>
						<p><img src="<?php echo IMG_PATH;?>shoushi/park-address.png" alt=""><span><?php echo $r['description'];?></span></p>
						<p><img src="<?php echo IMG_PATH;?>shoushi/park-phone.png" alt=""><span><?php echo $r['phone'];?></span></p>
					</li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
			</div>
		</div>
		<div class="address-list-cont">
			<div class="title">
				<span><?php echo $CATEGORYS['45']['catname'];?></span>
			</div>
			<div class="content">
				<ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=60d900548e37a648a83ecb2e4e8d3f59&action=lists&catid=45&num=20&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'45','order'=>'id DESC','moreinfo'=>'1','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li>
						<p><?php echo $r['title'];?></p>
						<p><img src="<?php echo IMG_PATH;?>shoushi/park-address.png" alt=""><span><?php echo $r['description'];?></span></p>
						<p><img src="<?php echo IMG_PATH;?>shoushi/park-phone.png" alt=""><span><?php echo $r['phone'];?></span></p>
					</li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
			</div>
		</div>
		<div class="address-list-cont">
			<div class="title">
				<span><?php echo $CATEGORYS['46']['catname'];?></span>
			</div>
			<div class="content">
				<ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7ff7989fb7193ceb828b496e67101b70&action=lists&catid=46&num=20&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'46','order'=>'id DESC','moreinfo'=>'1','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li>
						<p><?php echo $r['title'];?></p>
						<p><img src="<?php echo IMG_PATH;?>shoushi/park-address.png" alt=""><span><?php echo $r['description'];?></span></p>
						<p><img src="<?php echo IMG_PATH;?>shoushi/park-phone.png" alt=""><span><?php echo $r['phone'];?></span></p>
					</li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
			</div>
		</div>
		<div class="address-list-cont">
			<div class="title">
				<span><?php echo $CATEGORYS['47']['catname'];?></span>
			</div>
			<div class="content">
				<ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=49062fd0e250a8be1d5080f76ab3472e&action=lists&catid=47&num=20&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'47','order'=>'id DESC','moreinfo'=>'1','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li>
						<p><?php echo $r['title'];?></p>
						<p><img src="<?php echo IMG_PATH;?>shoushi/park-address.png" alt=""><span><?php echo $r['description'];?></span></p>
						<p><img src="<?php echo IMG_PATH;?>shoushi/park-phone.png" alt=""><span><?php echo $r['phone'];?></span></p>
					</li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
			</div>
		</div>
		<!--end 循环地址列表-->
	</div>
</div>
<script>

	$('#address-title>a').click(function () {
	    $(this).addClass('active').siblings().removeClass('active');
	    $('#address-list .address-list-cont').eq($(this).index()).addClass('active').siblings('.address-list-cont').removeClass('active');
		if ( $(this).hasClass('beijing') && $(this).hasClass('active') ) {
			$('.address-erji').show();
		}
	});
	$('.address-off').click(function () {
		$('.address-erji').hide();
	})
</script>
<?php include template("content","footer"); ?>
