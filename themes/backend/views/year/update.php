<?php
/* @var $this YearController */
/* @var $model Year */

$this->breadcrumbs=array(
	'Years'=>array('index'),
	$model->name=>array('view','id'=>$model->id_year),
	'Update',
);

$this->menu=array(
	array('label'=>'List Year', 'url'=>array('index')),
	array('label'=>'Create Year', 'url'=>array('create')),
	array('label'=>'View Year', 'url'=>array('view', 'id'=>$model->id_year)),
	array('label'=>'Manage Year', 'url'=>array('admin')),
);
?>
	<div class="page-header">
		<h1>Cập nhật năm học <?php echo $model->id_year; ?></h1>
	</div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>