<?php
/* @var $this ListgruopclassController */
/* @var $model ListGruopClass */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'list-gruop-class-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    )); ?>
    <div class="page-content">

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <form class="form-horizontal" role="form">
                    <p class="note">Fields with <span class="required">*</span> are required.</p>

                    <?php echo $form->errorSummary($model); ?>

                    <div class="form-group">
                        <?php echo $form->labelEx($model,'name',array('class'=>'col-sm-3 control-label no-padding-right'));?>
                        <div class="col-sm-9">
                            <?php echo $form->textField($model,'name',ListGruopClass::model()->getNameGruop(),array('class'=>'col-xs-10 col-sm-5'))?>
                        </div>
                        <?php echo $form->error($model,'name');?>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5 control-label no-padding-right required">
                            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-info'));?>
                        </div>
                    </div>


                    <?php $this->endWidget(); ?>
                </form>
            </div>
        </div>
    </div>
</div>
</div><!-- form -->
