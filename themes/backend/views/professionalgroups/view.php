<?php
/* @var $this ProfessionalgroupsController */
/* @var $model ProfessionalGroups */

$this->breadcrumbs=array(
	'Professional Groups'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ProfessionalGroups', 'url'=>array('index')),
	array('label'=>'Create ProfessionalGroups', 'url'=>array('create')),
	array('label'=>'Update ProfessionalGroups', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProfessionalGroups', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProfessionalGroups', 'url'=>array('admin')),
);
?>

<h1>View ProfessionalGroups #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
