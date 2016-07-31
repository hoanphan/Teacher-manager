<?php
/* @var $this ClassController */
/* @var $model ListClass */

$this->breadcrumbs=array(
	'List Classes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ListClass', 'url'=>array('index')),
	array('label'=>'Create ListClass', 'url'=>array('create')),
	array('label'=>'Update ListClass', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ListClass', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ListClass', 'url'=>array('admin')),
);
?>

<h1>View ListClass #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		array(
			'name'=>'id_homeroom_teacher',
			'type'=>'raw',
		),
		'id_year',
		'id_gruop',
	),
)); ?>
