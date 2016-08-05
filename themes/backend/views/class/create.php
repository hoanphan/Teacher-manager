<div class="page-header">
    <h1>
        Tạo lớp mới
    </h1>
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
<script src="<?php echo Yii::app()->theme->baseUrl?>/assets/js/jquery-3.1.0.js"></script>
<script>
    $(document).ready(function () {
        $('#menu').find('li').each(function () {
            if($(this).hasClass('active open'))
            {
                $(this).removeClass('active open');
                $(this).find('ul').each(function () {
                    $(this).find('li').each(function () {
                        if($(this).hasClass('active open'))
                        {
                            $(this).removeClass('active open');
                        }
                    })

                });
            }
            if($(this).val()==1)
            {
                $(this).addClass('active open');
            }
        });

        $('.submenu').find('li').each(function () {
                if($(this).hasClass('class'))
                {
                    $(this).addClass('active open');
                    $(this).find('ul').find('li').addClass('active open');
                }
            }
        );
    })
</script>
