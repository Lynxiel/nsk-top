<?php
/* @var $this HumanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Humans',
);

$this->menu=array(
	array('label'=>'Create Humans', 'url'=>array('create')),
	array('label'=>'Manage Humans', 'url'=>array('admin')),
);
?>

<h1>Humans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
