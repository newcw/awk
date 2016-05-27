<?php
namespace  app\controllers;
use Yii;

class IndexController extends BeeController{
	public function actionIndex(){
		$session = Yii::$app->session;
		$username = $session->get('username');

		if($username){
			return $this->redirect(array('/ticket/mine'));
		}
		else{
			return $this->redirect(array('/user/login'));
		}
	}

}


?>