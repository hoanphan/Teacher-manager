

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'list-class-form',
	'enableAjaxValidation'=>false,
));?>
	<?php echo $form->errorSummary($model);?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'name',array('class'=>'col-sm-3 control-label no-padding-right')); ?>
		<div class="col-sm-9">
			<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>5000,'class'=>'col-xs-10 col-sm-5')); ?>
		</div>

		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_homeroom_teacher',array('class'=>'col-sm-3 control-label no-padding-right')); ?>
		<div class="col-sm-9">
		<?php echo $form->dropDownList($model,'id_homeroom_teacher',ListTeacher::model()->getTeacherName(),array('class'=>'col-xs-10 col-sm-5'))?>
		</div>
		<?php echo $form->error($model,'id_homeroom_teacher');?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_year',array('class'=>'col-sm-3 control-label no-padding-right')); ?>
		<div class="col-sm-9">
			<?php echo $form->dropDownList($model,'id_year',Year::model()->getNameYear(),array('class'=>'col-xs-10 col-sm-5'))?>
		</div>
		<?php echo $form->error($model,'id_year');?>
	</div>

<div class="form-group">
		<?php echo $form->labelEx($model,'id_gruop',array('class'=>'col-sm-3 control-label no-padding-right'));?>
	<div class="col-sm-9">
		<?php echo $form->dropDownList($model,'id_gruop',ListGruopClass::model()->getNameGruop(),array('class'=>'col-xs-10 col-sm-5'))?>
	</div>
		<?php echo $form->error($model,'id_gruop');?>
	</div>
<div class="form-group">
	<div class="col-sm-5 control-label no-padding-right required">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-info'));?>
		</div>
	</div>

<?php $this->endWidget(); ?>




