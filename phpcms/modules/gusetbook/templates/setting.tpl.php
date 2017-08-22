<?php 
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header', 'admin');
?>
<form method="post" action="?m=gusetbook&c=gusetbook&a=setting">
<table width="100%" cellpadding="0" cellspacing="1" class="table_form"> 
 
	<tr>
		<th width="20%">是否开启留言：</th>
		<td>
			<input name="setting[gusetbook_status]" type="radio" value="1" <?php if($gusetbook_status==1){echo "checked";}?> />&nbsp;<?php echo L('yes')?>&nbsp;&nbsp;
			<input name="setting[gusetbook_status]" type="radio" value="0" <?php if($gusetbook_status==0){echo "checked";}?> />&nbsp;<?php echo L('no')?>
		</td>
	</tr>
	 
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="dosubmit" id="dosubmit" value=" <?php echo L('submit')?> " class="button"></td>
	</tr>
</table>
</form>
</body>
</html>