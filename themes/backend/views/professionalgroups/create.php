<?php
/* @var $this ProfessionalgroupsController */
/* @var $model ProfessionalGroups */

$this->breadcrumbs=array(
	'Professional Groups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProfessionalGroups', 'url'=>array('index')),
	array('label'=>'Manage ProfessionalGroups', 'url'=>array('admin')),
);
?>

<h1>Create ProfessionalGroups</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>