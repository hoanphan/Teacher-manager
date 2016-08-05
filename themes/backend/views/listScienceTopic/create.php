<?php
/* @var $this ListScienceTopicController */
/* @var $model ListScienceTopic */

$this->breadcrumbs=array(
	'List Science Topics'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ListScienceTopic', 'url'=>array('index')),
	array('label'=>'Manage ListScienceTopic', 'url'=>array('admin')),
);
?>

<h1>Create ListScienceTopic</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>