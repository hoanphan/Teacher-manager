<?php
/* @var $this ListScienceTopicController */
/* @var $data ListScienceTopic */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_teacher')); ?>:</b>
	<?php echo CHtml::encode($data->id_teacher); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_classification')); ?>:</b>
	<?php echo CHtml::encode($data->id_classification); ?>
	<br />


</div>