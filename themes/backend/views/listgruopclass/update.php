<?php
/* @var $this ListgruopclassController */
/* @var $model ListGruopClass */

$this->breadcrumbs=array(
	'List Gruop Classes'=>array('index'),
	$model->name=>array('view','id'=>$model->id_gruop),
	'Update',
);

$this->menu=array(
	array('label'=>'List ListGruopClass', 'url'=>array('index')),
	array('label'=>'Create ListGruopClass', 'url'=>array('create')),
	array('label'=>'View ListGruopClass', 'url'=>array('view', 'id'=>$model->id_gruop)),
	array('label'=>'Manage ListGruopClass', 'url'=>array('admin')),
);
?>

<h1>Update ListGruopClass <?php echo $model->id_gruop; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>