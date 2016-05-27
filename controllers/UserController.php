<?php

namespace app\controllers;

use Yii;
use app\models\User;

class UserController extends BeeController {
	//用户登录
	public function actionLogin(){
// 		return $this->render('/user/login');
		return $this->renderPartial('/user/login');
	}
	
	public function actionChecklogin(){
		//检查登录状态
		$request = Yii::$app->request;
		$username = $request->post('username');
		$password = $request->post('password');
		
		$user = User::find()
			->where(['username' => $username])
			->asArray()
			->one();
		
		if (!$user){
			return $this->renderPartial('/layout/error');
		}
		
		if (md5($password) == $user['password']){
			$session = Yii::$app->session;
			
			$session->set('username',$username);
			$session->set('uid',$user['uid']);
			return $this->redirect(array('/ticket/mine'));
			
		}
		else {
			echo $password;
			echo "user password is wrong!";
		}
		exit;
	}
	
	public function actionLogout(){
		$session = Yii::$app->session;
		$username =$session['username']; 
		$session->destroy();
		return $this->redirect(array('/index/index'));

	}
	
}