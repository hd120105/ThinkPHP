<?php
namespace app\admin\model;

use think\Model;

class Login extends Model
{
    public function login($username,$password){
    	$admin= \think\Db::name('usertable')->where('username','=',$username)->find();
    	if($admin){
    		if($admin['password']==$password){
    			\think\Session::set('username',$admin['username']);//设置session
    			return 1;
    		}else{
    			return 2;
    		}

    	}else{
    		return 3;
    	}
    }
}
