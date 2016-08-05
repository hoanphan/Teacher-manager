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
				if($(this).hasClass('gruop'))
				{
					$(this).addClass('active open');
					$(this).find('ul').find('li').addClass('active open');
				}
			}
		);
	})
</script>

<?php
/* @var $this ListSubjectController */
/* @var $model ListSubject */

$this->breadcrumbs=array(
	'List Subjects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ListSubject', 'url'=>array('index')),
	array('label'=>'Manage ListSubject', 'url'=>array('admin')),
);
?>
<div class="page-header">
	<h1>Tạo môn học mới</h1>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>