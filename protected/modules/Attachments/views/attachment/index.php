<?php
/* @var $this AttachmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Attacments',
);

$this->menu=array(
	array('label'=>'Create Attacments', 'url'=>array('create')),
	array('label'=>'Manage Attacments', 'url'=>array('admin')),
);
?>

<h1>Attacments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
