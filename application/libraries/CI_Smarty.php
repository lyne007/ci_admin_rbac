<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// 加载Smarty
require_once APPPATH.'libraries/Smarty/Smarty.class.php';

/**
 * CI_Smarty 自定义属于CI的Smarty
 * smarty版本 3.1.27
 * @author ligaocheng
 */
class CI_Smarty extends Smarty {
    
    protected $ci;
    protected $complie_dir;
    protected $template_ext;

    public function  __construct(){
        // 获得CI超级对象 使得自定义类可以使用Controller类的方法
        $this->ci = & get_instance();
        // 加载smarty的配置文件
        $this->ci->load->config('smarty');

        // 获取相关的配置项
        // 模板文件存放目录
        $this->template_dir    = $this->ci->config->item('template_dir');
        // 编译文件存放目录
        $this->complie_dir     = $this->ci->config->item('compile_dir');
        // 缓存文件存放目录
        $this->cache_dir       = $this->ci->config->item('cache_dir');
        // Smarty配置目录
        $this->config_dir      = $this->ci->config->item('config_dir');
        // 模板文件后缀
        $this->template_ext    = $this->ci->config->item('template_ext');
        // 缓存开关
        $this->caching         = $this->ci->config->item('caching');
        // 失效时间
        $this->cache_lifetime  = $this->ci->config->item('lefttime');
        // 左边界 左定界符
        $this->left_delimiter  = '{{';
        // 右边界 右定界符
        $this->right_delimiter = '}}';
        /*
        if(function_exists('site_url')) {
            // URL helper required
            $this->assign('site_url', site_url()); // so we can get the full path to CI easily
        }
      
        $this->assign('elapsed_time', $this->ci->benchmark->elapsed_time('total_execution_time_start', 'total_execution_time_end'));
        $this->assign('memory_usage', ( ! function_exists('memory_get_usage')) ? '0' : round(memory_get_usage() / 1024 / 1024, 2) . 'MB');
        */
    }
}