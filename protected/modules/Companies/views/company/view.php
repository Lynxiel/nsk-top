<?php
/* @var $this CompanyController */
/* @var $model Companies */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Companies', 'url'=>array('index')),
	array('label'=>'Create Companies', 'url'=>array('create')),
	array('label'=>'Update Companies', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete Companies', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Companies', 'url'=>array('admin')),
);
?>

<h1>View Companies #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'title',
	),
)); ?>
