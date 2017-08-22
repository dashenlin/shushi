<?php
defined('IN_PHPCMS') or exit('Access Denied');
defined('INSTALL') or exit('Access Denied');

$parentid = $menu_db->insert(array('name'=>'gusetbook', 'parentid'=>29, 'm'=>'gusetbook', 'c'=>'gusetbook', 'a'=>'init', 'data'=>'', 'listorder'=>0, 'display'=>'1'), true);
$menu_db->insert(array('name'=>'setting', 'parentid'=>$parentid, 'm'=>'gusetbook', 'c'=>'gusetbook', 'a'=>'setting', 'data'=>'', 'listorder'=>0, 'display'=>'1'));

$language = array('gusetbook'=>'留言板列表', 'setting'=>'留言配置',);
?>