<?php

class ApiController extends Controller
{
	public function actionIndex()
	{
		$model = new CariForm();
		if(isset($_GET['CariForm'])){
			$model->attributes = $_GET['CariForm'];
		}
		$provider = $model->search();
		$provider->pagination = false;
		$ret = $provider->getData();
		echo CJSON::encode($ret);
	}
}