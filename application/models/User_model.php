<?php

/**
 * 用户
 */
class User_model extends MY_Model{
	
	function __construct(){
		parent::__construct();
	}

	/**
	 * isExistsUser 验证是否存在
	 * @author  lyne
	 */
	public function isExistsUser($account){
		if(!$account) return false;
		return $this->db->where('account',$account)->count_all_results('admin');
	}

	/**
	 * selectUser 获取账号信息
	 * @author  lyne
	 */
	public function selectUser($account){
		if(!$account) return false;
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('account',$account);
		if($query = $this->db->get()){
			return $query->first_row('array');
		}
		return false;
	}
	
	/**
	 * checkPassWord 验证账号密码
	 * @author lyne
	 */
	public function checkPassWord($account,$pwd){
		if(!$account || !$pwd) return false;
		$this->db->select('a.*,r.name as role_name');
		$this->db->from('admin a');
		$this->db->join('role r','a.role_id=r.id');
		$this->db->where('a.status','1');
		$this->db->where('account',$account);
		$this->db->where('password',$pwd);
		if($query = $this->db->get()){
			return $query->first_row('array');
		}
		return false;
	}


	/**
	 * updataPassword 修改密码
	 * @author lyne
	 */
	public function updataPassword($email,$data){
		if(!$email || empty($data)) return false;
		$this->db->where('account',$email);
		$sql = $this->db->set($data)->get_compiled_update('admin');
		if($this->db->query($sql)){
			return $this->db->affected_rows();
		}
		return false;
	}


	/**
	 * 验证密码
	 * @author lyne
	 */
	public function selectUserPass($pass){
		if(!$pass) return false;
		$res = $this->db->where('id',$this->session->login['id'])->where('password',$pass)->count_all_results('admin');
		return $res;
	}

}