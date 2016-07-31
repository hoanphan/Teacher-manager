<?php
/* @var $this ListgruopclassController */
/* @var $data ListGruopClass */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_gruop')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_gruop), array('view', 'id'=>$data->id_gruop)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />


</div>