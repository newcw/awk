<?php
namespace app\controllers;
use Yii;
use app\models\Tickets;
use app\models\User;
use yii\data\Pagination;

class TicketController extends BeeController{
	public function actionCreate(){
		return $this->render('/ticket/create');
	}

	public function getSessionInfo() {
		$session = Yii::$app->session;
		$uid = $session->get('uid');
		$showname = User::find()
			->select('showname')
			->where(['uid' => $uid])
			->asArray()
			->one();
		$data['id'] = $uid;
		$data['showname'] = $showname['showname'];
		return $data;	
	}

	public function getTickets($id){
		$tickets = Tickets::find()
			->select('*')
			->where(['owner' => $id])
			->asArray()
			->orderBy('id DESC')
			->all();

		return $tickets;
	}

	public function getShowName($id){
		$showname = User::find()
			->select("showname")
			->where(['uid' => $id])
			->asArray()
			->one();
		return $showname;
	}

	
	public  function actionSave() {
	//保存上线信息
		$request = Yii::$app->request;
		$session = Yii::$app->session;
		$subject = $request->post('subject');
		$type = $request->post('type');
		$project = $request->post('project');
		$toPM = $request->post('toPM');
		$mc = $request->post('mc');
		$step = $request->post('step');
		$uid = $session->get('uid');
		$createTime = date('Y-m-d H:i:s');
		$ticket = new Tickets();
		$ticket ->subject = $subject;
		$ticket ->type = $type;
		$ticket ->project = $project;
		$ticket ->toPM = $toPM;
		$ticket ->mc = $mc;
		$ticket ->step = $step;
		$ticket ->owner = $uid;
		$ticket ->create_time = $createTime;

		if($ticket ->save()){
			$id = $ticket->attributes['id'];

			return $this->redirect(array('/ticket/detail','tid'=>$id));
		}
	}

	public function actionNews(){
		//最新上线单
		$newTickets = Tickets::find()
			->asArray()
			->orderBy('id DESC')
			->all();

		$ticketInfo = array();
		foreach ($newTickets as $key => $value) {
			// print_r($value['owner']);
			$showname = User::find()
				->select('showname')
				->where(['uid' => $value['owner']])
				->asArray()
				->one();
			$value["owner_showname"] = $showname['showname'];
					$ticketInfo[] = $value;
		}

		$data['ticketInfo'] = $ticketInfo;
		// echo "<pre>";
		// var_dump($data);exit;
		
		return $this->render('/ticket/news',$data);
	}
	
	public function actionDetail() {
		//上线单详情页
		$request = Yii::$app->request;
		$id = $request->get('tid');
		$tickets = Tickets::find()
			->where(['id' => $id])
			->asArray()
			->one();
		// var_dump($tickets);exit;
		$showname = User::find()
			->select('showname')
			->where(['uid' => $tickets['owner']])
			->asArray()
			->one();
		$data['ticket'] = $tickets;
		
		$data['username'] = $showname['showname'];
 		return $this->render('/ticket/detail',$data);
	}

	public function actionMine(){
		//我的工单
		$userInfo = $this->getSessionInfo();
		$userId = $userInfo['id'];

		$query = Tickets::find()->select("*")->where(['owner' => $userId])->asArray()->orderBy('id DESC');
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => '10']);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();  
        // echo "<pre>";
        // var_dump($pages->limit);die;
        // print_r($models);die;

        $userTicket['userTicket'] = $models;

        $userTicket['showname'] = $this ->getShowName($userId);

        // $userTicket['models'] = $models;

        $userTicket['pages'] = $pages;

		return $this->render('/ticket/mine',$userTicket);
	}
}