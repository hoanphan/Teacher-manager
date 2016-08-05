<?php
/* @var $this ClassificationController */
/* @var $model Classification */

$this->breadcrumbs = array(
    'Classifications' => array('index'),
    $model->name => array('view', 'id' => $model->id_classification),
    'Update',
);

$this->menu = array(
    array('label' => 'List Classification', 'url' => array('index')),
    array('label' => 'Create Classification', 'url' => array('create')),
    array('label' => 'View Classification', 'url' => array('view', 'id' => $model->id_classification)),
    array('label' => 'Manage Classification', 'url' => array('admin')),
);
?>
<div class="page-header">
    <h1>Cập nhật xếp loại <?php echo $model->id_classification; ?></h1>
</div>

<div class="page-content">

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="form-horizontal" role="form">
                <?php $this->renderPartial('_form', array('model' => $model)); ?>
            </div>
        </div>
    </div>
</div>
