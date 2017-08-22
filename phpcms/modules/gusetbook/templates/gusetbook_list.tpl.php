<?php
defined('IN_ADMIN') or exit('No permission resources. - guestbook_reply.tpl.php');
$show_dialog = 1;
include $this->admin_tpl('header', 'admin');
?>

<form name="myform" id="myform" action="?m=link&c=link&a=listorder" method="post" >
<div class="table-list">
<table width="100%" cellspacing="0" style="text-align: left;">
	<thead>
		<tr>
			<th width="5%" align="center"><input type="checkbox" value="" id="check_box" onclick="selectall('gid[]');"></th>
			<th width="20%">标题</th>
			<th>内容</th>
			<th width="15%">发表时间</th>
			<th width='10%'>操作</th>
		</tr>
	</thead>
<tbody>
<?php
if($infos){
	foreach($infos as $info){
	?>
		<tr>
			<td align="center" width="1%"><input type="checkbox" name="gid[]" value="<?php echo $info['gid']?>"></td>
			<td><?php echo $info['title']?></td>
			<td><?php echo $info['content']?></td>
			<td><?php echo date('Y-m-d H:i:s',$info['addtime']);?></td>
			<td><a href="?m=gusetbook&c=gusetbook&a=delete&gid=<?php echo $info['gid']?>" onClick="return confirm('<?php echo L('confirm', array('message' => new_addslashes($info['title'])))?>')">
         <?php echo L('删除')?></a></td>
		</tr>
	<?php
	}
}else{
	?>
	<tr>
	<td></td><td></td>
	<td>暂无留言数据！</td>
	</tr>
<?php
}
?>
</tbody>
</table>
</div>
<div class="btn"> 
<input type="submit" class="button" name="dosubmit" onClick="document.myform.action='?m=link&c=link&a=delete'" value="<?php echo L('delete')?>"/></div>
<div id="pages"><?php echo $pages?></div>
</form>