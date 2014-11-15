<?php
/* @var $this AttachmentController */
/* @var $model Attacments */

$this->breadcrumbs=array(
	'Attacments'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Attacments', 'url'=>array('index')),
	array('label'=>'Create Attacments', 'url'=>array('create')),
	array('label'=>'View Attacments', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Attacments', 'url'=>array('admin')),
);
?>

<h1>Update Attacments <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>