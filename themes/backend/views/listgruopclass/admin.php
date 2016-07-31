<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="row">
            <div class="col-xs-12">
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'list-gruop-class-grid',
                    'dataProvider' => $model->search(),
                    'itemsCssClass' => 'table table-striped table-bordered table-hover',
                    'columns' => array(
                        array(
                            'name'=>'id_gruop',
                            'htmlOptions'=>array('style'=>' text-align: center;'),
                            'headerHtmlOptions'=>array('style'=>' text-align: center;'),
                        ),
                        array(
                            'name'=>'name',
                            'htmlOptions'=>array('style'=>' text-align: center;'),
                            'headerHtmlOptions'=>array('style'=>' text-align: center;'),
                        ),
                        array(
                            'class' => 'CButtonColumn',
                            'htmlOptions'=>array('style'=>'width: 15%; text-align: center;'),
                            'template'=>'{view}{create}{update}{delete}',
                            'buttons'=>array(
                                'view'=>array(
                                    'options'=>array('class'=>'ui-pg-div','style'=>'margin:1px'),
                                    'label'=>'<span class="ui-icon ace-icon fa fa-search orange"></span>',
                                    'imageUrl'=>false
                                ),
                                'create'=>array(
                                    'options'=>array('class'=>'ui-pg-div','style'=>'margin:1px'),
                                    'label'=>'<span class="ui-icon ace-icon fa fa-plus-circle purple"></span>',
                                    'url'=>'Yii::app()->createUrl("admin/listgruopclass/create")',
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