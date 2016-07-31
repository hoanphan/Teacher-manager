<?php
/* @var $this YearController */
/* @var $model Year */

$this->breadcrumbs=array(
	'Years'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Year', 'url'=>array('index')),
	array('label'=>'Manage Year', 'url'=>array('admin')),
);
?>

<h1>Create Year</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>