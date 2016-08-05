<?php
/* @var $this ListteacherController */
/* @var $model ListTeacher */

$this->breadcrumbs=array(
	'List Teachers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ListTeacher', 'url'=>array('index')),
	array('label'=>'Create ListTeacher', 'url'=>array('create')),
	array('label'=>'Update ListTeacher', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ListTeacher', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ListTeacher', 'url'=>array('admin')),
);
?>

<h1>View ListTeacher #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_Class',
		'name',
		'nation',
		'image',
		'birthday',
		'pefessional_gruop',
		'subject',
		'username',
		'password',
	),
)); ?>
