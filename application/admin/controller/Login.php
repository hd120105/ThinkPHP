<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Login as Log;//引入空间类元素
class Login extends Controller
{
	public function index()
	{
		if(request()->isPost()){
			echo 111;
			$login = new Log;
			$status   = $login->login(input('username'),input('password'));
			if($status == 1)
			{
				return $this->success("登陆成功",url('index/index'));
			}else if($status==2)
			{
				return $this->error("密码错误");
			}else{
				return $this->error("用户名不存在");
			}
		}
		return $this->fetch('Login');
	}
	 public function logout(){
        session(null);//清除session
        return $this->success('退出成功！',url('index'));
    }
}
?>
