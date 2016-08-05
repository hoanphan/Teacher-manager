<?php
/* @var $this ListSubjectController */
/* @var $model ListSubject */

$this->breadcrumbs=array(
	'List Subjects'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ListSubject', 'url'=>array('index')),
	array('label'=>'Create ListSubject', 'url'=>array('create')),
	array('label'=>'View ListSubject', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ListSubject', 'url'=>array('admin')),
);
?>

	<div class="page-header">

		<h1>Cập nhật môn học <?php echo $model->id; ?></h1>
	</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>