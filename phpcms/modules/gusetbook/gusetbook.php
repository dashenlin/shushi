<?php
defined('IN_PHPCMS') or exit('No permission resources. - gusetbook.php');
pc_base::load_app_class('admin','admin',0);

class gusetbook extends admin{
	public function __construct() {
        parent::__construct();//继承父类构造函数
        $setting = new_html_special_chars(getcache('gusetbook', 'commons'));//读取留言本配置缓存文件
        $this->set = $setting[$this->get_siteid()];
        $this->gusetbook_db = pc_base::load_model('gusetbook_model');//加载留言本数据模型
    }
    public function init() {
        $where = array('siteid'=>$this->get_siteid());
        $page = isset($_GET['page']) && intval($_GET['page']) ? intval($_GET['page']) : 1;

        $infos = $this->gusetbook_db->listinfo($where, 'gid DESC', $page, '15');
        
        /* 加载后台管理模版 guestbook_list.tpl.php。 
         * 此文件位于phpcms/modules/模块/templates/  
         * 由此即可明白，其它后台管理模版亦位于此目录*/
         include $this->admin_tpl('gusetbook_list');
    }
    /**
    * 删除留言 
    * @param    intval    $gid    留言ID，递归删除
    */
    public function delete() {
        if((!isset($_GET['gid']) || empty($_GET['gid'])) && (!isset($_POST['gid']) || empty($_POST['gid']))) {
            showmessage(L('未选中'), HTTP_REFERER);
        }
        if(is_array($_POST['gid'])){
            foreach($_POST['gid'] as $gid_arr) {
                $gid_arr = intval($gid_arr);
                $this->gusetbook_db->delete(array('gid'=>$gid_arr)); 
            }
            showmessage(L('删除成功'),'?m=gusetbook&c=gusetbook');
        }else{
            $gid = intval($_GET['gid']);
            if($gid < 1) return false;
            $result = $this->gusetbook_db->delete(array('gid'=>$gid));
            if($result){
                showmessage(L('删除成功'),'?m=gusetbook&c=gusetbook');
            }else {
                showmessage(L("删除失败"),'?m=gusetbook&c=gusetbook');
            }
        }
    }
    /**
     * 留言本模块配置
     */
    public function setting() {
        //更新模型数据库,重设setting 数据. 
        $m_db = pc_base::load_model('module_model');
        $set = $m_db->get_one(array('module'=>'gusetbook'));
        $setting = string2array($set['setting']);
        $now_setting = $setting[$this->get_siteid()];//当前站点的配置
        if(isset($_POST['dosubmit'])) {
            $setting[$this->get_siteid()] = $_POST['setting'];
            setcache('gusetbook', $setting, 'commons'); 
            $set = array2string($setting);
            $m_db->update(array('setting'=>$set), array('module'=>ROUTE_M));
            showmessage('配置更新成功', '?m=gusetbook&c=gusetbook&a=init');
        } else {
            extract($now_setting);
            // 加载后台管理模版 setting.tpl.php
            include $this->admin_tpl('setting');
        }
    }
}