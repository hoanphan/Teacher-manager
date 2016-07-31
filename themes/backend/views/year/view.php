<?php
/* @var $this YearController */
/* @var $model Year */

$this->breadcrumbs=array(
	'Years'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Year', 'url'=>array('index')),
	array('label'=>'Create Year', 'url'=>array('create')),
	array('label'=>'Update Year', 'url'=>array('update', 'id'=>$model->id_year)),
	array('label'=>'Delete Year', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_year),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Year', 'url'=>array('admin')),
);
?>

<h1>View Year #<?php echo $model->id_year; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_year',
		'name',
		'status',
	),
)); ?>
