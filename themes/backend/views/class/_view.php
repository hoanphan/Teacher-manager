<?php
/* @var $this ClassController */
/* @var $data ListClass */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_homeroom_teacher')); ?>:</b>
	<?php echo CHtml::encode($data->getHomeroomTeacher()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_year')); ?>:</b>
	<?php echo CHtml::encode($data->getYear()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_gruop')); ?>:</b>
	<?php echo CHtml::encode($data->getGroupClass()); ?>
	<br />


</div>