<?php
namespace app\controllers;
use Yii;
use app\models\Tickets;
use app\models\User;

class AdminController extends BeeController{
        public function actionManager(){
            return $this->render('/admin/manager');
    }
}