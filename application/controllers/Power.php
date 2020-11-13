<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Power extends MY_Controller {
    
    protected $isNeedLogin = TRUE;

	public function __construct(){
		parent::__construct();
	}
	
	/**
	 * 管理员列表
	 * @author lyne
	 */
	public function admin(){

		$this->load->model('power_model');
		$rolelist = $this->power_model->selectRole();

		$this->assign('rolelist',$rolelist);
		$this->assign('title','管理员');
		$this->assign('nav','r-l');
		$this->display('power/admin-list.html');
	}

	/**
	 * 角色列表
	 * @author lyne
	 */
	public function role(){

		$this->assign('title','角色');
		$this->assign('nav','r-l');
		$this->display('power/role-list.html');
	}

	/**
	 * 菜单列表
	 * @author lyne
	 */
	public function menu(){
		
		$this->assign('title','菜单');
		$this->assign('nav','p-l');
		$this->display('power/menu-list.html');
	}

	/**
	 * roleTree 分配权限给角色
	 * @author lyne
	 */
	public function roleTree(){
		$id = $this->uri->segment(3,true);
		$this->load->model('power_model');
		$info = $this->power_model->selectRoleInfo($id);
		// echo "<pre>";
		// var_dump($info);
		$this->assign('roleinfo',$info);
		$this->assign('title','角色');
		$this->assign('nav','r-l');
		$this->display('power/role-tree.html');
	}
	
	/**
	 * ajaxAdminList 获取管理员列表
	 * @author lyne
	 */
	public function ajaxAdminList(){
		$this->load->model('power_model');
		$search = @$this->input->post('account',true);

		$result = $this->power_model->selectAdminList($search);
		$list = $result['list'];
		$count = $result['count'];
		
		$this->load->library('pagination');
		$config = $this->myPagination(base_url().'power/ajaxAdminList',$count);
		$this->pagination->initialize($config);
		$page = $this->pagination->create_links();
		// 尾页
		$last_page = ceil($count / $this->limitRows);
		$this->assign('total',$count);
		$this->assign('showpage',$page);
		$this->assign('last_page',$last_page);
		$this->assign('adminlist',$list);
		$this->assign('title','管理员');
		$this->display('power/admin-table.html');
	}

	/**
	 * getAdminInfo 获取指定管理员信息
	 * @author lyne
	 */
	public function getAdminInfo(){
		$id = $this->input->post('id',true);
		$this->load->model('power_model');
		$info = $this->power_model->selectAdminInfo($id);
		$this->ajaxReturn($info);
	}

	/**
	 * ajaxAddAdmin 创建管理员
	 * @author lyne
	 */
	public function ajaxAddAdmin(){
		$data = $this->input->post(null,true);
		if($data['password'] != $data['confirm_password']){
			$this->ajaxReturn(['success'=>false,'msg'=>'两次密码不一致']);
		}
		unset($data['confirm_password']);
		$data['password'] = md5($data['password']);
		
		$data['admin_type'] = 1;
		$data['add_time'] = time();
		$this->load->model('power_model');
		$check_result = $this->power_model->checkAccount($data['account']);
		($check_result > 0) && $this->ajaxReturn(['success'=>false,'msg'=>'账号已存在']);

		$result = $this->power_model->insertAdmin($data);
		if($result) $this->ajaxReturn(['success'=>true,'msg'=>'创建成功']);
		else $this->ajaxReturn(['success'=>false,'msg'=>'创建失败']);
	}

	/**
	 * ajaxDelAdmin 删除管理员
	 * @author lyne
	 */
	public function ajaxDelAdmin(){
		$id = $this->input->post('id',true);
		$this->load->model('power_model');
		$result = $this->power_model->deleteAdmin($id);

		if($result) $this->ajaxReturn(['success'=>true,'msg'=>'删除成功']);
		else $this->ajaxReturn(['success'=>false,'msg'=>'删除失败']);
	}

	/**
	 * ajaxEditAdmin 编辑管理员
	 * @author lyne
	 */
	public function ajaxEditAdmin(){
		$data = $this->input->post(null,true);
		if($data['password'] != $data['confirm_password']){
			$this->ajaxReturn(['success'=>false,'msg'=>'两次密码不一致']);
		}
		unset($data['confirm_password']);
		$data['password'] = md5($data['password'].'ICBC');
		$data['admin_type']==1; 
		$id = $data['id'];
		unset($data['id']);
		$this->load->model('power_model');
		$result = $this->power_model->updateAdmin($id,$data);
		if($result) $this->ajaxReturn(['success'=>true,'msg'=>'编辑成功']);
		else $this->ajaxReturn(['success'=>false,'msg'=>'编辑失败']);
	}

	/**
	 * ajaxMenuList 获取菜单列表
	 * @author lyne
	 */
	public function ajaxMenuList(){
		$mid = $this->input->post('id',true);
		$level = $this->input->post('level',1);
		$mid = $mid?$mid:0;
		$level = empty($level)?1:$level;

		$search = @$this->input->post('name',true);
		$this->load->model('power_model');
		$result = $this->power_model->selectMenuList($mid,$level,$search);
		foreach ($result['list'] as $k => &$v) {
			switch ($v['level']) {
				case '1':$v['level_des'] = '一级';break;
				case '2':$v['level_des'] = '二级';break;
				case '3':$v['level_des'] = '三级';break;
			}
		}
		$list = $result['list'];
		$count = $result['count'];

		$this->load->library('pagination');
		$config = $this->myPagination(base_url().'power/ajaxMenuList',$count);
		$this->pagination->initialize($config);
		$page = $this->pagination->create_links();
		// 尾页
		$last_page = ceil($count / $this->limitRows);

		$this->assign('total',$count);
		$this->assign('showpage',$page);
		$this->assign('last_page',$last_page);
		$this->assign('menulist',$list);
		$this->assign('title','查看-菜单列表');
		$this->assign('nav','a-l');
		$this->display('power/menu-table.html');
	}

	/**
	 * ajaxMenuPid 根据菜单id获取菜单的父级ID
	 * @author lyne
	 */
	public function ajaxMenuPid(){
		$id = $this->input->post('id',true);
		$this->load->model('power_model');
		$res = $this->power_model->selectMenuInfo($id);
		if($res) $this->ajaxReturn($res['pid']);
		else $this->ajaxReturn('ERROR');
	}

	/**
	 * ajaxDelMenu 删除菜单
	 * @author lyne
	 */
	public function ajaxDelMenu(){
		$id = $this->input->post('id',true);
		$this->load->model('power_model');
		// 先验证是否有子类，有则提示先删除子类
		$check_child = $this->power_model->selectMenuChild($id);
		if($check_child) {
			$this->ajaxReturn(['success'=>false,'msg'=>'失败! 存在子类']);
			exit;
		}
		$result = $this->power_model->deleteMenu($id);
		if($result) $this->ajaxReturn(['success'=>true,'msg'=>'删除成功']);
		else $this->ajaxReturn(['success'=>false,'msg'=>'删除失败']);
	}

	/**
	 * ajaxAddMenu 创建菜单
	 * @author lyne
	 */
	public function ajaxAddMenu(){
		$data = $this->input->post(null,true);

		if(!isset($data['pid']) || empty($data['pid'])) $data['pid'] = 0;
		if(!isset($data['level']) || empty($data['level'])) $data['level'] = 1;
		if(!isset($data['order']) || empty($data['order'])) $data['order'] = 0;
		$data['status'] = '1';
		$data['add_time'] = time();
		$this->load->model('power_model');
		$check_result = $this->power_model->checkMenu($data['name'],$data['level']);
		if($check_result > 0){
			$this->ajaxReturn(['success'=>false,'msg'=>'菜单已存在']);
			exit;
		}
		$result = $this->power_model->insertMenu($data);
		if($result) $this->ajaxReturn(['success'=>true,'msg'=>'创建成功']);
		else $this->ajaxReturn(['success'=>false,'msg'=>'创建失败']);
	}

	/**
	 * ajaxEditMenu 编辑菜单
	 * @author lyne
	 */
	public function ajaxEditMenu(){
		$data = $this->input->post(null,true);
		$id = $data['id'];
		unset($data['id']);
		$this->load->model('power_model');
		$result = $this->power_model->updateMenu($id,$data);
		if($result) $this->ajaxReturn(['success'=>true,'msg'=>'更新成功']);
		else $this->ajaxReturn(['success'=>false,'msg'=>'更新失败']);
	}

	/**
	 * ajaxRoleList 获角色列表
	 * @author lyne
	 */
	public function ajaxRoleList(){
		$this->load->model('power_model');
		$result = $this->power_model->selectRoleList();
		
		$list = $result['list'];
		$count = $result['count'];
		
		$this->load->library('pagination');
		$config = $this->myPagination(base_url().'power/ajaxRoleList',$count);
		$this->pagination->initialize($config);
		$page = $this->pagination->create_links();
		// 尾页
		$last_page = ceil($count / $this->limitRows);

		$this->assign('total',$count);
		$this->assign('showpage',$page);
		$this->assign('last_page',$last_page);
		$this->assign('rolelist',$list);
		$this->assign('title','查看-角色列表');
		$this->assign('nav','r-l');
		$this->display('power/role-table.html');
	}

	/**
	 * getMenuInfo 获取指定菜单信息
	 * @author lyne
	 */
	public function getMenuInfo(){
		$id = $this->input->post('id',true);
		$this->load->model('power_model');
		$info = $this->power_model->selectMenuInfo($id);
		$this->ajaxReturn($info);
	}

	/**
	 * ajaxAddRole 创建角色
	 * @author lyne
	 */
	public function ajaxAddRole(){
		$data = $this->input->post(null,true);
		$data['status'] = '1';
		$data['add_time'] = time();
		$this->load->model('power_model');
		$check_result = $this->power_model->checkRole($data['name']);
		if($check_result > 0){
			$this->ajaxReturn(['success'=>false,'msg'=>'失败！角色名已存在']);
			exit;
		}
		$result = $this->power_model->insertRole($data);
		
		if($result) $this->ajaxReturn(['success'=>true,'msg'=>'创建成功,记得分配权限哦']);
		else $this->ajaxReturn(['success'=>false,'msg'=>'创建失败']);
	}

	/**
	 * ajaxDelRole 删除角色
	 * @author lyne
	 */
	public function ajaxDelRole(){
		$id = $this->input->post('id',true);
		$this->load->model('power_model');
		$result = $this->power_model->deleteRole($id);

		if($result) $this->ajaxReturn(['success'=>true,'msg'=>'删除成功']);
		else $this->ajaxReturn(['success'=>false,'msg'=>'删除失败']);
	}

	/**
	 * getRoleInfo 获取指定角色信息
	 * @author lyne
	 */
	public function getRoleInfo(){
		$id = $this->input->post('id',true);
		$this->load->model('power_model');
		$info = $this->power_model->selectRoleInfo($id);
		$this->ajaxReturn($info);
	}

	/**
	 * ajaxEditRole 编辑角色
	 * @author lyne
	 */
	public function ajaxEditRole(){
		$data = $this->input->post(null,true);
		$id = $data['id'];
		unset($data['id']);
		$this->load->model('power_model');
		$result = $this->power_model->updateRole($id,$data);
		
		if($result) $this->ajaxReturn(['success'=>true,'msg'=>'更新成功']);
		else $this->ajaxReturn(['success'=>false,'msg'=>'更新失败']);
	}

	/** 
     * getPower 获取所有权限
     * @author  lyne
     */ 
    public function getPower(){
        $id = $this->input->post('id');
        $this->load->model('power_model');
        $all = $this->power_model->selectPower();
        // print_r($all);
        $r = $this->power_model->getExistsPower($id);    //1,4,7,11
        // print_r($r);
        if($r){
            $menu = $r['menu_id'];
            $same = array();
            $m = explode(',',$menu);
            $mm = array_pop($m);
            $c = count($m);     //数组单元个数
            $kk = array();
            foreach($m as $k=>$v){
                $id = $v;
                for($i=0;$i<$c;$i++) {
                    $r = $this->power_model->getPowerById($id);
                }
                array_push($kk,$r);
            }
        }
        
        foreach ($all as $k => &$v) {
            foreach ($kk as $k2 => $v2) {
                if($v['id']==$v2['id']){
                    $v['checked']=true;
                    $v['open']=true;
                }
            }
        }
        // print_r($all);exit;
        $this->ajaxReturn($all);
    }

    /** 
     * roleAddPower 给角色加权限
     * @author lyne
     */  
    public function roleAddPower(){
        $id = $this->input->post('id');
        $data = $this->input->post('menu_id');
        $this->load->model('power_model');
        $r = $this->power_model->setRoleMenu($id,$data);
        if($r) $this->ajaxReturn(['success'=>true,'msg'=>'添加成功']);
        $this->ajaxReturn(['success'=>false,'msg'=>'添加失败']);
    }

    /**
	 * 修改密码
	 * @author lyne
	 */
	public function ajaxPasswordEdit(){
		$data = $this->input->post('jsonData');
		$email = trim($data['account']);
		$password = md5(trim($data['password']).'ICBC');
		$this->load->model('user_model');
		$result = $this->user_model->checkPassWord($email,$password);
		if(!$result) $this->ajaxReturn(array('success'=>false,'msg'=>'原始密码不正确！'));

		$up_data['password'] = md5($data['newpassword'].'ICBC');
		$up_res = $this->user_model->updataPassword($email,$up_data);
		if($up_res) $this->ajaxReturn(array('success'=>true,'msg'=>'密码更新成功！'));
		else $this->ajaxReturn(array('success'=>false,'msg'=>'密码更新失败！'));
	}

	/**
	 * verifyPass
	 * @author sam
	 */
	public function verifyPass(){
		$pass = $this->input->post('pass');
		$this->load->model('user_model');
		$res = $this->user_model->selectUserPass(md5(trim($pass)));
		if($res){
			$this->ajaxReturn(array('success'=>true,'msg'=>'密码验证成功！'));
		}else{
			$this->ajaxReturn(array('success'=>false,'msg'=>'密码验证失败！'));
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */