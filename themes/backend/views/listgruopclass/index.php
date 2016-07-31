<?php
/* @var $this ListgruopclassController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'List Gruop Classes',
);

$this->menu=array(
	array('label'=>'Create ListGruopClass', 'url'=>array('create')),
	array('label'=>'Manage ListGruopClass', 'url'=>array('admin')),
);
?>

<h1>List Gruop Classes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
