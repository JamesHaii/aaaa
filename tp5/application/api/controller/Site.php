<?php 
namespace app\api\controller;
use think\Controller;
use think\Request;
Class Site extends controller
{
	public function login(Request $request){
		$data = $request->post();
		
		$data = ['name'=>'Tom','addres'=>'美国佛罗里达州','age'=>28,'post'=>$data];
		echo json_encode(['msg'=>'登录成功','code'=>200,'data'=>$data]);
	}
}