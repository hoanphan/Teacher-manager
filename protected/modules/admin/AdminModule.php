<?php

class AdminModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application
        $this->setComponents(array(
            'class'=>array(
                'class'=>'CWebUser',
                'loginUrl'=>Yii::app()->createUrl('admin/default/login')
            ))
        );
		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));
        Yii::app()->theme='backend';
        $this->setViewPath(Yii::getPathOfAlias('webroot').'/themes/backend/views');
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			/*$router=Yii::app()->controller->module->id.'/'.$controller->id.'/'.$action->id;
            $loginpage=array('admin/default/login');
            if(Yii::app()->user->isGuest&&!in_array($router,$loginpage))
            {
               Yii::app()->user->returnUrl=Yii::app()->request->getUrl();
                Yii::app()->getModule("listTeacher")->user->loginRequired();
            }*/
			return true;
		}
		else
			return false;
	}
}
