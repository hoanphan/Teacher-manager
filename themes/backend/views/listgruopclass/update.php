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
/* @var $this ListgruopclassController */
/* @var $model ListGruopClass */

$this->breadcrumbs=array(
	'List Gruop Classes'=>array('index'),
	$model->name=>array('view','id'=>$model->id_gruop),
	'Update',
);

$this->menu=array(
	array('label'=>'List ListGruopClass', 'url'=>array('index')),
	array('label'=>'Create ListGruopClass', 'url'=>array('create')),
	array('label'=>'View ListGruopClass', 'url'=>array('view', 'id'=>$model->id_gruop)),
	array('label'=>'Manage ListGruopClass', 'url'=>array('admin')),
);
?>

<h1>Update ListGruopClass <?php echo $model->id_gruop; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>