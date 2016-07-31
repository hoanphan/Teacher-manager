<?php
/* @var $this ProfessionalgroupsController */
/* @var $model ProfessionalGroups */

$this->breadcrumbs=array(
	'Professional Groups'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProfessionalGroups', 'url'=>array('index')),
	array('label'=>'Create ProfessionalGroups', 'url'=>array('create')),
	array('label'=>'View ProfessionalGroups', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProfessionalGroups', 'url'=>array('admin')),
);
?>

<h1>Update ProfessionalGroups <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>