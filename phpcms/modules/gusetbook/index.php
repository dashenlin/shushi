<?php
defined('IN_PHPCMS') or exit('No permission resourse.');
class index{
	function __construct() {
        // 加载留言本的数据模型
        $this->guestbook_db = pc_base::load_model('gusetbook_model');
        //定义站点ID常量，选择模版使用
        $siteid = isset($_GET['siteid']) ? intval($_GET['siteid']) : get_siteid();
        define("SITEID", $siteid);
        //读取配置
        $setting = new_html_special_chars(getcache('gusetbook', 'commons'));
        $this->set = $setting[SITEID];
    }

    public function init() {
        // 加载前台模板
        include template('gusetbook', 'index');
    }

    /**
     *    在线留言 
     */
    public function ly()  {
        if(isset($_POST['dosubmit'])){ 
            // 标题和内容不能为空
            if (!(isset($_POST['ly']['title']) && trim($_POST['ly']['title']) && 
                isset($_POST['ly']['content']) && trim($_POST['ly']['content']))) {
                showmessage(L('输入不能为空'), "?m=content&c=index&a=lists&catid=31");
            }
             
            $set = $this->set;
            $_POST['ly']['addtime'] = SYS_TIME;
            $_POST['ly']['siteid'] = SITEID;
            $_POST['ly']['passed'] = $set['check_pass'];
            $this->guestbook_db->insert($_POST['ly']);
            showmessage(L('添加成功'), "?m=content&c=index&a=lists&catid=31");
        }  else  {
            echo  '请通过正常的方式提交留言，谢谢';
        }
    }
}