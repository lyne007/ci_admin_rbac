<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
	
	protected $isNeedLogin = TRUE;

	public function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		$this->assign('title','主页');
		$this->display('main/index.html');
	}
}
