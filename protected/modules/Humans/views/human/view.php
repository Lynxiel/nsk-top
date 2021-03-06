<?php
/* @var $this HumanController */
/* @var $model Humans */

$this->breadcrumbs=array(
	'Humans'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List Humans', 'url'=>array('index')),
	array('label'=>'Create Humans', 'url'=>array('create')),
	array('label'=>'Update Humans', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete Humans', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Humans', 'url'=>array('admin')),
);
?>

<h1>View Humans #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'fio',
		'gender',
		'birthdate',
		'nick',
		'slug',
		'about',
		'comment_count',
		'attachment_id',
	),
)); ?>
