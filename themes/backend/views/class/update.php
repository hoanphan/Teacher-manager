<?php
/* @var $this ClassController */
/* @var $model ListClass */

$this->breadcrumbs = array(
    'List Classes' => array('index'),
    $model->name => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List ListClass', 'url' => array('index')),
    array('label' => 'Create ListClass', 'url' => array('create')),
    array('label' => 'View ListClass', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage ListClass', 'url' => array('admin')),
);
?>
<h1>Cập nhật danh sách lớp học <?php echo $model->id; ?></h1>
<div class="page-content">

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <form class="form-horizontal" role="form">

                <?php $this->renderPartial('_form', array('model' => $model)); ?>
            </form>
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