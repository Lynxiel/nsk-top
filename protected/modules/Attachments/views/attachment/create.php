<?php
/* @var $this AttachmentController */
/* @var $model Attacments */

$this->breadcrumbs=array(
	'Attacments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Attacments', 'url'=>array('index')),
	array('label'=>'Manage Attacments', 'url'=>array('admin')),
);
?>

<h1>Create Attacments</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>