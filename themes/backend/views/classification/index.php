<?php
/* @var $this ClassificationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Classifications',
);

$this->menu=array(
	array('label'=>'Create Classification', 'url'=>array('create')),
	array('label'=>'Manage Classification', 'url'=>array('admin')),
);
?>

<h1>Classifications</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
