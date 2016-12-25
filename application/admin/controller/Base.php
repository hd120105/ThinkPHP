<?php
namespace app\admin\controller;
use think\Controller;
class Base extends Controller{
	public function _initialize()
	{
		if(!session('username')){//session验证
			$this->redirect('Login/index');//跳转函数
		}
	}
}
?>