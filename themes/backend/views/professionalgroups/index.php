<?php
/* @var $this ProfessionalgroupsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Professional Groups',
);

$this->menu=array(
	array('label'=>'Create ProfessionalGroups', 'url'=>array('create')),
	array('label'=>'Manage ProfessionalGroups', 'url'=>array('admin')),
);
?>

<h1>Professional Groups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
