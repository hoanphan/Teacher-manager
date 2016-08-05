<?php
/* @var $this ListteacherController */
/* @var $model ListTeacher */

$this->breadcrumbs=array(
	'List Teachers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ListTeacher', 'url'=>array('index')),
	array('label'=>'Manage ListTeacher', 'url'=>array('admin')),
);
?>

<h1>Create ListTeacher</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>