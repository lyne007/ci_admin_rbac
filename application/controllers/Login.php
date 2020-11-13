<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

    protected $isNeedLogin = FALSE;
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->display('login/index.html');
	}

	/**
	 * 登录验证
	 * @author lyne
	 */
	public function doLogin(){
		$account = $this->input->post('email',true);
		$password = md5($this->input->post('password',true));
		$captcha = strtolower($this->input->post('yzm',true));
		if(isset($_SESSION['captcha_img']) && $captcha ==$_SESSION['captcha_img']){
			unset($_SESSION['captcha_img']);
			$this->load->model('user_model');
			$account_res = $this->user_model->isExistsUser($account);
			if($account_res>0){
				$user_res = $this->user_model->checkPassWord($account,$password);
				if($user_res){
					$_SESSION['login'] = $user_res;
					$this->ajaxReturn(['retcode'=>1,'msg'=>'','data'=>[]]);
				}else{
					$this->ajaxReturn(['retcode'=>1002,'msg'=>'密码错误','data'=>[]]);
				}
			}else{
				$this->ajaxReturn(['retcode'=>1001,'msg'=>'账号不存在','data'=>[]]);
			}
		}else{
			$this->ajaxReturn(['retcode'=>1006,'msg'=>'验证码不正确','data'=>[]]);
		}
	}

	/**
	 * 登出
	 * @author lyne
	 */
	public function loginOut(){
		// $this->session->sess_destroy();
		unset($_SESSION['login']);
		$this->jumpNoticePage(true,'login');
	}

	/**
	 * 验证码
	 * @author  lyne
	 */
	public function captcha(){
		require APPPATH.'libraries/ValidateCode/ValidateCode.class.php';  //先把类包含进来，实际路径根据实际情况进行修改。
		$_vc = new ValidateCode();  //实例化一个对象
		$_vc->doimg();  
		$_SESSION['captcha_img'] = $_vc->getCode();//验证码保存到SESSION中
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */