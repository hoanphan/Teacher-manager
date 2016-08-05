<div class="page-header">
    <h1>Thêm mới xếp loại</h1>
</div>


<?php
/* @var $this YearController */
/* @var $model Year */

$this->breadcrumbs=array(
    'Years'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label'=>'List Year', 'url'=>array('index')),
    array('label'=>'Manage Year', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>