<?php
/* @var $this ListSubjectController */
/* @var $model ListSubject */

$this->breadcrumbs=array(
	'List Subjects'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ListSubject', 'url'=>array('index')),
	array('label'=>'Create ListSubject', 'url'=>array('create')),
	array('label'=>'Update ListSubject', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ListSubject', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ListSubject', 'url'=>array('admin')),
);
?>

<h1>View ListSubject #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
