<?php
/* @var $this CompanyController */
/* @var $model Companies */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	$model->title=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Companies', 'url'=>array('index')),
	array('label'=>'Create Companies', 'url'=>array('create')),
	array('label'=>'View Companies', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage Companies', 'url'=>array('admin')),
);
?>

<h1>Update Companies <?php echo $model->user_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>