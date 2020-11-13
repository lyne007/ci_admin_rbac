<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    // 模板主题配置
    $config['theme']        = 'default';
    // 模板文件存放路径
    $config['template_dir'] = APPPATH.'views/';
    // 编译文件存放路径
    $config['compile_dir']  = FCPATH.'templates_c/';
    // 缓存文件存放路径
    $config['cache_dir']    = FCPATH.'cache/';
    // 配置文件存放路径
    $config['config_dir']   = FCPATH.'configs/';
    // 设置模板文件后缀
    $config['template_ext'] = '.html';
    // 缓存开关
    $config['caching']      = false;
    // 编译文件失效时间
    $config['lefttime']     = 60;