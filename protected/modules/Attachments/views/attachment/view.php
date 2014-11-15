<?php
/* @var $this AttachmentController */
/* @var $model Attacments */

$this->breadcrumbs=array(
	'Attacments'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Attacments', 'url'=>array('index')),
	array('label'=>'Create Attacments', 'url'=>array('create')),
	array('label'=>'Update Attacments', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Attacments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Attacments', 'url'=>array('admin')),
);
?>

<h1>View Attacments #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'slug',
		'user_id',
		'title',
		'description',
	),
)); ?>
