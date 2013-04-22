<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	public $pageTitle = 'Tripify - Travel more, Sell it, Enjoy your traveling !';
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	
	 function beforeAction($action) {
		$user = Yii::app()->user;
      if($user->isGuest){
			if(Yii::app()->facebook->getUser()){
				$data = Yii::app()->facebook->getInfo();
				$model=new User;
				$profile=new Profile;
				Profile::$regMode=true;
				$u = User::model()->find('username=:username',array('username'=>$data['id']));
				if(!$u){
					  $model->username = $data['id'];
					  $model->email = $data['email'];
					  $model->superuser = 1;
					  $model->password=UserModule::encrypting($model->email);
					  $model->status = 1;
					  if($model->save(false)){
							 $profile->user_id = $model->id;
							 $profile->lastname = $data['last_name'];
							 $profile->firstname = $data['first_name'];
							 try{
								 $image = Yii::app()->image->saveUrl('https://graph.facebook.com/'.$model->username.'/picture?type=large',$profile->lastname);;
								 $profile->id_image = $image->id;
								 Yii::log('Download Image Succes',  CLogger::LEVEL_INFO);
	    					 }
							 catch(CException $e){
								 print_r($e->getMessage());
								 exit;
								 $profile->id_image = 0;
								 Yii::log($e->getMessage(), CLogger::LEVEL_ERROR);
							 }
							 if($profile->save()){
								 
							 }
					  }
					  $identity=new UserIdentity($model->username,$model->email);
					  $identity->authenticate();
					  if($identity->errorCode==UserIdentity::ERROR_NONE){
							Yii::app()->user->login($identity,0);
					//		$this->redirect(Yii::app()->request->requestUri);
					  }
				}
				else{
					$identity=new UserIdentity($u->username,$u->email);
					$identity->authenticate();
					if($identity->errorCode==UserIdentity::ERROR_NONE){			
							Yii::app()->user->login($identity,0);
				//			$this->redirect(Yii::app()->request->requestUri);
					}
				} 
			}
		}
       return parent::beforeAction($action);
    }

}