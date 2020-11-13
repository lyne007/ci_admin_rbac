<?php

/**
* 权限
*/
class Power_model extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * 查询管理员列表
	 * @author lyne
	 */
	public function selectAdminList($search=null){
		$this->db->select('a.*,r.name');
		$this->db->from('admin a');
		$this->db->join('role r','a.role_id=r.id','left');
		if($search) $this->db->where('a.account',$search);
		$tmpDB = clone($this->db);
		$count = $this->db->count_all_results();
		$this->db = $tmpDB;

		$offset = ($this->uri->segment(3,  1) - 1) * $this->limitRows;
        $this->db->limit($this->limitRows, $offset);    // 添加limit

		if($this->query = $this->db->get()){
			$list = $this->getRows();
			$admin['count'] = $count;
			$admin['list'] = $list;
			return $admin;
		}
		return false;
	}

	/**
	 * 查询指定商户
	 * @author lyne
	 */
	public function selectAdminInfo($id){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id',$id);
		if($query = $this->db->get()){
			return $query->first_row('array');
		}
		return false;
	}

	/**
	 * 查询所有角色
	 * @author lyne
	 */
	public function selectRole(){
		$this->db->select('*');
		$this->db->from('role');
		if($this->query = $this->db->get()){
			return $this->getRows();
		}
		return false;
	}

	/**
	 * 创建管理员
	 * @author lyne
	 */
	public function insertAdmin($data){
		if(!$data) return false;
		$insert = $this->db->set($data)->get_compiled_insert('admin');
		if($this->db->query($insert)){
			return $this->db->insert_id();
		}
		return false;
	}

	/**
	 * 验证管理员是否存在
	 * @author lyne
	 */
	public function checkAccount($acc){
		if(!$acc) return false;
		$this->db->where('account',$acc);
		$count = $this->db->count_all_results('admin');
		return $count;
	}

	/**
	 * 删除管理员
	 * @author lyne
	 */
	public function deleteAdmin($id){
		if(!$id) return false;
		$this->db->where('id',$id);
		$sql = $this->db->get_compiled_delete('admin');
		if($this->db->query($sql)){
			return $this->db->affected_rows();
		}
		return false;
	}

	/**
	 * 更新管理员
	 * @author lyne
	 */
	public function updateAdmin($id,$data){
		if(!$id || !$data) return false;
		$this->db->where('id',$id);
		$sql = $this->db->set($data)->get_compiled_update('admin');
		if($this->db->query($sql)){
			return $this->db->affected_rows();
		}
		return false;
	}

	/**
	 * 查询菜单列表
	 * @author lyne
	 */
	public function selectMenuList($pid=0,$level=1,$search=null){
		$this->db->select('*');
		$this->db->from('menu');
		$this->db->where('level',$level);
		$this->db->where('status','1');
		$this->db->where('pid',$pid);
		if($search) $this->db->where('name',$search);
		$tmpDB = clone($this->db);
		$count = $this->db->count_all_results();
		$this->db = $tmpDB;
		$this->db->order_by('order desc');

		$offset = ($this->uri->segment(3,  1) - 1) * $this->limitRows;
        $this->db->limit($this->limitRows, $offset);    // 添加limit

		if($this->query = $this->db->get()){
			$list = $this->getRows();
			$menu['count'] = $count;
			$menu['list'] = $list;
			return $menu;
		}
		return false;
	}

	/**
	 * 根据菜单id获取父级Id
	 * @author lyne
	 */
	public function selectMenuInfo($id){
		$this->db->select('*');
		$this->db->from('menu');
		$this->db->where('status','1');
		$this->db->where('id',$id);
		if($query = $this->db->get()){
			$info = $query->first_row('array');
			return $info;
		}
		return false;
	}

	/**
	 * 验证是否有子类
	 * @author lyne
	 */
	public function selectMenuChild($id){
		if(!$id) return false;
		$this->db->select('*');
		$this->db->from('menu');
		$this->db->where('status','1');
		$this->db->where('pid',$id);
		if($this->query = $this->db->get()){
			$menu = $this->getRows();
			return $menu;
		}
		return false;
	}

	/**
	 * 删除菜单
	 * @author lyne
	 */
	public function deleteMenu($id){
		if(!$id) return false;
		$this->db->where('id',$id);
		$sql = $this->db->get_compiled_delete('menu');
		if($this->db->query($sql)){
			return $this->db->affected_rows();
		}
		return false;
	}

	/**
	 * 验证菜单名是否存在
	 * @author lyne
	 */
	public function checkMenu($name,$level){
		if(!$name) return false;
		$this->db->where('name',$name);
		$this->db->where('level',$level);
		$count = $this->db->count_all_results('menu');
		return $count;
	}

	/**
	 * 创建菜单
	 * @author lyne
	 */
	public function insertMenu($data){
		if(!$data) return false;
		$insert = $this->db->set($data)->get_compiled_insert('menu');
		if($this->db->query($insert)){
			return $this->db->insert_id();
		}
		return false;
	}

	/**
	 * 更新菜单
	 * @author lyne
	 */
	public function updateMenu($id,$data){
		if(!$id || !$data) return false;
		$this->db->where('id',$id);
		$sql = $this->db->set($data)->get_compiled_update('menu');
		if($this->db->query($sql)){
			return $this->db->affected_rows();
		}
		return false;
	}

	/**
	 * 查询角色列表
	 * @author lyne
	 */
	public function selectRoleList(){
		$this->db->select('*');
		$this->db->from('role');
		$this->db->where('status','1');
		$tmpDB = clone($this->db);
		$count = $this->db->count_all_results();
		$this->db = $tmpDB;
		// $this->db->order_by('CreateTime desc');

		$offset = ($this->uri->segment(3,  1) - 1) * $this->limitRows;
        $this->db->limit($this->limitRows, $offset);    // 添加limit

		if($this->query = $this->db->get()){
			$list = $this->getRows();
			$role['count'] = $count;
			$role['list'] = $list;
			return $role;
		}
		return false;
	}

	/**
	 * 验证角色名称是否存在
	 * @author lyne
	 */
	public function checkRole($name){
		if(!$name) return false;
		$this->db->where('name',$name);
		$count = $this->db->count_all_results('role');
		return $count;
	}

	/**
	 * 创建角色
	 * @author lyne
	 */
	public function insertRole($data){
		if(!$data) return false;
		$insert = $this->db->set($data)->get_compiled_insert('role');
		if($this->db->query($insert)){
			return $this->db->insert_id();
		}
		return false;
	}

	/**
	 * 查询指定角色
	 * @author lyne
	 */
	public function selectRoleInfo($id){
		$this->db->select('*');
		$this->db->from('role');
		$this->db->where('id',$id);
		if($query = $this->db->get()){
			return $query->first_row('array');
		}
		return false;
	}

	/**
	 * 更新角色
	 * @author lyne
	 */
	public function updateRole($id,$data){
		if(!$id || !$data) return false;
		$this->db->where('id',$id);
		$sql = $this->db->set($data)->get_compiled_update('role');
		if($this->db->query($sql)){
			return $this->db->affected_rows();
		}
		return false;
	}

	/**
	 * 删除角色
	 * @author lyne
	 */
	public function deleteRole($id){
		if(!$id) return false;
		$this->db->where('id',$id);
		$sql = $this->db->get_compiled_delete('role');
		if($this->db->query($sql)){
			return $this->db->affected_rows();
		}
		return false;
	}

	/** 
     * selectPower 获取权限
     * @author lyne  
     */ 
    public function selectPower(){
        $this->db->select('id,pid,name');
        $this->db->from('menu');
        $this->db->order_by('order desc');
        if($this->query = $this->db->get()){
       	 	return $this->getRows();
        }
        return false;
    }

    /** 
     * getExistsPower 获取角色已存在的权限
     * @author  lyne
     */  
    public function getExistsPower($id){
        $this->db->select('menu_id');
        $this->db->from('role');
        $this->db->where('id',$id);
        if($query = $this->db->get()){
			return $query->first_row('array');
		}
		return false;
    }

    /** 
     * getPowerById 获取角色表所有id
     * @author lyne
     */  
    public function getPowerById($id){
        $this->db->select('id,pid,name');
        $this->db->from('menu');
        $this->db->where('id',$id);
        if($query = $this->db->get()){
			return $query->first_row('array');
		}
		return false;
    }

    /** 
     * setRoleMenu 设置角色权限
     * @author  Lyne
     */ 
    public function setRoleMenu($id,$menu){
        if(!$id || !$menu ) return false;
        $this->db->set('menu_id',$menu);
        $this->db->where('id',$id);
        if($this->db->update('role')){
        	return $this->db->affected_rows();
        }
        return false;
    }


    /** 
      * getMenuId 获取菜单ID
      * @author  Lyne
      */  
    public function getMenuId($id){
        $this->db->select('menu_id');
        $this->db->from('role');
        $this->db->where('id',$id);
        if($query = $this->db->get()){
        	return $query->first_row('array');
        }
        return false;
    }

    /**
     * 获取侧边栏显示菜单
     * @author lyne
     */
    public function getNavbar($menu_id){
    	if(!$menu_id) return false;
    	$this->db->select('id,pid,name,level,icon,is_navbar,navbar_url,order');
        $this->db->from('menu');
        $this->db->where('id',$menu_id);
        $this->db->where('is_navbar','1');
        if($query = $this->db->get()){
        	return $query->first_row('array');
        }
        return false;
    }

}