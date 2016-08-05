<?php
/* @var $this ListteacherController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'List Teachers',
);

$this->menu=array(
	array('label'=>'Create ListTeacher', 'url'=>array('create')),
	array('label'=>'Manage ListTeacher', 'url'=>array('admin')),
);
?>

<h1>List Teachers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
