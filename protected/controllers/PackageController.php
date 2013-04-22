<?php

class PackageController extends Controller
{
	public function actionIndex()
	{
		$model=new Experience;
    /*
    if(isset($_POST['ajax']) && $_POST['ajax']==='experience-form-form')
    {
        echo CActiveForm::validate($model);
        Yii::app()->end();
    }
    */

		if(isset($_POST['Experience']))
		{
			 $model->attributes=$_POST['Experience'];
			 $model->user_id = Yii::app()->user->getId();
			 if($model->save())
			 {
				  $this->redirect(array("/package/update",'id'=>$model->id));
			 }
		}
		$this->render('create',array('model'=>$model)); 
	}
	
	public function actionUpdate($id){
		$model=Experience::model()->findByPk($id);
		if(!$model){
			throw new CHttpException('404','Post Not Found');
		}
		if(isset($_POST['Experience']))
		{
			 $model->attributes=$_POST['Experience'];
			 $model->user_id = Yii::app()->user->getId();
			 if($model->save())
			 {
					$url= Yii::app()->createUrl("/package/update",array('id'=>$model->id));
					$this->redirect($url."#Photo");
			 }
		}
		$this->render('update',array('model'=>$model)); 
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