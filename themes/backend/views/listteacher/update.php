<?php
/* @var $this ListteacherController */
/* @var $model ListTeacher */

$this->breadcrumbs=array(
	'List Teachers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ListTeacher', 'url'=>array('index')),
	array('label'=>'Create ListTeacher', 'url'=>array('create')),
	array('label'=>'View ListTeacher', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ListTeacher', 'url'=>array('admin')),
);
?>

<h1>Update ListTeacher <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>