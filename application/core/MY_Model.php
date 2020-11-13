<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 扩展模型核心类
 *
 */
class MY_Model extends CI_Model {
    // 数据库查询结果集
    protected $query;
    // 分页位移 每页显示数目
    protected $limitRows = 10;

    public function __construct(){

        parent::__construct();

    }

    /**
     * getRows 获取数据数组
     * @access protected
     * @param object $query CI_QUERY_OBJECT CI查询结果对象
     * @return array $list
     * @author ligaocheng
     */
    protected function getRows($query = null){
        if (!$query) {
            $query = $this->query;
            if (!$query) return false;
        }
        $list = array();
        foreach ($query->result_array() as $row) {
            $list[] = $row;
        }

        return $list;
    }

    

        
}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */