<?php 
namespace app\api\controller;
use think\Controller;
use think\Request;
use think\Db;
Class Site extends controller
{
	public function login(Request $request){
		$data = $request->post();
		$res = Db::table('user')->where(['nickname'=>$data['name'],'password'=>md5($data['pwd'])])->find();
		if($res){
			$data = ['token'=>$res['token'],'id'=>$res['id'],'mobile'=>$res['mobile']];
			return json_encode(['msg'=>'登录成功','code'=>200,'data'=>$data]);
		}else{
			return json_encode(['msg'=>'登录失败','code'=>401,'data'=>'']);
		}
	}
}