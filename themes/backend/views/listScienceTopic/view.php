<?php
/* @var $this ListScienceTopicController */
/* @var $model ListScienceTopic */

$this->breadcrumbs=array(
	'List Science Topics'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ListScienceTopic', 'url'=>array('index')),
	array('label'=>'Create ListScienceTopic', 'url'=>array('create')),
	array('label'=>'Update ListScienceTopic', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ListScienceTopic', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ListScienceTopic', 'url'=>array('admin')),
);
?>

<h1>View ListScienceTopic #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'id_teacher',
		'id_classification',
	),
)); ?>
