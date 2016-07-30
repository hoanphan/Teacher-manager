<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$this->render('index',array("content"=>"bcx"));
	}
}