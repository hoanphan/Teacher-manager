<script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/jquery-3.1.0.js"></script>
<script>
    $(document).ready(function () {
        $('#menu').find('li').each(function () {
            if ($(this).hasClass('active open')) {
                $(this).removeClass('active open');
                $(this).find('ul').each(function () {
                    $(this).find('li').each(function () {
                        if ($(this).hasClass('active open')) {
                            $(this).removeClass('active open');
                        }
                    })

                });
            }
            if ($(this).val() == 1) {
                $(this).addClass('active open');
            }
        });

        $('.submenu').find('li').each(function () {
                if ($(this).hasClass('classification')) {
                    $(this).addClass('active open');
                    $(this).find('ul').find('li').addClass('active open');
                }
            }
        );
    })
</script>
<div class="page-content">

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="form-horizontal" role="form">

                <div class="form">

                    <?php $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'classification-form',
                        // Please note: When you enable ajax validation, make sure the corresponding
                        // controller action is handling ajax validation correctly.
                        // There is a call to performAjaxValidation() commented in generated controller code.
                        // See class documentation of CActiveForm for details on this.
                        'enableAjaxValidation' => false,
                    )); ?>

                    <p class="note">Fields with <span class="required">*</span> are required.</p>

                    <?php echo $form->errorSummary($model); ?>

                    <div class="form-group">
                        <?php echo $form->labelEx($model,'name',array('class'=>'col-sm-3 control-label no-padding-right'));?>
                        <div class="col-sm-9">
                            <?php echo $form->textField($model,'name',ListGruopClass::model()->getNameGruop(),array('class'=>'col-sm-9'))?>
                        </div>
                        <?php echo $form->error($model,'name');?>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-5 control-label no-padding-right required">
                            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-info'));?>
                        </div>
                    </div>

                    <?php $this->endWidget(); ?>

                </div><!-- form -->
            </div>
        </div>
    </div>
</div>
