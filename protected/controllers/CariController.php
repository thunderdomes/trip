<?php

class CariController extends Controller
{
	public function actionIndex()
	{
		$model = new CariForm();
		if(isset($_GET['CariForm'])){
			$model->attributes = $_GET['CariForm'];
		}
		$this->render('index',array(
			 'model'=>$model
		));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		
	}
	*/
}