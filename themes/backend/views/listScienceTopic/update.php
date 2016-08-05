<?php
/* @var $this ListScienceTopicController */
/* @var $model ListScienceTopic */

$this->breadcrumbs=array(
	'List Science Topics'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ListScienceTopic', 'url'=>array('index')),
	array('label'=>'Create ListScienceTopic', 'url'=>array('create')),
	array('label'=>'View ListScienceTopic', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ListScienceTopic', 'url'=>array('admin')),
);
?>

<h1>Update ListScienceTopic <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>