<?php
/* @var $this HumanController */
/* @var $model Humans */

$this->breadcrumbs=array(
	'Humans'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Humans', 'url'=>array('index')),
	array('label'=>'Create Humans', 'url'=>array('create')),
	array('label'=>'View Humans', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage Humans', 'url'=>array('admin')),
);
?>

<h1>Update Humans <?php echo $model->user_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>