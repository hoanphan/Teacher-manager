<?php
/* @var $this YearController */
/* @var $data Year */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_year')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_year), array('view', 'id'=>$data->id_year)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>