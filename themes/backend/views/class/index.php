<?php
/* @var $this ClassController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'List Classes',
);

$this->menu=array(
	array('label'=>'Create ListClass', 'url'=>array('create')),
	array('label'=>'Manage ListClass', 'url'=>array('admin')),
);
?>

<h1>List Classes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
