<?php
/* @var $this ListScienceTopicController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'List Science Topics',
);

$this->menu=array(
	array('label'=>'Create ListScienceTopic', 'url'=>array('create')),
	array('label'=>'Manage ListScienceTopic', 'url'=>array('admin')),
);
?>

<h1>List Science Topics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
