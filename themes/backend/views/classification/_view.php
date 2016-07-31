<?php
/* @var $this ClassificationController */
/* @var $data Classification */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_classification')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_classification), array('view', 'id'=>$data->id_classification)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />


</div>