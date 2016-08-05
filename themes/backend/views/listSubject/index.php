<?php
/* @var $this ListSubjectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'List Subjects',
);

$this->menu=array(
	array('label'=>'Create ListSubject', 'url'=>array('create')),
	array('label'=>'Manage ListSubject', 'url'=>array('admin')),
);
?>

<h1>List Subjects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
