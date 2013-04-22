<?php

class DetailController extends Controller
{
	public function actionView($id){
		$model=  Experience::model()->with(
				  array(
						'author'=>array(
							 'with'=>array(
								  'profile'=>array(
										 'alias'=>'autorprofile'
								  ),
								  'recentexperience'=>array(
										'alias'=>'oex',
										'order'=>'oex.create_date',
										'condition'=>'oex.id<>t.id'
								  )
							 ),
						 ),
						'comments'=>array(
							 'with'=>array(
								  'commentor'=>array(
										'order'=>'time desc',
										'alias'=>'usercommentor',
										'with'=>array(
											'profile'=>array(
												  'alias'=>'commetorprofile'
											)
									  ),
								  )
							 )
						),
		))->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'Post Tidak Ditemukan.');
		$pesan = new PesanForm();
		$pesan->id = $id;
		$this->render("detail",array(
			 'objek'=>$model,
			 'pesan'=>$pesan,
		));
	}
	
	public function loadModel($id)
	{
		$model=  Experience::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
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