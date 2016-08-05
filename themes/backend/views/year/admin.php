
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
            if($(this).val()==3)
            {
                $(this).addClass('active open');
            }
        });

        $('.submenu').find('li').each(function () {
                if($(this).hasClass('year'))
                {
                    $(this).addClass('active open');
                    $(this).find('ul').find('li').addClass('active open');
                }
            }
        );
    })
</script>
<div class="page-header">
    <h1>Danh sách khóa học</h1>
</div>
<h1>Manage Years</h1>
<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="row">
            <div class="col-xs-12">
                <?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
                <div class="search-form" style="display:none">
                    <?php $this->renderPartial('_search', array(
                        'model' => $model,
                    )); ?>
                </div><!-- search-form -->

                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'year-grid',
                    'dataProvider' => $model->search(),
                    'itemsCssClass' => 'table table-striped table-bordered table-hover',
                    'columns' => array(
                        array(
                            'name'=>'id_year',
                            'header'=>'#',
                            'htmlOptions'=>array('style'=>'width: 10%; text-align: center;'),
                            'headerHtmlOptions'=>array('style'=>' text-align: center;'),
                        ),
                        array(
                            'name'=>'name',
                            'htmlOptions'=>array('style'=>' text-align: center;'),
                            'headerHtmlOptions'=>array('style'=>' text-align: center;'),
                        ),
                        array(
                            'name'=>'status',
                            'type'=>'raw',
                            'htmlOptions'=>array('style'=>' text-align: center;'),
                            'headerHtmlOptions'=>array('style'=>' text-align: center;'),
                            'value'=>function($data){return $data->getSatusText($data->status);}
                        ),
                        array(
                            'class' => 'CButtonColumn',
                            'htmlOptions'=>array('style'=>'width: 15%; text-align: center;'),
                            'template'=>'{create}{update}{delete}',
                            'buttons'=>array(

                                'create'=>array(
                                    'options'=>array('class'=>'ui-pg-div','style'=>'margin:1px'),
                                    'label'=>'<span class="ui-icon ace-icon fa fa-plus-circle purple"></span>',
                                    'url'=>'Yii::app()->createUrl("admin/year/create")',
                                    'imageUrl'=>false
                                ),
                                'update'=>array(
                                    'options'=>array('class'=>'ui-pg-div','style'=>'margin:1px'),
                                    'label'=>'<span class="ui-icon ace-icon fa fa-pencil blue"></span>',
                                    'imageUrl'=>false
                                ),
                                'delete'=>array(
                                    'options'=>array('class'=>'ui-pg-div','style'=>'margin:1px'),
                                    'label'=>'<span class="ui-icon ace-icon fa fa-trash-o red"></span>',
                                    'imageUrl'=>false
                                )
                            )
                        ),
                    ),
                )); ?>
            </div>
        </div>
    </div>
</div>