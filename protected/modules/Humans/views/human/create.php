<?php
/* @var $this HumanController */
/* @var $model Humans */

$this->breadcrumbs=array(
	'Humans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Humans', 'url'=>array('index')),
	array('label'=>'Manage Humans', 'url'=>array('admin')),
);
?>

<h1>Create Humans</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>