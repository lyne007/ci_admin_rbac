<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * MY_Controller
 * 扩展控制器核心类
 * 简化变量分配和模板加载
 */
class MY_Controller extends CI_Controller {

    // 是否进行登录控制标志
    protected $isNeedLogin = FALSE;
    protected $limitRows = 10;

    public function __construct(){

        parent::__construct();
        
        // 分配一个全局变量
        $this->assign('public', rtrim(base_url(),'/'));
        $this->assign('module', rtrim(base_url(),'/'));
         // 检查登录
        $this->checkLogin();
        // 菜单显示
        $this->navbarByAdmin();
    }
    
    /**
     * Ajax方式返回数据到客户端
     * @access protected
     * @param mixed $data 要返回的数据
     * @param String $type AJAX返回数据格式
     * @param int $json_option 传递给json_encode的option参数
     * @return void
     * @author lyne
     */
    protected function ajaxReturn($data,$type='',$json_option=0) {
        if(empty($type)) $type = 'JSON';
        switch (strtoupper($type)){
            case 'JSON' :
                // 返回JSON数据格式到客户端 包含状态信息
                header('Content-Type:application/json; charset=utf-8');
                exit(json_encode($data));
            case 'XML'  :
                // 返回xml格式数据
                header('Content-Type:text/xml; charset=utf-8');
                exit(xml_encode($data));
            case 'EVAL' :
                // 返回可执行的js脚本
                header('Content-Type:text/html; charset=utf-8');
                exit($data);            
            default     :
                // 用于扩展其他返回格式数据
                Hook::listen('ajax_return',$data);
        }
    }

    /**
     * checkLogin 检查是否登录
     * @access private
     * @param void
     * @return void
     */
    private function checkLogin(){
        if ($this->isNeedLogin) {
            if ( ! isset($_SESSION['login'])) {
                header('Location: '.site_url('login'));exit;
            }
        }
    }

    /**
     * checkUserPower 检查用户权限
     * @access protected
     * @param void
     * @return void
     * @author lyne
     */
    protected function checkUserPower($menu_arr){
        error_reporting(E_ALL ^ E_NOTICE);
        $this->load->helper('cookie');
        if ((!$this->isNeedLogin)) return false;
        // 当前访问的控制器名
        $controller = $this->router->fetch_class();
        // 当前访问的方法名
        $method = $this->router->fetch_method();

        $strurl = $controller.'/'.$method;
        // if(strstr($strurl,'index')) return false;
        $this->load->model('power_model');
        $num = 0;
        foreach ($menu_arr as $k => $v) {
            if(empty($v)) continue;
            // $result += $this->authority_model->selectMenuByIdCount($v,$strurl);//$_SERVER['HTTP_REFERER']
            $actionArr[$k] = $this->power_model->selectMenuInfo($v);//$_SERVER['HTTP_REFERER']
            
            if( strpos($actionArr[$k]['action'], ',') ){
                $newActionArr = explode(',', $actionArr[$k]['action']);
                foreach ($newActionArr as $value) {
                    if( $value == $strurl ) $num++;
                }
            }else{
                if( $actionArr[$k]['action'] == $strurl ) $num++;
            }
            
        }
        if (($num) < 1) {
            if(get_cookie('ajaxmark') == 'ajax'){
                $this->ajaxReturn(['POWER_LIMIT'=>false,'msg'=>'权限限制 Power Limit']);
            }else{
                $this->jumpNoticePage('权限限制 Power Limit');
            }
        }
        
    }

    /**
     * 根据权限显示菜单栏
     * @author lyne
     */
    public function navbarByAdmin(){
        if($this->session->login){
            $this->load->model('power_model');
            $rid = $this->session->login['role_id'];
            $menu_id = $this->power_model->getMenuId($rid);
            $menu_arr = explode(',',$menu_id['menu_id']);

            $navbar = [];
            foreach ($menu_arr as $k => $v) {
                if(empty($v)) continue;
                $r = $this->power_model->getNavbar($v);
                if(!$r || empty($r)) continue;
                $navbar[] = $r;
            }
            $navbar_list = $this->getTree($navbar,0);
            if(!empty($navbar_list)){
                foreach ($navbar_list as $k => &$v) {
                    $tmp_active = [];
                    if(!empty($v['child'])){
                        array_push($tmp_active, $v['name']);
                        $nav = array_column($v['child'],'name');
                        $v['active'] = array_merge($tmp_active,$nav);
                    }else{
                        $v['active'][] = $v['name'];
                    }
                }
                $tmp_order = array_column($navbar_list,'order');
                array_multisort($tmp_order,SORT_DESC,$navbar_list);
            }
            unset($v);
            $this->assign('navbar_list',$navbar_list);
            // 检查权限
            $this->checkUserPower($menu_arr);
        }
    }

    public function getTree($data, $pId){
        $tree = '';
        foreach($data as $k => &$v){
            if($v['pid'] == $pId){ 
                //父亲找到儿子
                $v['child'] = $this->getTree($data, $v['id']);
                $tree[] = $v;
                unset($data[$k]);
            }else{
                continue;
            }
        }
        return $tree;
    }

    /**
     * jumpNoticePage 跳转提示
     * @access protected
     * @param string $message
     * @param string $jump_url
     * @return void
     * @author lyne
     */
    public function jumpNoticePage($message, $jump_url = '', $mark = 'SUCCESS', $wait = 3){
        if (!$jump_url) $jump_url = $_SERVER['HTTP_REFERER'];
        if($message!='true'){
            $this->assign('message', $message);
            $this->assign('url', $jump_url);
            $this->assign('mark', $mark);
            $this->assign('waitSecond', $wait);
            $this->display('public/jump_notice.html');
            exit;
        }else{
            header("Location:".site_url($jump_url));
        }
    }

    

    /**
     * 设置分页样式
     * @param $base_url
     * @param $count 总数
     * @author lyne
     */
    protected function myPagination($base_url,$count){
        $this->load->library('pagination');
        $config['base_url'] = $base_url;
        $config['total_rows'] = $count;
        $config['per_page']   = $this->limitRows;
        $config['use_page_numbers'] = TRUE;
        $config['next_link'] = '下一页';           //你希望在分页中显示“下一页”链接的名字。
        $config['next_tag_open'] = '<li id="editable_next" class="paginate_button next" aria-controls="editable" tabindex="0">';      //“下一页”链接的打开标签。
        $config['next_tag_close'] = '</li>';    //“下一页”链接的关闭标签。
        $config['prev_link'] = '上一页';           //你希望在分页中显示“上一页”链接的名字。
        $config['prev_tag_open'] = '<li id="editable_previous" class="paginate_button previous" aria-controls="editable" tabindex="0">';      //“上一页”链接的打开标签。
        $config['prev_tag_close'] = '</li>';    //“上一页”链接的关闭标签。
        $config['cur_tag_open'] = '<li class="paginate_button active" aria-controls="editable" tabindex="0"><a href="javascript:;">';//“当前页”链接的打开标签。
        $config['cur_tag_close'] = '</a></li>';     //“当前页”链接的关闭标签。
        $config['num_tag_open'] = '<li class="paginate_button" aria-controls="editable" tabindex="0">';       //“数字”链接的打开标签。
        $config['num_tag_close'] = '</li>';
        $config['last_link'] = FALSE;
        $config['first_link'] = FALSE;
        return $config;
    }

    /**
     * 给CI_Controller扩展Smarty的方法
     * assign 分配变量
     */
    protected function assign($key,$val) {
        $this->ci_smarty->assign($key,$val);
    }

    /**
     * 给CI_Controller扩展Smarty的方法
     * display 加载模板
     */
    protected function display($html) {
        // 检查模板目录是否存在 可有可无
        // if ( ! file_exists(VIEWPATH.$html)) {
        //     // Whoops, we don't have a page for that!
        //     $this->jumpNoticePage('模板文件不存在！', $_SERVER['HTTP_REFERER'], 'ERROR');
        // }
        $this->ci_smarty->display($html);
    }


} 


/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */