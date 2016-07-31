<?php
/* @var $this ClassificationController */
/* @var $model Classification */

$this->breadcrumbs=array(
	'Classifications'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Classification', 'url'=>array('index')),
	array('label'=>'Create Classification', 'url'=>array('create')),
	array('label'=>'Update Classification', 'url'=>array('update', 'id'=>$model->id_classification)),
	array('label'=>'Delete Classification', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_classification),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Classification', 'url'=>array('admin')),
);
?>

<h1>View Classification #<?php echo $model->id_classification; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_classification',
		'name',
	),
)); ?>
