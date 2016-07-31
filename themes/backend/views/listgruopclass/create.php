<?php
/* @var $this ListgruopclassController */
/* @var $model ListGruopClass */

$this->breadcrumbs=array(
	'List Gruop Classes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ListGruopClass', 'url'=>array('index')),
	array('label'=>'Manage ListGruopClass', 'url'=>array('admin')),
);
?>

<h1>Create ListGruopClass</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>