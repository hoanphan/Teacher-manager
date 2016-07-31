<?php
/* @var $this ListgruopclassController */
/* @var $model ListGruopClass */

$this->breadcrumbs=array(
	'List Gruop Classes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ListGruopClass', 'url'=>array('index')),
	array('label'=>'Create ListGruopClass', 'url'=>array('create')),
	array('label'=>'Update ListGruopClass', 'url'=>array('update', 'id'=>$model->id_gruop)),
	array('label'=>'Delete ListGruopClass', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_gruop),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ListGruopClass', 'url'=>array('admin')),
);
?>

<h1>View ListGruopClass #<?php echo $model->id_gruop; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_gruop',
		'name',
	),
)); ?>
