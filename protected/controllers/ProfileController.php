<?php

class ProfileController extends Controller
{
	public function actionIndex($id)
	{
		$model = Yii::app()->user->user($id);
		if(!$model){
			throw new CHttpException('404',"Profile Tidak Ditemukan");
		}
		$this->render('index',array(
			 'model'=>$model
		));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}